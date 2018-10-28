<?php include "includes/top.php"?>
<?php include "includes/header.php"?>
<div class="container">
    <div class="single">
        <div class="form-container">
            <h2>User's Registration</h2>
            <form>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="firstName">Candidate Name</label>
                        <div class="col-md-9">
                            <input type="text" path="firstName" id="firstName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="lastName">Phone No.</label>
                        <div class="col-md-9">
                            <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="sex">Sex</label>
                        <div class="col-md-9" class="form-control input-sm">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <input type="radio" name="scale" value="male"> Male
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <input type="radio" name="scale" value="male"> Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="dob">Birthday</label>
                        <div class="col-md-9">
                            <input type="text" path="dob" id="datepicker" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="lastName">Address</label>
                        <div class="col-md-9">
                            <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="email">Email</label>
                        <div class="col-md-9">
                            <input type="text" path="email" id="email" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="email">Extra Skills In</label>
                        <div class="col-md-9">
                            <input type="text" path="email" id="tags" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="country">Interested In</label>
                        <div class="col-md-9">
                            <select path="country" id="country" class="form-control input-sm">
                                <option value="">Select A Job</option>
                                <option value="">Programmer</option>
                                <option value="">Algorithmist</option>
                                <option value="">Network Security</option>
                                <option value="">IT</option>
                                <option value="">All Jobs</option>
                                <option value="">Car Consultant</option>
                                <option value="">Nursing</option>
                                <option value="">Security</option>
                                <option value="">Driver</option>
                                <option value="">Restaurant</option>
                                <option value="">Tech Support</option>
                                <option value="">Part Time Jobs</option>
                                <option value="">Health Care</option>
                                <option value="">Internships</option>
                                <option value="">Research</option>
                                <option value="">Defence Jobs</option>
                            </select>
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