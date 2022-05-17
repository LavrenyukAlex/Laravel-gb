
<h1>Новости:</h1>
<?php foreach ( $news as $newsCat): ?>

    <div>
        <a href="/news/view/<?=$newsCat['id']?>"><?=$newsCat['name']?></a>
    </div>

<?php endforeach;?>
