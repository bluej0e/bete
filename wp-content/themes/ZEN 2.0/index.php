<?php get_header('prueba1');?>
<div class="row">
  <div class="twelve columns">
     <br>
   <h1 style="text-align:center;">Welcome to Bet eSport!</h1>

    <hr>

<!-- < ?php include('buttonsbar.php');?> -->


<style>.torneogroup{display:hidden}</style>

<?php
ButtonGeneratorHome();
GameFetcherHome(gta());
?>

<div id="nonehere" style="display:none">No matches for this game type</div>
<br>
<hr>


<?php get_footer('prueba1'); ?>
