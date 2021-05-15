<?php

class UiElement
{
    protected $classNames;
    protected $children;
    protected $attrs;
    public $id;

    protected $attrString;
    protected $classString;
    protected $childrenString;
    protected $idString;

    protected function __construct() {
        $this->classNames = array();
        $this->children = "";
        $this->attrs = array();
        $this->id = "";

        $this->attrString = "";
        $this->classString = "";
        $this->childrenString = "";
        $this->idString = "";
    }

    public function setClassNames($classNames) {
        $this->classNames = $classNames;
    }

    protected function setChildren($children) {
        $this->children = $children;
    }

    public function setAttrs($attrs) {
        $this->attrs = $attrs;
    }

    protected function attrToString() {
        $string = "";
        foreach($this->attrs as $entry) {
            $string .= " ". $entry['property']. "=".$entry['value']." ";
        }
        
        return $string;
    }

    protected function getClassString() {
        $string = "";
        foreach($this->classNames as $entry) {
            $string .= " ". $entry;
        }
        
        return $string;
    }

    protected function getChildreString() {
        if(is_string($this->children)) {
            return $this->children;
        }

        if(is_array($this->children)) {
            $string = "";
            foreach($this->children as $child) {
                if($child instanceof UiElement) {
                    $string .= $child->render();
                } else if(is_string($child) || is_numeric($child)) {
                    return strval($child);
                }
            }
        }
        return "";
    }

    protected function getIdString() {
        if(is_string($this->id) && $this->id != "") {
            return " id='$this->id' ";
        }
        return "";
    }

    protected function render() {
        $this->attrString = $this->attrToString();
        $this->classString = $this->getClassString();
        $this->childrenString = $this->getChildreString();    
        $this->idString = $this->getIdString();

        return "";
    } 

    protected function echoRender() {
        echo $this->render();
    }
}