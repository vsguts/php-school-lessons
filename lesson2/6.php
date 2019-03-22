<?php

interface LoggerInterace
{
    public function error($msg, $data);
}

abstract class AbstractLogger implements LoggerInterace
{
    public function error($msg, $data)
    {
        $string = $this->prepareString($msg, $data);
        $this->saveString($string);
    }

    protected function prepareString($msg, $data) : string
    {
        //
    }

    abstract protected function saveString($string);
}

class FileLogger extends AbstractLogger
{
    protected function saveString($string)
    {
        $file->write($string);
    }
}

class DbLogger extends AbstractLogger
{
    protected function saveString($string)
    {
        $db->write($string);
    }
}

