<br><br/>
<?php 
    $session_title = get_current_session_title($con, $session);
?>

<h2 class="badge badge-success" style="font-size: 40px; font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;All Students for <?=$session_title;?>' Session </h2>
<div class="row">
    
    <?php 
   
    echo view_students_all($con,$d,$session); ?>
</div>