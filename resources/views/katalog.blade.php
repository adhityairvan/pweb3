<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset_.css">
  <link rel="stylesheet" href="css/style_katalog.css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <title>Katalog</title>
</head>
<body>
  <div class="wrapper">
    <?php include('nav_guest.php') ?>
    <div class="side_bar">
      <a href="">PS4</a>
      <a href="">XBOX</a>
    </div>
    <div class="content">
      <!-- <div class="content_tools">
        search, filter, dll.
      </div> -->
      <div class="content_items">
        <!-- isi -->
        <div class="content_box" style=" background-image: url(img/cover_jjt.jpg);">
          <div class="content_title">
            <span>Lord of the Rings - The Fellowship of the Ring</span>
          </div>
        </div>
        <div class="content_box ps4" style=" background-image: url(img/destiny.jpg);">
          <div class="content_title">
            <span>Destiny</span>
          </div>
        </div>
        <div class="content_box xbox" style=" background-image: url(img/wolfenstein.jpg);">
          <div class="content_title">
            <span>Wolfenstein</span>
          </div>
        </div>
        



        <!-- ____ -->
      </div>
    </div>
    
  </div>

  <script>
    $(function() {
      var redirectTo = function(address) {
        document.location.href = address;
      }

      $('.content_box').click(function() {
        redirectTo("buku.php");
      });

      $('.content_box').hover(function() {
        $(this).find('.content_title').show();
      });
      $('.content_box').mouseleave(function() {
        $(this).find('.content_title').hide();
      });

      $('.cart').click(function() {
        redirectTo("cart.php");
      });
    })

  </script>
</body>
</html>
