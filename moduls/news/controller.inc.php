<?php
    class News_Controller extends Controller
    {
        public function AddAction($paramas)
        {
            echo 'AddAction';
            return true;
        }

        public function EditAction($params)
        {
            echo 'EditAction';
        }

        public function IndexAction()
        {
            echo 'IndexAction';
        }
    }