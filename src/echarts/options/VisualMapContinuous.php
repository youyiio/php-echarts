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
 * @property integer $min
 *    
 *
 * @property integer $max
 *    
 *
 * @property array $range
 *    
 *
 * @property array $text
 *    
 *
 * @property integer $dimension
 *    
 *
 * @property integer|array $seriesIndex
 *    
 *
 * @property array $inRange
 *    
 *
 * @property array $outOfRange
 *    
 *
 * @property visualmapcontinuous\Controller $controller
 *    
 *
 * @property array $textStyle
 *    
 *
 * @property string|callable $formatter
 *    
 *
 * @property string $handleIcon
 *    
 *
 * @property array $handleStyle
 *    
 *
 * @property array $indicatorStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class VisualMapContinuous extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}