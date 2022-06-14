<?php


//CONNECTING DB
include 'db_connection.php';


// FIND THE CURRENT ID and ITS DATA TO BE DISPLAYED IN ALL THE FIELDS Echo all of them
$current_id = $_GET['user_id'];

// echo "<br>". $current_id;
// $sql = "SELECT * FROM user WHERE user_id=$current_id";

// $sql = "SELECT * FROM user JOIN hobby JOIN user_hobby JOIN address ON  user.user_id = user_hobby.user_id AND   user.address_ id = address.address_id AND user_hobby.hobby_id = hobby.hobby_id  ";    
$sql = "SELECT * FROM user  JOIN address ON  user.address_id = address.address_id WHERE user_id = $current_id ";


$result = $connection->query($sql);


// echo "<pre>";
// print_r($result);
// echo "</pre>";

//ONCE HIT the Update/Edit Button - it takes us to update_user.php where all the things will happen

// $row = $result -> fetch_array(MYSQLI_NUM);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

echo "</br> ====== </br>";

// foreach($row as $value_new_now){
//     echo $value_new_now;
// }

echo "</br> ====== </br>";




while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {


    $current_id = $row['user_id'];
    $current_fname = $row['first_name'];
    $current_lname = $row['last_name'];
    $current_email= $row['email'];
    $current_account_status = $row['account_status'];
    $current_email_v_hash = $row['email_v_hash'];
    $current_date_of_birth = $row['date_of_birth'];
    $current_profile_picture = $row['profile_picture'];
    $current_address_id = $row['address_id'];
    // $current_hobby_name = $row['hobby_name']; //FIGURE OUT -- HOW TO GET THE LIST OF HOBBIES as ITS NOT IN THE DATABASE
    $current_address_line_1 = $row['address_line_1'];
    $current_address_line_2 = $row['address_line_2'];
    $current_city = $row['city'];
    $current_state = $row['state'];
    $current_country = $row['country'];
    

}
// echo $current_hobby_list = $_GET['current_hobbies'];

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        label {
            color: blueviolet;
        }

        .error {
            color: red;
        }

        .pass_mismatch_err {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script> -->
</head>

<body>

    <div>
        <h1> Edit/Update Profile </h1>
    </div>

    <form method="POST" action="update_user.php" enctype="multipart/form-data">

        <div>
            <label> First Name: </label>
            <input type="text" name="first_name" id="first_name" value= <?php echo $current_fname  ?> >  &emsp;
            <span class="error">
                <?php
                if (isset($firstNameErr)) {
                    echo $firstNameErr;
                }
                ?>
            </span>
            <label> Last Name: </label>
            <input type="text" name="last_name" id="last_name" value= <?php echo $current_lname ?> >
        </div>
        </br>


        <div>
            <label> Email: </label>
            <input style="width: 500px;" type="email" name="email" id="email" value= <?php echo $current_email ?> >
            <span class="error">
                <?php
                if (isset($emailErr)) {
                    echo $emailErr;
                }
                if (isset($email_already_err)) {
                    echo $email_already_err;
                }
                ?>
            </span>
        </div>
        </br>

        <!-- <div>
            <label> Password: </label>
            <input type="password" name="password" id="password"> &emsp;
            <span class="error">
                <!-- <?php
                // if (isset($passwordErr)) {
                //     echo $passwordErr;
                // }
                ?> -->
            <!-- </span>
            <label> Confirm Password: </label>
            <input type="password" name="confirm_password" id="confirm_password">
            <span class="error">
                <?php
                // if (isset($confirmPasswordErr)) {
                //     echo $confirmPasswordErr;
                // }
                ?>
            </span>
        </div> --> 
        </br>

        <div>
            <!-- <label> Address Id </label> -->
            <input type="hidden" name="address_id" id="address_id" value= <?php echo $current_address_id ?> > 
            <label> Address Line 1 </label>
            <input type="text" name="address_line_1" id="address_line_1" value= <?php echo $current_address_line_1 ?> > &emsp;
            <label> Address Line 2 </label>
            <input type="text" name="address_line_2" id="address_line_2" value= <?php echo $current_address_line_2 ?> >
        </div>
        </br>

        <div>
            <label> City </label>
            <input type="text" name="city" id="city" value= <?php echo $current_city ?> > &ensp;
            <label> State </label>
            <input type="text" name="state" id="state" value= <?php echo $current_state ?> > &ensp;
            <label> Country </label>
            <select name="country" id="country" value= <?php echo $current_country ?> >
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

    <!-- CHECK HOW WE WILL MAKE SELECTED BOXES CHECKED WHEN EDITING? -->
    
       <?php 
       
        echo $current_hobby_list = $_GET['current_hobbies'];
        echo "</br>";
        $current_hobby_list_array =explode("," , $current_hobby_list);
        //   echo $hobby_list_array;
        // foreach ($current_hobby_list_array as $value) {
            // echo "</br>" . $value;
            // $value;
        

            // if ($value=="music") { echo "checked";    }
            
        ?>
        
        <div>
            <label> Choose at least two hobbies: </label></br>
            <input type="checkbox" name='hobby_list[]' value="music"   <?php foreach ($current_hobby_list_array as $value) { if ($value=="music") {echo "checked";}  };   ?> >   
            <label> Litening to music </label>
            <input type="checkbox" name='hobby_list[]' value="cricket" <?php foreach ($current_hobby_list_array as $value) {if ($value=="cricket") {echo "checked";} };     ?>  >
            <label> Playing cricket </label>
            <input type="checkbox" name='hobby_list[]' value="football" <?php foreach ($current_hobby_list_array as $value) {if ($value=="football") {echo "checked";} };    ?>  >
            <label> Playing football </lable>
            <input type="checkbox" name='hobby_list[]' value="swimming" <?php foreach ($current_hobby_list_array as $value) {if ($value=="swimming") {echo "checked";} };     ?>  >
            <label> Swimming </lable>
            <input type="checkbox" name='hobby_list[]' value="gaming"  <?php foreach ($current_hobby_list_array as $value) {if ($value=="gaming") {echo "checked";} };     ?>  >
            <label> Playing games </lable>
            <input type="checkbox" name='hobby_list[]' value="reading" <?php foreach ($current_hobby_list_array as $value) {if ($value=="reading") {echo "checked";} };     ?>  >
            <label>Reading</lable>

<!--             <label> Choose at least two hobbies: </label></br>
            <input type="checkbox" name='hobby_list[]' value="music"   <?php //foreach ($current_hobby_list_array as $value) { echo ( $value == "music"  ?    'checked' : 'unchecked' ) ; };   ?> >   
            <label> Litening to music </label>
            <input type="checkbox" name='hobby_list[]' value="cricket" <?php //foreach ($current_hobby_list_array as $value) {echo ( $value == "cricket"  ?   'checked' : 'unchecked' );};     ?>  >
            <label> Playing cricket </label>
            <input type="checkbox" name='hobby_list[]' value="football" <?php //foreach ($current_hobby_list_array as $value) {echo ( $value == "football"  ?   'checked' : 'unchecked' );};    ?>  >
            <label> Playing football </lable>
            <input type="checkbox" name='hobby_list[]' value="swimming" <?php //foreach ($current_hobby_list_array as $value) {echo ( $value == "swimming"  ?   'checked' : 'unchecked' );};     ?>  >
            <label> Swimming </lable>
            <input type="checkbox" name='hobby_list[]' value="gaming"  <?php //foreach ($current_hobby_list_array as $value) {echo ( $value == "gaming"  ?   'checked' : 'unchecked' );};     ?>  >
            <label> Playing games </lable>
            <input type="checkbox" name='hobby_list[]' value="reading" <?php // foreach ($current_hobby_list_array as $value) {echo ( $value == "reading"  ?   'checked' : 'unchecked' );};     ?>  >
            <label>Reading</lable>
 -->

        </div>
        

        

        <?php
        if (isset($hobby_error)) {
            "<p>" .  "<font color=red>" . $hobby_error . "</font></p>";
        }
        ?>

        </br>

        <div>
            <label> Date of Birth: </label>
            <input type="date" name="date_of_birth" id="date_of_birth" value= <?php echo $current_date_of_birth ?> min="1900-01-01" max="2001-05-01" >&ensp;
            <label> (You should be older than 21 years) </label>
        </div>
        </br>


        <div>
            <label> Profile Picture (Only .jpg, .jpeg, .png) </label>
            <input type="file" name="profile_picture" id="profile_picture" value= <?php echo $current_profile_picture ?> accept=".jpg, .jpeg, .png"> 
            <label>Size must be lesser than 1 MB</label>
            <?php echo "<br>current file name: " . $current_profile_picture ?>
        </div>
        </br>


        <div>
             <!-- <button type="submit" onclick="loadDoc()" > Submit </button> -->
            <input type="submit" name="submit" value="submit" >

        
        </div>  

    </form>

<?php

// }


?>

<?php


?>