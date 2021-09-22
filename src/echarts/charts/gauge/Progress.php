<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\gauge;

use beyong\echarts\Property;

/**
 * @property array $itemStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class Progress extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}