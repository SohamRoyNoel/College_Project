<?php include "includes/top.php"?>
<?php include "includes/header.php"?>

<?php
if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $query = "select * from user where id={$id}";
    $send = mysqli_query($connection, $query);

    if (!$send){
        die("failed".mysqli_error());
    }


    while ($row = mysqli_fetch_assoc($send)){
        $name = $row['name'];
        $phone = $row['phone'];
        $sex = $row['sex'];
        $dob = $row['dob'];
        $add = $row['address'];
        $em = $row['email'];
        $extra = $row['extra'];
        $interest = $row['interest'];
        $password = $row['password'];
    }


}
?>

<?php
        if (isset($_POST['bt1'])){
            $ns = $_POST['names'];
            $up1 = "update user set name = '{$ns}' where id = {$id}";
            $ups = mysqli_query($connection, $up1);
            header("Location: userprofile.php");
        }
        if (isset($_POST['bt2'])){
            $phones = $_POST['phones'];
            $up1 = "update user set phone = '{$phones}' where id = {$id}";
            $ups = mysqli_query($connection, $up1);
            header("Location: userprofile.php");
        }
        if (isset($_POST['bt3'])){
            $sexs = $_POST['sexs'];
            $up1 = "update user set sex = '{$sexs}' where id = {$id}";
            $ups = mysqli_query($connection, $up1);
            header("Location: userprofile.php");
        }
        if (isset($_POST['bt4'])){
            $dobs = $_POST['dobs'];
            $up1 = "update user set dob = '{$dobs}' where id = {$id}";
            $ups = mysqli_query($connection, $up1);
            header("Location: userprofile.php");
        }
        if (isset($_POST['bt5'])){
            $adds = $_POST['adds'];
            $up1 = "update user set address = '{$adds}' where id = {$id}";
            $ups = mysqli_query($connection, $up1);
            header("Location: userprofile.php");
        }
        if (isset($_POST['bt6'])){
            $extras = $_POST['extras'];
            $up1 = "update user set extra = '{$extras}' where id = {$id}";
            $ups = mysqli_query($connection, $up1);
            header("Location: userprofile.php");
        }
        if (isset($_POST['bt7'])){
            $interests = $_POST['interests'];
            $up1 = "update user set interest = '{$interests}' where id = {$id}";
            $ups = mysqli_query($connection, $up1);
            header("Location: userprofile.php");
        }
?>

