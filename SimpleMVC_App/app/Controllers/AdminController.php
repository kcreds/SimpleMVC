<?php

class Admin
{
    use Controller;
    
    public function index()
    {
        $post = new Article;
        $data = $post->findAll();
        $this->view('admin', $data);
    }

}
