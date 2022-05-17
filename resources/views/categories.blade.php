<h1>Категории:</h1>

<?php foreach ($categories as $category ): ?>

<div>
     <a href="/news/<?=$category['id']?>"><?=$category['name']?></a>
</div>
<?php endforeach;?>
