<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Ajax_live_search";

$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    echo "Connection failed" . mysqli_connect_error();
}else{

    $query = "SELECT * FROM info";
    $results = mysqli_query($conn, $query);
    if(mysqli_num_rows($results) > 0){
        ?>
        <table>
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
            while ($row = mysqli_fetch_assoc($results)){
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
