<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options;

use beyong\echarts\Property;

/**
 * @property integer $duration Default: 300
 *    
 *
 * @property string $easing Default: 'cubicOut'
 *    
 *
 * 
 * 
 * {_more_}
 */
class StateAnimation extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}