<!DOCTYPE html>
<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Employee')">Employee</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Branch')">Branch</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Customer')" id="defaultOpen">Customer</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Services')">Services</a></li>
</ul>

<div id="Employee" class="tabcontent">
  <p>Employee text</p>
  <form method="post">
  Employee ID:<br>
  <input type="text" name="Employee_ID"><br>
  <input type="submit" value ="Submit">
  </form>
</div>

<div id="Branch" class="tabcontent">
  <p>Branch text</p> 
</div>

<div id="Customer" class="tabcontent">
  <p>Customer text</p>
</div>

<div id="Services" class="tabcontent">
  <p>Select service type</p>
  <form method="post">
      <select name="Service type">
          <option value="Account">Account</option>
          <option value="Loan">Loan</option>          
          <option value="Credit_Card">Credit Card</option>          
          <option value="Investment">Investment</option>
      </select>      
      <input type="submit" value ="Submit">
  </form>
</div>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bank</title>
        <link rel="stylesheet" type="text/css" href="tabFormat.css">
        <script>
            function openTab(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the link that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        </script>
        <script>
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
    </head>
    <body>
        <h1>Very professional-looking bank website</h1>
        <?php
            $servername = "localhost";          //should be same for you
            $username = "root";                 //same here
            $password = "database";             //your localhost root password
            $db = "Bank";                     //your database name
            
            $conn = new mysqli($servername, $username, $password, $db);
            
            if($conn->connect_error){
                die("Connection failed".$conn->connect_error);
            }else{
             //   echo "Connected<br>";
            }
            
//            //sql query
//            $sql = "INSERT INTO Employee (Employee_ID) VALUES (11)";
//           // echo "<br><br>Inserting  into db: ";
//            if($conn->query($sql)==TRUE){       //try executing the query 
//                //echo "Query executed<br>";
//            }
//            else{
//                //echo "Query did not execute<br>";
//            }
            
//            //sql query
//            $sql = "SELECT names FROM names";
//            echo "<br><br>Printing names in the (names) table in the (names) column:<br>";
//            $result = $conn->query($sql);       //execute the query
//            
//            if($result->num_rows >0){           //check if query results in more than 0 rows
//                while($row = $result->fetch_assoc()){   //loop until all rows in result are fetched
//                    echo "Name: ".$row["names"]."<br>"; //here we are looking at one row, and printing the value in "names" column
//                }
//            }
//            
            $conn-> close();            //close the connection to database
        ?>
    </body>
</html>