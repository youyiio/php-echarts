<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\parallelaxis;

use beyong\echarts\Property;

/**
 * @property integer $width Default: 20
 *    
 *
 * @property integer $borderWidth Default: 1
 *    
 *
 * @property string $borderColor Default: 'rgba(160,197,232)'
 *    
 *
 * @property string $color Default: 'rgba(160,197,232)'
 *    
 *
 * @property double $opacity Default: '0.3'
 *    
 *
 * 
 * 
 * {_more_}
 */
class AreaSelectStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}