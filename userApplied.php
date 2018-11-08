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
        $pic = $row['img'];
    }
} else{
    header("Location: error.php");
}
?>

<div class="container">
    <div class="single">
        <div class="col-md-4">
            <div class="col_3">
                <h3>Todays Jobs</h3>
                <ul class="list_1">
                    <li><a href="#">Department of Health - Western Australia</a></li>
                </ul>
            </div>
            <div class="col_3">
                <h3>Jobs by Category</h3>
                <ul class="list_2">
                    <li><a href="#">Railway Recruitment</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 single_right">
            <div class="login-form-section">
                <div class="login-content">
                        <div class="section-title">
                        </div>
                        <div>
                            <style>
                                .collapsible {
                                    background-color: #72d2ff;
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
                                    background-color: #2185C5;
                                }

                                .collapsible:after {
                                    content: '\002B';
                                    color: white;
                                    font-weight: bold;
                                    float: right;
                                    margin-left: 5px;
                                }

                                .active:after {
                                    content: "\2212";
                                }

                                .content {
                                    padding: 0 18px;
                                    max-height: 0;
                                    overflow: hidden;
                                    transition: max-height 0.2s ease-out;
                                    background-color: #f1f1f1;
                                }
                            </style>


                            <h2>Your Applications</h2>

                            <button class="collapsible" style="color: black">Company Name</button>
                            <div class="content">
                                <p> <h4 style="font-family: 'Bell MT'; font-size: 30px"><b><i><img src="images/c1.gif" style="height: 40px; width: 70px">&nbsp; Company Name</i></b></h4></p>
                                <p>Role</p>
                                <p>Salary</p>
                                <p>Joining</p>
                                <p>Type of Job</p>
                                <p>Status</p>
                                <p><input type="submit" class="btn btn-danger" value="Cancel Your Job Interest"></input> </p>
                            </div>

                            <script>
                                var coll = document.getElementsByClassName("collapsible");
                                var i;

                                for (i = 0; i < coll.length; i++) {
                                    coll[i].addEventListener("click", function() {
                                        this.classList.toggle("active");
                                        var content = this.nextElementSibling;
                                        if (content.style.maxHeight){
                                            content.style.maxHeight = null;
                                        } else {
                                            content.style.maxHeight = content.scrollHeight + "px";
                                        }
                                    });
                                }
                            </script>
                        </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>


