<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\legend;

use beyong\echarts\Property;

/**
 * @property array $horizontal
 *    
 *
 * @property array $vertical
 *    
 *
 * 
 * 
 * {_more_}
 */
class PageIcons extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}