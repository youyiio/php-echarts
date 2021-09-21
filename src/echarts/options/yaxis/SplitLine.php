<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\yaxis;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property integer|callable $interval Default: 'auto'
 *    
 *
 * @property splitline\LineStyle $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class SplitLine extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}