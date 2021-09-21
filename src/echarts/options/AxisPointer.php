<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options;

use beyong\echarts\Property;

/**
 * @property string $id
 *    
 *
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
 * @property array $label
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property array $shadowStyle
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
 * @property array $handle
 *    
 *
 * @property array $link
 *    
 *
 * @property string $triggerOn Default: 'mousemove|click'
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