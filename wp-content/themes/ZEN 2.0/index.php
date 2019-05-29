<?php get_header('prueba1');?>
<style>.torneogroup{display:hidden}</style>
<div class="row">
  <div class="twelve columns">
    <br>
    <h1 style="text-align:center;">Welcome to Bet-Esport.com!</h1>
    <h4 style="text-align:center;">To get started click on the games you want to check out!</h4>
    <hr>
    <?php
      ButtonGeneratorHome();
      GameFetcherHome(gta());
    ?>
    <div id="nonehere" style="display:none">No matches for this game type</div>
    <br>
    <hr>
    <?php get_footer('prueba1'); ?>
