<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>

  <body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Actions
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php">Home</a></li>
              <li><a class="dropdown-item" href="?page=New">New User</a></li>
              <li><a class="dropdown-item" href="?page=List">Users List</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
            include("config.php");

            switch(@$_REQUEST["page"]){
              case "New":
                include("new_user.php");
              break;
              case "List":
                include("users_list.php");
              break;
              case "Save":
                include("handle_user.php");
              break;
              case "Edit":
                include("edit_user.php");
              break;
              default:
                print "<h1>Welcome!</h1>";
            }
          ?>
        </div>
      </div>
    </div>
  <!-- Bootstrap JS -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>