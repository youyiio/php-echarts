<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature;

use beyong\echarts\Property;

/**
 * @property string $icon
 *    
 *
 * @property array $iconStyle
 *    
 *
 * @property restore\Emphasis $emphasis
 *    
 *
 * 
 * 
 * {_more_}
 */
class Restore extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}