<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\pictorialbar;

use beyong\echarts\Property;

/**
 * @property boolean $show
 *    
 *
 * @property boolean $showAbove
 *    
 *
 * @property integer $length2
 *    
 *
 * @property boolean|integer $smooth Default: false
 *    
 *
 * @property integer $minTurnAngle
 *    
 *
 * @property array $lineStyle
 *    
 *
 * 
 * 
 * {_more_}
 */
class LabelLine extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}