
<?php

//have to user variable assign all database details
$servername = "localhost";
$username = "root";
$dbpassword = "1478";
$dbname = "crud2corephp";

//Creating/Making Connection by creating instance of mysqli class -
$connection = new mysqli($servername, $username, $dbpassword, $dbname);

//Check if the connection was successfull or not otherwise it will throgh an error
if ($connection->connect_error) {
    die("Connection failed: " .  $connection->connect_error); #will throgh an exception and print the same
}

// echo "Database Connected Successfully";  #if no errors then.... will show print this message.


$sql = "SELECT * FROM user";

// $result = mysqli_query($connection, $sql);
$result = $connection->query($sql);

#PAGINATION


$results_per_page = 10;


#Get total number of pages

$number_of_results = mysqli_num_rows($result); #this will give number of rows 

$number_of_page = ceil($number_of_results / $results_per_page); #number of page #ceil gives rounds the number to the nearest integer

#get the current page user is on -- if no records then by default its 1

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

#Set limit for 1 page.. here its 10

$page_first_result = ($page - 1) * $results_per_page;

$sql_new = "SELECT * FROM user LIMIT $page_first_result , $results_per_page";


// $result = mysqli_query($connection, $sql);
$result_new = $connection->query($sql_new);

#temporory the below ===========
// while ($row_new = mysqli_fetch_array($result_new)) {
// // echo $row_new;
// // echo $row_new['user_id'];


// #temporory the above ===========
// # user table  --            user_id   hobbies to be added OR without adding how can we get the data
// # hobby table --            hobby_id
// # user_hobby table  --      user_id  hobby_id
// // We want user_id and his hobbies of user via user_id 

// $sql_latest = "SELECT  hobby_id FROM user_hobby WHERE user_id = '$row_new[user_id]'  ";

// $result_latest = $connection->query($sql_latest);


// // print_r($result_latest);
// // foreach ($result_latest as $value_latest){
// //     echo $value_latest;
// // }
// $rows_latest = [];
// while($row = $result_latest->fetch_row()) {
//     $rows_latest [] = $row;
//     echo "== </br>";
// }
// foreach($rows_latest as $value_latest){
//     echo $value_latest;
// }

// // print_r($rows_latest);
// // foreach($rows_latest as $value_latest){
// //     echo $value_latest;
// // }
// echo "</br>";
  
// }



# user table  --            user_id   hobbies to be added OR without adding how can we get the data
# hobby table --            hobby_id
# user_hobby table  --      user_id  hobby_id
// We want user_id and his hobbies of user via user_id 

$new_sql = "SELECT  hobby.hobby_id, user_hobby.user_id , hobby.hobby_name 
           FROM user, hobby WHERE user.user_id = 'user_hobby.user_id' ";

$result_new_sql = $connection->query($new_sql);

echo gettype($result_new_sql);


$new_rows = array();
// print_r($result_new_sql);
while ($new_row_latest= mysqli_fetch_assoc($result_new_sql)){
    // echo $new_row_latest;

    $new_rows[] = $new_row_latest['hobby'];

}

print_r($new_rows);

// foreach($new_rows as $key->$value) {

//     echo $value;
// }

// print_r($result_new_sql);

// echo gettype($result_new_sql);

// $result_new_sql->free_result();

// echo $result_new_sql;










#PAGINATION

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style type="text/css">
        table,
        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
            margin: auto;
            padding: 20px;
            /* padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        padding-bottom: 10px;         */
        }

        div {
            text-align: center;
        }

        /* .new {
            text-align: left;
            margin: auto;
        } */
    </style>

</head>

<body>

    <div>
        <table>
            <tr>
                <th> User Id </th>
                <!-- Add Full Name instead of first and last later on -->
                <th> Full Name </th>                
                <th> Email </th>
                <th> Account Status </th>
                <th> DOB </th>
                <th> Hobbies </th>
                <th> Profile Picture </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php
            while ($row_new = mysqli_fetch_array($result_new)) {

                echo "<tr>";
                    echo "<td>" . $row_new['user_id'] . "</td>";
                    echo "<td>" . $row_new['first_name'] . " " . $row_new['last_name'] . "</td>";
                    echo "<td>" . $row_new['email'] . "</td>";
                    echo "<td>" . $row_new['account_status'] . "</td>";
                    echo "<td>" . $row_new['date_of_birth'] . "</td>";
                    echo "<td>" . $row_new['hobby'] . "</td>"; #GET THIS VALUE -- FROM OTHER QUERIES AND GET IT SAVED FIRST IN THE DATABASE 
                    echo "<td>" . $row_new['profile_picture'] . "</td>";
                    echo "<td><a href=" . "edit_user.php?id=" . $row_new['user_id'] . ">" .  "Edit </a></td>";
                    // echo "<td><button type=submit name=delete><a href=user_list.php?id=" . $row_new['id']  .">". "Delete" . "</button></td>";
                    echo "<td><a href=" . "delete_user.php?id=" . $row_new['user_id'] . ">" .  "Delete </a></td>";
                echo "</tr>";
            }


            




            ?>                      
            
        </table>
    </div>




    <div>


        <!-- #Display link of the urls of the pages. -->

        <?php
        // echo $page;
        if ($page <= 1) {
            echo "<a style='visibility:hidden;'>" . "Previous" . " </a>";
        } else {
            // echo $page;
            $previous_page = $page - 1;
            echo "<a href='?page=$previous_page'>" . "Previous" . "</a>";
        }

        ?>

        <?php
        // echo $page;
        // echo $number_of_page;
        if ($page >= $number_of_page) {
            echo "<a style='visibility:hidden;'>" . "Next" . " </a>";
        } else {
            // echo $page;
            $next_page = $page + 1;
            echo "<a href='?page=$next_page'>" . "Next" . " </a>";
        }
        ?>
    </div>
    <div>
        <?php
        for ($page = 1; $page <= $number_of_page; $page++) {
            echo "<a href=?page=$page>" . $page . "</a>" . "&nbsp";
            // return 1;

        }
        // echo $page;  #WHY IT STILL KEEPS THE VALUE OUTSIDE OF THE LOOP - CHECK AND ASK LATER. #hence cannot use the logic of next button after this as this has wrong value.
        ?>
    </div>
    </br>
    <div class='new'>
        <a href="/create_user.php"> Creat User </a>
    </div>

    <div>
        <?php
        if (isset($success_message)){
            echo $success_message;
        }
        if (isset($db_error_message)){
            echo $db_error_message;
        }
        
        ?>
    </div>



    <!-- <ul>
        <a href="?page= "
        </ul> -->

</body>

</html>