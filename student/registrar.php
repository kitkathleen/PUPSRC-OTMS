<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Office - Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/fe96d845ef.js" crossorigin="anonymous"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php
            $office_name = "Registrar Office";
            include "navbar.php";
            include "../breadcrumb.php";
        ?>
        <div class="container-fluid registrarbanner header">
            <!-- <a href="#" class="header-btn btn btn-primary position-absolute p-3 m-2 bottom-0 start-0">Generate Inquiry</a>
            <a href="/student/transactions.php" class="header-btn btn btn-primary position-absolute p-3 m-2 bottom-0 end-0">Transactions</a> -->
            <?php
            $breadcrumbItems = [
                ['text' => 'Registrar Office', 'active' => true],
            ];

            echo generateBreadcrumb($breadcrumbItems, false);
            ?>
            <h1 class="display-1 header-text text-center text-light">Registrar Office</h1>
            <p class="header-text text-center text-light">Choose from one of the services below to get started</p>
        </div>
        <div class="container-fluid p-2 d-flex flex-wrap flex-column justify-content-center gap-2 text-center">
            <a href="registrar/create_request.php" class="btn btn-primary d-block text-decoration-none bg-maroon text-light p-4 rounded-0">
                <h2>Create Request</h2>
                <p>Seeks the registrar office's help in requesting related to academic records</p>
            </a>
            <a href="registrar/your_transaction.php" class="btn btn-primary d-block text-decoration-none bg-maroon text-light p-4 rounded-0">
            <h2>Your Registrar Transactions</h2>
                <p>Status of current request with the registrar office</p>
            </a>
            <a href="registrar/registrar_history.php" class="btn btn-primary d-block text-decoration-none bg-maroon text-light p-4 rounded-0">
            <h2>Registrar Transaction History</h2>
                <p>Check previous completed request from registrar office</p>
            </a>
        </div>
        <div class="push"></div>
    </div>
    <footer class="footer container-fluid w-100 text-md-left text-center d-md-flex align-items-center justify-content-center bg-light flex-nowrap">
        <div>
            <small>PUP Santa Rosa - Online Transaction Management System Beta 0.1.0</small>
        </div>
        <div>
            <small><a href="https://www.pup.edu.ph/terms/" target="_blank" class="btn btn-link">Terms of Use</a>|</small>
            <small><a href="https://www.pup.edu.ph/privacy/" target="_blank" class="btn btn-link">Privacy Statement</a></small>
        </div>
    </footer>
    <script>
        $(document).ready(function(){
            $('.dropdown-submenu a.dropdown-toggle').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
            });
        });
    </script>
</body>
</html>