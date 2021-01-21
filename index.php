<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/bc80d402a1.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/js.js"></script>
  <title>Resume</title>
</head>

<body>
  <!-- 選單列 -->
  <header class="fixed-top alert-secondary bgShadow" id="myMenu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item" style="padding: 8px 16px;">
            <a class="nav-link" href="#about">關於</a>
          </li>
          <li class="nav-item" style="padding: 8px 16px;">
            <a class="nav-link" href="#skill">技能</a>
          </li>
          <li class="nav-item" style="padding: 8px 16px;">
            <a class="nav-link" href="#education">經歷</a>
          </li>
          <li class="nav-item" style="padding: 8px 16px;">
            <a class="nav-link" href="#portfolio">作品</a>
          </li>
          <li class="nav-item" style="padding: 8px 16px;">
            <?php
            if(!empty($_SESSION['login'])){
            ?>
            <a class="nav-link" href="api/logout.php">登出</a>
            <?php
            }else{
            ?>
            <a class="nav-link" href="front/login.php">管理登入</a>
            <?php
            }
            ?>
          </li>
          <li class="nav-item" style="padding: 8px 16px;">
            <?php
            if(!empty($_SESSION['login'])){
            ?>
            <a class="nav-link" href="backend.php"><i class="fas fa-arrow-circle-left"></i>後台管理</a>
            <?php
            }
            ?>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- 頁首畫面 -->
  <section class="pageTop">
    <div class="intro">
      <h1 class="type"><?=$Basic->find(1)['text'];?></h1>
      <div class="mt-3">
        <small><i class="fas fa-map-marker-alt mr-2"></i>New Taipei City, Taiwan</small>
        <a href="https://github.com/Ting3066" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://codepen.io/ting3066" target="_blank"><i class="fab fa-codepen"></i></a>
      </div>
    </div>
    <div id="getStart">
      <a href="#about"><i class="fas fa-chevron-down fa-3x"></i></a>
    </div>
  </section>
  <!-- 關於 -->
  <section class="container py-5" id="about">
    <div class="title my-5 text-info font-weight-bolder">ABOUT</div>
    <div class="row">
      <div class="text-center col-12 col-lg-5">
        <img src="img/<?=$Image->all(['sh'=>1])[0]['img'];?>" style="width:350px;height:400px">
      </div>
      <div class="col-12 mt-5 col-lg-7 mt-lg-0 d-flex flex-column-reverse flex-lg-column pt-lg-5">
        <p class="container px-5 px-lg-0 pr-lg-5">
          <?=$Auto->all(['sh'=>1])[0]['text'];?>
        </p>
        <div class="my-3 pl-5 pl-md-5 pl-lg-0">
          <div class="mb-1">姓名: <?=$Basic->find(1)['name'];?></div>
          <div class="mb-1">手機: <?=$Basic->find(1)['phone'];?></div>
          <div class="mb-1">生日: <?=$Basic->find(1)['birth'];?></div>
          <div class="mb-1">信箱: <?=$Basic->find(1)['email'];?></div>
          <div>職稱: <?=$Require->all(['sh'=>1])[0]['title'];?></div>
        </div>
      </div>
    </div>
  </section>
  <!-- 技能 -->
  <section class="py-5" id="skill">
    <div class="container">
      <div class="title my-5 text-info font-weight-bolder">SKILL</div>
      <div class="row justify-content-center justify-content-lg-start">
        <div class="skillcard col-12 col-sm-6 col-md-6">
          <div class="face face1">
            <div class="text-center">
              <!-- <img src="#" alt=""> -->
              <i class="fas fa-desktop text-light fa-3x"></i>
              <h3>前端</h3>
            </div>
          </div>
          <div class="face face2">
            <div>
              <ul>
                <?php
                $skills=$Skill->all(['sh'=>1,'type'=>1]);
                foreach($skills as $skill){
                ?>
                <li><?=$skill['name'];?></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="skillcard col-12 col-sm-6 col-md-6">
          <div class="face face1">
            <div class="text-center">
              <!-- <img src="#" alt=""> -->
              <i class="fas fa-code text-light fa-3x"></i>
              <h3>後端</h3>
            </div>
          </div>
          <div class="face face2">
            <div>
              <ul>
                <?php
                $skills=$Skill->all(['sh'=>1,'type'=>2]);
                foreach($skills as $skill){
                ?>
                <li><?=$skill['name'];?></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="skillcard col-12 col-sm-6 col-md-6">
          <div class="face face1">
            <div class="text-center">
              <!-- <img src="#" alt=""> -->
              <i class="fas fa-tools text-light fa-3x"></i>
              <h3>軟體工具</h3>
            </div>
          </div>
          <div class="face face2">
            <div>
              <ul>
                <?php
                $skills=$Skill->all(['sh'=>1,'type'=>3]);
                foreach($skills as $skill){
                ?>
                <li><?=$skill['name'];?></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="skillcard col-12 col-sm-6 col-md-6">
          <div class="face face1">
            <div class="text-center">
              <!-- <img src="#" alt=""> -->
              <i class="fas fa-code-branch text-light fa-3x"></i>
              <h3>版本控制</h3>
            </div>
          </div>
          <div class="face face2">
            <div>
              <ul>
                <?php
                $skills=$Skill->all(['sh'=>1,'type'=>4]);
                foreach($skills as $skill){
                ?>
                <li><?=$skill['name'];?></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- 經歷 -->
  <section class="py-5" id="education">
    <div class="container">
      <div class="title my-5 text-info font-weight-bolder">EXPERIENCE</div>
      <h4 class="mb-3 text-secondary">EDUCATION</h4>
      <div class="educationContent">
        <div class="timelineBlock">
          <div class="mainTimeline">
            <i class="far fa-circle"></i>
            <div class="timeline"></div>
          </div>
          <div class="timelineContent">
            <h5>泰山訓練場</h5>
            <p>PHP資料庫網頁設計</p>
            <div>
              <ul>
                <li>網頁編排編輯</li>
                <li>視覺影像設計</li>
                <li>數位媒體應用</li>
                <li>資訊網路概論</li>
                <li>網頁動態技術</li>
                <li>資料庫程式設計</li>
                <li>網頁設計實務</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="timelineBlock">
          <div class="mainTimeline">
            <i class="far fa-circle"></i>
            <div class="timeline"></div>
          </div>
          <div class="timelineContent">
            <h5>實踐大學</h5>
            <p>社會工作學系</p>
            <div>
              <p>廣青文教基金會-士林北投區身心障礙者資源中心(實習)</p>
              <ul>
                <li>參與、陪同身心障礙學員進行日間照顧課程</li>
                <li>獨立規劃教案課程並執行，帶領身心障礙學員完成活動</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="timelineBlock">
          <div class="mainTimeline">
            <i class="far fa-circle"></i>
            <div class="timeline"></div>
          </div>
          <div class="timelineContent">
            <h5>新莊高中</h5>
            <p>社團活動</p>
            <div>
              <p>非常音樂社</p>
              <ul>
                <li>舉辦全校性活動 - 非你莫屬歌唱大賽，並擔任活動副總召及初、複賽評審</li>
              </ul>
            </div>
            <div>
              <p>社團聯合自治協會</p>
              <ul>
                <li>新生迎新晚會籌辦</li>
                <li>春、秋季放學後的秘密，小型社團表演活動籌辦</li>
                <li>社團聯合成果發表會籌辦</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5" id="experience">
    <div class="container">
      <h4 class="mb-3 text-secondary">WORK EXPERIENCE</h4>
      <div class="experienceContent">
        <?php
        $exs=$Experience->all(['sh'=>1]);
        foreach($exs as $ex){
          $exText=explode(",",$ex['text']);
        ?>
        <div class="timelineBlock">
          <div class="mainTimeline">
            <i class="far fa-circle"></i>
            <div class="timeline"></div>
          </div>
          <div class="timelineContent">
            <h5><?=$ex['companyname'];?></h5>
            <p><?=$ex['job'];?></p>
            <p><?=$ex['time'];?></p>
            <div>
              <ul>
                <?php
                  for($i=0;$i<(count($exText));$i++){
                ?>
                <li><?=$exText[$i];?></li>
                <?php
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- 作品 -->
  <section class="py-5" id="portfolio">
    <div class="container">
      <div class="title my-5 text-info font-weight-bolder">PORTFOLIO</div>
      <div class="row">
        <?php
        $pors=$Portfolio->all(['sh'=>1]);
        foreach($pors as $por){
        ?>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="img/<?=$por['img'];?>" class="card-img-top">
            <div class="card-body">
              <h5><?=$por['name'];?></h5>
              <p class="card-text"><?=$por['text'];?></p>
              <a href="<?=$por['href'];?>" target="_blank" class="btn btn-primary"><i class="fas fa-link"></i></a>

            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>

  </section>
</body>

</html>