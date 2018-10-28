<?php include "includes/top.php"?>
<?php include "includes/header.php"?>
<div class="container">
    <div class="single">
        <div class="form-container">
            <h2>Companies' Registration</h2>
            <form>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="firstName">Company Name</label>
                        <div class="col-md-9">
                            <input type="text" path="firstName" id="firstName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="lastName">Registration No.</label>
                        <div class="col-md-9">
                            <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="lastName">ISO</label>
                        <div class="col-md-9">
                            <input type="text" path="lastName" id="lastName" class="form-control input-sm"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="sex">Scale</label>
                        <div class="col-md-9" class="form-control input-sm">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <input type="radio" name="scale" value="male"> Large
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <input type="radio" name="scale" value="male"> Medium
                                </label>
                                <label for="radio-03" class="label_radio">
                                    <input type="radio" name="scale" value="male"> Small
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="dob">Since</label>
                        <div class="col-md-9">
                            <input type="text" path="dob" id="dob" class="form-control input-sm"/>
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
                        <label class="col-md-3 control-lable" for="country">Country</label>
                        <div class="col-md-9">
                            <select path="country" id="country" class="form-control input-sm">
                                <option value="">Select Country</option>
                                <option value="">Japan</option>
                                <option value="">Kenya</option>
                                <option value="">Dubai</option>
                                <option value="">Italy</option>
                                <option value="">Greece</option>
                                <option value="">Iceland</option>
                                <option value="">China</option>
                                <option value="">Doha</option>
                                <option value="">Irland</option>
                                <option value="">Srilanka</option>
                                <option value="">Russia</option>
                                <option value="">Hong Kong</option>
                                <option value="">Germany</option>
                                <option value="">Canada</option>
                                <option value="">Mexico</option>
                                <option value="">Nepal</option>
                                <option value="">Norway</option>
                                <option value="">Oman</option>
                                <option value="">Pakistan</option>
                                <option value="">Kuwait</option>
                                <option value="">Indonesia</option>
                                <option value="">Spain</option>
                                <option value="">Thailand</option>
                                <option value="">Saudi Arabia</option>
                                <option value="">Poland</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-lable" for="subjects">Subjects</label>
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