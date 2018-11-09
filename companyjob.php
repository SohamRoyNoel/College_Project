<?php include "includes/top.php"?>
<?php include "includes/header.php"?>

<?php
if (!isset($_SESSION['id']) && !isset($_SESSION['reg']) && !isset($_SESSION['iso'])){
    header("Location: error.php");
}
?>

<?php
if (isset($_POST['submit'])){
    $company_id = $_SESSION['id'];
    $object = $_POST['object'];
    $hremail = $_POST['hremail'];
    $hrcontact = $_POST['hrcontact'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];
    $target = $_POST['target'];
    $skill = $_POST['skill'];
    $education = $_POST['education'];
    $role = $_POST['role'];

    if (!is_null($object) && !is_null($hremail) && !is_null($hrcontact) && !is_null($salary) && !is_null($location) && !is_null($target) && !is_null($skill) && !is_null($education) && !is_null($role)){

        $query = "insert into jobs (company_id, role, mineducation, skill, targetTo, location, salary, HRph, HRem, object) values 
                          ('{$company_id }', '{$role}', '{$education}', '{$skill}', '{$target}', '{$location}', '{$salary}', '{$hrcontact}', '{$hremail}', '{$object}')";
        $execute = mysqli_query($connection, $query);

        header("Location: companyjob.php");

    }
}
?>



