<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\parallel\parallelaxisdefault;

use beyong\echarts\Property;

/**
 * @property array $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class AxisLine extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}