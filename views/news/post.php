<section>
				<article id="singlepost">
                    <h2 class="title"><a href="/news/<?php echo $this->news['news_id']; ?>"><?php echo $this->news['news_title']; ?></a>
                    </h2>
					<h2>Posted By: <a href="#"><?php echo $this->news['news_author_name']; ?></a> on <?php echo $this->news['news_date']; ?> In <a href="#">Tutorials</a>.</h2>
					<img src="/template<?php echo $this->news['news_preview']; ?>" alt="OOPS! Picture lost" />
					<p><?php echo $this->news['news_short_content']; ?></p>
					</article>

				<!--__--__--__--  S I D E B A R --__--__--__--__-->
				<div id="sidebar">
					<aside>
						<h1>Recent Posts</h1>
						<ul>
							<li><a href="#">Suspendisse Enim Elit Tempor Acer</a></li>
							<li><a href="#">Mauris Sed Lectus Duieleifend Quis Sem</a></li>
							<li><a href="#">Suspendisse Enim Elit Tempor Acer Fermentum Vulputate</a></li>
							<li><a href="#">Mauris Sed Lectus Duieleifend Quis Sem</a></li>
						</ul>
<!--<!---->
<?//
//echo "<pre>";
//print_r($this);
//echo "</pre>";
//?>