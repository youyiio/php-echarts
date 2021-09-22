<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\aria;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property array|array $decals
 *    
 *
 * 
 * 
 * {_more_}
 */
class Decal extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}