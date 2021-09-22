<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\treemap;

use beyong\echarts\Property;

/**
 * @property string $color
 *    
 *
 * @property integer $colorAlpha
 *    
 *
 * @property integer $colorSaturation
 *    
 *
 * @property string $borderColorSaturation
 *    
 *
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
 *    
 *
 * @property array $decal
 *    
 *
 * 
 * 
 * {_more_}
 */
class ItemStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}