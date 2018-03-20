<style>
    .main {
      border: 2px solid black;
      margin-left: 300px;
      margin-right: 300px;
      text-align: center;
      background-color: lightslategray;
    }
</style>
<h2><?php echo $title; ?></h2>

<?php foreach ($rezervavimas as $news_item): ?>

       
        <div class="main">
               <?php echo "<b>".$news_item['rid']."</b>"; ?>
                <?php echo "<b>".$news_item['vid']."</b>"; ?>
                <?php echo $news_item['aid']; ?>
                <?php echo $news_item['nuo']; ?>
                <?php echo $news_item['iki']; ?>
              

        </div>
<?php endforeach; ?>

