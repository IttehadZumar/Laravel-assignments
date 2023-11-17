<?php 
class Planet{
    static function echoName(){
        // echo self::getName(); //early binding
        echo static::getName(); //late binding
    }
    static function getName(){
        return "Planet";
    }
}

class Earth extends Planet{
    static function getName(){
        echo "Earth";
    }
}
Earth::echoName();
// what is the output now? this is called early vs late binding