<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:50
 */
namespace beyong\echarts\options;

/**
 * Legend class
 * 标志类
 * 
 * 标题名称
 * @property string $text
 * 数据
 * @property array $data
 */
class Title
{

    function __construct($array=[])
    {
        $this->text = isset($array['text']) ? $array['text'] : null;
        $this->data = isset($array['data']) ? $array['data'] : null;
    }
}