<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\treemap;

use beyong\echarts\Property;

/**
 * @property array $itemStyle
 *    
 *
 * @property breadcrumb\Emphasis $emphasis
 *    
 *
 * 
 * 
 * {_more_}
 */
class Breadcrumb extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}