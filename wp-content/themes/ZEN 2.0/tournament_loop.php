<style>
  .mpt1, .mpt2, .xbox, .zbox, .partido-boton, .ph11, .tbox, .threesquaretext, .partidoHolder, .icoName {
      display: flex;
  }
  .morepartidos {
      display: flex;
      /* margin: .5em; */
      /* padding: .2em .2em 0; */
      /*background-color: #222;*/
      background-image: url(/i/vs2.png);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: inherit;
      flex-direction: row;
      min-height: 80px;
  }
  .morepartidos a{
    justify-content: space-between;
    flex-direction: row;
    width: 100%;
  }
  .morepartidos p{
    padding:0;
    margin:0;
  }
  .mpt1 {
    min-width: 30%;
    margin: 0.5%;
  }
  .mpt2 {
      width: 100%;
      margin: 0.5%;
  }
  .tbox, .zbox {
    display: flex;
    align-items: center;
    font-size: 1.1em;
    overflow: hidden;
    justify-content: space-between;
    flex-direction: row;
  }
  .zbox img, .tbox img{
      width: 30px;
      height: 30px;
  }
  .threesquare img {
      height: 50px;
      padding: .5em
  }
  .threesquaretext {
      font-size: 1.5em;
      padding: .5em
  }
  .partidoHolder{
    flex-flow: wrap;
    justify-content: space-around;
  }
  .icoName{
    justify-content: flex-start;
    align-items: center;
  }
  .icoName p{
    margin-left: 5px;
  }
  @media only screen and (max-width: 499px) {
    .mpt1 {
        width: 97%;
        margin: 1;
      }
  }
