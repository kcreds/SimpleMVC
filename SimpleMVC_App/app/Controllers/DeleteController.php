<?php

class Delete
{
    use Controller;

    public function index()
    {

        $post = new Article;
        $id = $_POST['id'];
        $post->delete($id);

        redirect('admin');
    }
}
