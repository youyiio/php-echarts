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
 * @property boolean $show Default: false
 *    
 *
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property string|integer $left Default: '10%'
 *    
 *
 * @property string|integer $top Default: 60
 *    
 *
 * @property string|integer $right Default: '10%'
 *    
 *
 * @property string|integer $bottom Default: 60
 *    
 *
 * @property string|integer $width Default: 'auto'
 *    
 *
 * @property string|integer $height Default: 'auto'
 *    
 *
 * @property boolean $containLabel Default: false
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
 * @property array $tooltip
 *    
 *
 * <p>直角坐标系内绘图网格，单个 grid 内最多可以放置上下两个 X 轴，左右两个 Y 轴。可以在网格上绘制<a href="#series-line">折线图</a>，<a href="#series-bar">柱状图</a>，<a href="#series-scatter">散点图（气泡图）</a>。</p>
 * <p>在 ECharts 2.x 里单个 echarts 实例中最多只能存在一个 grid 组件，在 ECharts 3 中可以存在任意个 grid 组件。</p>
 * <p><strong>例如下面这个 Anscombe Quartet 的示例：</strong></p>
 * <iframe  data-src="https://echarts.apache.org/examples/zh/view.html?c=scatter-anscombe-quartet&edit=1&reset=1" width="600" height="400"></iframe>
 * 
 * {_more_}
 */
class Grid extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}