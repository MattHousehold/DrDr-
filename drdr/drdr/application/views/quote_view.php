 <!DOCTYPE html>

<html>
  <head>
     <img class="headimage" src="http://i.minus.com/ibey8pLUClc35W.png" width="102%">
    <title>Dr. Know-It-All</title>
  </head>

  <body>
 <?php echo form_open('find/search') ?>

          <?php foreach($quote as $q): ?>
    <br><br><br><br><br><br><br><br>
    <center><h2><label class="create1">Generated Quote:</label></h2></center>
    <center><h3>
          <div class="main">
          <?php echo $q['content']; ?>
          <p>
          <i><?php echo $q['author']; ?></i>
    </h3></center>
        
    </div>



    </form>

      <?php endforeach; ?>

  <?php foreach($quote as $q): ?> 
    <div id="vote"><a href="/~ccit1570/drdr/index.php/find/vote/<?php echo $q['id']; ?>">Vote Up</a>&nbsp&nbsp&nbsp
    <?php echo $q['uservote']; ?>&nbsp&nbsp|&nbsp
    <a href="/~ccit1570/drdr/index.php/find/votedown/<?php echo $q['id']; ?>">Vote Down</a>&nbsp&nbsp&nbsp
   <?php echo $q['uservotedown']; ?></div>
  <?php endforeach; ?> 

</ul>

  </body>
 </html>