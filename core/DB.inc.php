<?php
    class DB
    {
        protected $pdo;

        public function __construct($user, $pass, $server, $dbname)
        {
            $dsn = "mysql:dbname={$dbname};host={$server}";
            $this->pdo = new PDO($dsn, $user, $pass);
        }
    }