<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\lines;

use beyong\echarts\Property;

/**
 * @property integer|callable $delay
 *    
 *
 * @property string $color
 *    
 *
 * 
 * 
 * {_more_}
 */
class Effect extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}