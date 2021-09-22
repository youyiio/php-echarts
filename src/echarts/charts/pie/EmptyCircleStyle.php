<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\pie;

use beyong\echarts\Property;

/**
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
 *    
 *
 * 
 * 
 * {_more_}
 */
class EmptyCircleStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}