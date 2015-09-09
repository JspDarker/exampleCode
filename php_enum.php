<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 10/09/2015
 * Time: 05:30
 */

//good
class UserStates {
    const USER = 1;
    const MOD = 2;
    const ADMIN = 3;
}

class MyClassA extends UserStates{
    public function __construct() {
        var_dump(__CLASS__);
        var_dump(self::ADMIN);
    }
}

//very good
interface DayOfWeek {
    const MONDAY =  1;
    const SUNDAY = 2;
    //....
}

class MyClassB implements DayOfWeek {
    public function __construct() {
        var_dump(__CLASS__);
        var_dump(self::MONDAY);
    }
}

$a = new MyClassA();
$b = new MyClassB();