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
 * @property array $pieces
 *    
 *
 * @property array $categories
 *    
 *
 * @property integer $min
 *    
 *
 * @property integer $max
 *    
 *
 * @property boolean $minOpen
 *    
 *
 * @property boolean $maxOpen
 *    
 *
 * @property integer $precision
 *    
 *
 * @property array $text
 *    
 *
 * @property boolean $showLabel
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
 * @property visualmappiecewise\Controller $controller
 *    
 *
 * @property array $textStyle
 *    
 *
 * @property string|callable $formatter
 *    
 *
 * 
 * 
 * {_more_}
 */
class VisualMapPiecewise extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}