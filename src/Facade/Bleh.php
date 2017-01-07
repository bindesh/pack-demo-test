<?php namespace packdemotest\bleh\Facade;

use Illuminate\Support\Facades\Facade;

class Bleh extends Facade {

    protected static function getFacadeAccessor() { return 'test'; }

}
