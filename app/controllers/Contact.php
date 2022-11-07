<?php
    class Contact extends Controller {
        public function index($firstParameter = '', $number = '') {
            echo 'contact index - ' . $firstParameter . ' - ' . $number;
        }

        public function about() {
            echo "Метод 'about' контроллера 'Contact' существует";
        }
    }