<?php

class Edit
{
    use Controller;

    public function index()
    {
        $post = new Article;
        $arr['id'] = $_POST['id'];
        $data = $post->where($arr);

        $this->view('edit', $data);
    }
}
