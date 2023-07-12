<?php

class Add
{
    use Controller;

    
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = new Article;
            if ($post->validate($_POST)) {
                $post->insert($_POST);
                redirect('admin');
            }

            $data['errors'] = $post->errors;

            $this->view('add', $data);
        }
        if(isset($data))
            $this->view('add',$data);
        else
            $this->view('add');
    }
}
