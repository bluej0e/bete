<style>
	a.side_help{
		float: left;
		display: inline-block;
		text-align: center;
		width: 100%;
		height: 50px;
		font-size: 1.3em;
		line-height: 50px;
		overflow: hidden;
		background-color: #B71C1C;
		cursor: pointer;
		-webkit-transition: all 0.12s ease-in-out;
		-moz-transition: all 0.12s ease-in-out;
		-o-transition: all 0.12s ease-in-out;
		-ms-transition: all 0.12s ease-in-out;
		font-family: Anton;
		font-size: 2em;
		margin-bottom: 1px;
	}
	a.side_help:hover{
		font-weight: 500;
		background-color: #C62828;
	}
	.sh1{
		border-radius: 15px 15px 0px 0px;
	}
	.sh4{
		border-radius: 0px 0px 15px 15px;\
	}
</style>

<div class="row">
	<div class="twelve columns">
		<h3>New to Esports betting?</h3>
		<br>
		<a class="tournaments" href="https://www.bet-esport.com/so-youre-looking-to-bet-money-on-esports/" title="WHAT ARE ESPORTS?">WHAT ARE ESPORTS?</a>
		<a class="tournaments" href="https://www.bet-esport.com/how-to-bet-on-esports/" title="HOW TO BET ON ESPORTS">HOW TO BET ON ESPORTS</a>
		<a class="tournaments" href="https://www.bet-esport.com/esports-betting-houses/" title="ESPORTS BETTING HOUSES">ESPORTS BETTING HOUSES</a>
		<a class="tournaments" href="https://www.bet-esport.com/esports-betting-tips/" title="ESPORTS BETTING TIPS">ESPORTS BETTING TIPS</a>
		<br>
	</div>
<div style="width:100%;clear:both;"></div>
	<div class="footer">
		<div class="twelve columns" >
			<center>
				<a rel="noopener" href="https://www.facebook.com/betesportcom/" target="_blank">
					<i class="fa fa-facebook-official fa-3x"></i>
				</a>
				<a rel="noopener" href="https://twitter.com/BetEsportCom" target="_blank">
					<i class="fa fa-twitter fa-3x"></i>
				</a>
				<a rel="noopener" href="https://www.youtube.com/channel/UC_7AsMpmxsT1veTjqLO5RTg" target="_blank">
					<i class="fa fa-youtube-play fa-3x"></i>
				</a>
			</center>

		</div>
	</div>
	<div>
		<center>
			<p>&nbsp;<br> Copyright © <script>document.write(new Date().getFullYear())</script> bet-esport.com</p> <a href="https://www.bet-esport.com/map/">Sitemap</a> | <a href="https://www.bet-esport.com/contact/">Contact</a> </p>
		</center>
	</div>
	<div style="height: 30px;"></div>
</div>

</body>
	<script>
	  $(document).ready(function() {
	    $(".clickable-row").click(function() {
	      window.document.location = $(this).find('a').attr("href");
	    });
			var other_games = [ "dota-2", "cs-go", "league-of-legends", "heroes-of-the-storm", "starcraft-2", "starcraft", "warcraft-iii", "hearthstone", "overwatch", "call-of-duty", "black-ops", "warcraft", "world-of-tanks", "world-of-warcraft", "rocket-league", "pubg"];
	    $('.showsinglegame').click(function(){
	      if($(this).val() == 'all'){
	        $('.torneogroup').show();
	      }else if (other_games.indexOf($(this).val()) != -1 ) {
	        $('.torneogroup').show();
	        $('.torneogroup:not(.'+$(this).val()+')').hide();
	      } else {
	        $('.torneogroup').show();
	        for(var i = 0; i < other_games.length; i++){
	          $('.'+ other_games[i] ).hide();
	        }
	      }
	    }
	    );
	    if($('.torneogroup').is(':hidden')){
	      $('#nonehere').show();
	    }else{
	      $('#nonehere').hide();
	    }
	    $("#opendiv").click(function(){
	      $("#hiddenmenu").toggle();
	    })
	  });
	</script>
	<script>
		(function () {
			var allimgs = document.images;
			for (var i = 0; i < allimgs.length; i++) {
				allimgs[i].onerror = function () {
					this.src='/i/default_sheild.png';
				}
			}
		})();
		$(window).load(function () {
			$("img").each(function () {
				var image = $(this);
				if (image.context.naturalWidth == 0 || image.readyState == 'uninitialized') {
					$(image).unbind("error").hide();
				}
			});
		});
	</script>
</html>
