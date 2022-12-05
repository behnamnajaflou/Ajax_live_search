<?php
include "config.php";
if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM info WHERE full_name LIKE '{$input}%' or age LIKE '{$input}%' or email LIKE '{$input}%' or country LIKE '{$input}%' or occupation LIKE '{$input}%'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        ?>
        <table class="table table-bordered table-striped mt-4 pt-20">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Age</td>
                    <td>Email</td>
                    <td>Country</td>
                    <td>Occupation</td>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['full_name'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['occupation'] ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    }else{
        echo "No Match data";
    }
}
