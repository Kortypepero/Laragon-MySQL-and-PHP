<?php require "retrieve.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Registration Form</h1>
    <h3>Create User</h3>

    <form action="/create.php" method="POST">

        <input type="text" name="first_name" id="first_name" placeholder="Enter first name" required>

        <input type="text" name="last_name" id="last_name" placeholder="Enter Last name" required>

        <input type="email" name="email" id="email" placeholder="Enter email" required>

        <input type="password" name="pass" id="pass" placeholder="Enter password" required>

        <select name="gender" id="gender">

            <option value="">Select Gender</option>
            <option value="male" id="male">Male</option>
            <option value="female" id="female">Female</option>

        </select>

        <select name="user_role" id="user_role">

            <option value="">Select user role</option>
            <option value="user">User</option>
            <option value="admin">Administrator</option>

        </select>

        <input type="submit" value="Create" name="createbtn">

    </form>


    <table>

        <thead>

            <th scope="col"><a href="?column=registration_id&sort='<?php echo $sort ?>'">ID</a></th>
            <th scope="col"><a href="?column=registration_id&sort='<?php echo $sort ?>'">First Name</a></th>
            <th scope="col"><a href="">Last Name</a></th>
            <th scope="col"><a href="">Email</a></th>
            <th scope="col"><a href="">Gender</a></th>
            <th scope="col"><a href="">User Role</a></th>

        </thead>

        <tbody>

            <?php
            
            while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <!-- REGISTRATION ID -->
                    <td>
                        <?php echo $row ['registration_id']?>
                    </td>

                    <!-- FIRST NAME -->
                    <td>
                        <?php echo $row ['first_name']?>
                    </td>

                    <!-- LAST NAME -->
                    <td>
                        <?php echo $row ['last_name']?>
                    </td>

                    <!-- EMAIL -->
                    <td>
                        <?php echo $row ['email']?>
                    </td>

                    <!-- GENDER -->
                    <td>
                        <?php echo $row ['gender']?>
                    </td>

                    <!-- USER ROLE -->
                    <td>
                        <?php echo $row ['user_role']?>
                    </td>

                    <!-- EDIT BUTTON -->
                    <td>
                        <form action="update.php" method="POST">
                            <input type="submit" value="Edit" name="edit">
                            <input type="hidden" name="email" 
                            value="
                            <?php 
                            echo $row['email']; 
                            ?>">
                        </form>
                        <form action="delete.php" method="POST">
                            <input type="submit" value="Delete" name="delete" onclick="return confirm('Are you sure you wanna delete?')">
                            <input type="hidden" name="email" 
                            value="
                            <?php 
                            echo $row['email']; 
                            ?>">
                        </form>
                    </td>
                </tr>
                <?php
            };
            ?>

        </tbody>

    </table>
    
</body>
</html>