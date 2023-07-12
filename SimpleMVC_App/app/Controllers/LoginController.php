<?php

class Login
{
    use Controller;

    public function index()
    {
        if (!empty($_SESSION['USER']))
                redirect('admin');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User;
            $arr['login'] = $_POST['login'];
            $row = $user->first($arr);

            if ($row) {
                if ($row->password === $_POST['password']) {
                    $_SESSION['USER'] = $row;
                    redirect('admin');
                }
            }
            $user->errors['email'] = "Wrong login or password";

            $data['errors'] = $user->errors;
        }

        if (isset($data))
            $this->view('login', $data);
        else
            $this->view('login');
    }
}
