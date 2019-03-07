<?php

class Cow extends Animal implements IProduction
{
    public function __construct($id)
    {
        parent::setIdAnimal($id);
    }//construct

    public function getProduction()
    {
        return rand(8, 12);
    }//getProduction
}//Cow