<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\boxplot\emphasis;

use beyong\echarts\Property;

/**
 * @property string $color Default: '#fff'
 *    
 *
 * @property string $borderColor Default: '#000'
 *    
 *
 * @property integer $borderWidth Default: 2
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
 * @property integer $shadowBlur Default: 5
 *    
 *
 * @property string $shadowColor Default: 'rgba(0,0,0,0.2)'
 *    
 *
 * @property integer $shadowOffsetX Default: 1
 *    
 *
 * @property integer $shadowOffsetY Default: 1
 *    
 *
 * @property integer $opacity Default: 1
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