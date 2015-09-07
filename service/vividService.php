<?php
   /*
   * Collect all Details from Angular HTTP Request.
   */ 
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    @$name=$request->name;
    @$email = $request->email;
    @$c_number = $request->c_number;
    @$shoot_date=$request->shoot_date;
    @$message = $request->message;
    echo "------------------------------------------------------";
    echo $email; 
    echo $name;
    echo $c_number;
    echo $shoot_date;//this will go back under "data" of angular call.
    /*
     * You can use $email and $pass for further work. Such as Database calls.
    */ 
   /* https://www.codementor.io/angularjs/tutorial/angularjs-calendar-directives-less-cess-moment-font-awesome*/  
?>
