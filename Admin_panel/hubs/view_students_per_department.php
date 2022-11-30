<br><br/>
<div class="row">
    
    <?php 
    //collect the passed
    if(isset($_GET['d']))
    {
      $d =  $_GET['d'];
    }
    echo view_students_list_per_departments($con,$d,$session); ?>
</div>