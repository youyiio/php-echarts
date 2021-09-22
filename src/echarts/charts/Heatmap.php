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
 * @property string $coordinateSystem Default: 'cartesian2d'
 *    
 *
 * @property integer $xAxisIndex Default: 0
 *    
 *
 * @property integer $yAxisIndex Default: 0
 *    
 *
 * @property integer $geoIndex Default: 0
 *    
 *
 * @property integer $calendarIndex Default: 0
 *    
 *
 * @property integer $pointSize Default: 20
 *    
 *
 * @property integer $blurSize Default: 20
 *    
 *
 * @property integer $minOpacity Default: 0
 *    
 *
 * @property integer $maxOpacity Default: 1
 *    
 *
 * @property integer $progressive Default: 400
 *    
 *
 * @property integer $progressiveThreshold Default: 3000
 *    
 *
 * @property array $label
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
 * @property array $universalTransition
 *    
 *
 * @property heatmap\Blur $blur
 *    
 *
 * @property heatmap\Select $select
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property array $encode
 *    
 *
 * @property string $seriesLayoutBy Default: 'column'
 *    
 *
 * @property integer $datasetIndex Default: 0
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
 * @property array $tooltip
 *    
 *
 * {_more_}
 */
class Heatmap extends Chart
{

    function __construct()
    {
        $this->type = 'heatmap';
    }
}