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
 * @property array|array $source
 *    
 *
 * @property array $dimensions
 *    
 *
 * @property boolean $sourceHeader
 *    
 *
 * @property dataset\Transform $transform
 *    
 *
 * @property integer $fromDatasetIndex
 *    
 *
 * @property string $fromDatasetId
 *    
 *
 * @property integer $fromTransformResult
 *    
 *
 * <p>ECharts 4 开始支持了 <code class="codespan">数据集</code>（<code class="codespan">dataset</code>）组件用于单独的数据集声明，从而数据可以单独管理，被多个组件复用，并且可以自由指定数据到视觉的映射。这在不少场景下能带来使用上的方便。</p>
 * <p>关于 <code class="codespan">dataset</code> 的详情，请参见<a href="https://echarts.apache.org/handbook/zh/concepts/dataset" target="_blank">教程</a>。</p>
 * 
 * {_more_}
 */
class Dataset extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}