<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        label {
            color: blueviolet;
        }
    </style>



</head>

<body>

    <div>
        <h1> Create New User Profile </h1>
    </div>

    <form method="POST" enctype="multipart/form-data">

        <div>
            <label> First Name: </label>
            <input type="text" name="first_name"> &emsp;

            <label> Last Name: </label>
            <input type="text" name="last_name">
        </div>
        </br>

        <div>
            <label> Email: </label>
            <input style="width: 500px;" type="email" name="email">
        </div>
        </br>

        <div>
            <label> Password: </label>
            <input type="password" name="password"> &emsp;

            <label> Confirm Password: </label>
            <input type="password" name="confirm_password">
        </div>
        </br>

        <div>
            <label> Address Line 1 </label>
            <input type="text" name="address_line_1"> &emsp;
            <label> Address Line 2 </label>
            <input type="text" name="address_line_2">
        </div>
        </br>

        <div>
            <label> City </label>
            <input type="text" name="city"> &ensp;
            <label> State </label>
            <input type="text" name="state"> &ensp;
            <label> Country </label>
            <select name="country">
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote DIvoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="Indonesia">Indonesia</option>
                <option value="India">India</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United States of America">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </div>
        </br>

        <div>
            <label> Choose at least two hobbies: </label></br>
            <input type="checkbox" name='hobby_list[]' value="music">
            <label> Litening to music </label>
            <input type="checkbox" name='hobby_list[]' value="cricket">
            <label> Playing cricket </label>
            <input type="checkbox" name='hobby_list[]' value="football">
            <label> Playing football </lable>
                <input type="checkbox" name='hobby_list[]' value="swimming">
                <label> Swimming </lable>
                    <input type="checkbox" name='hobby_list[]' value="gaming">
                    <label> Playing games </lable>
                        <input type="checkbox" name='hobby_list[]' value="reading">
                        <label>Reading</lable>
        </div>
        <?php
        if (isset($hobby_error)) {
            "<p>" .  "<font color=red>" . $hobby_error . "</font></p>";
        }
        ?>

        </br>

        <div>
            <label> Date of Birth: </label>
            <input type="date" name="date_of_birth" min="1900-01-01" max="2001-05-01" value="2001-05-01">&ensp;
            <label> (You should be older than 21 years) </label>
        </div>
        </br>


        <div>
            <label> Profile Picture (Only .jpg, .jpeg, .png) </label>
            <input type="file" name="profile_picture" accept=".jpg, .jpeg, .png">
            <label>Size must be lesser than 1 MB</label>
        </div>
        </br>


        <div>
            <input type="submit" value="Submit">
        </div>

    </form>


    </br></br></br></br></br></br>

    <pre>
<label>Data from POST Request</label>
<?php
print_r($_POST)
?>
</pre>
    <pre>
<label>Data from GET Request</label>
<?php
print_r($_GET)
?>
</pre>

</body>

</html>

<?php

