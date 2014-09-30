<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>
   <main id="site-body">
      <section id="site-content">
        <?php  
          $postcount = 1;

          foreach ($blog_news as $post){
            if ($postcount >= 3){
              break;
            }
            $postcount ++;

              echo $post ["post_title"] . $post ["post_excerpt"] . $post ["post_body"];
              echo "</br>";
          }
        ?>
      </section>
    </main>  
    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
