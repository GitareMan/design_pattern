<?php 

class DeniedStat extends State 
{
    public function __construct(Document $doc)
    {
        parent::__construct($doc);
    }


    public function __toString()
    {
        return "Denied";
    }

}