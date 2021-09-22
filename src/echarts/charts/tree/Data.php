<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\tree;

use beyong\echarts\Property;

/**
 * @property string $name
 *    
 *
 * @property integer $value
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $label
 *    
 *
 * @property data\Emphasis $emphasis
 *    
 *
 * @property data\Blur $blur
 *    
 *
 * @property data\Select $select
 *    
 *
 * @property * $tooltip
 *    
 *
 * 
 * 
 * {_more_}
 */
class Data extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}