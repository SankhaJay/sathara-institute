<br>
<button type="button" class="btn btn-primary btn-lg" onclick="location.href='show_add_notice'">Add New Notice</button>
<?php echo "<br><br>";?>
<?php foreach($notices as $item): ?>
    <article >
        <h3> <?php echo $item['title'];?> </h3>
        <small>posted on: <?php echo $item['created_at'];?></small><br>
        <?php echo $item['body'];?>
        <?php echo "<br>";?>
        <button type="button" class="btn btn-warning" onclick="location.href='show_edit_notice/<?php echo $item['id'];?>'" >Edit Notice</button>
        <button type="button" class="btn btn-danger">Delete Notice</button>
        <hr>
    </article>
<?php endforeach;?>
