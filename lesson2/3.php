<?php

interface GetArea
{
    public function getArea();
}

class Rectangle implements GetArea
{
    public function getArea()
    {
        return 10;
    }
}

class Square implements GetArea
{
    public function getArea()
    {
        return 20;
    }
}

class Obj3 implements GetArea
{
    public function getArea()
    {
        return 30;
    }
}


$square = new Obj3();

echo $square->getArea();
