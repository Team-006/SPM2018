<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
      

        <style>
            html, body {
                /* background-color: #fff; */
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
             /*   background-image: url('../resources/assets/img/landing.jpeg');*/
                background-image: url(<?php echo e(asset('/img/landing.jpeg')); ?>);
                background-repeat: no-repeat;
                background-size: cover;
                /* <img src="../resources/assets/img/landing.jpeg" alt="dgfghgh" 
            style="background-repeat: no-repeat; background-size: cover;" > */
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                padding: 150px 60px;
                text-align: center;
               background-color: #e6ffff;
                opacity: 0.7;
                border-radius: 8px;
            }

            .title {
                font-size:50px;
                color: black;
                font-weight: bold
            }

            /* .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                height: 50px;
            } */

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>       
         
        <div class="flex-center position-ref full-height">
            
          
             <div class="content">
                 <div class="title m-b-md">
                    Welcome To Industrial Traning Unit Of SLIIT
                </div>
                <?php if(Route::has('login')): ?>
                <div class="links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                       
                    <?php else: ?>
                   
                        <a class="btn btn-success btn-lg" style="width: 170px;border:thin grey" href="<?php echo e(route('login')); ?>">Login</a>
                        <a class="btn btn-success btn-lg"style="width: 170px ;border:thin grey" href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
          
            </div>
        </div>
   
    </body>
</html>

