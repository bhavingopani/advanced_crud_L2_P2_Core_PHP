<?php

  if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
      
      $connection->close();  #No need to close the db connection.



?>