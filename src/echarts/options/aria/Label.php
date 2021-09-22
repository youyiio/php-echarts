<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\aria;

use beyong\echarts\Property;

/**
 * @property boolean $enabled Default: true
 *    
 *
 * @property string $description
 *    
 *
 * @property array $general
 *    
 *
 * @property array $series
 *    
 *
 * @property array $data
 *    
 *
 * 
 * 
 * {_more_}
 */
class Label extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}