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
 * @property array $center
 *    
 *
 * @property array $boundingCoords
 *    
 *
 * @property array $scaleLimit
 *    
 *
 * @property array $nameMap
 *    
 *
 * @property array $label
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property array $emphasis
 *    
 *
 * @property geo\Select $select
 *    
 *
 * @property geo\Blur $blur
 *    
 *
 * @property array $layoutCenter
 *    
 *
 * @property integer|string $layoutSize
 *    
 *
 * @property array $regions
 *    
 *
 * @property array $tooltip
 *    
 *
 * <p>地理坐标系组件。</p>
 * <p>地理坐标系组件用于地图的绘制，支持在地理坐标系上绘制<a href="#series-scatter">散点图</a>，<a href="#series-lines">线集</a>。</p>
 * <p><code class="codespan">3.1.10</code> 开始 geo 组件也支持鼠标事件。事件参数为</p>
 * <pre><code class="lang-js">{
 *     componentType: &#39;geo&#39;,
 *     // Geo 组件在 option 中的 index
 *     geoIndex: number,
 *     // 点击区域的名称，比如&quot;上海&quot;
 *     name: string,
 *     // 传入的点击区域的 region 对象，见 geo.regions
 *     region: Object
 * }
 * </code></pre>
 * <p><strong>Tip:</strong>
 * geo 区域的颜色也可以被 map series 所控制，参见 <a href="#series-map.geoIndex">series-map.geoIndex</a>。</p>
 * 
 * {_more_}
 */
class Geo extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}