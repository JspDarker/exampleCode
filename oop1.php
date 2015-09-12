<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 12/09/2015
 * Time: 11:27
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");
error_log( "Hello, errors!" );
//run command: tail -f /tmp/php-error.log
if (php_sapi_name() == "cli") {
    // In cli-mode
    var_dump($argc); //count input by CLI
    var_dump($argv);//array list inputs by CLI
}

$obj = (object) array('foo' => 'bar', 'property' => 'value');

echo $obj->foo; // prints 'bar'
echo $obj->property; // prints 'value'

class ClassA {
    public $name = "this is value of variable 'name'.";
    public function getName() {
        return "call method getName() in ClassA";
    }
}
function someThing($v1, $v2) {
    var_dump($v1, $v2);
    return "getName";
}
$a = new ClassA();
$var = 'name';
$varMethod = 'getName';
var_dump($a->$var);
var_dump($a->$varMethod());
var_dump($a->{someThing(1,2)}());

die;
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

