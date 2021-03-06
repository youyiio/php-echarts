<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\radar;

use beyong\echarts\Property;

/**
 * @property array $itemStyle
 *    
 *
 * @property array $label
 *    
 *
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
class Emphasis extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}