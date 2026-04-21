<?php
/**
 * Created by cattong.
 * User: aronter@gmail.com
 * Date: 2020/12/23
 * Time: 15:30
 */
namespace beyong\echarts;


class Property implements \ArrayAccess, \JsonSerializable
{

    public $_options = array();

    public function __set($offset, $value)
    {
        return $this->offsetSet($offset, $value);
    }

    public function __get($offset)
    {
        return $this->offsetGet($offset);
    }

    //ArrayAccess4个接口实现
    public function offsetExists($offset): bool
    {
        return isset($this->_options[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        if (!$this->offsetExists($offset))
            $this->_options[$offset] = new self;

        return $this->_options[$offset];
    }

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset))
            $this->_options[] = $value;
        else
            $this->_options[$offset] = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->_options[$offset]);
    }

    //JsonSerializable的1个接口实现
    public function jsonSerialize(): mixed
    {
        if (count($this->_options) > 1) {
            unset($this->_options["_"]);
        }
        return $this->_options;
    }
}