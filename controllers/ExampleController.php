<?php namespace Controller;


use Model\ExampleModel;

class ExampleController
{
    public static function home(){
        $data = array(
            'header'    =>  array(
                'title' =>  'Home Page'
            ),
            'h1'        =>  'Homepage',
            'message'   =>  'Welcome to my framework'
        );
        \View::page('page',$data);
    }

    public static function api(){
        $user = ExampleModel::get(1);
        \Output::success(array(
            'id'        => $user->getId(),
            'username'  =>  $user->getUserName()
        ));
    }

    public static function doInt($arg){
        //this example shows how arguments could be passed to modals and then use the returned data
        $user = ExampleModel::get($arg[1]);
        $data = array(
            'header'    =>  array(
                'title' =>  'Int Example'
            ),
            'h1'        =>  'User ID: '.$user->getId(),
            'message'   =>  'Welcome to my framework '.$user->getUserName()
        );
        \View::page('page',$data);
    }

    public static function doExactString($arg){
        $data = array(
            'header'    =>  array(
                'title' =>  'Exact String Example'
            ),
            'h1'        =>  'Exact String Example',
            'message'   =>  'Welcome to my framework <strong>'.$arg[1].'</strong>'
        );
        \View::page('page',$data);
    }

    public static function doString($arg){
        $data = array(
            'header'    =>  array(
                'title' =>  'String Example'
            ),
            'h1'        =>  'Passed String Example',
            'message'   =>  'Welcome to my framework <strong>'.$arg[1].'</strong>'
        );
        \View::page('page',$data);
    }

}