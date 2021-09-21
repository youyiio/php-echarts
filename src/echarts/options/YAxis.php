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
 * @property boolean $show Default: true
 *    
 *
 * @property integer $gridIndex Default: 0
 *    
 *
 * @property string $position
 *    
 *
 * @property integer $offset Default: 0
 *    
 *
 * @property boolean $realtimeSort Default: false
 *    
 *
 * @property integer $sortSeriesIndex Default: 0
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
 * @property yaxis\NameTextStyle $nameTextStyle
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
 * @property yaxis\AxisLine $axisLine
 *    
 *
 * @property yaxis\AxisTick $axisTick
 *    
 *
 * @property yaxis\MinorTick $minorTick
 *    
 *
 * @property yaxis\AxisLabel $axisLabel
 *    
 *
 * @property yaxis\SplitLine $splitLine
 *    
 *
 * @property yaxis\MinorSplitLine $minorSplitLine
 *    
 *
 * @property yaxis\SplitArea $splitArea
 *    
 *
 * @property yaxis\Data $data
 *    
 *
 * @property yaxis\AxisPointer $axisPointer
 *    
 *
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 0
 *    
 *
 * 
 * 
 * {_more_}
 */
class YAxis extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}