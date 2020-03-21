<?php

//Declare Variables for field values and error messages
$fname = $lname = $company = $email = $phone = $subject = $technologies = $developer = $success = $error = "";
$nameErr = $emailErr = "";
$db_name = 'php_practice';
$host = 'localhost';
$user = "root";
$password = "";
$con = mysqli_connect($host, $user, $password, $db_name);

$id = $_GET['id'];
$showQuery = "SELECT * FROM `regi_form` WHERE `ID`='$id'";
$showData = mysqli_query($con, $showQuery);
$arrayData = mysqli_fetch_array($showData);



if (isset($_POST['update'])) {

    //Functions Save From SQL Injection, Harmful Code or Invalid Data 
    function clean_input($fields)
    {
        $fields = trim($fields); //Cleans White Spaces
        $fields = stripslashes($fields); //Quoated Strins to HTML
        $fields = htmlspecialchars($fields); //Charaters to HTML
        return $fields;
    }
    $idUpdate = $_GET['id'];
    $fname = clean_input($_POST['first_name']);
    $lname = clean_input($_POST['last_name']);
    $company = clean_input($_POST['company']);
    $email = clean_input($_POST['email']);
    $phone = clean_input($_POST['phone_number']);
    $subject = clean_input($_POST['subject']);
    $developer = clean_input($_POST['exist']);
    $technologies = $_POST['technologies'];
    $tech = "";
    foreach ($technologies as $tech1) {
        //$tech.=$tech2.',';
        $tech = $tech . $tech1 . ',';
    }

    if (isset($fname) && $fname != "" && isset($lname) && $lname != "" && isset($company) && $company != "" && isset($email) && $email != "" && isset($phone) && $phone != "" && isset($subject) && $subject != "" && isset($developer) && $developer != "") {
        // Check if field contains only letters and white spaces
        if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
            $nameErr = "Only letters and white spaces are allowed";
        }

        // Check valid email ID with built-in function
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Enter a valid Email ID";
        } else {
            //$query="INSERT INTO `regi_form` (`First Name`, `Last Name`, `Company`, `Email`, `Phone`, `Subject`, `Technologies`,`Developer`) VALUES ('$fname', '$lname', '$company', '$email', '$phone', '$subject','$tech','$developer');";  
            $query = "UPDATE `regi_form` SET `First Name`='$fname',`Last Name`='$lname',`Company`='$company',`Email`='$email',`Phone`='$phone',`Subject`='$subject',`Technologies`='$tech',`Developer`='$developer' WHERE `ID`='$idUpdate'";

            $run = mysqli_query($con, $query);
            if ($run) { ?>
                <script>
                    alert('Updated Successfully!');
                    window.location = "view.php";
                </script>
<?php } else {
                die("Something is wrong with " . mysqli_error($con));
            }
        }
    } else {
        $error = "You must fill all the feilds!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Technologies Registration Form by Indylogix</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Technologies Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" value="<?php echo $arrayData['First Name']; ?> ">
                                            <label class="label--desc">first name</label>
                                            <label class="label--error"><?php echo $nameErr; ?></label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" value="<?php echo $arrayData['Last Name']; ?>">
                                            <label class="label--desc">last name</label>
                                            <label class="label--error"><?php echo $nameErr; ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Company</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company" value="<?php echo $arrayData['Company']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="<?php echo $arrayData['Email']; ?>">
                                    <label class="label--error"><?php echo $emailErr; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone_number" value="<?php echo $arrayData['Phone']; ?>">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="">Choose option</option>
                                            <option <?php if ($arrayData['Subject'] == "Subject 1") {
                                                        echo "selected";
                                                    } ?> selected="selected" value="Subject 1">Subject 1</option>
                                            <option <?php if ($arrayData['Subject'] == "Subject 2") {
                                                        echo "selected";
                                                    } ?> value="Subject 2">Subject 2</option>
                                            <option <?php if ($arrayData['Subject'] == "Subject 3") {
                                                        echo "selected";
                                                    } ?> value="Subject 3">Subject 3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row-check">
                            <div class="name">Which Technologies do you like to learn?</div>
                            <div class="value">
                                <div class="input-group">
                                    <?php
                                    $chkbox = $arrayData['Technologies'];
                                    $tech = explode(",", $chkbox);

                                    ?>
                                    <input <?php if (in_array("MEAN", $tech)) {
                                                echo "checked";
                                            } ?> type="checkbox" name="technologies[]" value="MEAN">
                                    <label for="mean">Mean Stack Developer</label>
                                    <input <?php if (in_array("MERN", $tech)) {
                                                echo "checked";
                                            } ?> type="checkbox" name="technologies[]" value="MERN">
                                    <label for="mern">Mern Stack Developer</label>
                                    <input <?php if (in_array("FULL STACK DEVELOPER", $tech)) {
                                                echo "checked";
                                            } ?> type="checkbox" name="technologies[]" value="FULL STACK DEVELOPER">
                                    <label for="full_stack">Full Stack Developer</label>
                                    <input <?php if (in_array("WORDPRESS", $tech)) {
                                                echo "checked";
                                            } ?> type="checkbox" name="technologies[]" value="WORDPRESS">
                                    <label for="wordpress">WordPress</label>
                                    <input <?php if (in_array("UX/UI", $tech)) {
                                                echo "checked";
                                            } ?> type="checkbox" name="technologies[]" value="UX/UI">
                                    <label for="ux/ui">UX/UI</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing Developer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist" value="Yes" <?php if ($arrayData['Developer'] == "Yes") {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist" value="No" <?php if ($arrayData['Developer'] == "No") {
                                                                                    echo "checked";
                                                                                } ?>>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="update">Update</button>
                            <button class="btn btn--radius-2 btn--red"><a href="view.php">View</a></button>
                        </div>
                        <div class="success">
                            <?php
                            if ($success) {
                                echo '<span style="display:block;">' . $success . '</span>';
                            }
                            ?>
                        </div>
                        <div class="error">
                            <?php
                            if ($error) {
                                echo '<span style="display:block;">' . $error . '</span>';
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->