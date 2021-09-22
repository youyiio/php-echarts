<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\aria\label\series;

use beyong\echarts\Property;

/**
 * @property string $prefix Default: ''
 *    
 *
 * @property string $withName Default: '图表类型是{seriesType}，表示{seriesName}。'
 *    
 *
 * @property string $withoutName Default: '图表类型是{seriesType}。'
 *    
 *
 * 
 * 
 * {_more_}
 */
class Single extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}