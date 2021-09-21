<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\yaxis\axispointer;

use beyong\echarts\Property;

/**
 * @property string $color Default: '#555'
 *    
 *
 * @property integer $width Default: 1
 *    
 *
 * @property string|integer|array $type Default: 'solid'
 *    
 *
 * @property integer $dashOffset Default: 0
 *    
 *
 * @property string $cap Default: 'butt'
 *    
 *
 * @property string $join Default: 'bevel'
 *    
 *
 * @property integer $miterLimit Default: 10
 *    
 *
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
 *    
 *
 * @property integer $shadowOffsetX Default: 0
 *    
 *
 * @property integer $shadowOffsetY Default: 0
 *    
 *
 * @property integer $opacity Default: 1
 *    
 *
 * 
 * 
 * {_more_}
 */
class LineStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}