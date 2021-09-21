<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property array $type
 *    
 *
 * @property magictype\Title $title
 *    
 *
 * @property magictype\Icon $icon
 *    
 *
 * @property magictype\IconStyle $iconStyle
 *    
 *
 * @property magictype\Emphasis $emphasis
 *    
 *
 * @property magictype\Option $option
 *    
 *
 * @property magictype\SeriesIndex $seriesIndex
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