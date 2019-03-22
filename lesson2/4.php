<?php

class CatalogController
{
    protected $encoder;

    public function __construct(Encoder $encoder)
    {
        $this->encoder = $encoder;
    }

    public function renderData(array $data)
    {
        return $this->encoder->encode();
    }
}

interface Encoder
{
    public function encode($data);
}

class JsonEncoder implements Encoder
{
    public function encode($data)
    {
        return json_encode($data);
    }
}

class XmlEncoder implements Encoder
{
    public function encode($data)
    {
        return 'XML HERE';
    }
}


$data = [
    'qwe' => 'asd',
    'asd' => [1, 2, 3],
    'lable' => [
        'type' => 'text',
        'value' => 'GVS'
    ]
];

$encoder = new JsonEncoder();
$controller = new CatalogController($encoder);
echo $controller->renderData($data, $encoder);

