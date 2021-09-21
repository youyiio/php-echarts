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
 * @property integer $polarIndex Default: 0
 *    
 *
 * @property integer $startAngle Default: 90
 *    
 *
 * @property boolean $clockwise Default: true
 *    
 *
 * @property string $type Default: 'category'
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
 * @property angleaxis\AxisLine $axisLine
 *    
 *
 * @property angleaxis\AxisTick $axisTick
 *    
 *
 * @property angleaxis\MinorTick $minorTick
 *    
 *
 * @property angleaxis\AxisLabel $axisLabel
 *    
 *
 * @property angleaxis\SplitLine $splitLine
 *    
 *
 * @property angleaxis\MinorSplitLine $minorSplitLine
 *    
 *
 * @property angleaxis\SplitArea $splitArea
 *    
 *
 * @property angleaxis\Data $data
 *    
 *
 * @property angleaxis\AxisPointer $axisPointer
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
class AngleAxis extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}