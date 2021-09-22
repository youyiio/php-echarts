<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\line;

use beyong\echarts\Property;

/**
 * @property integer $rotate
 *    
 *
 * @property array $offset
 *    
 *
 * @property string|callable $formatter
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
 * @property endlabel\Rich $rich
 *    
 *
 * @property boolean $valueAnimation
 *    
 *
 * 
 * 
 * {_more_}
 */
class EndLabel extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}