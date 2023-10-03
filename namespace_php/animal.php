<?php

include_once("cat.php");
include_once("dog.php");
include_once("cow.php");
use animals\Cat;
use cowcow\myegg;
use dogdog\Dog;
use dogdog\myinfo;

 $dog= new Dog();
 $dog->greets();

 $cat= new Cat();
 $cat->greets();

 $myinfo= new myinfo();
 $myinfo->myfun();
 
 $cow = new myegg();
 $cow->mycow();