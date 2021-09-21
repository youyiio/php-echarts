<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature\magictype;

use beyong\echarts\Property;

/**
 * @property string $line
 *    
 *
 * @property string $bar
 *    
 *
 * @property string $stack
 *    
 *
 * 
 * 
 * {_more_}
 */
class Icon extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}