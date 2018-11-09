<?php include "includes/top.php"?>

<?php
        require_once ('PHPMailer/PHPMailerAutoload.php');
        if (isset($_POST['submit'])){

            $otp = rand(1000, 10000);
            $_SESSION['otp'] = $otp;


            $rec = $_POST['email'];
            $_SESSION['changer'] = $rec;

            $_SESSION['forgetHolder'] = "true";

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '465';
            $mail->isHTML();
            $mail->Username='jobseekerowner@gmail.com';
            $mail->Password = 'iloveass1234';
            $mail->SetFrom('no-reply@howcode.org');
            $mail->Subject = 'Seeker.com password change verification';
            $mail->Body = 'your seeker.com change password otp is ' . $otp;
            $mail->AddAddress($rec);
            $mail->Send();

            header("Location: forgetpasswordconfirm.php");
        }

?>

<body>
<div class="col-sm-4" style="margin-left: 450px">
    <div class="login-form-section">
        <div class="login-content">
            <form action="" method="post">
                <div class="section-title">
                    <img src="images/main-logo.png"><br><br><br>
                    <h2>Enter your email here</h2>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group">
                        <span class="input-group-addon "><i class="fa fa-user"></i></span>
                        <input type="text" name="email"  class="form-control" placeholder="User email" required>
                    </div>
                </div>
                <div class="forgot">
                    <div class="clearfix"> </div>
                </div>
                <div class="form-actions">
                    <input type="submit" value="Next" name="submit" class="btn btn-primary btn-sm">
                </div>
            </form>
            <div class="login-bottom">
            </div>
        </div>
    </div>
</div>

</body>
