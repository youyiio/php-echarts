<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\angleaxis;

use beyong\echarts\Property;

/**
 * @property boolean $snap
 *    
 *
 * @property integer $z
 *    
 *
 * @property array $label
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $shadowStyle
 *    
 *
 * @property integer $value
 *    
 *
 * @property boolean $status
 *    
 *
 * @property array $handle
 *    
 *
 * 
 * 
 * {_more_}
 */
class AxisPointer extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}