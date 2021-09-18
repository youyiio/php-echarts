<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:30
 */
namespace beyong\echarts\render;

class HtmlEngine extends Engine
{

    public $method = array();
    public $renderScript = true;
    
    public $minify = true; // Whether or not load minify js file
    public $extraScript = array();
    public $jsVar = '';
    public $scripts = [];
    public $prefix = 'chart_';

    public function render($id, $option, $theme = null, $attribute=[], $events=[])
    {
        $attribute = $this->_renderAttribute($attribute);
        is_null($theme) && $theme = 'null';

        $js = '';
        if ($this->renderScript) {
            $src = Engine::$dist . '/echarts' . ($this->distType ? '.' . $this->distType : '') . ($this->minify ? '.min' : '') . '.js';

            $this->_renderScript($src, $js);

            if($this->extraScript){
                foreach($this->extraScript as $k => $v){
                    $src = $v . '/' . $k;
                    $this->_renderScript($src, $js);
                }
            }
        }

        $jsVar = $this->jsVar;

        $response = '';
        if (version_compare(Engine::$version, '3.0.0') < 0) {
            $dist = $this->dist;
            $require = $this->_require($option);
            $option = $this->jsonEncode($option);
            
            $response =
//**************多行文本输出 start            
<<<HTML
<div id="$id" $attribute></div>
$js
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
            $prefix = $this->prefix;
            if ($events) {
                foreach ($events as $event => $call) {
                    $eventsHtml .= $prefix . $jsVar . '.on(\'' . $event . '\', function (params) {' . $call . '});';
                }
            }
            $option = $this->jsonEncode($option);

            
            $response =
//**************多行文本输出 start            
<<<HTML
<div id="$id" $attribute></div>
$js
<script type="text/javascript">
    var $prefix$jsVar = echarts.init(document.getElementById('$id'), '$theme');
    $prefix$jsVar.setOption($option);$eventsHtml
</script>
HTML;
//**************多行文本输出 end

        }

        return $response;
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

    private function _renderScript($src, &$js)
    {
        if (!isset($this->scripts[$src])) {
            $js .= '<script type="text/javascript" src="' . $src . '"></script>';
            $this->scripts[$src] = true;
        }
    }

    private function _require($option)
    {
        $requireString = "'echarts',";
        if (isset($option['series'])) {
            foreach ($option['series'] as $v) {
                if (isset($v['type'])) {
                    $requireString .= "'echarts/chart/" . $v['type'] . "',";
                }
            }

            $requireString = rtrim($requireString, ',');
        }

        return $requireString;
    }

    private function _renderAttribute(array $attribute = array())
    {
        $attributeString = '';

        if (!isset($attribute['style'])) {
            $attribute['style'] = 'height:400px';
        }

        foreach ($attribute as $k => $v) {
            $attributeString .= " $k=\"" . $this->_h($v) . '"';
        }

        return $attributeString;
    }

    private function _h($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
    }

    public function addExtraScript($file, $dist = null)
    {
        !$dist && $dist = $this->dist;
        $this->extraScript[$file] = $dist;
    }

}
