<?php
namespace school;

class Course{
    public int $id;
    public static int $inc=0;
    public String $name;

    public function __construct($name)
    {
        $this->id = ++self::$inc;
        $this->name = $name;
    }
}