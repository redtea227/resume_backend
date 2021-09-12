<?php include_once "base.php"; ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Roger_Resume</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Noto+Sans+TC:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link href="css/mdb.min.css?ver=1.2.1" rel="stylesheet">
  <link href="css/aos.css?ver=1.2.1" rel="stylesheet">
  <link href="css/main.css?ver=1.2.1" rel="stylesheet">

</head>

<body id="top">
  <!-- header_nav -->
  <header class="fixed-top" id="rogerMenu">
    <div class="text-center text-lg-left">
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
          <div class="login" style="width: 325px;">
            <a class="navbar-brand" href="#">Roger Lo
            </a>

            <?php
            if (!isset($_SESSION['admin'])) {
            ?>
              <a href="login.php" class="btn btn-outline-warning">登入</a>
            <?php
            } else {
            ?>
              <a href="backend.php" class="btn btn-outline-warning" style="font-size: 1rem;">後台管理</a>&nbsp&nbsp&nbsp
              <a href="api/logout.php" class="btn btn-outline-warning" style="font-size: 1rem;">登出</a>
            <?php
            }
            ?>
          </div>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item ms-3">
                <a class="nav-link" href="#rogerAbout">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rogerSkills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rogerExperience">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rogerPortfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rogerContact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- resume_photo -->
  <div class="page-content">
    <div class="container">
      <div class="resume-container">
        <section class="shadow-1-strong bg-white mt-6" id="rogerIntro">
          <div class="text-white">
            <div class="cover bg-image"><img src="img/<?= $Bg->find(['sh' => 1])['img']; ?>" alt="<?= $Bg->find(['sh' => 1])['text']; ?>">
              <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);backdrop-filter: blur(2px);">
                <div class="text-center p-5">
                  <div class="avatar p-1">
                    <img class="img-thumbnail shadow-2-strong" src="img/<?= $Photo->find(['sh' => 1])['img']; ?>">
                  </div>
                  <div class="header-bio mt-3">
                    <div data-aos="zoom-in" data-aos-delay="0">
                      <p id="app"></p>
                    </div>
                    <div class="header-social mb-3" data-aos="zoom-in" data-aos-delay="200">
                      <nav role="navigation">
                        <ul class="nav justify-content-center">
                          <?php
                          $icons = $Icon->all(['sh' => 1]);
                          foreach ($icons as $key => $value) {
                          ?>
                            <li class="nav-item"><a class="nav-link" href="<?= $value['href']; ?>" target="_blank" title="<?= $value['name']; ?>"><i class="<?= $value['class']; ?>"></i><span class="menu-title sr-only"><?= $value['name']; ?></span></a>
                            </li>
                          <?php
                          }
                          ?>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- about -->
        <section class="shadow-1-strong bg-white my-5 p-5" id="rogerAbout">
          <div class="about-section">
            <div class="row">
              <div class="col">
                <h2 class="h2 fw-light mb-4">About Me</h2>
                <div data-aos="zoom-out" data-aos-delay="0">
                  <p><?= $Intro->find(['sh' => 1])['text']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- skills -->
        <section class="shadow-1-strong bg-white my-5 p-5" id="rogerSkills">
          <div class="skills-section">
            <h2 class="h2 fw-light mb-4">Professional Skills</h2>
            <div class="row">
              <div class="col-md-6">
                <?php
                $skills = $Skills->all(['position' => 'left', 'sh' => 1]);
                foreach ($skills as $key => $value) {
                ?>
                  <div class="mb-3"><span class="fw-bolder"><?= $value['name']; ?></span>
                    <div class="progress my-2 rounded" style="height: 20px;line-height: 20px;">
                      <div class="progress-bar <?= $value['color']; ?>" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: <?= $value['width']; ?>;"><?= $value['level']; ?></div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
              <div class="col-md-6">
                <?php
                $skills = $Skills->all(['position' => 'right', 'sh' => 1]);
                foreach ($skills as $key => $value) {
                ?>
                  <div class="mb-3"><span class="fw-bolder"><?= $value['name']; ?></span>
                    <div class="progress my-2 rounded" style="height: 20px;line-height: 20px;">
                      <div class="progress-bar <?= $value['color']; ?>" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: <?= $value['width']; ?>"><?= $value['level']; ?></div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </section>

        <!-- experience -->
        <section class="shadow-1-strong bg-white my-5 p-5" id="rogerExperience">
          <div class="work-experience-section">
            <h2 class="h2 fw-light mb-4">Experience</h2>
            <div class="timeline">
              <?php
              $exp = $Experience->all(['sh' => 1]);
              foreach ($exp as $key => $value) {
              ?>
                <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="50">
                  <div class="timeline-head px-4 pt-3">
                    <div class="h5 fw-bold"><?= $value['name']; ?><span class="text-muted h6"> <?= $value['company']; ?></span></div>
                  </div>
                  <div class="timeline-body px-4 pb-4">
                    <div class="text-muted text-small mb-3"><?= $value['time']; ?></div>
                    <div><?= $value['content']; ?></div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </section>

        <!-- portfolio -->
        <section class="shadow-1-strong bg-white my-5 p-5" id="rogerPortfolio">
          <div class="portfolio-section">
            <h2 class="h2 fw-light mb-4">Portfolio</h2>
            <!-- Pills navs -->
            <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="ex1">
              <li class="nav-item">
                <a class="nav-link active fs-6" id="ex1-tab-1" data-mdb-toggle="pill" href="#frontend">前端</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6" id="ex1-tab-2" data-mdb-toggle="pill" href="#backend">後端</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6" id="ex1-tab-3" data-mdb-toggle="pill" href="#photo">繪圖</a>
              </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
              <div class="tab-pane fade show active" id="frontend">
                <div class="row row-cols-2 row-cols-md-3 g-4">
                  <?php
                  $project = $Portfolio->all(['type' => 'frontend', 'sh' => 1]);
                  foreach ($project as $key => $value) {
                  ?>
                    <div class="col" data-aos="flip-left" data-aos-delay="0">
                      <div class="card h-100">
                        <img src="img/<?= $value['img']; ?>" class="card-img-top" alt="...">
                        <div class="view">
                          <a href="<?= $value['href1']; ?>" target="_blank" class="me-5"><i class="fas fa-link fa-2x" data-mdb-toggle="tooltip" title="DEMO"></i></a>
                          <a href="<?= $value['href2']; ?>" target="_blank"><i class="fab fa-github fa-2x" data-mdb-toggle="tooltip" title="GITHUB"></i></a>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-center"><?= $value['subject']; ?></h5>
                          <p class="card-text"><br><?= $value['text']; ?></p>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
              <div class="tab-pane fade" id="backend">
                <div class="row row-cols-2 row-cols-md-3 g-4">
                  <?php
                  $project = $Portfolio->all(['type' => 'backend', 'sh' => 1]);
                  foreach ($project as $key => $value) {
                  ?>
                    <div class="col" data-aos="flip-left" data-aos-delay="0">
                      <div class="card h-100">
                        <img src="img/<?= $value['img']; ?>" class="card-img-top" alt="...">
                        <div class="view">
                          <a href="<?= $value['href1']; ?>" target="_blank" class="me-5"><i class="fas fa-link fa-2x" data-mdb-toggle="tooltip" title="DEMO"></i></a>
                          <a href="<?= $value['href2']; ?>" target="_blank"><i class="fab fa-github fa-2x" data-mdb-toggle="tooltip" title="GITHUB"></i></a>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-center"><?= $value['subject']; ?></h5>
                          <p class="card-text"><br><?= $value['text']; ?></p>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
              <div class="tab-pane fade" id="photo">
                <div class="row row-cols-2 row-cols-md-3 g-4">
                  <?php
                  $project = $Portfolio->all(['type' => 'photo', 'sh' => 1]);
                  foreach ($project as $key => $value) {
                  ?>
                    <div class="col" data-aos="flip-left" data-aos-delay="0">
                      <div class="card h-100">
                        <img src="img/<?= $value['img']; ?>" class="card-img-top" alt="...">
                        <div class="view">
                          <a href="<?= $value['href1']; ?>" target="_blank"><i class="fas fa-link fa-2x" data-mdb-toggle="tooltip" title="DEMO"></i></a>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-center"><?= $value['subject']; ?></h5>
                          <p class="card-text"><?= $value['text']; ?></p>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
            <!-- Pills content -->

          </div>
        </section>

        <!-- contact -->
        <section class="shadow-1-strong bg-white my-5 p-5" id="rogerContact">
          <div class="contant-section">
            <h2 class="h2 fw-light text mb-4">Contact</h2>
            <div class="row mb-4">
              <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
                <div class="mt-1">
                  <div class="h6"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i>
                    +886 932-260-677</div>
                  <div class="h6"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i>
                    redtea227@hotmail.com</div>
                </div>
                <div class="mt-5">
                  <form id="my-form" action="https://formspree.io/f/mwkawvgy" method="POST">
                    <div class="form-outline mb-4">
                      <input type="text" name="name" id="name" class="form-control" required />
                      <label class="form-label" for="name">Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="email" class="form-control" required />
                      <label class="form-label" for="email">Email address</label>
                    </div>
                    <div class="form-outline mb-4">
                      <textarea class="form-control" name="message" style="resize: none;" id="message" rows="4" required></textarea>
                      <label class="form-label" for="message">Message</label>
                    </div>
                    <button id="my-form-button" class="btn btn-info btn-block mb-4" type="submit">Submit</button>
                    <p id="my-form-status"></p>
                  </form>
                </div>
              </div>
              <div class="col-md-7" data-aos="zoom-in" data-aos-delay="100"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7036497990507!2d121.41732691485736!3d25.044129283967614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bec9ad74b1%3A0xa639904a89f26435!2z5Yue5YuV6YOo5Yue5YuV5Yqb55m85bGV572y5YyX5Z-65a6c6Iqx6YeR6aas5YiG572y5rOw5bGx6IG35qWt6KiT57e05aC0!5e0!3m2!1szh-TW!2stw!4v1626621352239!5m2!1szh-TW!2stw" width="500" height="400" style="border:0;width:100%;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer class="pt-4 pb-4 text-muted text-center mb-5">
    <div class="container">
      <div class="my-3">
        <div class="h4">Roger Lo</div>
        <div class="footer-nav">
          <nav role="navigation">
            <ul class="nav justify-content-center">
              <?php
              $icons = $Icon->all(['sh' => 1]);
              foreach ($icons as $key => $value) {
              ?>
                <li class="nav-item"><a class="nav-link" href="<?= $value['href']; ?>" target="_blank" title="<?= $value['name']; ?>"><i class="<?= $value['class']; ?>"></i><span class="menu-title sr-only"><?= $value['name']; ?></span></a>
                </li>
              <?php
              }
              ?>
            </ul>
          </nav>
        </div>
      </div>
      <div class="text-small">
        <div class="mb-1">&copy; 2021 Roger Lo</div>
        <div>Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
      </div>
    </div>
    <div id="rogerArrow" class="position-fixed">
      <a href="#" class="btn-i">
        <!-- <i class="fab fa-btc fa-3x"></i> -->
        <i class="fas fa-arrow-up fa-3x"></i>
      </a>
    </div>
  </footer>
  <!-- jQ -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="scripts/mdb.min.js?ver=1.2.1"></script>
  <script src="scripts/aos.js?ver=1.2.1"></script>
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="scripts/main.js?ver=1.2.1"></script>
  <script>
    var form = document.getElementById("my-form");

    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
          'Accept': 'application/json'
        }
      }).then(response => {
        status.innerHTML = "Thanks for your submission!";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
  </script>
</body>

</html>