<?php

class User_model extends Model
{
    private $table = "mahasiswa";
    
    function get_user()
    {
        
        $this->get($this->table);
        $users = $this->all();
        return $users;
    }

    function get_user_id($id)
    {
        $this->query("SELECT * FROM ".$this->table." WHERE _id=:_id");
        $this->bind("_id", $id);
        return $this->single();
        // return $user;
    }

}