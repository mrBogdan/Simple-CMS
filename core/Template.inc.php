<?php
    class Template {
        protected $params;
        protected $fileName;

        function __construct($fileName) {
            $this->fileName = $fileName;
            $this->params = array();
        }

        public function setParam($name, $value) {
            $this->params[$name] = $value;
            return $this;
        }

        public  function setParams($assocArray) {
            $this->params = array_merge($this->params, $assocArray);
            return $this;
        }

        public function fetch() {
            ob_start();
            extract($this->params);
            include ($this->fileName);
            $html = ob_get_contents();
            ob_end_clean();
            return $html;
        }

        public function display() {
            echo $this->fetch();
        }

    }