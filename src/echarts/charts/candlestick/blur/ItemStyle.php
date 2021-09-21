<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\candlestick\blur;

use beyong\echarts\Property;

/**
 * @property string $color
 *    
 *
 * @property string $color0
 *    
 *
 * @property string $borderColor
 *    
 *
 * @property string $borderColor0
 *    
 *
 * @property integer $borderWidth Default: 2
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