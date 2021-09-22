<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\lines\markarea;

use beyong\echarts\Property;

/**
 * @property string|array $position
 *    
 *
 * @property integer $rotate
 *    
 *
 * @property array $offset
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
 * @property label\Rich $rich
 *    
 *
 * 
 * 
 * {_more_}
 */
class Label extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}