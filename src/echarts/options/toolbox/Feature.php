<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox;

use beyong\echarts\Property;

/**
 * @property array $saveAsImage
 *    
 *
 * @property array $restore
 *    
 *
 * @property array $dataView
 *    
 *
 * @property array $dataZoom
 *    
 *
 * @property array $magicType
 *    
 *
 * @property array $brush
 *    
 *
 * 
 * 
 * {_more_}
 */
class Feature extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}