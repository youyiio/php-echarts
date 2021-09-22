<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\visualmapcontinuous;

use beyong\echarts\Property;

/**
 * @property array $inRange
 *    
 *
 * @property array $outOfRange
 *    
 *
 * 
 * 
 * {_more_}
 */
class Controller extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}