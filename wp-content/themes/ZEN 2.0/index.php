<?php get_header('prueba1');?>
<style>.torneogroup{display:hidden}</style>
<div class="row">
  <div class="twelve columns">
    <br>
    <h1 style="text-align:center;">Welcome to Bet eSport!</h1>
    <h3>To get started clock on the games you want to check out!</h3>
    <hr>
    <?php
      ButtonGeneratorHome();
      GameFetcherHome(gta());
    ?>
    <div id="nonehere" style="display:none">No matches for this game type</div>
    <br>
    <hr>
    <?php get_footer('prueba1'); ?>
