
<p id="ajaxArticle"></p>

<?php if ($news_list !== []): ?>
    <div class ="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" >

    <?php foreach ($news_list as $news_item): ?>

     
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($news_item['title']) ?></h5>
                    <p class="card-text"> <?= esc($news_item['body']) ?></p>
                    <a class="btn btn-primary"<?= esc($news_item['slug'], 'url') ?>>View article</a>
                </div>
            </div>



    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
<script>
	function getData(slug) {
		
		// Fetch data
		fetch('https://mi-linux.wlv.ac.uk/~2310346/project-root/public/ajaxnews/' + slug)
			
		  // Convert response string to json object
		  .then(response => response.json())
		  .then(response => {

			// Copy one element of response to our HTML paragraph
			document.getElementById("ajaxArticle").innerHTML = response.title + ": " + response.text;
		  })
		  .catch(err => {
			
			// Display errors in console
			console.log(err);
		});
	}
</script>