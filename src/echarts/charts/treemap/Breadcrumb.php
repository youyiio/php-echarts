<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\treemap;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property string|integer $left Default: 'center'
 *    
 *
 * @property string|integer $top Default: 'auto'
 *    
 *
 * @property string|integer $right Default: 'auto'
 *    
 *
 * @property string|integer $bottom Default: 0
 *    
 *
 * @property integer $height Default: 22
 *    
 *
 * @property integer $emptyItemWidth Default: 25
 *    
 *
 * @property array $itemStyle
 *    
 *
 * @property breadcrumb\Emphasis $emphasis
 *    
 *
 * 
 * 
 * {_more_}
 */
class Breadcrumb extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}