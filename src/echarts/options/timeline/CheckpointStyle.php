<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\timeline;

use beyong\echarts\Property;

/**
 * @property string $symbol Default: 'circle'
 *    
 *
 * @property integer|array $symbolSize Default: 13
 *    
 *
 * @property integer $symbolRotate
 *    
 *
 * @property boolean $symbolKeepAspect Default: false
 *    
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *
 * @property string $color Default: '#316bf3'
 *    
 *
 * @property string $borderColor Default: '#fff'
 *    
 *
 * @property integer $borderWidth Default: 2
 *    
 *
 * @property string|integer|array $borderType Default: 'solid'
 *    
 *
 * @property integer $borderDashOffset Default: 0
 *    
 *
 * @property string $borderCap Default: 'butt'
 *    
 *
 * @property string $borderJoin Default: 'bevel'
 *    
 *
 * @property integer $borderMiterLimit Default: 10
 *    
 *
 * @property integer $shadowBlur Default: 2
 *    
 *
 * @property string $shadowColor Default: 'rgba(0, 0, 0, 0.3)'
 *    
 *
 * @property integer $shadowOffsetX Default: 1
 *    
 *
 * @property integer $shadowOffsetY Default: 1
 *    
 *
 * @property integer $opacity Default: 1
 *    
 *
 * @property boolean $animation Default: true
 *    
 *
 * @property integer $animationDuration Default: 300
 *    
 *
 * @property string $animationEasing Default: 'quinticInOut'
 *    
 *
 * 
 * 
 * {_more_}
 */
class CheckpointStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}