<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\effectscatter;

use beyong\echarts\Property;

/**
 * 
 * 
 * {_more_}
 */
class Encode extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}