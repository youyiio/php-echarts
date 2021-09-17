<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:45
 */
namespace beyong\echarts\options;

/**
 * XAxis class
 * 横轴类
 * 
 * 类型: category、value
 * @property string $type
 * 边界是否间隔
 * @property bool $boundaryGap
 * 横轴数据
 * @property array $data
 */
class XAxis
{

    function __construct($array=[])
    {
        $this->type = isset($array['type']) ? $array['type'] : null;
        $this->data = isset($array['data']) ? $array['data'] : null;
    }
}