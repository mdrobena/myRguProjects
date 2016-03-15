<?php
/**
 * Created by PhpStorm.
 * User: 1511989
 * Date: 08/03/2016
 * Time: 10:04
 */

for($x = 1; $x < 31; $x++){
    if($x == 1){
<<<<<<< Updated upstream
        print "On the ".$x."st of the month no products are available.<br>";
=======
        print "On the ".$x. "st of the month no products are available.<br>";
        print "<br>";
    }
    else if(){
        print "On the ".$x. "th of the month specs are available.<br>";
>>>>>>> Stashed changes
        print "<br>";
    }
    else if($x % 3 == 0){
        print "On the ".$x. "th of the month mugs are available.<br>";
        print "<br>";
    }
    else if($x % 2 == 0 && $x % 4 == 0){
        print "On the ".$x. "th of the month specs and sausage rolls are available.<br>";
        print "<br>";
    }
    else{
        print "On the ".$x. "th of the month specs are available.<br>";
        print "<br>";
    }
}