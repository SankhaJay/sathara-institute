<br>
<?php foreach($notices as $item): ?>
    <article >
        <h3> <?php echo $item['title'];?> </h3>
        <small>posted on: <?php echo $item['created_at'];?></small><br>
        <?php echo $item['body'];?>
        <hr>
    </article>
<?php endforeach;?>
