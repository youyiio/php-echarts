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
 * @property string $trigger Default: 'item'
 *    
 *
 * @property array $axisPointer
 *    
 *
 * @property boolean $showContent Default: true
 *    
 *
 * @property boolean $alwaysShowContent Default: false
 *    
 *
 * @property string $triggerOn Default: 'mousemove|click'
 *    
 *
 * @property integer $showDelay Default: 0
 *    
 *
 * @property integer $hideDelay Default: 100
 *    
 *
 * @property boolean $enterable Default: false
 *    
 *
 * @property string $renderMode Default: 'html'
 *    
 *
 * @property boolean $confine Default: false
 *    
 *
 * @property boolean $appendToBody Default: false
 *    
 *
 * @property string $className
 *    
 *
 * @property double $transitionDuration Default: '0.4'
 *    
 *
 * @property string|array|callable $position
 *    
 *
 * @property string|callable $formatter
 *    
 *
 * @property string $backgroundColor Default: 'rgba(50,50,50,0.7)'
 *    
 *
 * @property string $borderColor Default: '#333'
 *    
 *
 * @property integer $borderWidth Default: 0
 *    
 *
 * @property integer $padding Default: 5
 *    
 *
 * @property array $textStyle
 *    
 *
 * @property string $extraCssText
 *    
 *
 * @property string $order Default: 'seriesAsc'
 *    
 *
 * <p>提示框组件。</p>
 * <hr>
 * <p><strong>提示框组件的通用介绍：</strong></p>
 * <p>提示框组件可以设置在多种地方：</p>
 * <ul>
 * <li><p>可以设置在全局，即 <a href="#tooltip">tooltip</a></p>
 * </li>
 * <li><p>可以设置在坐标系中，即 <a href="#grid.tooltip">grid.tooltip</a>、<a href="#polar.tooltip">polar.tooltip</a>、<a href="#single.tooltip">single.tooltip</a></p>
 * </li>
 * <li><p>可以设置在系列中，即 <a href="#series.tooltip">series.tooltip</a></p>
 * </li>
 * <li><p>可以设置在系列的每个数据项中，即 <a href="#series.data.tooltip">series.data.tooltip</a></p>
 * </li>
 * </ul>
 * <hr>
 * 
 * {_more_}
 */
class Tooltip extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}