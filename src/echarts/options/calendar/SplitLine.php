<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\calendar;

use beyong\echarts\Property;

/**
 * @property array $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class SplitLine extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}