<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 07.03.2019
 * Time: 16:14
 */


class Chicken extends Animal implements IProduction
{
    public function __construct($id)
    {
        parent::setIdAnimal($id);
    }//construct

    public function getProduction()
    {
        return rand(0, 1);
    }//getProduction
}//Chicken