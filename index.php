<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>한양대학교 ERICA 소프트웨어학부</title>
    <!-- 상단 제목줄 사이트 소개 아이콘 추가 -->
    <link href="./assets/HYU_symbol_basic_png.ico" rel="shortcut icon" type="image/x-icon">
    <!-- CSS3 불러오기(link) -->
    <link rel="stylesheet" href="./styles/common_style.css">
    <link rel="stylesheet" href="./styles/index_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <!--JQuery 불러오기(CDN) -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js" charset="utf-8"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

    </article>
  </body>
</html>
