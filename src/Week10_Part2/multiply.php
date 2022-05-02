<html>
<body>
    <form action="" method="GET">
        <input type="text" name="num1" placeholder="Enter 1st number" required>
        <input type="text" name="num2" placeholder="Enter 2nd number" required>
        
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_GET['submit'])){
            echo  'Multiplication of input: ' , $_GET['num1'] * $_GET['num2'];
        }
    ?>
</body>
</html>