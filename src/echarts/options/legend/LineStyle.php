<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\legend;

use beyong\echarts\Property;

/**
 * @property string $color Default: 'inherit'
 *    
 *
 * @property integer $width Default: 'auto'
 *    
 *
 * @property string|integer|array $type Default: 'inherit'
 *    
 *
 * @property integer $dashOffset Default: 'inherit'
 *    
 *
 * @property string $cap Default: 'inherit'
 *    
 *
 * @property string $join Default: 'inherit'
 *    
 *
 * @property integer $miterLimit Default: 'inherit'
 *    
 *
 * @property integer $shadowBlur Default: 'inherit'
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
 * @property integer $opacity Default: 'inherit'
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