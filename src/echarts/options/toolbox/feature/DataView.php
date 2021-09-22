<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature;

use beyong\echarts\Property;

/**
 * @property string $icon
 *    
 *
 * @property array $iconStyle
 *    
 *
 * @property dataview\Emphasis $emphasis
 *    
 *
 * @property callable $optionToContent
 *    
 *
 * @property callable $contentToOption
 *    
 *
 * 
 * 
 * {_more_}
 */
class DataView extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}