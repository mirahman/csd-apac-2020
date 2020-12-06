<?php 

class Student {

    public function register()
    {
        echo "I must be registered to university office \n";
    }

    public function showID()
    {
        echo "I have an ID \n";
    }
}

class InternationalStudent extends Student {
    public function register()
    {
        parent::register();
        echo "i do not need to register \n";
    }
}

class VirtualStudent extends Student {
    public function showID()
    {
        parent::showID();
        echo "I do not need ID\n";
    }
}

$mizan = new Student();
$mizan->showID();
$mizan->register();