<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options;

use beyong\echarts\Property;

/**
 * @property string $type
 *    
 *
 * @property string $id
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property string|callable $formatter
 *    
 *
 * @property array $selected
 *    
 *
 * @property array $textStyle
 *    
 *
 * @property array $tooltip
 *    
 *
 * @property string $icon
 *    
 *
 * @property array $data
 *    
 *
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
 *    
 *
 * @property integer $pageButtonGap
 *    
 *
 * @property array $pageIcons
 *    
 *
 * @property array $pageTextStyle
 *    
 *
 * @property boolean $animation
 *    
 *
 * @property legend\Emphasis $emphasis
 *    
 *
 * @property array $selectorLabel
 *    
 *
 * <p>图例组件。</p>
 * <p>图例组件展现了不同系列的标记(symbol)，颜色和名字。可以通过点击图例控制哪些系列不显示。</p>
 * <p>ECharts 3 中单个 echarts 实例中可以存在多个图例组件，会方便多个图例的布局。</p>
 * <p>当图例数量过多时，可以使用 <a href="https://echarts.apache.org/examples/zh/editor.html?c=pie-legend&amp;edit=1&amp;reset=1" target="_blank">滚动图例（垂直）</a> 或 <a href="https://echarts.apache.org/examples/zh/editor.html?c=radar2&amp;edit=1&amp;reset=1" target="_blank">滚动图例（水平）</a>，参见：<a href="#legend.type">legend.type</a></p>
 * 
 * {_more_}
 */
class Legend extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}