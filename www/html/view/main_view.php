<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="html5reset-1.6.1 (2).css">
  <style type="text/css">
    body{
      background-color: #888888; 
      
    }
    header{
      background-color: #556B2F;
      min-width: 200px;
      height:150px;
    }
    #main{
      margin-top: 10px;
      display:flex;
    }
    nav{
      background-color: #222222;
      color: #FFD700;
      min-width: 200px;
      margin-left: 20px;
      height: 500px;
      position:relative
    }
    #container{
      min-width: 1000px;
      margin:0 auto;
      min-height:1200px;
    }
    #side{
      background-color: #222222;
      min-width: 150px;
    }
    #greeting,#prof,#portfolio{
      background-color: #FAFAD2; 
    }
    #greeting{
      height: 250px;
      border: solid 1px black;
      margin-bottom: 25px
    }
    #portfolio{
      height: 500px;
      border: solid 1px black;
      margin-bottom: 25px;
    }
    #prof{
      height: 500px;
      border: solid 1px black;
    }
  </style>
</head>
<body>
  <header>ヘッダー</header>
  <div id="main">
    <nav id="navi">ナビ</nav>
    <div id="container">
      <div id="greeting">挨拶</div>
      <div id="portfolio">ポートフォリオ</div>
      <div id="prof">自己紹介</div>
    </div>
    <div id="side"></div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script>
    let id_position = $("#navi").offset().top;
    $(window).scroll(function(){
      let scroll = $(document).scrollTop();
      let move_amount = id_position + (scroll - 160)+ "px";
      $("#navi").animate({
        top: move_amount
      },{
        duration : 1000,
        queue : false
      });
    });
  </script>
</body>
</html>