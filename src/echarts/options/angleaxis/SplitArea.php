<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\angleaxis;

use beyong\echarts\Property;

/**
 * @property integer|callable $interval Default: 'auto'
 *    
 *
 * @property boolean $show Default: false
 *    
 *
 * @property array $areaStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class SplitArea extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}