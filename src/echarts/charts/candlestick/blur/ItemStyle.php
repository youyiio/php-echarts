<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\candlestick\blur;

use beyong\echarts\Property;

/**
 * @property string $color
 *    
 *
 * @property string $color0
 *    
 *
 * @property string $borderColor
 *    
 *
 * @property string $borderColor0
 *    
 *
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
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