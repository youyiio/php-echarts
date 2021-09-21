<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\gauge;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property boolean $showAbove Default: false
 *    
 *
 * @property integer $size Default: 6
 *    
 *
 * @property string $icon Default: 'circle'
 *    
 *
 * @property array $offsetCenter Default: '[0, 0]'
 *    
 *
 * @property boolean $keepAspect Default: false
 *    
 *
 * @property array $itemStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class Anchor extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}