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

                // header("Location: companyjob.php");

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
                                <input type="text" path="firstName" maxlength="15" minlength="4" id="firstName" name="role" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="lastName">Education</label>
                            <div class="col-md-9">
                                <input type="text" path="lastName" id="lastName" maxlength="20" minlength="2" name="education" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="lastName">Skill</label>
                            <div class="col-md-9">
                                <input type="text" path="lastName" id="lastName" maxlength="50" minlength="1" name="skill" class="form-control input-sm"/>
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
                                <input type="text" name="location" maxlength="15" minlength="4" id="loc" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">Salary</label>
                            <div class="col-md-9">
                                <input type="text" name="salary" path="dob" maxlength="10" minlength="4" id="dob" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">HR Contact</label>
                            <div class="col-md-9">
                                <input type="text" path="dob" name="hrcontact" maxlength="10" minlength="10" id="dob" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="email">HR Email</label>
                            <div class="col-md-9">
                                <input type="text" path="email" name="hremail" maxlength="50" minlength="4" id="email" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="subjects">Object</label>
                            <div class="col-md-9 sm_1">
                                <textarea maxlength="200" minlength="10" name="object" cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-actions floatRight">
                            <input type="submit" name="submit" value="Register" class="btn btn-primary btn-sm">
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
                <div class="accordation">
                    <div class="jb-accordion-wrapper">
                        <div class="jb-accordion-title">Accordion3<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion3"><i class="fa fa-angle-double-down"> </i></button></div>
                        <p><!-- /.accordion-title -->
                        </p><div id="accordion3" class="jb-accordion-content collapse ">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt </p>
                        </div>
                        <p><!-- /.collapse --></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>