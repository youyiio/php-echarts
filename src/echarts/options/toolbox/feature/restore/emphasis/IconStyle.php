<?php
/**
 * Created by php-echarts library.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature\restore\emphasis;

use beyong\echarts\Property;

/**
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
 *    
 *
 * @property string $textBackgroundColor
 *    
 *
 * @property integer $textBorderRadius
 *    
 *
 * @property integer $textPadding
 *    
 *
 * 
 * 
 * {_more_}
 */
class IconStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}