<?php
/**
 * Created by PhpStorm.
 * User: dedub
 * Date: 5/20/2018
 * Time: 9:41 PM
 */

class Person
{
    public $firstname;

    public function SayHello()
    {
        echo "Hello" .  $this->firstname;

    }
}

$myPerson = new Person();

$myPerson ->firstname ="Anand";

echo "Person Name : ". $myPerson->firstname;

echo "Say". $myPerson->SayHello();

echo 'Say Sereto Branch';