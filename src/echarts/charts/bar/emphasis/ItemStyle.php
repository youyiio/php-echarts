<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\bar\emphasis;

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
 * @property string $borderType Default: 'solid'
 *    
 *
 * @property integer|array $borderRadius Default: 0
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