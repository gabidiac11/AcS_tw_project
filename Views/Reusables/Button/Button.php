<?php
require_once __DIR__."/../Interface/UiElement.php";

class Button extends UiElement
{

    public function __construct($children) 
    {
        parent::__construct();

        $this->children = $children;
    }

    protected function render() {
        parent::render();
        
        return "<button $this->idString class='simple-button $this->classString' $this->attrString>
                    $this->childrenString
                </button>";     
    } 

    public function echoRender() {
        echo $this->render();
    }
}
