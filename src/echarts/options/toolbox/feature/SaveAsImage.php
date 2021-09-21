<?php
/**
 * Created by php-echarts AutoGenerate.
 * @author: cattong <aronter@gmail.com>
 */

namespace beyong\echarts\options\toolbox\feature;

use beyong\echarts\Property;

/**
 * @property string $type Default: 'png'
 *    
 *
 * @property string $name
 *    
 *
 * @property string $backgroundColor Default: 'auto'
 *    
 *
 * @property string $connectedBackgroundColor Default: '#fff'
 *    
 *
 * @property array $excludeComponents Default: '[\'toolbox\']'
 *    
 *
 * @property boolean $show Default: true
 *    
 *
 * @property boolean $title Default: '保存为图片'
 *    
 *
 * @property string $icon
 *    
 *
 * @property saveasimage\IconStyle $iconStyle
 *    
 *
 * @property saveasimage\Emphasis $emphasis
 *    
 *
 * @property integer $pixelRatio Default: 1
 *    
 *
 * 
 * 
 * {_more_}
 */
class SaveAsImage extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}