<?php
    
    class Developer extends Person{
        private $_language;

        public function __construct($_name, $_language)
        {
            $this->_name = $_name;
            $this->_language = $_language;
            echo "O Objeto ".__CLASS__." foi instanciado com sucesso <br/>";
        }

        public function getLanguage()
        {
            return $this->_language;
        }

        public function setLanguage($_language)
        {
            $this->_language = $_language;
        }
        

    }

?>