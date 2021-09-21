<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\line\tooltip;

use beyong\echarts\Property;

/**
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
 * @property integer $fontSize Default: 14
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
 * 
 * 
 * {_more_}
 */
class TextStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}