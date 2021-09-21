<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\yaxis\axispointer;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property * $icon
 *    
 *
 * @property integer|array $size Default: 45
 *    
 *
 * @property integer $margin Default: 50
 *    
 *
 * @property string $color Default: '#333'
 *    
 *
 * @property integer $throttle Default: 40
 *    
 *
 * @property integer $shadowBlur Default: 3
 *    
 *
 * @property string $shadowColor Default: '#aaa'
 *    
 *
 * @property integer $shadowOffsetX Default: 2
 *    
 *
 * @property integer $shadowOffsetY Default: 0
 *    
 *
 * 
 * 
 * {_more_}
 */
class Handle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}