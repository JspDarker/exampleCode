<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 13/09/2015
 * Time: 22:59
 */
//overloading
class OverLoading {
    private $data = array();
    public function __set($name, $value) {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }
    /**  As of PHP 5.1.0  */
    public function __isset($name)
    {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }

    /**  As of PHP 5.1.0  */
    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }
}

$a = new OverLoading();
$a->name = "Dat";
$a->id = 100;
var_dump($a);
var_dump($a->name);
var_dump($a->id);

var_dump(isset($a->id));
unset($a->id);
var_dump(isset($a->id));
$a->runTest('in object context', "tow");