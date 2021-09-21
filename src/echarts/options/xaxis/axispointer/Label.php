<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\xaxis\axispointer;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property integer|string $precision Default: 'auto'
 *    
 *
 * @property string|callable $formatter
 *    
 *
 * @property boolean $margin Default: '3'
 *    
 *
 * @property string $color Default: '#fff'
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
 * @property integer $lineHeight
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
 * @property string|array $padding Default: '[5, 7, 5, 7]'
 *    
 *
 * @property string $backgroundColor Default: 'auto'
 *    
 *
 * @property string $borderColor
 *    
 *
 * @property string $borderWidth Default: '0'
 *    
 *
 * @property integer $shadowBlur Default: 3
 *    
 *
 * @property string $shadowColor Default: '#aaa'
 *    
 *
 * @property integer $shadowOffsetX Default: 0
 *    
 *
 * @property integer $shadowOffsetY Default: 0
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