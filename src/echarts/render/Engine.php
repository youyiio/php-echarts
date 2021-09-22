<?php

namespace beyong\echarts\render;

//渲染引擎
abstract class Engine
{
    public static $dist = 'https://cdn.jsdelivr.net/npm/echarts@5.2.0/dist'; //echarts.min.js
    public static $version = '5.2.0';
    
    protected $distType = ''; // Empty is full, other options: simple, common
    
    protected $minify = true; // Whether or not load minify js file

    public $echartsJsVar = ''; //ECharts实例的js变量名

    protected $extraScript = array();

    //图标渲染接口
    abstract public function render($id, $option, $theme=null, $attribute=array(), $events=array());

    //获取渲染引擎名称
    public function getName() 
    {
        return get_class($this);
    }

    public function addExtraScript($file, $dist = null)
    {
        !$dist && $dist = $this->dist;
        $this->extraScript[$file] = $dist;
    }


    protected function _renderScript($src)
    {
        // if (!isset($this->scripts[$src])) {
        //     $responseJs .= '<script type="text/javascript" src="' . $src . '"></script>';
        //     $this->scripts[$src] = true;
        // }

        return '<script type="text/javascript" src="' . $src . '"></script>';
    }

    protected function _require($option)
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

    protected function _renderAttribute(array $attribute = array())
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

    protected function _h($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
    }
}