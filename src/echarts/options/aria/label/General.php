<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\aria\label;

use beyong\echarts\Property;

/**
 * @property string $withTitle Default: '这是一个关于“{title}”的图表。'
 *    
 *
 * @property string $withoutTitle Default: '这是一个图表，'
 *    
 *
 * 
 * 
 * {_more_}
 */
class General extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}