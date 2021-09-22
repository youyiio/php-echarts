<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\graph;

use beyong\echarts\Property;

/**
 * @property string $initLayout
 *    
 *
 * 
 * 
 * {_more_}
 */
class Force extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}