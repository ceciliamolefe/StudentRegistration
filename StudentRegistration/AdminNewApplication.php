<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title></title>
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style.css"> 
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
                        <li><a href="AllApplications.php"><i class="far fa-comments"></i>All Application</a></li>		
                        <li><a href="AdmissionCoDash.php"><i class="far fa-comments"></i>Pending Applications</a></li>

                        <li><a href="ApprovedApplications.php"><i class="far fa-comments"></i>Approved Applications</a></li>
                        <li><a href="RejectedApplications.php"><i class="far fa-comments"></i>Rejected Applications</a></li>
                        <li><a href="NewUser.php"><i class="far fa-comments"></i>New User</a></li>
                        <li><a href="Users.php"><i class="far fa-comments"></i>View Users</a></li>

                        <li><a href="Logout.php"><i class="far fa-user"></i>Logout</a></li>	
                    </ul>
                </div>
                </label>
            </header> 

                    <div class="topic-t">
                        <h1>Register</h1>
                    </div>

            <form style="background: white; color: black;" action="AdminSaveApplication.php" method="POST">
                <div class="title">
                    <h2>Personal Details</h2>
                </div>

                <div class="half">

                    <div class="item">
                        <label >First name:</label>
                        <input type="text" placeholder="first name" name="firstname">
                    </div>

                    <div class="item">
                        <label >Last name:</label>
                        <input type="text" placeholder="last name" name="lastname">
                    </div>
                </div>

                <div class="half">

                    <div class="item">
                        <label>ID number:</label>
                        <input type="text" placeholder="Id number" name="idnumber">
                    </div>

                    <div class="item">
                        <label >Gender</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="gender" size="1">
                                <option value="empty"> </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other..</option>
                            </select>
                    </div>
                </div>

                <div class="half">

                    <div class="item">
                        <label>Contact</label>
                        <input type="text" name="contact" placeholder="contact">
                    </div> 
                    

                    <div class="item">
                        <label>Address</label>
                        <input placeholder="Address"  type="text" name="address">
                    </div>
                </div>

                <div class="title">
                    <h2>Course of Interest</h2>
                </div>

                <div class="half">
                    <div class="item">
                        <label >Course:</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="course" size="1">
                                <option value="empty"> </option>
                                <option value="Diploma in Systems Development">Diploma in Systems Development</option>
                                <option value="Bachelor in Systems Development">Bachelor in Systems Development</option>
                                <option value="Diploma in Network Systems ">Diploma in Network Systems </option>
                                <option value="Bachelor in Network Systems">Bachelor in Network Systems</option>
                            </select>
                    </div>

                    <div class="item">
                        <label >Study Year:</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="Studyyear" size="1">
                                <option value="empty"> </option>
                                <option value="2023">2023 July</option>
                                <option value="2024">2024</option>
                            </select>
                    </div>
                </div>

                <div class="half">
                    <div class="item">
                        <label >Mode Of Study:</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="modeofstudy" size="1">
                                <option value="empty"> </option>
                                <option value="Full time">Full time</option>
                                <option value="Part time">Part time</option>
                            </select>
                    </div>

                    <div class="item">
                        <label >Preffered Campus</label>
                            <select style="color:Red;" value="Choose from list" class="input-bo" name="campus" size="1">
                                <option value="empty"> </option>
                                <option value="soweto">Soweto</option>
                                <option value="alberton">Alberton</option>
                                <option value="limpopo">Limpopo</option>
                                <option value="rosebank">Rosebank</option>
                                <option value="durban">Durban</option>  
                                <option value="Randburg">Randburg</option>
                                <option value="capetown">Capetown</option>
                            </select>
                    </div>
                </div>

                <div class="action" >
                    <input type="submit" style="background: green;"value = "Proceed">
                    <input type="reset" style="background: green;" value = "Reset">
                </div>
            </form>


            </body>
        </html>