<?php namespace App\Controllers;

class Helloworld extends BaseController {

    public function index($name, $npm)
    {
        //echo $this->name;
        echo $name ."<br>";
        echo $npm ."<br>";
        //echo "Hello Atika";
    }

    public function show()
    {
        echo "Atika Indah";
        echo "1857051009";
    }
}