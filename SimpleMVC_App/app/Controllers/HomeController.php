<?php

class Home
{
    use Controller;

    public function index()
    {
        $session['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->login;
        $post = new Article;
        $data = $post->findAll();
        $this->view('home', $data, $session);
    }
}
