<?php
    require_once 'core/controller.php';
    
    

    class HomeController extends Controller
    {
        public function __construct()
        {
            //var_dump( $model, $isToRender, $controller );die;
            parent::__construct();//, $isToRender);//, $action );
        }

        public function index()
        {
            //$liste = parent::index();
            return $this->render( __FUNCTION__ );
        }

        public function contact()
        {
            //$liste = parent::index();
            return $this->render( __FUNCTION__ );
        }

        public function translate()
        {
            if ( isset( $_GET['lang'] ) )
            {
                $this->langue = $_GET['lang'];
                if ( $this->langue != "en")
                    $this->langue ="fr";
            }
            else
                $this->langue ="fr";

            if (session_status() == PHP_SESSION_NONE)
                session_start();
            $_SESSION['langue'] = $this->langue;

            return $this->index();
        }
    }
?>