<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\timeline;

use beyong\echarts\Property;

/**
 * @property array $label
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $checkpointStyle
 *    
 *
 * @property array $controlStyle
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