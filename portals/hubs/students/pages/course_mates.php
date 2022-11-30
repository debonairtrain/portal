<div class="card col-md-12 mt-5 mb-4">
  <?php
  $level = get_user_level($con, $user_id);
  $query = mysqli_query($con, "SELECT * FROM students WHERE id != '$user_id' AND level='$level' ")or die(mysqli_error($con));
        if($query)
        {
          $sn=1;
          @$output .=
          '<table class="table">
            <thead>
              <tr>
                <th>

                </th>
                <th>Image</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>';
        $count_news=mysqli_num_rows($query);
        If($count_news>0)
        {
        while($row=mysqli_fetch_array($query)){
          $id=$row['id'];
          $first_name=$row['first_name'];
          $middle_name=$row['middle_name'];
          $last_name=$row['last_name'];
          $email=$row['email'];
          $phone_no=$row['phone_no'];
          $image=$row['image'];
          $full_name = $last_name.' , '.$middle_name.' '.$first_name;
          if(empty($image)){
            $student_image = '<img src="assets/uploads/admin.jpg" alt="..." class="img-thumbnail">';
          }else {
            $student_image = '<img src="assets/uploads/'.$image.'" alt="..." class="img-thumbnail">';
          }
          $output .= "<tr>";
          $output .= "<td>".$sn."</td>";
          $output .= "<td> ".$student_image."</td>";
          $output .= "<td> ".$full_name."</td>";
          $output .= '<td> <a href="tel:'.$phone_no.'">'.$phone_no.'</a></td>';
          $output .= '<td> <a href="mailto:'.$email.'">'.$email.'</a></td>';

          $output .= "</tr>";
          $sn++;
      }
    }
    else {
      $output .='<div class="alert alert-danger alert-dismissable">
          <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
          <img src="images/info.png" />&nbsp;&nbsp; No record found.
         </div>';
    }

       $output .=
       '</tbody>
       </table>';





       echo $output;
  }
   ?>
</div>
