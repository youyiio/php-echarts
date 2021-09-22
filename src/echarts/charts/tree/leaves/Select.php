<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\tree\leaves;

use beyong\echarts\Property;

/**
 * @property array $itemStyle
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $label
 *    
 *
 * 
 * 
 * {_more_}
 */
class Select extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}