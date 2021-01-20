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
    <nav class="navbar navbar-expand-lg">
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
                <li>HTML</li>
                <li>CSS</li>
                <li>Javascript</li>
                <li>Bootstrap</li>
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
                <li>PHP</li>
                <li>MySQL</li>
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
                <li>Visual Studio Code</li>
                <li>Photoshop</li>
                <li>Illustrator</li>
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
                <li>Git</li>
                <li>Github</li>
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
        <div class="timelineBlock">
          <div class="mainTimeline">
            <i class="far fa-circle"></i>
            <div class="timeline"></div>
          </div>
          <div class="timelineContent">
            <h5>藝騰光電有限公司</h5>
            <p>行政會計</p>
            <p>2017.11-2020.06</p>
            <div>
              <ul>
                <li>客戶需求調查及分析，以利新商品開發並了解市場的流動與變化。</li>
                <li>廠商開發，外調商品採購及成本控管。</li>
                <li>協助業務處理訂單以及緊急狀況排除。</li>
                <li>客戶問題即時處理並呈報。</li>
                <li>協助送貨備貨以便準時出車，排解送貨途中遭遇的突發狀況。</li>
                <li>公司帳務及應收帳款整理與追蹤。</li>
                <li>燈具各項功能測試、組裝及品質監控。</li>
                <li>進出貨、倉庫商品庫存管理。</li>
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
            <h5>新倫鞋城</h5>
            <p>工讀生</p>
            <p>2012.05-2016.02</p>
            <div>
              <ul>
                <li>引導顧客選購商品，推銷、銷售商品。</li>
                <li>處理顧客訂貨及取貨事宜。</li>
                <li>新品上架，進貨商品整理入倉，庫存清點。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 作品 -->
  <section class="py-5" id="portfolio">
    <div class="container">
      <div class="title my-5 text-info font-weight-bolder">PORTFOLIO</div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="https://fakeimg.pl/300x200/ffffcc" class="card-img-top">
            <div class="card-body">
              <h5>lorem</h5>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="https://fakeimg.pl/300x200/ffffcc" class="card-img-top">
            <div class="card-body">
              <h5>lorem</h5>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="https://fakeimg.pl/300x200/ffffcc" class="card-img-top">
            <div class="card-body">
              <h5>lorem</h5>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</body>

</html>