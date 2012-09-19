<?php include("htmlheader.php"); ?>
    
    <body>
    	
    	<section id="page"> <!-- Defining the #page section with the section tag -->
    
		<?php include("pageheader.php"); ?>
		
		<article id="elections2012">
				<div>
					<p>
						Participez avec le Parti Pirate à l'abordage du Brabant Wallon pour les élections communales et provinciales du 14 octobre 2012 en votant Pirate
					</p>
					<ul>
						<li><a href="listespirates.php#OLLN">à Ottignies-Louvain-la-Neuve</a></li>
						<li>dans le Brabant Wallon<ul>
							<li><a href="listespirates.php#DISWAV">district de Wavre</a></li>
							<li><a href="listespirates.php#DISNIV">district de Nivelles</a></li>					
						</ul></li>
					</ul>
				</div>
		</article>
		
				<!-- 3 Boxes -->
				<div id="container">
										
						<figure class="figurebox"  id="box1">
							<a href="quisontlespirates.php"><img class="boximage" src="img/QuiSontLesPirates.jpg" alt="Qui sont les pirates?"/></a>
							<figcaption id="box1text" class="boxtext"><a href="quisontlespirates.php">Qui sont les pirates ?</a></figcaption>
						</figure>
					
					
						<figure class="figurebox" id="box2">
							<a href="philosophiepirate.php"><img class="boximage" src="img/Philosophie.jpg" alt="Philosophie Pirate"/></a>
							<figcaption id="box2text" class="boxtext"><a href="philosophiepirate.php">Qu'est ce que le Parti Pirate ?</a></figcaption>
						</figure>
					
					
						<figure class="figurebox" id="box3">
							<a href="propositionspirates.php"><img class="boximage" src="img/Proposition.jpg" alt="Propositions pour les élections 2012"/></a>
							<figcaption id="box3text" class="boxtext"><a href="propositionspirates.php">Pourquoi voter pirate en 2012 ?</a></figcaption>
						</figure>
					 

				</div>
				<!-- 3 Boxes END-->

			
			<!-- Article Outils start -->
			
			<article id="Outils">
			
			<div class="clear">
				<div class="hometext">
					<p>Listes pour les élections communales et provinciales 2012</p>
					<p><b>Nous sommes des pirates, pourquoi pas vous?</b></p>
					<p>Vous voulez participer? venez discuter sur le <a href="http://forum.pirateparty.be/forumdisplay.php?fid=22" class="external text" rel="nofollow">forum</a>, ou contribuer à notre  <a href="http://www.pirateparty.be/wiki/index.php/Crew_BW">wiki</a>.</p>
					<p><img src="img/Logo-Pirate-Blanc.png" width="30"> Quelques affiches sont disponibles <a href="publications">ici</a></p>
					<!-- <form action="http://admin.infomaniak.ch/mail/mailinglist_process.php" method="POST">
					<p>Inscrivez-vous à notre Newsletter :					
					<input name="maillist" type="hidden" value="cHAuYmUuYnJhYmFudHdhbGxvbkBwaXJhdGVwYXJ0eS5iZQ==" />
					<input name="action" type="hidden" value="add" />
					<input name="url" type="hidden" value="http://pirateparty.be/?page_id=65&#038;lang=en" />
					<input name="email" size="20" type="text" placeholder="Email" />
					<input name="add" type="submit" value="Go" /></p></form> -->	
				</div>
				<div class="lasttweet">
					<?php dernierTweet(); ?> <!-- Derniers Tweet de @pp_bw -->
				</div>
			</div>
			</article>
			
			<!-- Article Outils end -->	

			<?php include("footer.php"); ?>
            
		</section> <!-- Closing the #page section -->
    </body>
</html>
