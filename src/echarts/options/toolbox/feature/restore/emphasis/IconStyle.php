<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature\restore\emphasis;

use beyong\echarts\Property;

/**
 * @property string $color Default: '自适应'
 *    
 *
 * @property string $borderColor Default: '#000'
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
 * @property string $borderCap Default: 'butt'
 *    
 *
 * @property string $borderJoin Default: 'bevel'
 *    
 *
 * @property integer $borderMiterLimit Default: 10
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
 * @property string $textPosition Default: 'bottom'
 *    
 *
 * @property string $textFill Default: '#000'
 *    
 *
 * @property string $textAlign Default: 'center'
 *    
 *
 * @property string $textBackgroundColor
 *    
 *
 * @property integer $textBorderRadius
 *    
 *
 * @property integer $textPadding
 *    
 *
 * 
 * 
 * {_more_}
 */
class IconStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}