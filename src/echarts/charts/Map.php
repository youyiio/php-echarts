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
 * @property string $map Default: ''
 *    
 *
 * @property boolean|string $roam Default: false
 *    
 *
 * @property array $center
 *    
 *
 * @property double $aspectScale Default: '0.75'
 *    
 *
 * @property array $boundingCoords
 *    
 *
 * @property integer $zoom Default: 1
 *    
 *
 * @property array $scaleLimit
 *    
 *
 * @property array $nameMap
 *    
 *
 * @property string $nameProperty Default: 'name'
 *    
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *
 * @property array $label
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property map\Emphasis $emphasis
 *    
 *
 * @property map\Select $select
 *    
 *
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property string|integer $left Default: 'auto'
 *    
 *
 * @property string|integer $top Default: 'auto'
 *    
 *
 * @property string|integer $right Default: 'auto'
 *    
 *
 * @property string|integer $bottom Default: 'auto'
 *    
 *
 * @property array $layoutCenter
 *    
 *
 * @property integer|string $layoutSize
 *    
 *
 * @property integer $geoIndex
 *    
 *
 * @property string $mapValueCalculation Default: 'sum'
 *    
 *
 * @property boolean $showLegendSymbol
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
 * @property array|callable $labelLayout
 *    
 *
 * @property array $labelLine
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
 * @property boolean $silent Default: false
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
class Map extends Chart
{

    function __construct()
    {
        $this->type = 'map';
    }
}