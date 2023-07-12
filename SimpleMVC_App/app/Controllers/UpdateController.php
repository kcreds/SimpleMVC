<?php

class Update
{
    use Controller;

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = new Article;
            $id = $_POST['id'];
            if ($post->validate($_POST)) {
                $post->update($id, $_POST);
                redirect('admin');
            }

            $data['errors'] = $post->errors;
            $arr['id'] = $_POST['id'];
            $data = $post->where($arr);
            $this->view('edit', $data);
        }
    }
}