</style>
<?php $currentID = get_the_ID(); ?>
  <div class="row" style="padding-right:10px; padding-left:10px">
      <h2>Bet on Related Matches</h2>
      <div class="twelve columns">
          <div class="threesquare"> <img alt="bet on <?php echo $tournament; ?>" src="/i/t1.png" />
              <div class="threesquaretext">
                  <?php echo $tournament; ?>
              </div>
          </div>
          <div class="partidoHolder">
            <?php $dday=mktime(); $args2=array( 'post_type'=> 'match', 'meta_key'=> 'tournament', 'meta_value'=> $tournament, 'post_status'=> 'publish', 'order'=> 'ASC', 'posts_per_page'=> 6, 'post__not_in'=> array($currentID), 'meta_query'=> array( array( 'key'=> 'datecomp', 'value'=> $dday, 'orderby'=> 'meta_value_num', 'compare'=> '>=' ))); $tournamentz2=new WP_Query( $args2 ); if ( $tournamentz2->have_posts() ){while ( $tournamentz2->have_posts() ){$tournamentz2->the_post(); ?>
              <div class="morepartidos mpt1">
                <a href="<?php the_permalink(); ?>">
                  <div class="tbox">
                    <div class="icoName">
                      <img onerror="this.src='/i/s1.png'" src="/i/logos/50/<?php echo seoUrl(get_post_custom_values('t1name')[0]); ?>.png" alt="<?php echo $t1name; ?>" />
                      <p><?php echo get_post_custom_values( 't1name')[0]; ?></p>
                    </div>
                    <p><?php echo get_post_custom_values( 't1odds')[0]; ?></p>
                  </div>
                  <div class="zbox">
                    <div class="icoName">
                      <img onerror="this.src='/i/s2.png'" src="/i/logos/50/<?php echo seoUrl(get_post_custom_values('t2name')[0]); ?>.png" alt="<?php echo $t2name; ?>" />
                      <p><?php echo get_post_custom_values( 't2name')[0]; ?></p>
                    </div>
                    <p><?php echo get_post_custom_values( 't2odds')[0]; ?></p>
                  </div>
                </a>
              </div>
            <?php }}else{echo "<p>Right now there's no matches for ". $tournament . ".</p>"; }wp_reset_query(); ?>
          </div>
      </div>
      <div class="six columns">
          <div class="threesquare"> <img alt="bet on <?php echo $t1name; ?>" style="max-width: 100px;" onerror="this.src='/i/s1.png'" src="/i/logos/50/<?php echo seoUrl($t1name); ?>.png" />
              <div class="threesquaretext">
                  <?php echo $t1name; ?>
              </div>
          </div>
          <?php $args3=array( 'post_type'=> 'match', 'post_status'=> 'publish', 'order'=> 'ASC', 'meta_value'=> $t1name, 'posts_per_page'=> 3, 'post__not_in'=> array($currentID), 'meta_query'=> array( 'relation'=> 'OR', array( 'key'=> 't1name', 'value'=> $t1name, ), array( 'key'=> 't2name', 'value'=> $t1name, ), ), 'meta_query'=> array( array( 'key'=> 'datecomp', 'value'=> $dday, 'orderby'=> 'meta_value', 'compare'=> '>=' ))); $tournamentz3=new WP_Query( $args3 ); if ( $tournamentz3->have_posts() ){while ( $tournamentz3->have_posts() ){$tournamentz3->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
              <div class="morepartidos mpt2">
                  <div class="tbox"> <img style="padding-bottom:5px;" onerror="this.src='/i/s1.png'" src="/i/logos/50/<?php echo seoUrl(get_post_custom_values( 't1name')[0]); ?>.png" alt="<?php echo $t1name; ?>" />
                      <br><img onerror="this.src='/i/s2.png'" src="/i/logos/50/<?php echo seoUrl(get_post_custom_values( 't2name')[0]); ?>.png" alt="<?php echo $t2name; ?>" />
                  </div>
                  <div class="xbox">
                      <?php echo get_post_custom_values( 't1name')[0]; ?>
                      <br>
                      <?php echo get_post_custom_values( 't2name')[0]; ?>
                  </div>
                  <div class="zbox">
                      <?php echo get_post_custom_values( 't1odds')[0]; ?>
                      <br>
                      <?php echo get_post_custom_values( 't2odds')[0]; ?>
                  </div>
              </div>
          </a>
          <?php }}else{echo "<p>Right now there's no matches for ". $t1name . ".</p>";}wp_reset_query(); ?>
      </div>
      <div class="six columns">
          <div class="threesquare">
          <img alt="bet on <?php echo $t2name; ?>" style="max-width: 100px;" src="/i/logos/50/<?php echo seoUrl($t2name); ?>.png" onerror="this.src='/i/s1.png'"/>
              <div class="threesquaretext">
                  <?php echo $t2name; ?>
              </div>
          </div>
          <?php $args4=array( 'post_type'=> 'match', 'post_status'=> 'publish', 'meta_value'=> $t2name, 'posts_per_page'=> 3, 'post__not_in'=> array($currentID), 'meta_query'=> array( 'relation'=> 'OR', array( 'key'=> 't1name', 'value'=> $t2name, ), array( 'key'=> 't2name', 'value'=> $t2name, ), ), 'meta_query'=> array( array( 'key'=> 'datecomp', 'value'=> $dday, 'compare'=> '>=' ))); $tournamentz4=new WP_Query( $args4 ); if ( $tournamentz4->have_posts() ){while ( $tournamentz4->have_posts() ){$tournamentz4->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
              <div class="morepartidos mpt2">
                  <div class="tbox"> <img style="padding-bottom:5px;" onerror="this.src='/i/s1.png'" src="/i/logos/50/<?php echo seoUrl(get_post_custom_values( 't1name')[0]); ?>.png" alt="<?php echo $t1name; ?>" />
                      <br><img onerror="this.src='/i/s2.png'" src="/i/logos/50/<?php echo seoUrl(get_post_custom_values( 't2name')[0]); ?>.png" alt="<?php echo $t2name; ?>" />
                  </div>
                  <div class="xbox">
                      <?php echo get_post_custom_values( 't1name')[0]; ?>
                      <br>
                      <?php echo get_post_custom_values( 't2name')[0]; ?>
                  </div>
                  <div class="zbox">
                      <?php echo get_post_custom_values( 't1odds')[0]; ?>
                      <br>
                      <?php echo get_post_custom_values( 't2odds')[0]; ?>
                  </div>
              </div>
          </a>
          <?php }}else{echo "<p>Right now there's no matches for ". $t2name . ".</p>";}wp_reset_query(); ?>
      </div>
  </div>
