<?php

Route::get("en/test",function(){
    return \DemoPackage\Bleh\Bleh::saySomething();
});