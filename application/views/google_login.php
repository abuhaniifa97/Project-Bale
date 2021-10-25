<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login with Google in Codeigniter</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/07323268fb.js"></script>

</head>

<body>
    <div class="container">
        <br />
        <h2 align="center">Login Menggunakan Akun Google dengan CodeIgniter</h2>
        <br />
        <div class="panel panel-default">
            <?php
            if (!isset($login_button)) {
                // echo ' <div class="col-md-12 text-center">
                // <button  style="width: 210px; height: 40px; border: 2px solid black; border-radius:20px;" class=" btn btn-light" type="submit" aria-hidden="true" ><i class="fa fa-google" aria-hidden="true"></i> Daftar Dengan Google</button>                           
                // </div>';

                echo '<script>console.log("login"); </script>';
                echo '<h3><a href="' . base_url() . 'google_login/logout">Logout</h3></div>';
            } else

            {
                echo '<script>console.log("logout"); </script>';
                echo '<div align="center">' . $login_button . '</div>';
            }

            ?>
        </div>
    </div>
</body>

</html>