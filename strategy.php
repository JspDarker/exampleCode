<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 10/09/2015
 * Time: 05:56
 */
interface OutputInterface
{

    public function load();
}

class SerializedArrayOutput implements OutputInterface
{
    private $arrayOfData;
    public function __construct(){
        $this->arrayOfData = range(1, 10);
        shuffle($this->arrayOfData);

    }
    public function load()
    {
        return serialize($this->arrayOfData);
    }
}

class JsonStringOutput implements OutputInterface
{
    private $arrayOfData;
    public function __construct(){
        $this->arrayOfData = range(1, 3);
        shuffle($this->arrayOfData);
    }
    public function load()
    {
        return json_encode($this->arrayOfData);
    }
}

class ArrayOutput implements OutputInterface
{
    private $arrayOfData;
    public function __construct(){
        $this->arrayOfData = range(1, 5);
        shuffle($this->arrayOfData);

    }
    public function load()
    {
        return $this->arrayOfData;
    }
    public function getName() {
        var_dump(__CLASS__);
    }
}
class SomeClient
{
    private $output;

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load();
    }
}
// TODO: abc
$client = new SomeClient();

// Want an array?
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput();
var_dump($data);

// Want some JSON?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput();
var_dump($data);
