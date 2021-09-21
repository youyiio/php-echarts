<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\gauge;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property boolean $overlap Default: true
 *    
 *
 * @property integer $width Default: 10
 *    
 *
 * @property boolean $roundCap Default: false
 *    
 *
 * @property boolean $clip Default: false
 *    
 *
 * @property array $itemStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class Progress extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}