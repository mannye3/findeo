<?php 
include('core/session.php');

$sql_ver = "SELECT * FROM users WHERE email='$user_check' ";
$query_ver  = mysqli_query($con, $sql_ver);
$row_ver = mysqli_fetch_array($query_ver);



if($row_ver['user_status']=='')
{
echo "<script language='javascript' type='text/javascript'>
            window.location.href='verify.php';
                </script>";
}
include('core/user_logic.php');
include('core/user_select.php');
include('inc/user_header.php'); 
 ?>







<div class="col-md-6">
                    <h5>State</h5>
                       <select class="form-control"  name="state" id="state" onchange="change_location();">
                                 <option><?php echo $row['state'] ?></option>
                                        <?php
                                      while ($re_st = mysqli_fetch_array($stlg)) {
                                      echo '<option value="'.$re_st['name'].'" >
                                      '.$re_st['name'].'</option>';
                                               }
                                             ?>
                                      </select>
                </div>

                <!-- City -->
                <div class="col-md-6">
                    <h5>City</h5>
                     <select required="" name="lga" id="city" class="form-control" name="choose-state">
                          <option><?php echo $row['lga'] ?></option>
                              </select>
                </div>




<script> 
function change_location()
{
    var state = $("#state").val();
    
       $.ajax({
        type: "POST",
        url: "core/get_city.php",
        data: "state="+state,
        cache: false,
        success: function(response)
            {
                    //alert(response);return false;
                $("#city").html(response);
            }
            });
    
}
</script>

<?php include('inc/footer.php'); ?>