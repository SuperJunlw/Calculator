<!DOCTYPE html>
<html>
    <head>
        <title>CS174-Assignment 2 Calculator</title>
    </head>
    <body>
        <h1>Calculator</h1>
        <form action = "calculator.php" method = "post">
            <p>Input 1: <input type="text" name="input1" id="input1"/><label for="textfield" class="left"></label></p>
            <p>Operation: <select name="operator" id="operator">
                <option value="" disabled selected hidden>Operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><label for="select" class="left"></label></p>
            <p>Input 2: <input type="text" name="input2" id="input2"/><label for="textfield" class="left"></label></p>
            <p><input type="submit" value="Calculate"></p>
        </form>
        <hr />

        <?php if (!empty($_POST)){
            $isVaild = true;
            if(!is_numeric($_POST["input1"]) ){
                ?>
                <p style="color:red;">Input 1 is missing or not a valid number</p>
                <?php
                $isVaild = false;
            }

            if(!is_numeric($_POST["input2"]) ){
                ?>
                <p style="color:red;">Input 2 is missing or not a valid number</p>
                <?php
                $isVaild = false;
            }

            if (empty($_POST["operator"])) {
                ?>
                <p style="color:red;"><?php echo "Operator is missing"; ?> </p>
                <?php
                $isVaild = false;
            }

            if($isVaild){
                $num1 = $_POST["input1"];
                $num2 = $_POST["input2"];
                $op = $_POST["operator"];
                $answer = 0;

                if($op == "/" && $num2 == 0){
                ?>
                    <p style="color:red;">Cannot divide 0</p>
                <?php
                }
                else{
                    if($op == "+")
                        $sum = $num1 + $num2;
                    else if($op == "-")
                        $sum = $num1 - $num2;
                    else if($op == "*")
                        $sum = $num1 * $num2;
                    else if($op == "/")
                        $sum = $num1 / $num2;
                    ?>
                    <p style="color:blue;"><?php echo $num1 . $op . $num2 . "=" . $sum; ?></p>
                <?php
                }
            }
        }?>  
    </body>

</html>