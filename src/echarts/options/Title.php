<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:45
 */
namespace beyong\echarts\options;

/**
 * Title class
 * 
 * 标题名称
 * @property string $text
 * 标题位置
 * @property string $left
 */
class Title
{

    function __construct($array=[])
    {
        $this->text = isset($array['text']) ? $array['text'] : null;
        $this->left = isset($array['left']) ? $array['left'] : null;
    }
}