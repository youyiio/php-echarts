<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\effectscatter;

use beyong\echarts\Property;

/**
 * @property string $color
 *    
 *
 * @property integer $number Default: 3
 *    
 *
 * @property integer $period Default: 4
 *    
 *
 * @property double $scale Default: '2.5'
 *    
 *
 * @property string $brushType Default: 'fill'
 *    
 *
 * 
 * 
 * {_more_}
 */
class RippleEffect extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}