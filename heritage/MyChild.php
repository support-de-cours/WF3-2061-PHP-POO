<?php 

class MyChild extends MyParent
{
    public function getChildLastname()
    {
        return $this->lastname;
    }

    // public function getLastname()
    // {
    //     return 42+6;
    // }
}