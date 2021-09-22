<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\radiusaxis;

use beyong\echarts\Property;

/**
 * @property string|callable $formatter
 *    
 *
 * @property boolean $showMinLabel
 *    
 *
 * @property boolean $showMaxLabel
 *    
 *
 * @property boolean $hideOverlap
 *    
 *
 * @property string|callable $color
 *    
 *
 * @property string $align
 *    
 *
 * @property string $verticalAlign
 *    
 *
 * @property integer $lineHeight
 *    
 *
 * @property string $borderColor
 *    
 *
 * @property integer $width
 *    
 *
 * @property integer $height
 *    
 *
 * @property string $textBorderColor
 *    
 *
 * @property integer $textBorderWidth
 *    
 *
 * @property axislabel\Rich $rich
 *    
 *
 * 
 * 
 * {_more_}
 */
class AxisLabel extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}