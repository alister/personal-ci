<?php
namespace ProjectName;

class Example
{
    private $variable;

    function getVariable()
    {
        return $this->variable;
    }

    function setVariable($newValue)
    {
        return $this->variable = $newValue;
    }

    function isVariableSet()
    {
        return isset($this->variable);
    }
}
