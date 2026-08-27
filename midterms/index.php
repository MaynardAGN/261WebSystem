<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <!~~ <?php echo "Hello World!"; ?> ~~>
    <table border=1>
    <form action="index.php" method="POST">
        <tr>
            <td>Enter Number 1:</td>
            <td><input type="text" name="number1" placeholder="Enter number 1"></td>
        </tr>
        <tr>
            <td>Enter Number 2:</td>
            <td><input type="text" name="number2" placeholder="Enter number 2"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Submit"></td>
        </tr>
        <tr>
            <td>Sum:</td>
            <td><?php if(isset($_POST['number1']) && isset($_POST['number2'])){ echo $_POST['number1'] + $_POST['number2']; } ?></td>
        </tr>
        <tr>
            <td>Difference:</td>
            <td><?php if(isset($_POST['number1']) && isset($_POST['number2'])){ echo $_POST['number2'] - $_POST['number1']; } ?></td>
        </tr>
        <tr>
            <td>Quotient:</td>
            <td><?php if(isset($_POST['number1']) && isset($_POST['number2'])){ echo $_POST['number2'] / $_POST['number1']; } ?></td>
        </tr>
        <tr>
            <td>Product:</td>
            <td><?php if(isset($_POST['number1']) && isset($_POST['number2'])){ echo $_POST['number1'] * $_POST['number2']; } ?></td>
        </tr>
        <tr>
            <td>Modulus:</td>
            <td><?php if(isset($_POST['number1']) && isset($_POST['number2'])){ echo $_POST['number2'] % $_POST['number1']; } ?></td>
        </tr>
    </form>
    </table>
    <?php
    if(isset($_POST['number1']) && isset($_POST['number2'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $sum = $number1 + $number2;
        $diff = $number2 - $number1;
        $qou = $number2 - $number1;
        $pro = $number1 * $number2;
        $mod = $number2 % $number1;
        echo "<p>The sum of $number1 and $number2 is: $sum</p>";
        echo "<p>The difference of $number2 and $number1 is: $diff</p>";
        echo "<p>The quotient of $number2 and $number1 is: $qou</p>";
        echo "<p>The product of $number1 and $number2 is: $pro</p>";
        echo "<p>The Modulus of $number2 and $number1 is: $mod</p>";
    }
    ?>
</body>
</html>