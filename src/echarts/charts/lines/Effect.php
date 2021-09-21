<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\lines;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: false
 *    
 *
 * @property integer $period Default: 4
 *    
 *
 * @property integer|callable $delay
 *    
 *
 * @property integer $constantSpeed Default: 0
 *    
 *
 * @property string $symbol Default: 'circle'
 *    
 *
 * @property array|integer $symbolSize Default: 3
 *    
 *
 * @property string $color
 *    
 *
 * @property double $trailLength Default: '0.2'
 *    
 *
 * @property boolean $loop Default: true
 *    
 *
 * 
 * 
 * {_more_}
 */
class Effect extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}