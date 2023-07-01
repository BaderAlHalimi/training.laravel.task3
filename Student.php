<?php
namespace school;
use \school\Course as Course;

class Student{
    public readonly int $id;
    public static $inc = 0;
    public string $name;
    public $email;
    public $courses;
    public function __construct($name,$email,$courses = array())
    {
        $this->id = ++self::$inc;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
    }

    public function addCourse(Course $course)
    {
        $this->courses[] = $course;
    }

    public function __toString()
    {
        return 'id: ' . $this->id . ' name: ' . $this->name . ' email: ' . $this->email;
    }
}