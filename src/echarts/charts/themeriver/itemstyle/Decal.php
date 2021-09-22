<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\themeriver\itemstyle;

use beyong\echarts\Property;

/**
 * @property string $backgroundColor
 *    
 *
 * 
 * 
 * {_more_}
 */
class Decal extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}