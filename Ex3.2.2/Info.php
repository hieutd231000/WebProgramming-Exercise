<?php
    //Date1:
    $date = $_POST["birth1"];
    $old_date = explode('/', $date); 
    //Convert dd/mm/yy to yy-mm-dd
    $new_data = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];
    
    //Date2:
    $date1 = $_POST["birth2"];
    $old_date1 = explode('/', $date1); 
    //Convert dd/mm/yy to yy-mm-dd
    $new_data1 = $old_date1[2].'-'.$old_date1[1].'-'.$old_date1[0];
    //Check validate
    if (!(preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$new_data)) || !(preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$new_data1))) {
        echo "Your input is not valid";
    } else {
        //Get day number
        $weekday = date('l', strtotime($new_data));
        $weekday1 = date('l', strtotime($new_data1));

        //Get month
        $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        //1.Display two date
        echo "Information: ";
        echo "<br>Date 1: ".$weekday.", ".$month[$old_date[1] - 1]." ".$old_date[0].", ".$old_date[2];
        echo "<br>Date 2: ".$weekday1.", ".$month[$old_date1[1] - 1]." ".$old_date1[0].", ".$old_date1[2];

        //2. Diffierence day 
        $origin = date_create($new_data);
        $target = date_create($new_data1);
        $interval = date_diff($origin, $target);
        print "<br><br>Date 1 va Date 2 cach nhau:  ";
        echo $interval->format('%R%a days');    

        //3. Calculate how old are they, the difference years between two persons
        echo "<br><br>Tuoi nguoi 1: ".(2021 - $old_date[2])." tuoi";
        echo "<br>Tuoi nguoi 2: ".(2021 - $old_date1[2])." tuoi";
        echo "<br>Khoang cach tuoi giua 2 nguoi: ".abs($old_date[2] - $old_date1[2])." nam";
    }
    
?>