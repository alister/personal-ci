<?php
namespace ProjectName;

class Example
{
    private $variable;

    public function getVariable()
    {
        $unused = true;
        return $this->variable;
    }

    public function setVariable($newValue)
    {
        return $this->variable = $newValue;
    }

    /**
     * isVariableSet description
     * 
     * @return boolean [description]
     * @todo  a note for the future
     */
    function isVariableSet()
    {
        return isset($this->variable);
    }
}
