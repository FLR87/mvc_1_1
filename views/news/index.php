<section>

    <div id="sline">
        <div class="sdline"></div>
        <h1>Latest News</h1>
        <div class="sdline"></div>
    </div>

    <div id="latestp">
        <?php foreach ($this->news as $newsItem): ?>
            <article>
                <h2 class="title"><a href="/news/<?php echo $newsItem['news_id']; ?>"><?php echo $newsItem['news_title']; ?></a>
                </h2>
<!--                <img src="--><?php //echo '/template' . $newsItem['news_preview']; ?><!--" alt=""/>-->
                <p><?php echo $newsItem['news_short_content']; ?></p>
                <a href="/news/<?php echo $newsItem['news_id']; ?>" class="rm">Read More</a>
            </article>
        <?php endforeach; ?>
    </div>

</section>

<?
//echo "<pre>";
//print_r($this);
//echo "</pre>";
?>