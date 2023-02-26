<!DOCTYPE html>
<html>
    <head>
        <title>CS174-Assignment 2 Calculator</title>
        <style>
            p#error { color: red; }
        </style>
    </head>
    <body>
        <script type="application/javascript">
	        function validateInput1() {
                let input = document.getElementById("input1").value;;
                //check if the input is empty of not a number
                if (input == '' || isNaN(input)) {
		            document.getElementById("error").innerHTML = "Input 1 is missing or not a valid number";//write the error message
		            return false;
                }
                return true;
	        }
        </script>

        <h1>Calculator</h1>
        <!-- Creating the form, call validateInput1() everytime that calculate is clicked -->
        <form action = "calculator.php" onsubmit="return validateInput1();" method = "post">
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

        <p id="error"></p>

        <?php if (!empty($_POST)){
            $isVaild = true; //a boolean to check if all inputs are vaild
            //check if input 2 is vaild
            if(!is_numeric($_POST["input2"]) ){
                ?>
                <p style="color:red;">Input 2 is missing or not a valid number</p>
                <?php
                $isVaild = false;
            }
            
            //check if an operator is seleted
            if (empty($_POST["operator"])) {
                ?>
                <p style="color:red;">Operator is missing</p>
                <?php
                $isVaild = false;
            }

            //if all inputs are vaild
            if($isVaild){
                $num1 = $_POST["input1"];
                $num2 = $_POST["input2"];
                $op = $_POST["operator"];
                $answer = 0;

                //check divide by 0
                if($op == "/" && $num2 == 0){
                ?>
                    <p style="color:red;">Cannot divide 0</p>
                <?php
                }
                else{ //calculate the answer based on the operator
                    if($op == "+")
                        $sum = $num1 + $num2;
                    else if($op == "-")
                        $sum = $num1 - $num2;
                    else if($op == "*")
                        $sum = $num1 * $num2;
                    else if($op == "/")
                        $sum = $num1 / $num2;
                    //print the answer
                    ?>
                    <p style="color:blue;"><?php echo $num1 . $op . $num2 . "=" . $sum; ?></p> 
                <?php
                }
            }
        }?>  
    </body>

</html>