<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Assignment1 data</title>
</head>
<body>
    <p>
        <?php
        $first     = filter_input(INPUT_POST, "firstname");
        $last = filter_input(INPUT_POST, "lastname");
		$age = filter_input(INPUT_POST, "ages");
		$gender = filter_input(INPUT_POST, "Gender");
		$car = filter_input(INPUT_POST, "cars");
		$role = filter_input(INPUT_POST, "role");
        
		
		
        try {
			
        // Connect to the database.
        $con = new PDO("mysql:host=localhost;dbname=cs174", "root", "jeff1239210");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
		//check if the data existed in the database
		 if ((strlen($first) > 0) && (strlen($last) > 0)) {
                $query = "SELECT * FROM assignment1 WHERE Firstname = '$first' AND Lastname='$last'";
            }
                
         $data = $con->query($query);
         $data->setFetchMode(PDO::FETCH_ASSOC);
				
		 if ($data->rowCount() > 0) {
			 
		  print ("$first $last already exists in the list");
		  print "<table border='3'>
            \n";
             $query = "SELECT * FROM assignment1";
            // Fetch the database field names.
            $result = $con->query($query);
            $data = $result->fetch(PDO::FETCH_ASSOC);
          
            // Construct the header row of the HTML table.
            print "
            <tr>
                \n";
				
                foreach ($data as $field => $value) {
					
                print "
                <th>$field</th>\n";
                }
                print "
            <tr>
                \n";
				
				 $result = $con->query($query);
                 $result->setFetchMode(PDO::FETCH_ASSOC);
			     
				 foreach ($result as $row) {
                print "
            <tr>
                \n";

                foreach ($row as $name => $value) {
                print "
                <td>$value</td>\n";
                }

                print "
            </tr>\n";
            }
			
			die();
            }
		 
		
        // We're going to construct an HTML table.
        print "<table border='3'>
            \n";
             $query = "SELECT * FROM assignment1";
            // Fetch the database field names.
            $result = $con->query($query);
            $row = $result->fetch(PDO::FETCH_ASSOC);
          
            // Construct the header row of the HTML table.
            print "
            <tr>
                \n";
				
                foreach ($row as $field => $value) {
					
                print "
                <th>$field</th>\n";
                }
                print "
            <tr>
                \n";

               
				//insert new data into table
				$query = "INSERT INTO assignment1 (`Firstname`, `Lastname`, `Age`, `Gender`, `Role`, `Car`)
				VALUES ('$first','$last','$age','$gender','$role','$car')";
				$data = $con->query($query);
				
				$query = "SELECT * FROM assignment1";
				$data = $con->query($query);
                $data->setFetchMode(PDO::FETCH_ASSOC);
				
                // Construct the HTML table row by row.
                foreach ($data as $row) {
                print "
            <tr>
                \n";

                foreach ($row as $name => $value) {
                print "
                <td>$value</td>\n";
                }

                print "
            </tr>\n";
            }

            print "</table>\n";
        }
        catch(PDOException $ex) {
        echo 'ERROR: '.$ex->getMessage();
        }
        ?>
    </p>
</body>
</html>