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
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><label for="select" class="left">Operation: </label></p>
            <p><input type="number" name="input2" id="input2"/><label for="textfield" class="left">Input 2: </label></p>
        </form>
        <hr />

        <?php if (!empty($_POST))
        {
        ?>
    
        <?php 
        }
        ?>  
    </body>

</html>