<?php

namespace beyong\echarts\render;

//渲染引擎
abstract class Engine
{
    public static $dist = 'https://cdn.jsdelivr.net/npm/echarts@5.2.0/dist'; //echarts.min.js
    public static $version = '5.2.0';
    
    public $distType = ''; // Empty is full, other options: simple, common
    
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
}