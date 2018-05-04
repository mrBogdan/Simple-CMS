<?php

    require_once ROOT . '/config/config.inc.php';

    class Core
    {
        private static $instance;
        private $db;

        private function __construct()
        {
            session_start();
            $this->db = new DB(DATABASE_USERNAME, DATABASE_PASS, DATABASE_SERVER, DATABASE_NAME);
        }

        public function __destruct()
        {

        }

        public function run($path)
        {
            $pathRarts = explode('/', $path);

            if(!empty( $controllerName = ucfirst(array_shift($pathRarts)) )) {

                $controllerName .= '_Controller';

            } else {

                $controllerName = 'Site_Controller';

            }


            if(!empty($methodName = array_shift($pathRarts))) {

                $methodName = ucfirst($methodName).'Action';

            } else {

                $methodName = 'IndexAction';

            }


            if(class_exists($controllerName)) {

                $controllerObject = new $controllerName();

                if(method_exists($controllerObject, $methodName)) {

                    call_user_func_array( array($controllerObject, $methodName), $pathRarts);

                } else {

                    echo 'Method not Found';

                }
            } else {
                echo '404 Not Found ---> ' . $controllerName;
            }

        }

        public function getInstance()
        {
            if (self::$instance == null) {
                self::$instance = new Core();
            }
            return self::$instance;
        }
    }