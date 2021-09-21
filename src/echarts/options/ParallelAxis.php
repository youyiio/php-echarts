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
 * @property integer $dim
 *    
 *
 * @property integer $parallelIndex Default: 0
 *    
 *
 * @property boolean $realtime Default: true
 *    
 *
 * @property parallelaxis\AreaSelectStyle $areaSelectStyle
 *    
 *
 * @property string $type Default: 'value'
 *    
 *
 * @property string $name
 *    
 *
 * @property string $nameLocation Default: 'end'
 *    
 *
 * @property parallelaxis\NameTextStyle $nameTextStyle
 *    
 *
 * @property integer $nameGap Default: 15
 *    
 *
 * @property integer $nameRotate
 *    
 *
 * @property boolean $inverse Default: false
 *    
 *
 * @property boolean|array $boundaryGap
 *    
 *
 * @property integer|string|callable $min
 *    
 *
 * @property integer|string|callable $max
 *    
 *
 * @property boolean $scale Default: false
 *    
 *
 * @property integer $splitNumber Default: 5
 *    
 *
 * @property integer $minInterval Default: 0
 *    
 *
 * @property integer $maxInterval
 *    
 *
 * @property integer $interval
 *    
 *
 * @property integer $logBase Default: 10
 *    
 *
 * @property boolean $silent Default: false
 *    
 *
 * @property boolean $triggerEvent Default: false
 *    
 *
 * @property parallelaxis\AxisLine $axisLine
 *    
 *
 * @property parallelaxis\AxisTick $axisTick
 *    
 *
 * @property parallelaxis\MinorTick $minorTick
 *    
 *
 * @property parallelaxis\AxisLabel $axisLabel
 *    
 *
 * @property parallelaxis\Data $data
 *    
 *
 * 
 * 
 * {_more_}
 */
class ParallelAxis extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}