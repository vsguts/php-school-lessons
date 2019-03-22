<?php

abstract class AbstractLogger
{
    abstract public function error($msg, $data);

    protected function prepareString($msg, $data) : string
    {
        //
    }
}

class FileLogger extends AbstractLogger
{
    public function error($msg, $data)
    {
        $string = $this->prepareString($msg, $data);
        $file->write($string);
    }
}

class DbLogger extends AbstractLogger
{
    public function error($msg, $data)
    {
        $string = $this->prepareString($msg, $data);
        $file->write($string);
    }
}
