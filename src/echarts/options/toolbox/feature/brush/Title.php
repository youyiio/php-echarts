<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature\brush;

use beyong\echarts\Property;

/**
 * @property string $rect Default: '矩形选择'
 *    
 *
 * @property string $polygon Default: '圈选'
 *    
 *
 * @property string $lineX Default: '横向选择'
 *    
 *
 * @property string $lineY Default: '纵向选择'
 *    
 *
 * @property string $keep Default: '保持选择'
 *    
 *
 * @property string $clear Default: '清除选择'
 *    
 *
 * <p>标题组件，包含主标题和副标题。</p>
 * <p>在 ECharts 2.x 中单个 ECharts 实例最多只能拥有一个标题组件。但是在 ECharts 3 中可以存在任意多个标题组件，这在需要标题进行排版，或者单个实例中的多个图表都需要标题时会比较有用。</p>
 * <p><strong>例如下面不同缓动函数效果的示例，每一个缓动效果图都带有一个标题组件：</strong></p>
 * <iframe  data-src="https://echarts.apache.org/examples/zh/view.html?c=line-easing&edit=1&reset=1" width="700" height="400"></iframe>
 * 
 * {_more_}
 */
class Title extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}