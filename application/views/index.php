<body>
<div id="wrapper">
	<div id="header">
		<img src="<?php echo base_url(); ?>img/title.png" />
	</div>

	<div id="content">
		<div id="profile">
			<img src="<?php echo base_url(); ?>img/profile.png" />
		</div>
		<div id="gallary">
			<h2>
				△Gallery
			</h2>
			<ul>
				<li>
					<a href="<?php echo base_url(); ?>img/gallery/1.jpg">
						<img src="<?php echo base_url();?>img/gallery/1.jpg">
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>img/gallery/2.jpg">
						<img src="<?php echo base_url();?>img/gallery/2.jpg">
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>img/gallery/3.jpg">
					<img src="<?php echo base_url();?>img/gallery/3.jpg">
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>img/gallery/4.jpg">
						<img src="<?php echo base_url();?>img/gallery/4.jpg">
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>img/gallery/5.jpg">
						<img src="<?php echo base_url();?>img/gallery/5.jpg">
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>img/gallery/6.jpg">
						<img src="<?php echo base_url();?>img/gallery/6.jpg">
					</a>
				</li>
				<br clear="both"/>
			</ul>
		</div>
		<div id="twitter">
			<a class="twitter-timeline" href="https://twitter.com/GuRi_kana_s" data-widget-id="455261347463168000">@GuRi_kana_s からのツイート</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<div id="contact">
			<h2>△Contact</h2>
			<span>お仕事のご依頼やご質問等がございましたら下記のフォームよりご連絡いただけますと幸いです</span>
			<h4 id="{mes_style}">{error}</h4>
			<form name="mail" method="post" action="<?php echo base_url();?>#contact">
				<input name="name" type="text" placeholder="Your Name" size="40"/><br>
				<input name="from" type="text" placeholder="Your address" size="40"/><br>
				<textarea name="message" placeholder="Message" cols="70" rows="10"></textarea><br>
				<input type="submit" value="Send" />
			</form>
		</div>
	</div>
	<div id="footer">
		<small>
			Copyright&copy;2014 Masayuki All Rights Reserved.
		</small>
	</div>
</div>
</body>
</html>
