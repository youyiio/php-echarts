<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\aria\label;

use beyong\echarts\Property;

/**
 * @property integer $maxCount Default: 10
 *    
 *
 * @property array $single
 *    
 *
 * @property array $multiple
 *    
 *
 * 
 * 
 * {_more_}
 */
class Series extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}