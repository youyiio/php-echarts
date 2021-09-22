<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\visualmapcontinuous;

use beyong\echarts\Property;

/**
 * @property integer $lineHeight
 *    
 *
 * @property integer $width
 *    
 *
 * @property integer $height
 *    
 *
 * @property string $textBorderColor
 *    
 *
 * @property integer $textBorderWidth
 *    
 *
 * 
 * 
 * {_more_}
 */
class TextStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}