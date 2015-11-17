<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quick Start - Basic</title>
        <!--Bootstrap here-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js"></script>

    </head>
        <body>
            <div class="container">
            <!-- I do some personalization here -->
                <nav class="navbar navbar-default">
                    <ul class="navbar-text">
                        <h2>Task List</h2>
                    </ul>
                </nav>
            <!-- The code above is different from the tutorial -->
            </div>
            <div class="container">
                @yield('content')
            </div>
        </body>
</html>