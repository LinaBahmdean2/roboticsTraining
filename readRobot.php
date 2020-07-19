
<?php



        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "robot";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }



        // choose button action
        if(isset($_POST['move_right'])) { 
            //insert to the database and print the direction
            $sql = "INSERT INTO movements (move_right)
            VALUES ('R')";

            if ($conn->query($sql) === TRUE) {
            echo "R";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else if(isset($_POST['move_left'])) { 
            $sql = "INSERT INTO movements (move_left)
            VALUES ('L')";

            if ($conn->query($sql) === TRUE) {
            echo "L";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
        }
        else if(isset($_POST['move_forward'])) { 
            $sql = "INSERT INTO movements (move_forward)
            VALUES ('F')";

            if ($conn->query($sql) === TRUE) {
            echo "F";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
        }
        else { 
            $sql = "INSERT INTO movements (move_backward)
            VALUES ('B')";

            if ($conn->query($sql) === TRUE) {
            echo "B";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }


        //close the connection to the database
        $conn->close();
      
    ?>
    