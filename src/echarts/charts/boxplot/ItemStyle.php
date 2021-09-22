<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\boxplot;

use beyong\echarts\Property;

/**
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
 *    
 *
 * @property array $decal
 *    
 *
 * 
 * 
 * {_more_}
 */
class ItemStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}