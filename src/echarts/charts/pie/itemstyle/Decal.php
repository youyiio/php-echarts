<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\charts\pie\itemstyle;

use beyong\echarts\Property;

/**
 * @property string|array $symbol Default: 'rect'
 *    
 *
 * @property integer $symbolSize Default: 1
 *    
 *
 * @property boolean $symbolKeepAspect Default: true
 *    
 *
 * @property string $color Default: 'rgba(0, 0, 0, 0.2)'
 *    
 *
 * @property string $backgroundColor
 *    
 *
 * @property integer|array $dashArrayX Default: 5
 *    
 *
 * @property integer|array $dashArrayY Default: 5
 *    
 *
 * @property integer $rotation Default: 0
 *    
 *
 * @property integer $maxTileWidth Default: 512
 *    
 *
 * @property integer $maxTileHeight Default: 512
 *    
 *
 * 
 * 
 * {_more_}
 */
class Decal extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}