<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\gauge;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property string $color Default: '#464646'
 *    
 *
 * @property string $fontStyle Default: 'normal'
 *    
 *
 * @property string|integer $fontWeight Default: 'bold'
 *    
 *
 * @property string $fontFamily Default: 'sans-serif'
 *    
 *
 * @property integer $fontSize Default: 30
 *    
 *
 * @property integer $lineHeight Default: 30
 *    
 *
 * @property string $backgroundColor Default: 'transparent'
 *    
 *
 * @property string $borderColor Default: '#ccc'
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
 * @property integer $width Default: 100
 *    
 *
 * @property integer $height Default: 40
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
 * @property detail\Rich $rich
 *    
 *
 * @property boolean $valueAnimation Default: true
 *    
 *
 * @property array $offsetCenter Default: '[0, \'40%\']'
 *    
 *
 * @property callable|string $formatter
 *    
 *
 * 
 * 
 * {_more_}
 */
class Detail extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}