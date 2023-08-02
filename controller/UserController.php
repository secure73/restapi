<?php

class UserController
{
    public function hello($name = null)
    {
        return "Hello Dear User. you name is ".$name;
    }
}