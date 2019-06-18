<br>
<button type="button" class="btn btn-primary btn-lg" onclick="location.href='show_add_teacher'">Add New Teacher</button>
<?php echo "<br><br>";?>
<?php foreach($teachers as $teacher): ?>
    <article >
        <h3> <?php echo $teacher['name'];?>
        <?php echo "("?>
        <?php echo $teacher['id'];?>
        <?php echo ")"?> </h3>
        subject: <?php echo $teacher['subject'];?><br>
        phone no: <?php echo $teacher['p_no'];?><br>
        email: <?php echo $teacher['email'];?><br>
        <?php echo "<br>";?>
        <button type="button" class="btn btn-warning" onclick="location.href='show_edit_teacher/<?php echo $teacher['id'];?>'" >Edit Teacher's Details</button>
        <button type="button" class="btn btn-danger" onclick="location.href='delete_teacher/<?php echo $teacher['id'];?>'">Delete Teacher</button>
        <hr>
    </article>
<?php endforeach;?>
