<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\boxplot\markpoint\blur;

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