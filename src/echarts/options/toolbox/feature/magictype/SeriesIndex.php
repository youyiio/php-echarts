<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature\magictype;

use beyong\echarts\Property;

/**
 * @property array $line
 *    
 *
 * @property array $bar
 *    
 *
 * 
 * 
 * {_more_}
 */
class SeriesIndex extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}