<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox;

use beyong\echarts\Property;

/**
 * @property feature\SaveAsImage $saveAsImage
 *    
 *
 * @property feature\Restore $restore
 *    
 *
 * @property feature\DataView $dataView
 *    
 *
 * @property feature\DataZoom $dataZoom
 *    
 *
 * @property feature\MagicType $magicType
 *    
 *
 * @property feature\Brush $brush
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