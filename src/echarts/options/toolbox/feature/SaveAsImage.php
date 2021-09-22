<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature;

use beyong\echarts\Property;

/**
 * @property string $name
 *    
 *
 * @property string $icon
 *    
 *
 * @property array $iconStyle
 *    
 *
 * @property saveasimage\Emphasis $emphasis
 *    
 *
 * 
 * 
 * {_more_}
 */
class SaveAsImage extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}