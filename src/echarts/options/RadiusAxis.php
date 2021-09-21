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
 * @property string $type Default: 'value'
 *    
 *
 * @property string $name
 *    
 *
 * @property string $nameLocation Default: 'end'
 *    
 *
 * @property radiusaxis\NameTextStyle $nameTextStyle
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
 * @property radiusaxis\AxisLine $axisLine
 *    
 *
 * @property radiusaxis\AxisTick $axisTick
 *    
 *
 * @property radiusaxis\MinorTick $minorTick
 *    
 *
 * @property radiusaxis\AxisLabel $axisLabel
 *    
 *
 * @property radiusaxis\SplitLine $splitLine
 *    
 *
 * @property radiusaxis\MinorSplitLine $minorSplitLine
 *    
 *
 * @property radiusaxis\SplitArea $splitArea
 *    
 *
 * @property radiusaxis\Data $data
 *    
 *
 * @property radiusaxis\AxisPointer $axisPointer
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
class RadiusAxis extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}