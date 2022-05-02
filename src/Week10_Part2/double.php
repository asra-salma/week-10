<html>
<body>
    <form action="" method="GET">
        <input type="text" name="double" placeholder="Enter number" required>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_GET['double'])){
            echo 'Double of input is: ' , $_GET['double']*2;
        }
    ?>
</body>
</html>