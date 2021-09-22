<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature;

use beyong\echarts\Property;

/**
 * @property array $type
 *    
 *
 * @property array $title
 *    
 *
 * @property array $icon
 *    
 *
 * @property array $iconStyle
 *    
 *
 * @property magictype\Emphasis $emphasis
 *    
 *
 * @property magictype\Option $option
 *    
 *
 * @property array $seriesIndex
 *    
 *
 * 
 * 
 * {_more_}
 */
class MagicType extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}