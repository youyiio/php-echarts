<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\xaxis;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property string $type Default: 'line'
 *    
 *
 * @property boolean $snap
 *    
 *
 * @property integer $z
 *    
 *
 * @property axispointer\Label $label
 *    
 *
 * @property axispointer\LineStyle $lineStyle
 *    
 *
 * @property axispointer\ShadowStyle $shadowStyle
 *    
 *
 * @property boolean $triggerTooltip Default: true
 *    
 *
 * @property integer $value
 *    
 *
 * @property boolean $status
 *    
 *
 * @property axispointer\Handle $handle
 *    
 *
 * 
 * 
 * {_more_}
 */
class AxisPointer extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}