<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:30
 */
namespace beyong\echarts\render;

use Nesk\Puphpeteer\Puppeteer;

class PdfEngine extends Engine
{

    public $method = array();

    protected $outputPath = '';

    protected $outputName = '';

    public function render($id, $option, $theme = null, $attribute=[], $events=[])
    {
        $attribute = $this->_renderAttribute($attribute);
        is_null($theme) && $theme = 'null';

        $responseJs = '';
        $extraScript = $this->extraScript;
        if (isset($extraScript["echarts"]) 
            || isset($extraScript["echarts.js"])
            || isset($extraScript["echarts.min.js"])) {
            $echartsSrc = isset($extraScript["echarts"]) ? $extraScript["echarts"] : 
                (isset($extraScript["echarts.js"]) ? $extraScript["echarts.js"] : $extraScript["echarts.min.js"]);

            $responseJs .= $this->_renderScript($echartsSrc);

            unset($extraScript["echarts"]);
            unset($extraScript["echartsjs"]);
            unset($extraScript["echarts.min.js"]);
        } else {
            $echartsSrc = Engine::$dist . '/echarts' . ($this->distType ? '.' . $this->distType : '') . ($this->minify ? '.min' : '') . '.js';
            $responseJs .= $this->_renderScript($echartsSrc);
        }

        if ($extraScript) {
            foreach($extraScript as $k => $v) {
                $src = $v . '/' . $k;
                $responseJs .= $this->_renderScript($src);
            }
        }
        

        $echartsJsVar = $this->echartsJsVar;

        $response = '';
        if (version_compare(Engine::$version, '3.0.0') < 0) {
            $dist = $this->dist;
            $require = $this->_require($option);
            $option = $this->jsonEncode($option);
            
            $response =
//**************多行文本输出 start            
<<<HTML
<div id="$id" $attribute></div>
$responseJs
<script type="text/javascript">
    require.config({
        paths: {
            echarts: '{$dist}'
        }
    });
    require(
        [
            $require
        ],
        function (ec) {
            var myChart = ec.init(document.getElementById('$id'), '$theme');
            var option = $option;
            myChart.setOption(option);
        }
    );
</script>
HTML;
//**************多行文本输出 end 

        } else {
            $eventsHtml = '';
            if ($events) {
                foreach ($events as $event => $call) {
                    $eventsHtml .= $echartsJsVar . '.on(\'' . $event . '\', function (params) {' . $call . '});';
                }
            }
            $option = $this->jsonEncode($option);

            
            $response =
//**************多行文本输出 start            
<<<HTML
<div id="$id" $attribute></div>
$responseJs
<script type="text/javascript">
    var $echartsJsVar = echarts.init(document.getElementById('$id'), '$theme');
    $echartsJsVar.setOption($option);$eventsHtml
</script>
HTML;
//**************多行文本输出 end

        }

        if (empty($this->outputPath) || empty($this->outputName)) {
            throw new \Exception("unset outputfile!");
        }

        //$htmlFile = $this->outputPath . '/' . $this->outputName . ".html";
        //file_put_contents($htmlFile, $response);
        $htmlFile = $response;

        $outputFile = $this->outputPath . '/' . $this->outputName;
        $this->_renderFile($htmlFile, $outputFile);

        //控制台运行
        if (substr(PHP_SAPI_NAME(), 0, 3) == 'cli') {
            exec("start " . $outputFile); //启动
        }
        
        return $response;
    }

    //设置输出文件
    public function setOutputFile($file)
    {
        $this->outputPath = dirname($file);
        $this->outputName = basename($file);
    }

    
    
    private function _renderFile($htmlFile, $outputFile)
    {
        
        if (!\Composer\InstalledVersions::isInstalled('nesk/puphpeteer')) {
            die(" puphpeteer is not installed! \n composer install it first : \n > composer require nesk/puphpeteer \n > npm install @nesk/puphpeteer");
        }

        $puppeteer = new Puppeteer();

        $browser = $puppeteer->launch();
        $page = $browser->newPage();
        //$page->goto('file:///' . $htmlFile);
        $page->setContent($htmlFile);
        
        //echarts有动画时，导致只截图一部分
        sleep(2);

        $page->pdf(['path' => $outputFile]);
    }


    public function jsExpr($string)
    {
        return $this->_jsMethod($string);
    }

    private function _jsMethod($value)
    {
        $md5 = '{%' . md5($value) . '%}';
        $this->method['"' . $md5 . '"'] = $value;
        return $md5;
    }

    // 替换js的function
    public function optionMethod(&$option)
    {
        foreach ($option as $k => $v) {
            if (is_string($v)) {
                $replace = str_replace(array("\t", "\r", "\n", "\0", "\x0B", ' '), '', $v);
                if (strpos($replace, 'function(') === 0)
                    $option[$k] = $this->_jsMethod($v);
            } else if (is_array($v)) {
                $this->optionMethod($option[$k]);
            }
        }
    }

    public function eventMethod($name)
    {
        return $name . '(params);';
    }

    // 替换回js的函数
    public function jsonEncode($option)
    {
        $option = json_encode($option);
        if ($this->method) {
            $option = str_replace(array_keys($this->method), array_values($this->method), $option);
        }
        return $option;
    }

}