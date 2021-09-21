<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\pie;

use beyong\echarts\Property;

/**
 * @property boolean $scale Default: true
 *    
 *
 * @property integer $scaleSize Default: 10
 *    
 *
 * @property string $focus Default: 'none'
 *    
 *
 * @property string $blurScope Default: 'coordinateSystem'
 *    
 *
 * @property array $label
 *    
 *
 * @property array $labelLine
 *    
 *
 * @property array $itemStyle
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