<?php

class Mahasiswa_model extends Model
{
    private $table = "mahasiswa";

    function get_students()
    {
        $this->get($this->table);
        $students = $this->all();

        return $students;
    }

    function get_user_id($id)
    {
        $this->query("SELECT * FROM $this->table WHERE _id=:id");
        $this->bind("id", $id);
        return $this->single();

    }
}