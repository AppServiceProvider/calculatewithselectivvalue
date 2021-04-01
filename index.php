<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SELECT OPTION WITH CALCULATE</title>
</head>
<style>
    .row p {
        padding: 0;
        margin: 0;
    }

    .row option {
        padding-right: 80px;
    }

    .submit {
        letter-spacing: 1px;
    }

    ul>li {
        list-style: none;
        padding-bottom: 5px;
    }

    ul {
        margin: 0;
        padding: 0;
    }

</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <form action="" method="post">
                    <div class="">
                        <p>Enter your first Number:</p>
                        <input class="mb-3" type="text" name="number_one" placeholder="Enter your first Number">
                    </div>

                    <div class="">
                        <p>Enter your last Number:</p>
                        <input type="text" name="number_two" placeholder="Enter your last Number">
                    </div>
                    <div class="mt-3 mb-3">
                        <select name="operation" id="">
                            <option value="add">Add</option>
                            <option value="sub">SUB</option>
                            <option value="mult">Mult</option>
                            <option value="div">Div</option>
                        </select>
                    </div>

                    <input class="submit mb-2" name="submit" type="submit" value="SUBMIT">
                </form>
                <p>
                    <?php
                    
                    if(isset($_REQUEST["submit"])){
                        $numOne=$_REQUEST["number_one"];
                        $numTwo=$_REQUEST["number_two"];
                        echo "First number is: {$numOne} <br>Second number is: {$numTwo}"."<br>";
                        $operation=$_REQUEST["operation"];
                        switch($operation){
                            case  "add": $sum= $numOne+$numTwo;
                                echo "The additional of two number is: {$sum}";
                                break;
                            case  "sub": $sub= $numOne-$numTwo;
                                echo "The subtraction of two number is: {$sub}";
                                break;
                            case  "mult": $mult= $numOne*$numTwo;
                                echo "The mult of two number is: {$mult}";
                                break;
                             case  "div": $div= $numOne/$numTwo;
                                echo "The div of two number is: {$div}";
                                break;  
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="col-md-6 mt-5">
                <form action="" method="post">
                    <div class="">
                        <p>Enter your first Number:</p>
                        <input class="mb-3" type="text" name="n1" placeholder="Enter your first Number">
                    </div>

                    <div class="">
                        <p>Enter your last Number:</p>
                        <input type="text" name="n2" placeholder="Enter your last Number">
                    </div>
                    <div class="mt-2">
                        <ul>
                            <li> <input type="submit" name="a" value="Additional +"></li>
                            <li><input type="submit" name="s" value="Subtraction -"></li>
                            <li><input type="submit" name="m" value="Multiply *"></li>
                            <li><input type="submit" name="d" value="Division /"></li>
                        </ul>

                    </div>
                    <?php
            if(isset($_POST["a"])){
                        $n1=$_POST["n1"];
                        $n2=$_POST["n2"];
//                        $add=$n1+$n2;
                if(empty($n1) or empty($n2)){
                       echo "<span style='color:red'>Field must not be empty</span>";
                    }else{
                      $add=$n1+$n2;
                        echo "Additional is " .$add;
                    }};
            if(isset($_POST["s"])){
                        $n1=$_POST["n1"];
                        $n2=$_POST["n2"];
                    if(empty($n1) or empty($n2)){
                       echo "<span style='color:red'>Field must not be empty</span>";
                    }else{
                        $sub=$n1-$n2;
                        echo "Subtraction is " .$sub;
                    }};
            if(isset($_POST["m"])){
                        $n1=$_POST["n1"];
                        $n2=$_POST["n2"];
                    if(empty($n1) or empty($n2)){
                       echo "<span style='color:red'>Field must not be empty</span>";
                    }else{
                        $mul=$n1*$n2;
                        echo "Multiply is " .$mul;
                    }};
            if(isset($_POST["d"])){
                        $n1=$_POST["n1"];
                        $n2=$_POST["n2"];
                    if(empty($n1) or empty($n2)){
                       echo "<span style='color:red'>Field must not be empty</span>";
                    }else{
                        $div=$n1/$n2;
                        echo "Division is " .$div;
                    }};
                    ?>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
