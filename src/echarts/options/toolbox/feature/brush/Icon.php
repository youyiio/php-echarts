<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature\brush;

use beyong\echarts\Property;

/**
 * @property string $rect
 *    
 *
 * @property string $polygon
 *    
 *
 * @property string $lineX
 *    
 *
 * @property string $lineY
 *    
 *
 * @property string $keep
 *    
 *
 * @property string $clear
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