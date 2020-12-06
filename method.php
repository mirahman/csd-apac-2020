<?php 

function A()
{
    static $i = 1;
    echo "A is called : ".$i." times \n";
    $i++;
}

function B()
{
    static $i = 1;
    echo "B is called : ".$i." times \n";
    $i++;
}

function C()
{
    static $i = 1;
    echo "C is called : ".$i." times \n";
    $i++;
}


A();
B();
A();
B();
C();
A();
B();
C();
A();
B();