<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts;

use beyong\echarts\Chart;

/**
 * @property string $id
 *    
 *
 * @property string $coordinateSystem Default: 'parallel'
 *    
 *
 * @property integer $parallelIndex Default: 0
 *    
 *
 * @property string $name
 *    
 *
 * @property string $colorBy Default: 'series'
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property parallel\Emphasis $emphasis
 *    
 *
 * @property double $inactiveOpacity Default: '0.05'
 *    
 *
 * @property integer $activeOpacity Default: 1
 *    
 *
 * @property boolean $realtime Default: true
 *    
 *
 * @property boolean|integer $smooth Default: false
 *    
 *
 * @property integer $progressive Default: 500
 *    
 *
 * @property integer $progressiveThreshold Default: 3000
 *    
 *
 * @property string $progressiveChunkMode Default: 'sequential'
 *    
 *
 * @property array $data
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
 * @property string $animationEasing Default: 'linear'
 *    
 *
 * @property integer|callable $animationDelay Default: 0
 *    
 *
 * @property integer|callable $animationDurationUpdate Default: 300
 *    
 *
 * @property string $animationEasingUpdate Default: 'cubicInOut'
 *    
 *
 * @property integer|callable $animationDelayUpdate Default: 0
 *    
 *
 * {_more_}
 */
class Parallel extends Chart
{

    function __construct()
    {
        $this->type = 'parallel';
    }
}