<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\angleaxis\axispointer;

use beyong\echarts\Property;

/**
 * @property * $icon
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