<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
<header>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">
            <img src="" alt="News Africa Logo">
          </a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="testingImg.jpg" alt="profile picture" class="img">
                </a>
                <div class="dropmenu">
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">My profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </nav>

  </header>
  <div class="row">
    <div class="col-md-2">
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
              <div class="list-group list-group-flush mx-3 mt-4">
                <a
                  href=""
                  class="list-group-item list-group-item-action py-2 ripple active"
                  aria-current="true"
                >
                  <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                </a>
                <a href="settings.html" class="list-group-item list-group-item-action py-2 ripple"
                  ><i class="fas fa-lock fa-fw me-3"></i><span>Settings</span></a
                >
                <a href="profile.html" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-users fa-fw me-3"></i><span>Profile</span></a
              >
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                  <i class="fas fa-chart-pie fa-fw me-3"></i><span>Logout</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                  ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
                >
              </div>
            </div>
        </nav>
    </div>
    <div class="col-md-7">
        <main style="margin-top: 58px;">
            <div class="pt-4">
                <div class="row">
                    <div class="col">
                        <div class="card card-one">
                            <div class="card-body">
                                <span>Users</span>
                                <h2>134</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-two">
                            <div class="card-body">
                                <span>Post</span>
                                <h2>87</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-three">
                            <div class="card-body">
                                <span>Shares</span>
                                <h2>125</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </main>
    </div>
  </div>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
