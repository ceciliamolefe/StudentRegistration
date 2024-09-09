<?php 
    session_start();

    if (isset($_SESSION['Lusername'])) {
        // Fetch username from session
        $loggeduser = $_SESSION['Lusername'];

        // Check if usersidnum is set in session, otherwise handle the error
        if (isset($_SESSION['usersidnum'])) {
            $idnum = $_SESSION['usersidnum'];
        } else {
            // Handle the case where 'usersidnum' is not set
            echo "<script>alert('Login failed, ID number not found in session.')</script>";
            // Redirect to login or error page if ID is critical
            header("Location: index.php");
            exit();
        }

        // Database connection
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "studentonline";
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL query
        $sql = "SELECT ID, firstname, lastname, idnumber, gender, studyYear, paid, status FROM applications WHERE idnumber = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $idnum);  // Bind the idnum to the query
        $stmt->execute();
        $result = $stmt->get_result();

        $rowCount = 0;

        // Check if there are any results
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rowCount++;
                $pID = $row['ID'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $idnumber = $row['idnumber'];
                $gender = $row['gender'];
                $studyYear = $row['studyYear'];
                $status = $row['status'];
                $paid = $row['paid'];

                // Output the HTML content
                echo <<<_END
                    <!DOCTYPE html>
                    <html>
                        <head>
                            <title></title>
                            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
                            <link rel="stylesheet" href="cssFooter.css"> 
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
                            <link rel="stylesheet" type="text/css" href="newcss.css">
                        </head>
                        <body>
                            <header>
                                <label>
                                    <input type="checkbox">
                                    <div class="toggle">
                                        <span class="top_line common"></span>
                                        <span class="middle_line common"></span>
                                        <span class="bottom_line common"></span>
                                    </div>
                                    <div class="slide">
                                        <h1>Navigate to?</h1>
                                        <ul>            
                                            <li><a href="NewStudentMedical.php"><i class="far fa-comments"></i>Do Medical form</a></li>
                                            <li><a href="StudentViewDepartmentsUI.php"><i class="far fa-comments"></i>View Departments</a></li>
                                            <li><a href="Logout.php"><i class="far fa-user"></i>Logout</a></li>    
                                        </ul>
                                    </div>
                                </label>
                            </header> 
                            
                            <div class="information">
                                <form>
                                    <label style="font-size: 18px; font-weight: bolder; align: center;">Welcome $loggeduser</label>
                                    <label style="font-size: 18px; font-weight: bolder; align: center;">My Applications</label>
                                    <div class="intro-table">
                                        <table class="table-services" style="color: black;">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>    
                                                    <th>ID Number</th>
                                                    <th>Gender</th>    
                                                    <th>Study Year</th>
                                                    <th>Status</th>    
                                                    <th>Paid</th>    
                                                    <th>Option</th>    
                                                </tr>    
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>$pID</td>
                                                    <td>$firstname</td> 
                                                    <td>$lastname</td>
                                                    <td>$idnumber</td> 
                                                    <td>$gender</td> 
                                                    <td>$studyYear</td>
                                                    <td>$status</td> 
                                                    <td>$paid</td> 
                                                    <td>
                                                        <div class="div-btn">
                                                            <a href="PayApplication.php?idnum=$idnumber" class="btn-view" name="pay">Pay</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </body>
                    </html>
                _END;
            }
        } else {
            echo "<script>alert('No records found for ID number $idnum.')</script>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo '<script>alert("Access denied, please login.")</script>';
        header("Location: index.php");
        exit();
    }
?>




