<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\treemap\breadcrumb\emphasis;

use beyong\echarts\Property;

/**
 * @property string $color Default: 'rgba(0,0,0,0.7)'
 *    
 *
 * @property string $borderColor Default: 'rgba(255,255,255,0.7)'
 *    
 *
 * @property integer $borderWidth Default: 1
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
 * @property integer $shadowBlur Default: 3
 *    
 *
 * @property string $shadowColor Default: 'rgba(150,150,150,1)'
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
 * @property array $textStyle
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