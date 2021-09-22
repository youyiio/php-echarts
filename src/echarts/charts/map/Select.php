<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\map;

use beyong\echarts\Property;

/**
 * @property array $label
 *    
 *
 * @property array $itemStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class Select extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}