<?php
    class Home extends Controller {
        public function index($name = '') {
            // по переданному первому параметру вызываем необходимую модель
            // вызываем метод model из контроллера Controller
            $user = $this->model("User");
            $user->name = $name;
            $user->getInfo();

            $this->view(
                'home/index',
                ['name' => $user->name, 'test' => 'Hello world']
            );
        }

        public function about() {
            echo "Метод 'about' контроллера 'User' существует";
        }
    }