<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts;

use beyong\echarts\Chart;

/**
 * @property string $id
 *    
 *
 * @property string $name
 *    
 *
 * @property string $colorBy Default: 'series'
 *    
 *
 * @property boolean $legendHoverLink Default: true
 *    
 *
 * @property string $coordinateSystem Default: 'cartesian2d'
 *    
 *
 * @property integer $xAxisIndex Default: 0
 *    
 *
 * @property integer $yAxisIndex Default: 0
 *    
 *
 * @property string $cursor Default: 'pointer'
 *    
 *
 * @property array $label
 *    
 *
 * @property array $labelLine
 *    
 *
 * @property array|callable $labelLayout
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property pictorialbar\Blur $blur
 *    
 *
 * @property array $select
 *    
 *
 * @property pictorialbar\SelectedMode $selectedMode Default: false
 *    
 *
 * @property integer|string $barWidth Default: '自适应'
 *    
 *
 * @property integer|string $barMaxWidth
 *    
 *
 * @property integer|string $barMinWidth
 *    
 *
 * @property integer $barMinHeight Default: 0
 *    
 *
 * @property integer $barMinAngle Default: 0
 *    
 *
 * @property string $barGap Default: '-100%'
 *    
 *
 * @property string $barCategoryGap Default: '20%'
 *    
 *
 * @property string $symbol Default: 'circle'
 *    
 *
 * @property integer|array $symbolSize Default: '[\'100%\', \'100%\']'
 *    
 *
 * @property string $symbolPosition Default: 'start'
 *    
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *
 * @property integer $symbolRotate
 *    
 *
 * @property boolean|integer|string $symbolRepeat
 *    
 *
 * @property string $symbolRepeatDirection Default: 'start'
 *    
 *
 * @property integer|string $symbolMargin
 *    
 *
 * @property boolean $symbolClip Default: false
 *    
 *
 * @property integer|array $symbolBoundingData
 *    
 *
 * @property integer $symbolPatternSize Default: 400
 *    
 *
 * @property boolean $hoverAnimation Default: false
 *    
 *
 * @property array $dimensions
 *    
 *
 * @property array $encode
 *    
 *
 * @property string $dataGroupId
 *    
 *
 * @property array $data
 *    
 *
 * @property array $markPoint
 *    
 *
 * @property array $markLine
 *    
 *
 * @property array $markArea
 *    
 *
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property boolean $silent Default: false
 *    
 *
 * @property boolean $animation Default: true
 *    
 *
 * @property integer $animationThreshold Default: 2000
 *    
 *
 * @property integer|callable $animationDuration Default: 1000
 *    
 *
 * @property string $animationEasing Default: 'cubicOut'
 *    
 *
 * @property integer|callable $animationDurationUpdate Default: 300
 *    
 *
 * @property string $animationEasingUpdate Default: 'cubicInOut'
 *    
 *
 * @property array $universalTransition
 *    
 *
 * @property array $tooltip
 *    
 *
 * {_more_}
 */
class PictorialBar extends Chart
{

    function __construct()
    {
        $this->type = 'pictorialbar';
    }
}