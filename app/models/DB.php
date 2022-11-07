<?php
// класс для подключения к БД
class DB {
    // 1. Создание статической переменной
    private static $_db = null;

    // 2. Метод на основе статической переменной
    public static function getInstanse() {
        if(self::$_db == null) {
            // если переменная путсая - устанавливаем параметры подключение к БД
            $user = 'root';
            $password = 'root';
            $db = 'web-blog';
            $host = 'localhost';
            $port = 3306;
            $dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port;
            self::$_db = new PDO($dsn, $user, $password);
        // возвращаем статичную переменную
        return self::$_db;
        }
    }

    // запрет создания объектов на основе данного класса (модификатор private)
    // доступ к конструктору запрещен
    private function __construct() {}
    // клонирование объекта зхапрещено
    private function __clone() {}
    // срабатывает при восстановлении данных
    private function __wakeup() {}
}