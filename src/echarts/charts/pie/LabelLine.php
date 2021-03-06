<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\pie;

use beyong\echarts\Property;

/**
 * @property boolean $show
 *    
 *
 * @property boolean $showAbove
 *    
 *
 * @property integer $length
 *    
 *
 * @property integer $length2
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property integer $maxSurfaceAngle
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