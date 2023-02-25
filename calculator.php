<!DOCTYPE html>
<html>
    <head>
        <title>CS174-Assignment 2 Calculator</title>
    </head>
    <body>
        <h1>Calculator</h1>
        <form action = "calculator.php" method = "post">
            <p><input type="number" name="input1" id="input1"/><label for="textfield" class="left">Input 1: </label></p>
            <p><select name="operator" id="operator">
                <option value="" disabled selected hidden>Operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><label for="select" class="left">Operation: </label></p>
            <p><input type="number" name="input2" id="input2"/><label for="textfield" class="left">Input 2: </label></p>
            <p><input type="submit" name="calculate" value="Calculate"></p>
        </form>
        <hr />

        <?php if (!empty($_POST))
            $isVaild = true;
            if(empty($_POST["input1"]) || !is_numeric($_POST["input1"]) ){
                <p style="color:red;"><?php echo $_POST["textfield"]; ?> is missing or not a valid number</p>
                $isVaild = false;
            }

            if(empty($_POST["input2"]) || !is_numeric($_POST["input2"]) ){
                <p style="color:red;"><?php echo $_POST["textfield"]; ?> is missing or not a valid number</p>
                $isVaild = false;
            }

            if (empty($_POST["operator"])) {
                <p style="color:red;">Operator is missing</p>
                $isVaild = false;
            }

            if($isVaild){
                $num1 = $_POST["input1"];
                $num2 = $_POST["input2"];
                $op = $_POST["operator"];
                $answer = 0;

                if($op == "/" && $num2 == 0){
                    <p style="color:red;">Cannot divide 0</p>
                }
                else{
                    if($op == "+")
                        $sum = $num1 + $num2;
                    else if($op == "-")
                        $sum = $num1 - $num2;
                    else if($op == "*")
                        $sum = $num1 - $num2;
                    else if($op == "/")
                        $sum = $num1 - $num2;

                    <p style="color:blue;"><?php echo $num1 . $num2 . "=" . $sum; ?></p>
                }
            }

        ?>  
    </body>

</html>