<?php  
function show_comments($id_article)
{
 include 'config.php';

 $res = mysqli_query($con, "SELECT * FROM `comments` WHERE `id_article` LIKE $id_article = 1 ORDER BY `id`") OR die ('Error! query – show comments');
 while($arr = mysqli_fetch_array($res, MYSQLI_NUM))
 { ?>
  <div class="main">
      <img src="images/comentator.jpg">
        <div class="block_name">
          <span class="name"><?=$arr[2]?></span>
          <span class="date"><?=$arr[5]?></span>
        </div>
        <div class="coment">
          <div><?=$arr[4]?></div>
        </div>
      </div>
<?php  }
} ?>