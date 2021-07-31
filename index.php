<?php
require "Connect_DB.php";
require "Connect_site.php";
require "Person.php";
require "Developer.php";

$_person = new Person("Wiliany");
echo $_person->getName();

echo "<br/>";

$_developer = new Developer("Veras","HTML, CSS, PHP");
echo $_developer->getName(); 
echo "<br/>";
echo $_developer->getLanguage();
echo "<br/>";
#chmanda de constante
echo $_developer::SPECIES;

ConnectDB\connect();
ConnectSite\connect();

?>