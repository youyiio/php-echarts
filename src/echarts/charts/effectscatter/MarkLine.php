<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\effectscatter;

use beyong\echarts\Property;

/**
 * @property string|array $symbol
 *    
 *
 * @property integer|array $symbolSize
 *    
 *
 * @property array $label
 *    
 *
 * @property array $lineStyle
 *    
 *
 * @property markline\Emphasis $emphasis
 *    
 *
 * @property markline\Blur $blur
 *    
 *
 * @property markline\Data $data
 *    
 *
 * 
 * 
 * {_more_}
 */
class MarkLine extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}