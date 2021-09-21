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
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property string|integer $left Default: '5%'
 *    
 *
 * @property string|integer $top Default: '5%'
 *    
 *
 * @property string|integer $right Default: '5%'
 *    
 *
 * @property string|integer $bottom Default: '5%'
 *    
 *
 * @property string|integer $width Default: 'auto'
 *    
 *
 * @property string|integer $height Default: 'auto'
 *    
 *
 * @property string $orient Default: 'horizontal'
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
 * @property singleaxis\NameTextStyle $nameTextStyle
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
 * @property singleaxis\AxisLine $axisLine
 *    
 *
 * @property singleaxis\AxisTick $axisTick
 *    
 *
 * @property singleaxis\MinorTick $minorTick
 *    
 *
 * @property singleaxis\AxisLabel $axisLabel
 *    
 *
 * @property singleaxis\SplitLine $splitLine
 *    
 *
 * @property singleaxis\MinorSplitLine $minorSplitLine
 *    
 *
 * @property singleaxis\SplitArea $splitArea
 *    
 *
 * @property singleaxis\Data $data
 *    
 *
 * @property singleaxis\AxisPointer $axisPointer
 *    
 *
 * @property singleaxis\Tooltip $tooltip
 *    
 *
 * 
 * 
 * {_more_}
 */
class SingleAxis extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}