<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\timeline;

use beyong\echarts\Property;

/**
 * @property progress\LineStyle $lineStyle
 *    
 *
 * @property progress\ItemStyle $itemStyle
 *    
 *
 * @property progress\Label $label
 *    
 *
 * 
 * 
 * {_more_}
 */
class Progress extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}