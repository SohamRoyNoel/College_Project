<?php include "includes/top.php"?>
<?php include "includes/header.php"?>
<div class="container">
    <div class="col-sm-7">
        <div class="single">
            <div class="form-container">
                <h2>Post Job Here</h2>
                <form>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="firstName">Job Role</label>
                            <div class="col-md-9">
                                <input type="text" path="firstName" id="firstName" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="lastName">Education</label>
                            <div class="col-md-9">
                                <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="lastName">Role</label>
                            <div class="col-md-9">
                                <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="country">Target To</label>
                            <div class="col-md-9">
                                <select path="country" id="country" class="form-control input-sm">
                                    <option value="">Select Type Of Job</option>
                                    <option value="">Tech Support</option>
                                    <option value="">Part Time</option>
                                    <option value="">Full Time</option>
                                    <option value="">Internship</option>
                                    <option value="">Health Care</option>
                                    <option value="">Research</option>
                                    <option value="">Defence</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">Job Location</label>
                            <div class="col-md-9">
                                <input type="text" id="loc" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">Salary</label>
                            <div class="col-md-9">
                                <input type="text" path="dob" id="dob" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="dob">HR Contact</label>
                            <div class="col-md-9">
                                <input type="text" path="dob" id="dob" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="email">HR Email</label>
                            <div class="col-md-9">
                                <input type="text" path="email" id="email" class="form-control input-sm"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="subjects">Object</label>
                            <div class="col-md-9 sm_1">
                                <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"> </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-actions floatRight">
                            <input type="submit" value="Register" class="btn btn-primary btn-sm">
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