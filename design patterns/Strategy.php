<?php

interface OutputInterface
{
    public function load($data);
}

class SerializedArrayOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return serialize($arrayOfData);
    }
}

class JsonStringOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return json_encode($arrayOfData);
    }
}

class ArrayOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return $arrayOfData;
    }
}

class XMLOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return arrayToXML($arrayOfData);
    }
}


class APIClient
{
    private $output;
    public $data;

    public function __construct()
    {
        $this->data = []; // get data from client
    }
    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load($this->data);
    }
}

$client = new APIClient();

// Want an array?
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput();

// Want some JSON?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput();


$client->setOutput(new XMLOutput());
$data = $client->loadOutput();