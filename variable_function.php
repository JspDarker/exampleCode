<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 06/09/2015
 * Time: 15:44
 */
//http://php.net/language.types.callable

function foo() {
    echo "run func foo()\n";
}

function bar($arg) {
    echo "run func bar() with param [{$arg}]\n";
}

//$foo = 'foo';
//$foo();
//
//$bar = 'bar';
//$bar(100);

class Foo {
    private $name = "Dat.Dao";
    public function printName($m, $n = 1) {
        var_dump($m, $n);
        for($i = 0; $i < $n; $i++) {
            echo "my name is {$this->name}\n";
        }

    }
}

class MyClass {

    public $property = 'Hello World!';

    public function MyMethod()
    {
        call_user_func(array($this, 'myCallbackMethod'));
    }

    public function MyCallbackMethod()
    {
        echo $this->property;
    }

}

$f1 = new Foo;
$fun = 'printName';
//$f1->$fun(2);

$obj = 'Foo';
//$fun2 = array(new $obj, 'printName');
//$fun2();

call_user_func(array(new $obj, 'printName'), 2, 3);