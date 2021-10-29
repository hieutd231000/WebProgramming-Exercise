<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Validation</title>
</head>
<style>
    /* label{
        display: inline-block;
        width: 80px;
        text-align: right;
        padding-right: 20px;
    } */
</style>
<body>
    <h3>Enter your name and select date and time for the appointment</h3>
    <form method = "post">
        <div class = "block">
            <label for = "name">Your name: </label>
            <input type = "text" name = "name" id = "name"><br>
        </div>
        <div class = "block">
            <table>
                <tr>
                    <td>Date:</td>
                    <td>
                        <select name = "day">
                            <?php
                                for($i = 1; $i <= 31; $i++){
                                    print("<option>$i</option>");
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name = "month">
                            <?php
                                for($i = 1; $i <= 12; $i++){
                                    print("<option>$i</option>");
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name = "year">
                            <?php
                                for($i = 2000; $i <= 2021; $i++){
                                    print("<option>$i</option>");
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <div class = "block">
            <table>
                <tr>
                    <td>Time:</td>
                    <td>
                        <select name = "hour">
                            <?php
                                for($i = 0; $i <= 23; $i++){
                                    if($i < 10){
                                        $t = "0".$i;
                                        print("<option>$t</option>");
                                    }else print("<option>$i</option>");
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name = "minute">
                            <?php
                                for($i = 0; $i <= 59; $i++){
                                    if($i < 10){
                                        $t = "0".$i;
                                        print("<option>$t</option>");
                                    }else print("<option>$i</option>");
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name = "second">
                            <?php
                                for($i = 0; $i <= 59; $i++){
                                    if($i < 10){
                                        $t = "0".$i;
                                        print("<option>$t</option>");
                                    }else print("<option>$i</option>");
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div class = "block">
            <input type="submit" id = "submit" name = "submit" value="Submit">
            <input type="reset" id = "reset" name = "reset" value="Reset">
        </div>
    </form>

    <?php
        if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $hour = $_POST["hour"];
            $minute = $_POST["minute"];
            $second = $_POST["second"];
            $day = $_POST["day"];
            $month = $_POST["month"];
            $year = $_POST["year"];

            echo "<br>Hi ".$name."!";
            echo "<br>You have choose to have an appointment on ".$hour.":".$minute.":".$second.","."$day"."/"."$month"."/"."$year";
            echo "<br><br>More information";
            if($hour > 12){
                echo "<br><br>In 12 hours, the time and date is ".($hour-12).":".$minute.":".$second." PM".","."$day"."/"."$month"."/"."$year";
            }else{
                echo "<br><br>In 12 hours, the time and date is ".$hour.":".$minute.":".$second." AM".","."$day"."/"."$month"."/"."$year";
            }

            switch($month){
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    echo "<br><br>This month has 31 days";
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    echo "<br><br>This month has 30 days";
                    break;
                case 2:
                    $is_year = false;
                    if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) 
                        $is_year = true;
                    if($is_year){
                        echo "<br><br>This month has 29 days";
                    }else{
                        echo "<br><br>This month has 28 days";
                    }
            }
        }
       
    ?>
</body>
</html>
