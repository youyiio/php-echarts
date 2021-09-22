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
 * @property toolbox\Feature $feature
 *    
 *
 * @property array $iconStyle
 *    
 *
 * @property toolbox\Emphasis $emphasis
 *    
 *
 * @property array $tooltip
 *    
 *
 * <p>工具栏。内置有<a href="#toolbox.feature.saveAsImage">导出图片</a>，<a href="#toolbox.feature.dataView">数据视图</a>，<a href="#toolbox.feature.magicType">动态类型切换</a>，<a href="#toolbox.feature.dataZoom">数据区域缩放</a>，<a href="#toolbox.feature.reset">重置</a>五个工具。</p>
 * <p><strong>如下示例：</strong></p>
 * <iframe  data-src="https://echarts.apache.org/examples/zh/view.html?c=line-marker&reset=1&edit=1" width="600" height="400"></iframe>
 * 
 * {_more_}
 */
class Toolbox extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}