<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\boxplot;

use beyong\echarts\Property;

/**
 * @property array $label
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property markarea\Emphasis $emphasis
 *    
 *
 * @property markarea\Blur $blur
 *    
 *
 * @property markarea\Data $data
 *    
 *
 * 
 * 
 * {_more_}
 */
class MarkArea extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}