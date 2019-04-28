<?php
$sub=$_GET['q'];
$conn =  mysqli_connect('localhost', 'root', '', 'college');
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
$sql = "SELECT student_usn FROM undertaken_sub where sub_name='$sub'";
$result = mysqli_query($conn, $sql);?>
    <div class="form-group">
      <label>Select Name of Student</label>
<select name="name">
  <?php
while($row = mysqli_fetch_assoc($result)){ ?>
  <option value="<?php echo $row['student_usn'] ?>"><?php echo $row['student_usn'] ?></option>

                <?php  }  ?>
</select>
</div>
