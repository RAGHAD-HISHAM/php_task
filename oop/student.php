<?php

class students {
    protected $name;
    protected $age ;
    protected $studentID ;


    public function __construct($name,$age,$studentID){
        $this->name = $name;
        $this->age = $age ;
        $this->studentID = $studentID;
    }
    public function __destruct(){
       echo "the student was destroyed. \n" ;
    } 

    public function getDetails(){
        echo "this student ID{$this->studentID} belong to {$this->name} ,and he/she is {$this->age} years old";
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    } 
    public function setID($studentID) {
        $this->studentID = $studentID;
    }
    public function getID(){
        return $this->studentID;
    }
}

class classroom{
    public $student=[];

    public function addStu(students $student) {
        $this->student[$student->getID()] = $student;
    }
    public function removeStu($studentID) {
        if (isset($this->student[$studentID])) {
            unset($this->student[$studentID]);
            echo "Student with ID '{$studentID}' removed from classroom.\n";
        } 
        else {
            echo "Student with ID '{$studentID}' not found in classroom.\n";
        }
    }
    public function listStu() {
        foreach ($this->student as $student) {
            echo $student->getDetails() . "\n";
        }
    }

}

$student1 = new students("raghad", 22, "111");
$student2 = new students("kenan", 10, "222");
$student3 = new students("raya", 19, "333");

$classroom1 = new Classroom();

$classroom1->addStu($student1);
$classroom1->addStu($student2);

//before remove
$classroom1->listStu(); 
$classroom->removeStu("222");

//after remove
$classroom->listStu(); 



?>
