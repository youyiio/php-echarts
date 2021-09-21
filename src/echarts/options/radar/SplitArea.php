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
 * @property splitarea\AreaStyle $areaStyle
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