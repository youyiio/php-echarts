<?php
/**
 * Created by php-echarts AutoGenerate.
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
 * @property boolean $show Default: true
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
 * @property string|integer $width Default: 'auto'
 *    
 *
 * @property string|integer $height Default: 'auto'
 *    
 *
 * @property string $orient Default: 'horizontal'
 *    
 *
 * @property string $align Default: 'auto'
 *    
 *
 * @property integer|array $padding Default: 5
 *    
 *
 * @property integer $itemGap Default: 10
 *    
 *
 * @property integer $itemWidth Default: 25
 *    
 *
 * @property integer $itemHeight Default: 14
 *    
 *
 * @property legend\ItemStyle $itemStyle
 *    
 *
 * @property legend\LineStyle $lineStyle
 *    
 *
 * @property integer|string $symbolRotate Default: 'inherit'
 *    
 *
 * @property string|callable $formatter
 *    
 *
 * @property string|boolean $selectedMode Default: true
 *    
 *
 * @property string $inactiveColor Default: '#ccc'
 *    
 *
 * @property string $inactiveBorderColor Default: '#ccc'
 *    
 *
 * @property string $inactiveBorderWidth Default: 'auto'
 *    
 *
 * @property array $selected
 *    
 *
 * @property legend\TextStyle $textStyle
 *    
 *
 * @property array $tooltip
 *    
 *
 * @property string $icon
 *    
 *
 * @property legend\Data $data
 *    
 *
 * @property string $backgroundColor Default: 'transparent'
 *    
 *
 * @property string $borderColor Default: '#ccc'
 *    
 *
 * @property integer $borderWidth Default: 1
 *    
 *
 * @property integer|array $borderRadius Default: 0
 *    
 *
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
 *    
 *
 * @property integer $shadowOffsetX Default: 0
 *    
 *
 * @property integer $shadowOffsetY Default: 0
 *    
 *
 * @property integer $scrollDataIndex Default: 0
 *    
 *
 * @property integer $pageButtonItemGap Default: 5
 *    
 *
 * @property integer $pageButtonGap
 *    
 *
 * @property string $pageButtonPosition Default: 'end'
 *    
 *
 * @property string|callable $pageFormatter Default: '{current}/{total}'
 *    
 *
 * @property legend\PageIcons $pageIcons
 *    
 *
 * @property string $pageIconColor Default: '#2f4554'
 *    
 *
 * @property string $pageIconInactiveColor Default: '#aaa'
 *    
 *
 * @property integer|array $pageIconSize Default: 15
 *    
 *
 * @property legend\PageTextStyle $pageTextStyle
 *    
 *
 * @property boolean $animation
 *    
 *
 * @property integer $animationDurationUpdate Default: 800
 *    
 *
 * @property legend\Emphasis $emphasis
 *    
 *
 * @property boolean|array $selector Default: false
 *    
 *
 * @property legend\SelectorLabel $selectorLabel
 *    
 *
 * @property string $selectorPosition Default: 'auto'
 *    
 *
 * @property integer $selectorItemGap Default: 7
 *    
 *
 * @property integer $selectorButtonGap Default: 10
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