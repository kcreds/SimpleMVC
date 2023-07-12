<?php

class Article
{
    use Model;

    protected $table = 'articles';
    protected $allowedColumns = [
        'name',
        'description',
    ];

    public function validate($data)
    {
        $this->errors = [];

        if(empty($data['name']))
        {
            $this->errors['name']= "Name is required";
        }
        if(empty($data['description']))
        {
            $this->errors['description']= "Description is required";
        }
        if(empty($this->errors)){
            return true;
        }
        return false;
    }
}
