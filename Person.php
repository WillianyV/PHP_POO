<?php
class Person{
    //public - pode ser acessada em qualquer lugar
    //private - so pode ser acessada atraves desta classe
    //protected - so pode ser acessada atraves desta classe e por classes filhas, ou seja,
    //classes que herdam as propriedades delas
    protected $_name;
    const SPECIES = "Humana";

    public function __construct($_name)
    {
        $this->_name = $_name;
    }
    
    public function getName()
    {
        return $this->_name;
    }

    public function setName($_name)
    {
        $this->_name = $_name;
    }

}
?>