<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5384685fcb.js" crossorigin="anonymous"></script>

    <title>Dashboard</title>


    <style>
        
        *{
            margin: 0%;
            padding: 0%;
        }
        .navigation {
            background-image: url(wave.svg);
            background-position: center;
            background-size: cover;
            height: 200px;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            text-align: center;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;

        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }




        .footer_section {
            background-image: url(footer_section_img.png);
            background-position: center;
            background-size: cover;
            margin-top: 150px;
            border: 0.1px solid white;
        }

        #subscribe {
            text-align: center;
            margin: 100px 0px;

        }

        #subscribe input {
            height: 50px;
            border-radius: 10px;
            width: 300px;
            background: transparent;

        }

        #down i {
            font-size: 25px;
            padding: 0px 5px;
            color: black;

        }

    </style>




</head>

<body>
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#">Dashboard</a>
                        <a href="#">My Programs</a>
                        <a href="#">Account</a>
                        <a href="#">Profile</a>
                        <a href="#">Contact</a>
                        <a href="#">Sign Out</a>
                    </div>
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;

                        <img src="logo_img.png" alt="logo">

                    </span>
                </div>
            </div>
        </div>
    </div>




    <div class="footer_section">
        <div class="container">
            <div class="row" id="subscribe">
                <div class="col">
                    <h2 style="color: deepskyblue">Subscribe to our newsletter</h2>
                    <form action="subscriber_data.php" method="post">
                        <input type="text" name="email" placeholder="Enter your email">
                        <button type="submit" class="btn btn-lg btn-primary">Subscribe Now</button>
                    </form>

                </div>
            </div>

            <div class="row"  id="down">
                <div class="col" style="text-align: center">
                    <p style="color: black">Fitness Bar | 2021 Copyright &copy; All rights reserved</p>


                    <a href="facebook.com" data-toggle="tooltip" data-placement="top" title="Facebook"> <i class="fab fa-facebook-square"></i></a>

                    <a href="github.com" data-toggle="tooltip" data-placement="top" title="Github"> <i class="fab fa-github-square"></i></a>

                    <a href="linkedin.com" data-toggle="tooltip" data-placement="top" title="Linkedin"> <i class="fab fa-linkedin"></i></a>

                    <a href="gmail.com" data-toggle="tooltip" data-placement="top" title="Gmail"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>



    <script>
        AOS.init();

    </script>


    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>




    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

    </script>


</body>

</html>
