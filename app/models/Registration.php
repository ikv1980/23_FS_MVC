<?php
    class Registration {

        public function __construct() {
//            echo 'Создание объекта';
        }

        public function registration() {
            $data = [];
            // Если передаются данные методом POST, то добавляем их в массив
            if(isset($_POST['login'])) {
                $data['login'] = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
                $data['email'] = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
            }
            // Возвращаем массив полученных данных обратно в контроллер
            return $data;

            //$this->view('user/index', $data);

        }
    }