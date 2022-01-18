<!-- /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */ -->

<?php
class Person {
    private $name;
    private $surname;
    private $dateOfBir;

    // setter/getter
    public function getname(){
        return $this -> name;
    }

    public function setName($name){
        $this -> name = $name;
    }

    public function getsurname(){
        return $this -> surname;
    }

    public function setsurname($surname){
        $this -> surname = $surname;
    }

    public function getdateOfBir(){
        return $this -> dateOfBir;
    }

    public function setdateOfBir($dateOfBir){
        $this -> dateOfBir = $dateOfBir;
    }
    // setter/getter

    // construct
    public function __construct($name, $surname){
        $this -> setName($name);
        $this -> setSurname($surname);
    }

    public function printFullPerson(){
        
        return $this -> getName() . " " . $this -> getSurname() 
        . ($this -> getdateOfBir() ? ": " . $this -> getdateOfBir() . "<br>": "");

        // return $this -> getName() . " "
        // . $this -> getSurname() . ": "
        // . $this -> getdateOfBir()
        // . "<br>";

    }

    public function __toString(){
        return $this -> printFullPerson();

    }

    
}

class Employee extends Person{
    private $salary;
    private $dateOfHiring;

    // setter/getter
    public function getSalary(){
        return $this -> salary;
    }

    public function setSalary($salary){
        $this -> salary = $salary;
    }

    public function getdateOfHiring(){
        return $this -> dateOfHiring;
    }

    public function setdateOfHiring($dateOfHiring){
        $this -> dateOfHiring = $dateOfHiring;
    }
    // setter/getter

    
    public function __construct($name, $surname, $salary){
        parent::__construct($name, $surname);
        $this -> setSalary($salary);
    }

    public function printFullEmployee(){

        if($this -> getdateOfHiring())
        return parent::printFullPerson() . ": "
        . $this -> getSalary() . " "
        . "(" . $this -> getdateOfHiring() . ")" . "<br>";

        // return $this -> getName() . " "
        // . $this -> getSurname() . ": "
        // . $this -> getSalary()
        // . "(" . $this -> getdateOfHiring() . ")"
        // . "<br>";
    }
}

$person1 = new Person("Maurizio", "Proietto");

$person1 -> setdateOfBir("09/07/1997");

$person1Emp = new Employee($person1 -> getName(), $person1 -> getSurname(), "1500 euro");

$person1Emp -> setdateOfHiring("01/01/2020");

echo $person1;

echo "<br>-----------------------------<br><br>";

echo $person1Emp -> printFullEmployee();
?>