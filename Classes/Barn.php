<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 07.03.2019
 * Time: 16:24
 */

class Barn
{
    private $animals = [];

    public function __construct()
    {
        for ($i=1; $i<11; $i++ ){
            $currentCow = new Cow($i);
            array_push($this->animals,$currentCow);
        }//for

        for ($i=11; $i<21; $i++ ){
            $currentChicken = new Chicken($i);
            array_push($this->animals, $currentChicken);
        }//for
    }// __construct

    public function getAnimals(){
        return $this->animals;
    }//getAnimals

    public function GetAnimalProduction(IProduction $production){
        return $production->getProduction();
    }//GetProduction

    public function GetAllProduction(){

        $eggs=0;
        $milk=0;

        foreach ($this->animals as $animal){

            if(is_a($animal, 'Cow') ){
                $milk+=$this->GetAnimalProduction($animal);
            }//if

            if(is_a($animal, 'Chicken') ){
                $eggs+=$this->GetAnimalProduction($animal);
            }//if
        }//foreach

        echo "Общее кол-во яиц: $eggs. Общее кол-во молока: $milk";
    }//GetAllProduction

}//Barn