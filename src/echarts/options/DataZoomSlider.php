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
 * @property datazoomslider\DataBackground $dataBackground
 *    
 *
 * @property datazoomslider\SelectedDataBackground $selectedDataBackground
 *    
 *
 * @property string $handleIcon
 *    
 *
 * @property array $handleStyle
 *    
 *
 * @property string $moveHandleIcon
 *    
 *
 * @property array $moveHandleStyle
 *    
 *
 * @property string|callable $labelFormatter
 *    
 *
 * @property array $textStyle
 *    
 *
 * @property integer|array $xAxisIndex
 *    
 *
 * @property integer|array $yAxisIndex
 *    
 *
 * @property integer|array $radiusAxisIndex
 *    
 *
 * @property integer|array $angleAxisIndex
 *    
 *
 * @property integer|string|string $startValue
 *    
 *
 * @property integer|string|string $endValue
 *    
 *
 * @property integer $minSpan
 *    
 *
 * @property integer $maxSpan
 *    
 *
 * @property integer|string|string $minValueSpan
 *    
 *
 * @property integer|string|string $maxValueSpan
 *    
 *
 * @property string $orient
 *    
 *
 * @property array $rangeMode
 *    
 *
 * @property array $brushStyle
 *    
 *
 * @property datazoomslider\Emphasis $emphasis
 *    
 *
 * 
 * 
 * {_more_}
 */
class DataZoomSlider extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}