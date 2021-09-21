<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\timeline;

use beyong\echarts\Property;

/**
 * @property boolean $show Default: true
 *    
 *
 * @property boolean $showPlayBtn Default: true
 *    
 *
 * @property boolean $showPrevBtn Default: true
 *    
 *
 * @property boolean $showNextBtn Default: true
 *    
 *
 * @property integer $itemSize Default: 24
 *    
 *
 * @property integer $itemGap Default: 12
 *    
 *
 * @property string $position Default: 'left'
 *    
 *
 * @property string $playIcon
 *    
 *
 * @property string $stopIcon
 *    
 *
 * @property string $prevIcon
 *    
 *
 * @property string $nextIcon
 *    
 *
 * @property string $color Default: '#A4B1D7'
 *    
 *
 * @property string $borderColor Default: '#A4B1D7'
 *    
 *
 * @property integer $borderWidth Default: 1
 *    
 *
 * @property string|integer|array $borderType Default: 'solid'
 *    
 *
 * @property integer $borderDashOffset Default: 0
 *    
 *
 * @property string $borderCap Default: 'butt'
 *    
 *
 * @property string $borderJoin Default: 'bevel'
 *    
 *
 * @property integer $borderMiterLimit Default: 10
 *    
 *
 * @property integer $shadowBlur
 *    
 *
 * @property string $shadowColor
 *    
 *
 * @property integer $shadowOffsetX Default: 0
 *    
 *
 * @property integer $shadowOffsetY Default: 0
 *    
 *
 * @property integer $opacity Default: 1
 *    
 *
 * 
 * 
 * {_more_}
 */
class ControlStyle extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}