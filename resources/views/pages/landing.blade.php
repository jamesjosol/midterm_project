<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>IPT Midterm Project</title>
    <style>
        .button_{   
            border: none;
            padding: 14px 20px;
            transition: all 0.4s ease 0s;
            text: center;
            color: #0d0d0d;
        }

        .button_:hover{
            background-color: #33ccff !important;
            color: #fff !important;
            text-shadow: 0px 0px 8px rgb(255, 255, 255);
            -webkit-box-shadow: 0px 5px 40px -10px rgba(255,255,255,0.10);
            -moz-box-shadow: 0px 5px 40px -10px rgba(255,255,255,0.10);
            transition: all 0.4s ease 0s;
        }
        
        .clearfix a{
            text-decoration:none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#b3ffff;">
        <div class="container">
            <a class="navbar-brand" href="<?= url('/') ?>">IPT Midterm Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="<?= url('/') ?>">Home</a>
                    <a class="nav-item nav-link" href="<?= url('/users') ?>">Users</a>
                    <a class="nav-item nav-link" href="<?= url('/accounts') ?>">Account</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card text-center bg-info" style="margin-top: 10%;">
                    <div class="card-header text-white">
                        <h4>Main Menu</h4>
                    </div>
                    <div class="card-body clearfix">
                        <table>
                            <tr><a href="<?= url('/') ?>" class="button_ bg-white btn-block">Home</a></tr>
                            <tr><a href="<?= url('/users') ?>" class="button_ bg-white btn-block">Users</a></tr>
                            <tr><a href="<?= url('/accounts') ?>" class="button_ bg-white btn-block">Account</a></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>