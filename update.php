
<?php
require('lib/print.php');
require('view/top.php');
?>
    <a href="create.php">crate</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <?php } ?>
    <h2>
      <?php
      print_title();
       ?>
    </h2>
    <?php
     print_descripition();
     ?>

     <form class="" action="update_process.php" method="post">
       <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
       <p>
         <input type="text" name="title" Placeholder="Title" value="<?php print_title(); ?>">
       </p>
       <p>
         <textarea name="description" placeholder = "description"><?php print_descripition();
         ?></textarea>
       </p>
       <p>
         <input type="submit">
       </p>
     </form>
     <?php
     require('view/bottom.php');
      ?>
