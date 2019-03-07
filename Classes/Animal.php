<?php

abstract class Animal{

    protected $idAnimal;

    /**
     * @return mixed
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }//getIdAnimal

    public function setIdAnimal($id){

        if($id>0){
            $this->idAnimal = $id;
        }//if
        else{
            echo "Идентификатор животного не может быть отрицательным и равным 0";
        }//else

    }//setIdAnimal

}//Animal