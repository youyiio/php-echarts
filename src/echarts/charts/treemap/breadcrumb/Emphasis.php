<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\treemap\breadcrumb;

use beyong\echarts\Property;

/**
 * @property array $itemStyle
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