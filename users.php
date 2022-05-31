
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

#WATCH THOSE LINKS or WATCH A CHEPTER ON JOIN MUST  AGAIN.. KNOW THE CONCEPTS -- CLEARLY and DO THE PRACTICAL.

// $new_sql = "SELECT  hobby.hobby_id, user_hobby.user_id , hobby.hobby_name 
//            FROM user, hobby WHERE user.user_id = 'user_hobby.user_id' ";

// $result_new_sql = $connection->query($new_sql);

// echo gettype($result_new_sql);


// $new_rows = array();
// print_r($result_new_sql);
// while ($new_row_latest= mysqli_fetch_assoc($result_new_sql)){
    // echo $new_row_latest;

    // $new_rows[] = $new_row_latest['hobby'];

// }

// print_r($new_rows);

// foreach($new_rows as $key->$value) {

//     echo $value;
// }

// print_r($result_new_sql);

// echo gettype($result_new_sql);

// $result_new_sql->free_result();

// echo $result_new_sql;

#THE BELOW IS CORE QUERY worked on the query editor directly.
// SELECT * FROM user JOIN user_hobby JOIN hobby
// ON user.user_id = user_hobby.user_id 
// AND user_hobby.hobby_id = hobby.hobby_id

// got the data -- now to check -- PHP use -- to convert that into usable data structure.


$sql_that = "SELECT  user.user_id, hobby.hobby_id, hobby.hobby_name FROM user JOIN user_hobby JOIN hobby ON user.user_id = user_hobby.user_id AND user_hobby.hobby_id = hobby.hobby_id";

$result_that = $connection->query($sql_that);

// $rows_that = [];

// while ($row = mysqli_fetch_assoc($result_that)) {
//     $rows_that []= $row;
// }

$row = $result_that-> fetch_all(MYSQLI_ASSOC);
// $row = $result_that-> fetch_array(MYSQLI_NUM);

// $result_that_new = $result_that -> free_result();
// echo $row;
// echo "</br>";
// print_r($row);
// echo "</br></br></br>";
// echo "====";
// echo "</br></br></br>";

// echo $row[0]['hobby_name'];

#Now want to make an array for each user_id hobby and list them to the respective row.
// echo gettype($row);
// echo "====";
// echo "</br></br></br>";
// echo "<pre>";
// print_r($row);
// UNDERSTAND THE LOGIC - MUST CHCEK THAT LATER.
// echo "</br> ------------------------------------------------- </br>";

// // foreach ($row as $hobby) {
// //     print_r($hobby);
// // }

// // echo "<pre>";
// // print_r($hobby)
// echo "</br> ------------------------------------------------- </br>";



$finalHobbiesByuser = [];

foreach($row as $hobby){
    $finalHobbiesByuser[$hobby['user_id']][] = $hobby['hobby_name'];
}

// echo "<pre>";
// print_r($finalHobbiesByuser);


// echo "</br></br></br>";
// echo "====";
// echo "</br></br></br>";


// // print_r($row_new);

// echo "</br></br></br>";
// echo "====";
// echo "</br></br></br>";


// $new_array = array();
// foreach ($row as $k => $value){
//     // print_r($value);
//     // echo "</br>";
//     // echo next($value);
//     // echo next($value['hobby_id']);
//     // echo $value['user_id'];
//     // foreach ($value as $new_value) {
//     //     // echo $new_value;
//     //     // echo current($new_value);
//     // }
    
    



//     // foreach ($value as $key => $further_value) {
//     //     echo "</br>===FURTHER VALUE====";
//     //     // print_r($further_value);
//     //     // echo $key . $further_value ;
        
        
//     //     echo "</br>===FURTHER VALUE END====";
//     //     // echo $further_value;
//     // }
//     echo "</br></br>";
// }



//  foreach ($row as $x=> $new_value) {
//     // echo " key=" . $x . ", value=" . $new_value;
//     echo "</br>";
//     echo $x;
//     print_r($new_value);
//     // print_r($new_value);
//     // echo "</br>";
// }



// echo $rows_that;
// print_r($rows_that);
echo "</br></br></br>===== </br>";
// print_r($rows_that['hobby_name']) ;

// foreach ($rows_that as $value_that) {
//     print_r($value_that);
//     echo "</br>";
//     echo $value_that['hobby_name'];
//     echo "</br>";
// }



// KNOW FROM THE BASIC... HOW YOU SEPARATE IT BY IDENTICAL IDS.. LOOK AT THE STRUCTURE FIRST>







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
                    echo "<td>" . (!empty($finalHobbiesByuser[$row_new['user_id']]) ? implode(',', $finalHobbiesByuser[$row_new['user_id']]) : '-'). "</td>"; #used ternary operator with the help of buddy.
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