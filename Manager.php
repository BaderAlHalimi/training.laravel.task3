<?php

namespace school;

use school\Student as Student;
class Manager
{
    use loggable;
    public $Students = array();
    public function addStudent($student)
    {
        $this->Students[] = $student;
        self::$id = $student->id;
        self::$operation = 'Add()';
        self::run();
    }
    public function retrieveStudent($id)
    {
        foreach ($this->Students as $value) {
            if ($value->id == $id) {
                self::$id = $id;
                self::$operation = 'retrive()';
                self::run();
                return $value;
            }
        }
    }
    public function updateStudent($id, $name, $email)
    {
        foreach ($this->Students as $key=>$value) {
            if ($value->id == $id) {
                $value->name = $name;
                $value->email = $email;
                self::$id = $id;
                self::$operation = 'Update()';
                self::run();
                return "Updated Successfully!";
            }
        }
    }
    public function deleteStudent($id)
    {
        foreach ($this->Students as $key => $value) {
            if ($value->id == $id) {
                self::$id = $value->id;
                self::$operation = 'Delete()';
                self::run();
                unset($this->Students[$key]);
                return "Deleted Successfully!";
            }
        }
    }
}

trait Loggable
{
    public static $id;
    public static $operation;
    public function run()
    {
        file_put_contents('log.txt', 'Student id: ' . self::$id . ' || -> Operation: ' . self::$operation . ' || Time: ' . date("Y/m/d h:i:s") . "\n", FILE_APPEND);
    }
}
