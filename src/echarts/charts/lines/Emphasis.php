<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\lines;

use beyong\echarts\Property;

/**
 * @property string $focus Default: 'none'
 *    
 *
 * @property string $blurScope Default: 'coordinateSystem'
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $label
 *    
 *
 * 
 * 
 * {_more_}
 */
class Emphasis extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}