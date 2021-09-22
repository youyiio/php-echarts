<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\aria\label\series;

use beyong\echarts\Property;

/**
 * @property string $prefix Default: '它由{seriesCount}个图表系列组成。'
 *    
 *
 * @property string $withName Default: '图表类型是{seriesType}，表示{seriesName}。'
 *    
 *
 * @property string $withoutName Default: '图表类型是{seriesType}。'
 *    
 *
 * @property array $separator
 *    
 *
 * 
 * 
 * {_more_}
 */
class Multiple extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}