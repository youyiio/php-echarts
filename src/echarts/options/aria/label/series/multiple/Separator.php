<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\aria\label\series\multiple;

use beyong\echarts\Property;

/**
 * @property string $middle Default: '；'
 *    
 *
 * @property string $end Default: '。'
 *    
 *
 * 
 * 
 * {_more_}
 */
class Separator extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}