<div class="container">
    <div class="col-sm-7">
        <div class="single">
            <div class="form-container">
                <h2>Post Job Here</h2>
                <form action="" method="post">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="firstName">Job Role</label>
                            <div class="col-md-9">
                                <input type="text" path="firstName" maxlength="15" minlength="4" id="firstName" name="role" class="form-control input-sm" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="lastName">Education</label>
                            <div class="col-md-9">
                                <input type="text" path="lastName" id="lastName" maxlength="20" minlength="2" name="education" class="form-control input-sm" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="lastName">Skill</label>
                            <div class="col-md-9">
                                <input type="text" path="lastName" id="lastName" maxlength="50" minlength="1" name="skill" class="form-control input-sm" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="country">Target To</label>
                            <div class="col-md-9">
                                <select name="target" path="country" id="country" class="form-control input-sm">
                                    <option value="">Select Type Of Job</option>
                                    <option value="Tech Support">Tech Support</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Health Care">Health Care</option>
                                    <option value="Research">Research</option>
                                    <option value="Defence">Defence</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">Job Location</label>
                            <div class="col-md-9">
                                <input type="text" name="location" maxlength="15" minlength="4" id="loc" class="form-control input-sm" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">Salary</label>
                            <div class="col-md-9">
                                <input type="text" name="salary" path="dob" maxlength="10" minlength="4" id="dob" class="form-control input-sm" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">HR Contact</label>
                            <div class="col-md-9">
                                <input type="text" path="dob" name="hrcontact" maxlength="10" minlength="10" id="dob" class="form-control input-sm" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="email">HR Email</label>
                            <div class="col-md-9">
                                <input type="text" path="email" name="hremail" maxlength="50" minlength="4" id="email" class="form-control input-sm" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="subjects">Object</label>
                            <div class="col-md-9 sm_1">
                                <textarea maxlength="200" minlength="10" required name="object" cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-actions floatRight">
                            <input type="submit" name="submit" value="Post" class="btn btn-primary btn-sm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="single">
            <div class="form-container">
                <h2>Your Previous Jobs</h2>

                <style>
                    .collapsible {
                        background-color: #00aced;
                        color: white;
                        cursor: pointer;
                        padding: 18px;
                        width: 100%;
                        border: none;
                        text-align: left;
                        outline: none;
                        font-size: 15px;
                    }

                    .active, .collapsible:hover {
                        background-color: #555;
                    }

                    .content {
                        padding: 0 18px;
                        display: none;
                        overflow: hidden;
                        background-color: #f1f1f1;
                    }
                </style>

                <?php
                $companys_id = $_SESSION['id'];
                $query = "select * from jobs where company_id='{$companys_id}'";
                $send = mysqli_query($connection, $query);

                if (!$send){
                    die("failed".mysqli_error());
                }

                while ($row = mysqli_fetch_assoc($send)){
                    $object1 = $row['object'];
                    $hremail1 = $row['HRem'];
                    $hrcontact1 = $row['HRph'];
                    $salary1 = $row['salary'];
                    $location1 = $row['location'];
                    $target1 = $row['targetTo'];
                    $skill1 = $row['skill'];
                    $education1 = $row['mineducation'];
                    $role1 = $row['role'];

                    ?>
                    <button class="collapsible">
                        <div style="color: black">
                            <b style="color: #D2CF99">Company :</b> <?php echo $_SESSION['name']; ?><br>
                            <b style="color: #D2CF99">Role :</b><?php echo $role1; ?><br>
                            <b style="color: #D2CF99">Min Education :</b><?php echo $education1; ?><br>
                            <b style="color: #D2CF99">Skill :</b><?php echo $skill1; ?><br>
                            <b style="color: #D2CF99">Target :</b><?php echo $target1; ?><br>
                            <b style="color: #D2CF99">Location :</b><?php echo $location1; ?><br>
                            <b style="color: #D2CF99">Salary :</b><?php echo $salary1; ?><br>
                            <b style="color: #D2CF99">HRPhone :</b><?php echo $hrcontact1; ?><br>
                            <b style="color: #D2CF99">HRMail :</b><?php echo $hremail1; ?><br>
                            <b style="color: #D2CF99">Job Objective :</b><?php echo $object1; ?><br>
                        </div>
                    </button>
                    <div class="content">
                        <!--inside edit form-->
                        <p>
                        <h2>Edit</h2>
                        <div class="container">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="firstName">Job Role</label>
                                        <div class="col-md-9">
                                            <input value="<?php echo $role1?>" type="text" path="firstName" maxlength="15" minlength="4" id="firstName" name="role" class="form-control input-sm" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="lastName">Education</label>
                                        <div class="col-md-9">
                                            <input type="text" value="<?php echo $education1?>" path="lastName" id="lastName" maxlength="20" minlength="2" name="education" class="form-control input-sm" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="lastName">Skill</label>
                                        <div class="col-md-9">
                                            <input type="text" value="<?php echo $skill1?>" path="lastName" id="lastName" maxlength="50" minlength="1" name="skill" class="form-control input-sm" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="country">Target To</label>
                                        <div class="col-md-9">
                                            <select name="target" path="country" id="country" class="form-control input-sm">
                                                <option value=""><?php echo $target1?></option>
                                                <option value="Tech Support">Tech Support</option>
                                                <option value="Part Time">Part Time</option>
                                                <option value="Full Time">Full Time</option>
                                                <option value="Internship">Internship</option>
                                                <option value="Health Care">Health Care</option>
                                                <option value="Research">Research</option>
                                                <option value="Defence">Defence</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="dob">Job Location</label>
                                        <div class="col-md-9">
                                            <input type="text" value="<?php echo $location1?>" name="location" maxlength="15" minlength="4" id="loc" class="form-control input-sm" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="dob">Salary</label>
                                        <div class="col-md-9">
                                            <input type="text" value="<?php echo $salary1?>" name="salary" path="dob" maxlength="10" minlength="4" id="dob" class="form-control input-sm" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="dob">HR Contact</label>
                                        <div class="col-md-9">
                                            <input type="text" path="dob" value="<?php echo $hrcontact1?>" name="hrcontact" maxlength="10" minlength="10" id="dob" class="form-control input-sm" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="email">HR Email</label>
                                        <div class="col-md-9">
                                            <input type="text" path="email" value="<?php echo $hremail1?>" name="hremail" maxlength="50" minlength="4" id="email" class="form-control input-sm" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="col-md-3 control-lable" for="subjects">Object</label>
                                        <div class="col-md-9 sm_1">
                                            <input type="text" path="email" value="<?php echo $object1?>" name="hremail" maxlength="50" minlength="4" id="email" class="form-control input-sm" required/>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-actions">
                                        <input type="submit" name="submit" value="Edit" class="btn btn-primary btn-sm">
                                    </div>
                                </div>
                            </form>
                            <br>
                        </div>
                        </p>
                        <!--inside edit form-->
                    </div>
                <?php } ?>
                <script>
                    var coll = document.getElementsByClassName("collapsible");
                    var i;

                    for (i = 0; i < coll.length; i++) {
                        coll[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var content = this.nextElementSibling;
                            if (content.style.display === "block") {
                                content.style.display = "none";
                            } else {
                                content.style.display = "block";
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>