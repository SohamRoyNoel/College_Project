<?php include "includes/header.php";?>

<?php include "includes/nav.php";?>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">

        <!--banner-->
        <div class="banner">

            <h2>
                <a href="index.php">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Dashboard</span>
            </h2>
        </div>



        <?php
        if(isset($_SESSION['name'])) {

            $username = $_SESSION['name'];

            $query = "SELECT * FROM creators WHERE name = '{$username}' ";

            $select_user_profile_query = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($select_user_profile_query)) {

                $id = $row['id'];
                $name = $row['name'];
                $password= $row['password'];
                $no = $row['no'];
                $sex = $row['sex'];
                $email = $row['email'];
                $image1 = $row['img'];
                $dob = $row['dob'];
                $add = $row['address'];
                $extra = $row['extra'];



            }


        }
        ?>

        <div class="validation-system">

            <div class="validation-form">
                <!---->

                <?php
                if(isset($_POST['edit_user'])) {


                     echo $_SESSION['img'];
                    $no = $_POST['no'];
                    $sex = $_POST['sex'];
                    $dob = $_POST['dob'];
                    $add = $_POST['address'];
                    $extra = $_POST['extra'];
                    $images = $_FILES['image']['name'];
                    $image_temps = $_FILES['image']['tmp_name'];


                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    move_uploaded_file($image_temps, "images/$images" );


                    if ($images == ""){
                        $images = $_SESSION['img'];
                        echo "<script>alert(\"There is another account with this email.\")</script>";
                    }

                    $query = "UPDATE creators SET ";
                    $query .="no  = '{$no}', ";
                    $query .="sex = '{$sex}', ";
                    $query .="dob = '{$dob}', ";
                    $query .="address = '{$add}', ";
                    $query .="extra = '{$extra}', ";
                    $query .="img = '{$images}', ";
                    $query .="name = '{$name}', ";
                    $query .="email = '{$email}', ";
                    $query .="password   = '{$password}' ";
                    $query .= "WHERE name = '{$username}' ";


                    $edit_user_query = mysqli_query($connection,$query);

                    confirmQuery($edit_user_query);

                    print("<script>window.alert('Profile Updated');</script>");
                    // header("Location: edit_profile.php");

                }
                ?>

                <form id="form"  action="" method="post" enctype="multipart/form-data">
                    <div class="vali-form">
                        <div class="col-md-6 form-group1">
                            <label for="usname" class="control-label">Name</label>
                            <input value="<?php echo $name; ?>" type="text" placeholder="Name" required="" name="name">
                        </div>
                        <div class="col-md-6 form-group1">
                            <label for="email" class="control-label">Email</label>
                            <input value="<?php echo $email; ?>" type="email" placeholder="Email" required="" name="email">
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="col-md-6 form-group1">
                        <label class="control-label">Phone no</label>
                        <input value="<?php echo $no; ?>" name="no" type="text" placeholder="No." required="">
                    </div>
                    <div class="col-md-6 form-group1">
                        <label class="control-label">Date of Birth</label>
                        <input value="<?php echo $dob; ?>" name="dob" type="date" placeholder="" required="">
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-6 form-group1">
                        <label class="control-label">Address</label>
                        <input value="<?php echo $add; ?>" name="address" type="text" placeholder="Address" required="">
                    </div>
                    <div class="clearfix"> </div>
                    <div class="panel-body">
                        <select name="sex" id="" class="form-control">
                            <option value='<?php echo $sex ?>'><?php echo $sex; ?></option>
                            <?php
                            if($sex == 'male' ) {
                            echo "<option value='female'>female</option>";
                            } else {
                            echo "<option value='male'>male</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image" for="exampleInputFile">File input</label>
                        <!--                        <img width="100" src="images/--><?php //echo $image1; ?><!--" alt="">-->
                        <input type="file" id="exampleInputFile" name="image">
                    </div>

                    <div class="col-md-6 form-group1">
                        <label for="extra" class="control-label">Extra</label>
                        <input value="<?php echo $extra; ?>" type="text" placeholder="Extra" required=""  name="extra">
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-12 form-group1 ">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" value="<?php echo $password;  ?>" name="password"  placeholder="password" required="">
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-12 form-group">
                        <button name="edit_user" type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>

                    <div class="clearfix"> </div>

                </form>
                <!---->
            </div>

        </div>
        <?php include "includes/footer.php";?>
	 