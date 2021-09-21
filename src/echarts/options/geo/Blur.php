<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\geo;

use beyong\echarts\Property;

/**
 * @property blur\Label $label
 *    
 *
 * @property blur\ItemStyle $itemStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class Blur extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}