<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\visualmappiecewise\controller;

use beyong\echarts\Property;

/**
 * 
 * 
 * {_more_}
 */
class OutOfRange extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}