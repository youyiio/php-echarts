<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\datazoomslider;

use beyong\echarts\Property;

/**
 * @property array $lineStyle
 *    
 *
 * @property array $areaStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class DataBackground extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}