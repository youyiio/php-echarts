<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options;

use beyong\echarts\Property;

/**
 * @property string $id
 *    
 *
 * @property array $name
 *    
 *
 * @property array $axisLine
 *    
 *
 * @property array $axisTick
 *    
 *
 * @property array $axisLabel
 *    
 *
 * @property array $splitLine
 *    
 *
 * @property array $splitArea
 *    
 *
 * @property array $indicator
 *    
 *
 * <p>雷达图坐标系组件，只适用于<a href="#series-radar">雷达图</a>。该组件等同 ECharts 2 中的 polar 组件。因为 3 中的 polar 被重构为标准的极坐标组件，为避免混淆，雷达图使用 radar 组件作为其坐标系。</p>
 * <p>雷达图坐标系与极坐标系不同的是它的每一个轴（indicator 指示器）都是一个单独的维度，可以通过 <a href="#radar.name">name</a>、<a href="#radar.axisLine">axisLine</a>、<a href="#radar.axisTick">axisTick</a>、<a href="#radar.axisLabel">axisLabel</a>、<a href="#radar.splitLine">splitLine</a>、 <a href="#radar.splitArea">splitArea</a> 几个配置项配置指示器坐标轴线的样式。</p>
 * <p>下面是一个 radar 组件的一个自定义例子。</p>
 * <iframe  data-src="https://echarts.apache.org/examples/zh/view.html?c=doc-example/radar&edit=1&reset=1" width="400" height="400"></iframe>
 * 
 * {_more_}
 */
class Radar extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}