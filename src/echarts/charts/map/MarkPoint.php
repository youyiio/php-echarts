<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\map;

use beyong\echarts\Property;

/**
 * @property integer|callable $symbolRotate
 *    
 *
 * @property array $label
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property markpoint\Emphasis $emphasis
 *    
 *
 * @property markpoint\Blur $blur
 *    
 *
 * @property array $data
 *    
 *
 * 
 * 
 * {_more_}
 */
class MarkPoint extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}