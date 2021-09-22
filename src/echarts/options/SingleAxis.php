<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options;

use beyong\echarts\Property;

/**
 * @property string $id
 *    
 *
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
 * @property array $splitLine
 *    
 *
 * @property array $minorSplitLine
 *    
 *
 * @property array $splitArea
 *    
 *
 * @property array $data
 *    
 *
 * @property array $axisPointer
 *    
 *
 * @property array $tooltip
 *    
 *
 * 
 * 
 * {_more_}
 */
class SingleAxis extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}