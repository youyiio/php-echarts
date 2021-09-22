<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\parallel;

use beyong\echarts\Property;

/**
 * @property string $name
 *    
 *
 * @property array $nameTextStyle
 *    
 *
 * @property integer $nameRotate
 *    
 *
 * @property boolean|array $boundaryGap
 *    
 *
 * @property integer|string|callable $min
 *    
 *
 * @property integer|string|callable $max
 *    
 *
 * @property integer $maxInterval
 *    
 *
 * @property integer $interval
 *    
 *
 * @property array $axisLine
 *    
 *
 * @property array $axisTick
 *    
 *
 * @property array $minorTick
 *    
 *
 * @property array $axisLabel
 *    
 *
 * @property array $data
 *    
 *
 * 
 * 
 * {_more_}
 */
class ParallelAxisDefault extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}