<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      #sign_out{
        color: white;
        border-color: white;
      }
      #sign_out:hover{
        color: black;
        background-color: white; 
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0">
  <!--<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Data Analytical & Reporting System</a>
  -->
    <img class="" src="img/cover.png" alt="" width="225" height="60">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="btn btn-outline-primary" id="sign_out" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Enrollement Process Distribution
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart"></span>
              Student Distribution
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="menu"></span>
              Faculty Distribution
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Staff & Officer Distributioin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="activity"></span>
              Expenses
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Compare</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Stakeholder</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!--university-->
            <div class="btn-group btn-group-inline mr-2">
              <button class="btn btn-secondary btn-default dropdown-toggle" data-toggle="dropdown">Choose University Name
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu btn-block">
                <li><a href="#">Reason 1</a></li>
                <li><a href="#">Reason 2</a></li>
                <li><a href="#">Reason 3</a></li>
              </ul>
            </div>
            <!--year-->
            <div class="btn-group btn-group-inline mr-2">
              <button class="btn btn-secondary btn-default dropdown-toggle" data-toggle="dropdown">Year
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu btn-block">
                <li><a href="#">Reason 5</a></li>
                <li><a href="#">Reason 6</a></li>
                <li><a href="#">Reason 7</a></li>
              </ul>
            </div>
     <!--end year-->       
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Generate Report</button>
          </div>
        </div>
      </div>
      <!--- this where you will show data and chart--->
      <div>
        <h3>Student</h3>
        <canvas class="my-4 w-100" id="" width="900" height="380"></canvas>
      </div>

      </main>
    </div>
  </div>
  <script src="js/jquery.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="js/bootstrap.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  <script src="http://localhost/public_html/Final_project/js/feather.js"></script>
  <script src="http://localhost/public_html/Final_project/js/chart.js"></script>
  <script src="http://localhost/public_html/Final_project/js/dasboard.js"></script></body>
  <script src="http://localhost/public_html/Final_project/js/myScript.js"></script>
</html>
