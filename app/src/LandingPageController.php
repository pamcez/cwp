<?php

class LandingPageController extends PageController {
    private static $allowed_actions = ['hello'];
    private static $url_handlers = [
    'kiaora' => 'hello'
    ];
    public function hello($request)
     {
         return 'hello';
     }
}
