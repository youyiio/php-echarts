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
 * @property string $orient Default: 'horizontal'
 *    
 *
 * @property integer $itemSize Default: 15
 *    
 *
 * @property integer $itemGap Default: 10
 *    
 *
 * @property boolean $showTitle Default: true
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