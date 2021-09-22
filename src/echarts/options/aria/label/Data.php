<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\aria\label;

use beyong\echarts\Property;

/**
 * @property integer $maxCount Default: 10
 *    
 *
 * @property string $allData Default: '其数据是——'
 *    
 *
 * @property string $partialData Default: '其中，前{displayCnt}项是——'
 *    
 *
 * @property string $withName Default: '{name}的数据是{value}'
 *    
 *
 * @property string $withoutName Default: '{value}'
 *    
 *
 * @property array $separator
 *    
 *
 * 
 * 
 * {_more_}
 */
class Data extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}