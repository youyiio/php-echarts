<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\legend;

use beyong\echarts\Property;

/**
 * @property string $color Default: 'inherit'
 *    
 *
 * @property string $borderColor Default: 'inherit'
 *    
 *
 * @property integer $borderWidth Default: 'auto'
 *    
 *
 * @property string|integer|array $borderType Default: 'inherit'
 *    
 *
 * @property integer $borderDashOffset Default: 'inherit'
 *    
 *
 * @property string $borderCap Default: 'inherit'
 *    
 *
 * @property string $borderJoin Default: 'inherit'
 *    
 *
 * @property integer $borderMiterLimit Default: 'inherit'
 *    
 *
 * @property integer $shadowBlur Default: 0
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
 * @property integer $opacity Default: 'inherit'
 *    
 *
 * @property array $decal Default: 'inherit'
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