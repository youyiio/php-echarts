<?php
/**
 * Created by php-echarts AutoGenerate.
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
 * @property integer|array $borderRadius Default: 0
 *    
 *
 * @property integer $borderWidth Default: 0
 *    
 *
 * @property integer $gapWidth Default: 0
 *    
 *
 * @property string $borderColor Default: '#fff\','
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
 * @property integer $shadowOffsetX Default: 0
 *    
 *
 * @property integer $shadowOffsetY Default: 0
 *    
 *
 * @property integer $opacity Default: 1
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