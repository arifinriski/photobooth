<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN IN | SPK REKOMENDASI DESAIN PHOTOBOOTH</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/template/') ?>img/icon.png"/>
    <div style="text-align: center;">
        <img src="<?= base_url('assets/template/') ?>img/logo copy.png"/>
    </div>
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/style.css">
    <style>
        .error{
            color: red
        }
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" action="<?= base_url('index/prosesLoginUser') ?>" class="signup-form">
                        <h2 class="form-title">WELCOME | SPK REKOMENDASI DESAIN PHOTOBOOTH</h2>
                        
                        <div class="form-group">
                            <input type="username" class="form-input" name="username" id="email" placeholder="Masukkan Username Anda"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Masukkan Password Anda"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <script src="<?= base_url('assets/login/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/main.js"></script>
    <script src="<?= base_url('assets/') ?>jquery-validate.min.js"></script>
    <script>
        $('#signup-form').validate({
            rules: {
                password: "required",
                username: "required"
            },
            messages: {
                password:{
                    required: "Harap masukkan password anda"
                },
                username:{
                    required: "Harap masukkan username anda"
                },
            }
        })
    </script>
</body>
</html>