<!doctype html>
<html lang="en">
  <head>
    <title>D·A·R·S</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
     <link rel="icon" href="http://localhost/public_html/Final_project/img/favicon_new.png" type="image/png" sizes="16x16"> 

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
      #navbarID{
        background-color: #bd537a;
      }
      #nav2ID{
        background-color:  #f6d9f2;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav id="navbarID" class="navbar navbar-dark fixed-top flex-md-nowrap p-0">
  <!--<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Data Analytical & Reporting System</a>
  -->
    <img class="" src="img/cover_1.png" alt="" width="225" height="60">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="btn btn-outline-primary" id="sign_out" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="nav2ID" class="col-md-2 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#student_distribution">
              <span data-feather="bar-chart"></span>
              Student Distribution
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faculty_distribution">
              <span data-feather="menu"></span>
              Faculty Distribution
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
              <!--
              <button class="btn btn-secondary btn-default dropdown-toggle" data-toggle="dropdown">Choose University Name
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu btn-block" id="uniName">
                <li><a href="#">Ahsanullah University of Science and Technology</a></li>
                <li><a href="#">American Internation University of Bangladesh</a></li>
                <li><a href="#">Brac University<a/></li>
                <li><a href="#">Independent University of Bangladesh</a></li>
                <li><a href="#">North South University</li></a>
              </ul>
            -->
            <select class="browser-default custom-select" id= "uniName">
              <option value="Choose" selected >---Choose University---</option>
            </select>
            </div>
            <!--year-->
            <div class="btn-group btn-group-inline mr-2">
              <!--
              <button class="btn btn-secondary btn-default dropdown-toggle" data-toggle="dropdown">Year
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu btn-block">
                <li><a href="#">2017</a></li>
                <li><a href="#">2016</a></li>
                <li><a href="#">2015</a></li>
              </ul>
            -->
            <select class="browser-default custom-select" id="year">
              <option selected="selected" value="select">--Select Year--</option>
            </select>
            </div>
           <!--end year-->  
           <div class="btn-group mr-2">
             <button type="button" class="btn btn-primary" onclick="showData()">Show Data</button>
           </div>
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">Generate Report</button>
          </div>
        </div>
      </div>
      <!--- this where you will show data and chart--->
      <div id="student_distribution">
        <h3>Student Demography</h3>
        <div class="chart-container">
          <div class="pie-chart-container">    
            <canvas id="studentByDepartment" width="350" height="125"></canvas>
          </div>                        
        </div>
      </div>
      <div id="faculty_distribution">
        <h3>Faculty Demography</h3>
        <div class="chart-container"> 
          <div class="pie-chart-container">    
            <canvas id="facultyByYear" width="350" height="125"></canvas>
          </div>                        
        </div>
      </div>
      </main>
    </div>
  </div>
  <script src="http://localhost/public_html/Final_project/js/jquery.min.js"></script>
  <script src="http://localhost/public_html/Final_project/js/myScript.js"></script>
  <script src="http://localhost/public_html/Final_project/js/department.js" ></script>
  <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/public_html/Final_project/js/feather.min.js"></script>
  <script src="http://localhost/public_html/Final_project/js/Chart.min.js"></script>
  
</body> 
</html>
