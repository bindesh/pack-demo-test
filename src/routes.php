<?php

Route::get("en/test",function(){
    return \packdemotest\bleh\Bleh::saySomething();
});
