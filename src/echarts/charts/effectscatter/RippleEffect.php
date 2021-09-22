<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\effectscatter;

use beyong\echarts\Property;

/**
 * @property string $color
 *    
 *
 * 
 * 
 * {_more_}
 */
class RippleEffect extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}