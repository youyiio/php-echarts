<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property boolean $title Default: '还原'
 *    
 *
 * @property string $icon
 *    
 *
 * @property restore\IconStyle $iconStyle
 *    
 *
 * @property restore\Emphasis $emphasis
 *    
 *
 * 
 * 
 * {_more_}
 */
class Restore extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}