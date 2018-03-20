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



<?php foreach ($sujungimas as $news_item): ?>

       
        <div class="main">
            <b>
                 <?php echo $news_item['marke']; ?>
                 <?php echo $news_item['modelis'].", "; ?>
                 <?php echo $news_item['kuras'].", "; ?>
                 <?php echo $news_item['numeris']."</br>"; ?>
                 <?php echo $news_item['vardas']; ?>
                 <?php echo $news_item['pavarde']; ?>
                 
              </b>
          
                
        

        </div>
<?php endforeach; ?>

