<?php 
require_once 'states/ReviewState.php';

abstract class State 
{
    protected $doc;
    protected $oldState;

    public function __construct(Document $doc)
    {
        $this->doc = $doc;
    }

    public function onEnterState($oldState)
    {
        echo $this->oldState, ' -> ', $this, '<br>';
    }

    public function verify(){}
    public function approve(){}
    public function deny(){}


}

