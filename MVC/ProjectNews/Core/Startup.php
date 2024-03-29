<?php
require_once "Router.php";
//controllers
require_once dirname(__FILE__,2).'\Controllers\HomeController.php';
require_once dirname(__FILE__,2).'\Controllers\NewsController.php';
//config
$_config= require_once dirname(__FILE__,2).'\config\root.php';
Startup::setConfig($_config);


class Startup
{
    private static  $config;
    private  $Router;
    public  function  Startup()
    {
       $this->Router=new Router();
       //Sign up and What to do with an existing url!
         $this->Router->get('Home/','HomeController@index');
        $this->Router->get('News/','NewsController@index');
        //direct handling with function amonouse!
        $this->Router->get('News/{name}/{id}','NewsController@index');
        //not found 404 ::
     /*   $this->Router->any('*',function ()
        {
            echo "Not found 404.";
            die();
        });*/
    }
    public  function run()
    {
        $this->Router->run();
    }

    /**
     * @param mixed $config
     */
    public static function setConfig($config)
    {
        self::$config = $config;
    }

    /**
     * @return mixed
     */
    public static function getConfig()
    {
        return self::$config;
    }

}