<?php

interface DataProvider
{
    public function getData();
}

class Mysql implements DataProvider
{
    public function getData()
    {
        return 'some data from database';
    }
}
class Controller
{
    private DataProvider $adapter;

    public function __construct(DataProvider $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getData()
    {
        return $this->adapter->getData();
    }
}

$mysql = new Mysql();
$controller = new Controller($mysql);
echo $controller->getData();

?>