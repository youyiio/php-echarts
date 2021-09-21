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
 * @property boolean $title Default: '数据视图'
 *    
 *
 * @property string $icon
 *    
 *
 * @property array $iconStyle
 *    
 *
 * @property dataview\Emphasis $emphasis
 *    
 *
 * @property boolean $readOnly Default: false
 *    
 *
 * @property callable $optionToContent
 *    
 *
 * @property callable $contentToOption
 *    
 *
 * @property array $lang Default: '[\'数据视图\', \'关闭\', \'刷新\']'
 *    
 *
 * @property string $backgroundColor Default: '#fff'
 *    
 *
 * @property string $textareaColor Default: '#fff'
 *    
 *
 * @property string $textareaBorderColor Default: '#333'
 *    
 *
 * @property string $textColor Default: '#000'
 *    
 *
 * @property string $buttonColor Default: '#c23531'
 *    
 *
 * @property string $buttonTextColor Default: '#fff'
 *    
 *
 * 
 * 
 * {_more_}
 */
class DataView extends Property {

    public function __construct($array=[])
    {
        empty($array) && $array=['_'=>''];
        $this->_options = array_merge([], $array);
    }
}