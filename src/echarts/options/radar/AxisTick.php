<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\radar;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property integer $length Default: 5
 *    
 *
 * @property axistick\LineStyle $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class AxisTick extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}