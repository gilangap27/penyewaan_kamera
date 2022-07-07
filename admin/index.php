<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }
    </style>

<body>

    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="./index.php" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                        <i class="fas fa-house fa-fw me-3"></i><span>Home</span>
                    </a>
                    <a href="./master.php" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-toolbox fa-fw me-3"></i><span>Master</span>
                    </a>
                    <a href="./transaction.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill-1-wave fa-fw me-3"></i><span>Transaction</span></a>
                    <a href="./message.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-message fa-fw me-3"></i><span>Message</span></a>
                    <a href="./logout.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-right-from-bracket fa-fw me-3"></i><span>Logout</span></a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <h3 class="navbar-brand">SewaKamera</h3>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container p-4">
            <h1>Home Page</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore beatae vero porro, nemo eius totam
                perferendis blanditiis, reiciendis dignissimos corporis harum alias laborum esse non qui molestiae
                veniam? Exercitationem quod repudiandae natus ea commodi consequuntur quis excepturi animi pariatur
                ipsum!
            </p>
        </div>
    </main>
    <!--Main layout-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>