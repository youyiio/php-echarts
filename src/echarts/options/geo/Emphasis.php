<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\geo;

use beyong\echarts\Property;

/**
 * @property string $focus Default: 'none'
 *    
 *
 * @property emphasis\Label $label
 *    
 *
 * @property emphasis\ItemStyle $itemStyle
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