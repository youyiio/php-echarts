<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\yaxis;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property minorsplitline\LineStyle $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class MinorSplitLine extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}