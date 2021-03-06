<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Title -->
  <title>Main</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/vis-network/dist/vis-network.min.css"/>
  <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/custom.css"/>
  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vis-network/dist/vis-network.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"></script>
</head>
<body>
  <!-- Content -->
  <main>
    <div class="d-flex" id="wrapper">    
      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">liam3</div>
        <div class="list-group list-group-flush" id="sidebar-links"></div>
      </div>
      <!-- Content -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-light bg-light border-bottom">
          <a class="btn" href="javascript:void(0)" id="menu-toggle">
            <span class="navbar-toggler-icon"></span>
          </a>
          <ul class="nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <i class="fas fa-user mr-1"></i><span class="d-none d-md-inline" id="username"><?php echo $user['liam3_User_firstname'] . " " . $user['liam3_User_lastname']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="?emails">Manage Profile</a>
                <a class="dropdown-item" href="?changepw">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?logout">Logout</a>
              </div>
            </li>
          </ul>
        </nav>    
        <!-- App -->
        <div class="container-fluid">
          <div id="app"></div>
        </div>
      </div>
    </div>
  </main>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title" id="myModalTitle"></p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="myModalContent"></div>
      </div>
    </div>
  </div>
  <!--  Footer -->
  <footer class="footer">
    <div class="container-fluid">
      <ul class="list-inline text-muted m-0 p-0">
        <li class="list-inline-item"><b>liam3</b> uses</li>
        <li class="list-inline-item"><a target="_blank" href="http://getbootstrap.com/">Bootstrap</a></li>
        <li class="list-inline-item"><a target="_blank" href="http://visjs.org/">visjs</a></li>
        <li class="list-inline-item"><a target="_blank" href="https://quilljs.com/">Quill</a></li>
      </ul>
    </div>
  </footer>
  <!-- JS -->
  <script src="js/main.js"></script>
  <script src="js/app.js" type="module"></script>
  <script>
    $("#menu-toggle").click(e => {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>
