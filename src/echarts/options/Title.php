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
 * @property boolean $show Default: true
 *    
 *
 * @property string $text Default: ''
 *    
 *
 * @property string $link Default: ''
 *    
 *
 * @property string $target Default: 'blank'
 *    
 *
 * @property array $textStyle
 *    
 *
 * @property string $subtext Default: ''
 *    
 *
 * @property string $sublink Default: ''
 *    
 *
 * @property string $subtarget Default: 'blank'
 *    
 *
 * @property array $subtextStyle
 *    
 *
 * @property string $textAlign Default: 'auto'
 *    
 *
 * @property string $textVerticalAlign Default: 'auto'
 *    
 *
 * @property boolean $triggerEvent Default: false
 *    
 *
 * @property integer|array $padding Default: 5
 *    
 *
 * @property integer $itemGap Default: 10
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
 * @property string $backgroundColor Default: 'transparent'
 *    
 *
 * @property string $borderColor Default: '#ccc'
 *    
 *
 * @property integer $borderWidth Default: 0
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