<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\yaxis;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property boolean $onZero Default: true
 *    
 *
 * @property integer $onZeroAxisIndex
 *    
 *
 * @property string|array $symbol Default: 'none'
 *    
 *
 * @property array $symbolSize Default: '[10, 15]'
 *    
 *
 * @property array|integer $symbolOffset Default: '[0, 0]'
 *    
 *
 * @property array $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class AxisLine extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}