<div class="container">
    <div class="col-sm-4">
        <div class="single">
            <div class="righ" style="alignment: right">
                <img height="300" width="350" class="img img-circle" src="images/1.png">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="single">
            <div class="form-container">
                <h2>Welcome <?php echo $name; ?></h2>
                <div class="accordation">
                    <div class="jb-accordion-wrapper">
                        <div class="jb-accordion-title"><?php echo $name; ?><button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion3"><i class="fa fa-angle-double-down"> </i></button></div>
                        <p><!-- /.accordion-title -->
                        </p><div id="accordion3" class="jb-accordion-content collapse ">
                            <p>Name : <?php echo $name?></p>
                            <p>Phone : <?php echo $phone?>  </p>
                            <p>Sex : <?php echo $sex?>  </p>
                            <p>Date of Birth : <?php echo $dob?>  </p>
                            <p>Address : <?php echo $add?>  </p>
                            <p>Email : <?php echo $em?>  </p>
                            <p>Skill : <?php echo $extra?>  </p>
                            <p>Interest : <?php echo ($interest==1?"Programmer":($interest==2?"Algorithmist":($interest==3?"Network Security"
                                    :($interest==4?"IT":($interest==5?"All Jobs":($interest==6?"Car Consultant":($interest==7?"Nursing"
                                        :($interest==8?"Security":($interest==9?"Driver":($interest==10?"Resturant":($interest==11?"Programmer"
                                            :($interest==12?"Programmer":($interest==13?"Programmer":($interest==14?"Programmer":($interest==15?"Programmer"
                                                :$interest==16?"Programmer":""))))))))))))))) ?>  </p>
                            <p>Password : <?php echo $password?>  </p>
                        </div>
                        <p><!-- /.collapse --></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="single">

            <h2>Easy Edit</h2>
            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <input type="text" class="form-control" name="names" placeholder="Name" value="<?php echo $name?>">
                    <span class="input-group-btn">
                <button class="btn btn-default" name="bt1" type="submit">Edit!!</button>
                </span>
                </div>
                </p>
            </form>

            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <input type="text" class="form-control" name="phones" placeholder="Phone" value="<?php echo $phone; ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-default" name="bt2" type="submit">Edit!!</button>
                        </span>
                </div>
                </p>
            </form>

            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <input type="text" class="form-control" name="sexs" placeholder="Sex" value="<?php echo $sex?>">
                    <span class="input-group-btn">
                        <button class="btn btn-default" name="bt3" type="submit">Edit!!</button>
                        </span>
                </div>
                </p>
            </form>

            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <input type="text" class="form-control" name="dobs" id="datepicker" placeholder="Date Of Birth" value="<?php echo $dob?>">
                    <span class="input-group-btn">
                        <button class="btn btn-default" name="bt4" type="submit">Edit!!</button>
                        </span>
                </div>
                </p>
            </form>

            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <input type="text" class="form-control" name="adds" placeholder="Address" value="<?php echo $add?>">
                    <span class="input-group-btn">
                        <button class="btn btn-default" name="bt5" type="submit">Edit!!</button>
                        </span>
                </div>
                </p>
            </form>

            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <input type="text" class="form-control" id="tags" name="extras" placeholder="Skill" value="<?php echo $extra?>">
                    <span class="input-group-btn">
                        <button class="btn btn-default" name="bt6" type="submit">Edit!!</button>
                        </span>
                </div>
                </p>
            </form>

            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <select name="interests" id="country" class="form-control input-sm">
                        <option value=""><?php echo ($interest==1?"Programmer":($interest==2?"Algorithmist":($interest==3?"Network Security"
                            :($interest==4?"IT":($interest==5?"All Jobs":($interest==6?"Car Consultant":($interest==7?"Nursing"
                                    :($interest==8?"Security":($interest==9?"Driver":($interest==10?"Resturant":($interest==11?"Programmer"
                                        :($interest==12?"Programmer":($interest==13?"Programmer":($interest==14?"Programmer":($interest==15?"Programmer"
                                            :$interest==16?"Programmer":""))))))))))))))) ?></option>
                        <option value="1">Programmer</option>
                        <option value="2">Algorithmist</option>
                        <option value="3">Network Security</option>
                        <option value="4">IT</option>
                        <option value="5">All Jobs</option>
                        <option value="6">Car Consultant</option>
                        <option value="7">Nursing</option>
                        <option value="8">Security</option>
                        <option value="9">Driver</option>
                        <option value="10">Restaurant</option>
                        <option value="11">Tech Support</option>
                        <option value="12">Part Time Jobs</option>
                        <option value="13">Health Care</option>
                        <option value="14">Internships</option>
                        <option value="15">Research</option>
                        <option value="16">Defence Jobs</option>
                    </select>
                    <span class="input-group-btn">
                        <button class="btn btn-default" name="bt7" type="submit">Edit!!</button>
                        </span>
                </div>
                </p>
            </form>

            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <input type="text" class="form-control" placeholder="Email" value="<?php echo $em?>" disabled>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">NoEdit!!</button>
                        </span>
                </div>
                </p>
            </form>

            <form action="" method="post">
                <p>
                <div class="input-group" style="margin-bottom: 5px">
                    <input type="text" class="form-control" placeholder="Password Change : Use Forget password" disabled>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">NoEdit!!</button>
                        </span>
                </div>
                </p>
            </form>
        </div>
    </div>
</div>
</div>