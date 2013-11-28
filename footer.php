<div id="footer">
	<div class="wrapper">

		<menu id="social">
			<ul>
				<li>
					<a href="">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-linkedin"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-instagram"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-pinterest"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-youtube"></i>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-apple"></i>
					</a>
				</li>
			</ul>
		</menu>

		<menu class="language">
			<ul>
				<?php
					if( function_exists('icl_get_languages') ):
					    $languages = icl_get_languages('skip_missing=1');
					      
					    foreach($languages as $language) {
				
					        if($language['active']) {
					            $link .= '<li class="active"><a href="' . $language['url'] . '">' . $language['language_code'] . '</a></li> ';
					      
					        } else {
					            $link .= '<li><a href="' . $language['url'] . '">' . $language['language_code'] . '</a></li> ';
					        }
					    }
					    echo $link;
					endif;
				?>
			</ul>
		</menu>
		
		<div id="copyrights">
			<p>© All rights reserved by Designhead</p>
			<p>Design & development by <a href="http://designhead.be" target="_blank">Designhead</a></p>
		</div>
		
	</div>
</div>


<!-- Start Google Analytics implementation -->
<script type="text/javascript">
  function ccAddAnalytics(){
    $.getScript('http://www.google-analytics.com/ga.js', function() { 
      var GATracker = _gat._createTracker('UA-XXXXXXX-X');
      GATracker._trackPageview(); 
    } );
  }; 
</script>
<!-- End Google Analytics implementation -->

<?php wp_footer(); ?>

</body></html>