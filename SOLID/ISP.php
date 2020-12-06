<?php 

interface StudentInterface {
    public function showID();
    public function showGradeReport();
}

interface FacultyInterface {
    public function getSalary();
    public function setGrade();
}

class Student implements StudentInterface {
    public function showID() {

    }
    public function showGradeReport() {

    }
}

class Faculty implements FacultyInterface {
    public function getSalary() {

    }
    public function setGrade() {
        
    }
}