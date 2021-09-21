<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\angleaxis;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property integer $splitNumber Default: 5
 *    
 *
 * @property integer $length Default: 3
 *    
 *
 * @property minortick\LineStyle $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class MinorTick extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}