<?php
    class Site_Controller extends Controller
    {

        public function IndexAction()
        {
            $tpl = new Template(ROOT . '/templates/index.tpl');
            $tpl->setParams(array(
                'title' => 'Main Page',
                'name' => 'Bogdan',
                'time' => '04.05.2018 - 23:56'
            ));
            $tpl->display();
        }

    }