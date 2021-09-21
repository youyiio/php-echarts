<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\graph;

use beyong\echarts\Property;

/**
 * @property string $initLayout
 *    
 *
 * @property array|integer $repulsion Default: 50
 *    
 *
 * @property double $gravity Default: '0.1'
 *    
 *
 * @property array|integer $edgeLength Default: 30
 *    
 *
 * @property boolean $layoutAnimation Default: true
 *    
 *
 * @property double $friction Default: '0.6'
 *    
 *
 * 
 * 
 * {_more_}
 */
class Force extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}