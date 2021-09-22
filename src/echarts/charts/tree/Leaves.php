<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\tree;

use beyong\echarts\Property;

/**
 * @property array $label
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property leaves\Emphasis $emphasis
 *    
 *
 * @property leaves\Blur $blur
 *    
 *
 * @property leaves\Select $select
 *    
 *
 * 
 * 
 * {_more_}
 */
class Leaves extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}