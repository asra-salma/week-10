<html>
<body>
    <form action="" method="POST">
        <input type="text" name="firstname" placeholder="Enter First Name" required>
        <input type="text" name="surname" placeholder="Enter Surname" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <select name="color">
            <option value="" disabled selected>Choose color</option>
            <option value="red">Red</option>
            <option value="Black">Black</option>
            <option value="Blue">Blue</option>
            <option value="Green">Green</option>
            <option value="Yellow">Yellow</option>
         </select>
         <textarea name="address" placeholder="Enter Address"></textarea>
      
        Do you accept the terms and conditions?
        <input type="checkbox" name="check" value="yes" /><label>Yes</label>
        <input type="checkbox" name="check" value="no" /><label>No</label>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            echo "First Name: ", $_POST['firstname'], "<br>";
            echo "Surname: ", $_POST['surname'], "<br>";
            echo "Email: ", $_POST['email'], "<br>";
            echo "Favourite Color: ", $_POST['color'], "<br>";
            echo "Address: ", $_POST['address'], "<br>";
            echo "Terms and Conditions: ", $_POST['check'];            
        }
    ?>
</body>
</html>