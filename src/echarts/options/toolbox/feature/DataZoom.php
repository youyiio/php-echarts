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
 * @property datazoom\Title $title
 *    
 *
 * @property datazoom\Icon $icon
 *    
 *
 * @property datazoom\IconStyle $iconStyle
 *    
 *
 * @property datazoom\Emphasis $emphasis
 *    
 *
 * @property string $filterMode Default: 'filter'
 *    
 *
 * @property integer|array|boolean $xAxisIndex
 *    
 *
 * @property integer|array|boolean $yAxisIndex
 *    
 *
 * @property datazoom\BrushStyle $brushStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class DataZoom extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}