<?php 
foreach($users->result() as $r) : 
  // echo $r->ID

?>

<tr>
<td><input name="usersid[]" id="usersid" value="<?php echo $r->userid;?>"><?php echo $r->userid; ?></td>
<td><?php echo $r->username; ?></td>
<td>
<select name="attendance" id="attendance" class="form-control attendance" placeholder="Present" value="Present" disabled>
        <option value="1">Present</option>
        <option value="2">Absent</option>
        <option value="3">Half Day</option>
</select>
</td>
<td><input type="checkbox" class="btn primary offday " name="offday" id="offday" disabled></td>
<td><input type="text" class="form-control time" name="hours" id="hours" disabled></td>
<td><a class="edit" > <span class="glyphicon glyphicon-edit sidebar-icon sidebar-icon-red"></span></a><a href="<?php echo site_url("attendance/user") ?>"></a>
</td>
</tr>

<?php 

endforeach; ?>


                    <link href="<?php echo base_url() ?>scripts/libraries/chosen/chosen.min.css" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="<?php echo base_url() ?>scripts/libraries/chosen/chosen.jquery.min.js"></script>
<script>
$(document).ready(function(){
$('.time').hide();
$(".table input[name='offday']").change(function(){
    if($(this).is(":checked")){
      $(this).parents("tr:eq(0)").find("input[name='hours']").show();
    }
    else{
      $(this).parents("tr:eq(0)").find("input[name='hours']").hide();
    }
});

$('.edit').click( function() {
  var row = $(this).closest('tr');
 $(row).find('.attendance,.offday,.time').prop("disabled",false);    
  
});
$('.editall').click( function() {

 $('.attendance,.offday,.time').prop("disabled",false);    
  
});
});
</script>