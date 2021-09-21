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
 * @property integer $zlevel Default: 0
 *    
 *
 * @property integer $z Default: 2
 *    
 *
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    
 *
 * @property integer|string|array $radius
 *    
 *
 * @property polar\Tooltip $tooltip
 *    
 *
 * <p>极坐标系，可以用于散点图和折线图。每个极坐标系拥有一个<a href="#angleAxis">角度轴</a>和一个<a href="#radiusAxis">半径轴</a>。</p>
 * <p><strong>示例：</strong></p>
 * <iframe  data-src="https://echarts.apache.org/examples/zh/view.html?c=scatter-polar-punchCard&edit=1&reset=1" width="600" height="400"></iframe>
 * 
 * {_more_}
 */
class Polar extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}