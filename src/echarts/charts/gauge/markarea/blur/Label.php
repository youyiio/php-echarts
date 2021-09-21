<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\gauge\markarea\blur;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property string|array $position
 *    
 *
 * @property integer $distance Default: 5
 *    
 *
 * @property integer $rotate
 *    
 *
 * @property array $offset
 *    
 *
 * @property string $color Default: '"#fff"'
 *    
 *
 * @property string $fontStyle Default: 'normal'
 *    
 *
 * @property string|integer $fontWeight Default: 'normal'
 *    
 *
 * @property string $fontFamily Default: 'sans-serif'
 *    
 *
 * @property integer $fontSize Default: 12
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
 * @property string|array $backgroundColor Default: 'transparent'
 *    
 *
 * @property string $borderColor
 *    
 *
 * @property integer $borderWidth Default: 0
 *    
 *
 * @property string|integer|array $borderType Default: 'solid'
 *    
 *
 * @property integer $borderDashOffset Default: 0
 *    
 *
 * @property integer|array $borderRadius Default: 0
 *    
 *
 * @property integer|array $padding Default: 0
 *    
 *
 * @property string $shadowColor Default: 'transparent'
 *    
 *
 * @property integer $shadowBlur Default: 0
 *    
 *
 * @property integer $shadowOffsetX Default: 0
 *    
 *
 * @property integer $shadowOffsetY Default: 0
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
 * @property string|integer|array $textBorderType Default: 'solid'
 *    
 *
 * @property integer $textBorderDashOffset Default: 0
 *    
 *
 * @property string $textShadowColor Default: 'transparent'
 *    
 *
 * @property integer $textShadowBlur Default: 0
 *    
 *
 * @property integer $textShadowOffsetX Default: 0
 *    
 *
 * @property integer $textShadowOffsetY Default: 0
 *    
 *
 * @property string $overflow Default: 'none'
 *    
 *
 * @property string $ellipsis Default: '...'
 *    
 *
 * @property string $lineOverflow Default: 'none'
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