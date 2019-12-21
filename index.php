<?php
  include "./CommonHeader.php";
?>
    <link rel="stylesheet" href="./styles/index_style.css">
    <script>
      $(document).ready(function(){var imagesCount=7,nowImgNo=2;var totalHTMLStr="";for(var i=1;i<=imagesCount;++i){if(i!=1){totalHTMLStr+="<img id='"+i+"_img' src='./assets/"+i+".png' alt='' style='visibility:hidden;'>"}else{totalHTMLStr+="<img id='"+i+"_img' src='./assets/"+i+".png' alt='' style='visibility:visible;'>"}}$('.slides').html(totalHTMLStr);setInterval(function(){var imgId="#"+nowImgNo+"_img";if(nowImgNo-1<=0){var prevImgId="#"+imagesCount+"_img";$(prevImgId).css("visibility","hidden")}else{var prevImgId="#"+(nowImgNo-1)+"_img";$(prevImgId).css("visibility","hidden")}$(imgId).css("visibility","visible");nowImgNo=nowImgNo+1;if(nowImgNo>imagesCount)nowImgNo=1},2500)});
    </script>
  </head>
  <body>
    <article class="img-slide">
      <div class="slide-img">
        <ul class="slides">
        </ul>
        <div class="blur">
        </div>
      </div>

      <div class="contents">
        <div class="notice">
          <h4>한양대학교 ERICA</h4></br></br>
          <h4>소프트웨어학부 홈페이지에</h4></br></br>
          <h4>방문해주셔서 감사합니다.</h4></br></br>

          <button type="button" name="button" onclick="./pages/mainPage.php">홈페이지로 들어가기</button>
          <button type="button" name="button" onclick="window.open('https://www.hanyang.ac.kr/')">한양대학교 홈페이지</button>
        </div>

      </div>

    </article>
  </body>
  <?php
    include "./CommonTail.php";
  ?>