#Making db connection 
include 'db_connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $address_line_1 = $_POST['address_line_1'];
    $address_line_2 = $_POST['address_line_2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];


    $hobby_array = $_POST['hobby_list'];
    echo "</br>";

    // echo $hobby_array; this will through array to string error.


    // foreach ($hobby_array as $hobby) {
    //     echo $hobby[0] . "</br>";
    // }
    // $ = $_POST['first_name'];


    $date_of_birth = $_POST['date_of_birth'];

    //below process is for saving the uploaded image and how to deal with the same.    

    $file_name = $_FILES['profile_picture']['name'];
    $temp_name = $_FILES['profile_picture']['tmp_name'];
    // print_r($file_name);
    echo $file_name;

    $folder = "images/" . $file_name;

    // print_r ($hobby_array);
    echo "<br>";

    $number_of_hobbies = count($hobby_array);

    $allowed_ext = array('png', 'jpg', 'jpeg', '');
    $file_name = $_FILES['profile_picture']['name'];
    $file_size = $_FILES['profile_picture']['size'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowed_ext)) {  #means - checking if the extension is from the allowed extensiong - if not then through an error
        $extension_error = "Only PNG, JPG, and JPEG files are accepted";
        echo $extension_error;
    } elseif($file_size > 1000000) {

        $file_size_error = "The file size should not be more than 1 MB.";
        echo $file_size_error;

    } elseif ($number_of_hobbies >= 2) {
        // echo $number_of_hobbies;

        $sql = "INSERT INTO address (address_line_1 , address_line_2, city, state , country) VALUES ('$address_line_1', '$address_line_2', '$city', '$state', '$country') ";

        if ($result = $connection->query($sql) === TRUE) {
            // echo $result;
            $last_address_id = $connection->insert_id;
            echo $last_address_id . "<br>";
        } else {
            echo "Error:" . $sql . "<br>" . $connection->error;
        }

        $sql = "INSERT INTO user (first_name, last_name, email, date_of_birth, profile_picture, address_id) VALUES ('$first_name','$last_name','$email','$date_of_birth', '$file_name', '$last_address_id' )";

        if ($result = $connection->query($sql) === TRUE) {
            // echo $result;
            $last_user_id = $connection->insert_id;
            echo $last_user_id . "<br>";
        } else {
            echo "Error:" . $sql . "<br>" . $connection->error;
        }


        // $hobby    =    implode(",", $hobby_array);

        // echo $hobby;   

        // way to save those multiple hobies in three different rows. find out how. must.

        #FIND ID FROM THE TABLE of HOBBY --  and WHAT HOBBY SELECTED




        // #===========================================db connection===================




        // #==========================
        print_r($hobby_array);
        echo "<br>";
        $new_array = array();
        foreach ($hobby_array as $hobby_new) {
            echo  $hobby_new . "<br>";
            $sql = "SELECT hobby_id FROM hobby WHERE hobby_name = '$hobby_new'";


            if ($result = $connection->query($sql)) {
                $new_result = $result->fetch_array(MYSQLI_ASSOC);
                print_r($new_result);
                echo "<br>";
                var_dump($new_result);


                foreach ($new_result as $new_value) {
                    $new_array[] = $new_value;
                }

                // foreach ($new_result as $key=> $value){
                //     $new_array = [$value];

                // }

                // echo $new_array;
                // foreach($row as $value){
                //     $new_array = [$value];
                //     print_r($new_array);

                // }
                // print_r($new_array);

            } else {
                echo "Error:" . $sql . "<br>" . $connection->error;
                // echo mysqli_error($connection);           
            }
        }

        echo "<br>";

        // var_dump($new_result);
        print_r($new_array); #GOT THE 
        // foreach ($new_result as $x => $value) {
        //     echo $value;
        // }


        // echo gettype($new_result);
        // echo gettype($row);
        // $new_thing   = $row->fetch_array(MYSQLI_ASSOC);
        // print_r($new_thing);
        // foreach ($row as $new_value) {
        //     print_r( $new_value);
        // $sql = "INSERT INTO user_hobby (user_id, hobby_id) VALUES('$last_user_id', '$new_value' ) ";


        // }


        foreach ($new_array as $latest_value) {
            // echo $latest_value;
            $sql = "INSERT INTO user_hobby (user_id, hobby_id) VALUES('$last_user_id', '$latest_value' ) ";
            if ($result = $connection->query($sql) === TRUE) {
                // echo $result;
            } else {
                echo "Error:" . $sql . "<br>" . $connection->error;
            }
        }



        if (move_uploaded_file($temp_name, $folder)) { #moving the file from the server to temp location - in our case its the images folder.
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image.";
        }


    } else {

        $hobby_error = "Select at least two hobbies";
        echo $hobby_error;

        // if(isset($hobby_error)){
        #CHECK THIS LATER -- WHY ITS NOT GETTING DISPLAYED AND EXECUTED IN THE FRONT-END
        #ALSO CHECK -- WHY HOBBY ERROR is NOT GETTING PRINTED JUST BELOW THE HTML FIELD - ITS NOT GETTING VALUE>> MAY BE HTML IS WRITTEN ABOVE THE LOGIC
        '<p style="color:red">'  . $hobby_error . '</p>';
        // }

    }  
}





?>