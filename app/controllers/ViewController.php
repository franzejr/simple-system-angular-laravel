<?php

use Illuminate\Routing\Controller;

class ViewController extends Controller {

    public function getIndex(){
        return \Response::json(array(
            'View Controller'
        ));
    }

    public function missingMethod($parameters = array())
    {
        $view = join('.',$parameters);
        $view = str_replace('.html','', $view);

        if( \View::exists($view) ){
            return \View::make($view);
        }

        return \Response::json(array(
            'status_code'=>404,
            'message'    =>"View {$view} não localizada."
        ), 404);
    }
}