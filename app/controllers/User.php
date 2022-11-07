<?php
    class User extends Controller {
        private $data = [];

        public function index()
        {
            $this->view(
                'user/index',
                ['title' => 'Форма регистрации']
            );
        }

        public function reg() {
            $data = [];

            //создаем объект на основе модели "Registration" и получаем данные методом POST
            $reg = $this->model("Registration");
            $data = $reg->registration();

            // если данные получены, то заполняем массив данными
            if(isset($data['login'])) {
                $data['head'] = '<b>Данные полученные от пользователя</b>';
                $data['login'] = '<b>Логин:</b> '.$_POST['login'];
                $data['email'] = '<b>Email:</b> '.$_POST['email'];
            }

            // выводим данные в представление
            $this->view(
                'user/index',
                [
                    'title' => 'Форма регистрации',
                    'head' => $data['head'],
                    'login' => $data['login'],
                    'email' => $data['email']
                ]
            );
        }

        public function about() {
            echo "Метод 'about' контроллера 'User' существует";
        }
    }