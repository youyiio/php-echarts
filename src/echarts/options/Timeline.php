<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property string $type Default: 'slider'
 *    
 *
 * @property string $axisType Default: 'time'
 *    
 *
 * @property integer $currentIndex Default: 0
 *    
 *
 * @property boolean $autoPlay Default: false
 *    
 *
 * @property boolean $rewind Default: false
 *    
 *
 * @property boolean $loop Default: true
 *    
 *
 * @property integer $playInterval Default: 2000
 *    
 *
 * @property boolean $realtime Default: true
 *    
 *
 * @property array|string $replaceMerge Default: 'undefined'
 *    
 *
 * @property string $controlPosition Default: 'left'
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
 * @property integer|array $padding Default: 5
 *    
 *
 * @property string $orient Default: 'horizontal'
 *    
 *
 * @property boolean $inverse Default: false
 *    
 *
 * @property string $symbol Default: 'emptyCircle'
 *    
 *
 * @property integer|array $symbolSize Default: 10
 *    
 *
 * @property integer $symbolRotate
 *    
 *
 * @property boolean $symbolKeepAspect Default: false
 *    
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *
 * @property timeline\LineStyle $lineStyle
 *    
 *
 * @property timeline\Label $label
 *    
 *
 * @property timeline\ItemStyle $itemStyle
 *    
 *
 * @property timeline\CheckpointStyle $checkpointStyle
 *    
 *
 * @property timeline\ControlStyle $controlStyle
 *    
 *
 * @property timeline\Progress $progress
 *    
 *
 * @property timeline\Emphasis $emphasis
 *    
 *
 * @property array $data
 *    
 *
 * <p><code class="codespan">timeline</code> 组件，提供了在多个 ECharts <code class="codespan">option</code> 间进行切换、播放等操作的功能。</p>
 * <p>示例效果如下：</p>
 * <iframe  data-src="https://echarts.apache.org/examples/zh/view.html?c=doc-example/mix-timeline-all&edit=1&reset=1" width="600" height="400"></iframe>
 * 
 * 
 * <p><code class="codespan">timeline</code> 和其他场景有些不同，它需要操作『多个option』。我们把传入 <code class="codespan">setOption</code> 第一个参数的东西，称为 <code class="codespan">ECOption</code>，然后称传统的 ECharts 单个 option 为 <code class="codespan">ECUnitOption</code>。</p>
 * <ul>
 * <li>当 <code class="codespan">timeline</code> 和 <code class="codespan">media query</code> 没有被设置时，一个 <code class="codespan">ECUnitOption</code> 就是一个 <code class="codespan">ECOption</code>。</li>
 * <li>当 <code class="codespan">timeline</code> 或 <code class="codespan">media query</code> 被使用设置时，一个 <code class="codespan">ECOption</code> 由几个 <code class="codespan">ECUnitOption</code> 组成。<ul>
 * <li><code class="codespan">ECOption</code> 的各个根属性，形成一个 <code class="codespan">ECUnitOption</code>，叫做 <code class="codespan">baseOption</code>，它代表了各种默认设置。</li>
 * <li><code class="codespan">options</code> 数组每项，形成一个 <code class="codespan">ECUnitOption</code>，我们为了方便也叫做 <code class="codespan">switchableOption</code>，它代表了每个时间粒度对应的 option。</li>
 * </ul>
 * </li>
 * <li><code class="codespan">baseOption</code> 和一个 <code class="codespan">switchableOption</code> 会用来计算最终的 <code class="codespan">finalOption</code>，图表就是根据这个最终结果绘制的。</li>
 * </ul>
 * <p>例如：</p>
 * <pre><code class="lang-javascript">// 如下，baseOption 是一个 『原子option』，options 数组
 * // 中的每一项也是一个 『原子option』。
 * // 每个『原子option』中就是本文档中描述的各种配置项。
 * myChart.setOption({
 *     // `baseOption` 的属性.
 *     timeline: {
 *         ...,
 *         // `timeline.data` 中的每一项，对应于 `options`
 *         // 数组中的每个 `option`
 *         data: [&#39;2002-01-01&#39;, &#39;2003-01-01&#39;, &#39;2004-01-01&#39;]
 *     },
 *     grid: { ... },
 *     xAxis: [ ... ],
 *     yAxis: [ ... ],
 *     series: [{
 *         // 系列一的一些其他配置
 *         type: &#39;bar&#39;,
 *         ...
 *     }, {
 *         // 系列二的一些其他配置
 *         type: &#39;line&#39;,
 *         ...
 *     }, {
 *         // 系列三的一些其他配置
 *         type: &#39;pie&#39;,
 *         ...
 *     }],
 *     // `switchableOption`s:
 *     options: [{
 *         // 这是&#39;2002-01-01&#39; 对应的 option
 *         title: {
 *             text: &#39;2002年统计值&#39;
 *         },
 *         series: [
 *             { data: [] }, // 系列一的数据
 *             { data: [] }, // 系列二的数据
 *             { data: [] }  // 系列三的数据
 *         ]
 *     }, {
 *         // 这是&#39;2003-01-01&#39; 对应的 option
 *         title: {
 *             text: &#39;2003年统计值&#39;
 *         },
 *         series: [
 *             { data: [] },
 *             { data: [] },
 *             { data: [] }
 *         ]
 *     }, {
 *         // 这是&#39;2004-01-01&#39; 对应的 option
 *         title: {
 *             text: &#39;2004年统计值&#39;
 *         },
 *         series: [
 *             { data: [] },
 *             { data: [] },
 *             { data: [] }
 *         ]
 *     }]
 * });
 * </code></pre>
 * <p><br>
 * <strong><code class="codespan">finalOption</code> 是怎么计算出来的?</strong></p>
 * <p>初始化的时候，对应于当前时间的那个 <code class="codespan">switchableOption</code> 会被合并（merge）到 <code class="codespan">baseOption</code>，形成 <code class="codespan">finalOption</code>。而每当时间变化时，对应于新时间的 <code class="codespan">switchableOption</code> 会被合并（merge）到<code class="codespan">finalOption</code>。</p>
 * <p>有两种合并（merge）策略：</p>
 * <ul>
 * <li>默认使用 <code class="codespan">NORMAL_MERGE</code>。</li>
 * <li>如果 <a href="#option.html#timeline.replaceMerge">timeline.replaceMerge</a> 被指定了，则使用 <code class="codespan">REPLACE_MERGE</code>。如果要知道 <code class="codespan">REPLACE_MERGE</code> 更多信息，可以参见 <a href="#api.html#echartsInstance.setOption">setOption</a> 中 <code class="codespan">REPLACE_MERGE</code> 一节。
 * 。</li>
 * </ul>
 * <p><br>
 * <strong>兼容 ECharts4</strong></p>
 * <p>如下这种设置方式，也支持：</p>
 * <pre><code class="lang-js">option = {
 *     baseOption: {
 *         timeline: {},
 *         series: [],
 *         // ... other properties of baseOption.
 *     },
 *     options: []
 * };
 * </code></pre>
 * 
 * {_more_}
 */
class Timeline extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}