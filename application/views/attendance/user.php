<style>
.time
{
    width:70px;
}

#filter{
  margin-top:25px;
}

table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 2px;
}

table, th, td {
    text-align: center;
}
#saveall{
  float:right;
  margin-top:-45px;
}
</style>
<div class="white-area-content">
<div class="db-header clearfix">
    <div class="page-header-title"> <span class="glyphicon glyphicon-user"></span> <?php echo lang("ctn_1625")?></div>
    <div class="db-header-extra form-inline"> 
  
    <div class="form-group has-feedback no-margin">
<div class="input-group">
<!-- <input type="text" class="form-control input-sm" placeholder="<?php echo lang("ctn_354") ?>" id="form-search-input" /> -->
<!-- <div class="input-group-btn">
    <input type="hidden" id="search_type" value="0">
        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        <ul class="dropdown-menu small-text" style="min-width: 90px !important; left: -90px;">
          <li><a href="#" onclick="change_search(0)"><span class="glyphicon glyphicon-ok" id="search-like"></span> <?php echo lang("ctn_355") ?></a></li>
          <li><a href="#" onclick="change_search(1)"><span class="glyphicon glyphicon-ok no-display" id="search-exact"></span> <?php echo lang("ctn_356") ?></a></li>
          <li><a href="#" onclick="change_search(2)"><span class="glyphicon glyphicon-ok no-display" id="title-exact"></span> <?php echo lang("ctn_823") ?></a></li>
        </ul>
      </div> -->
      <!-- /btn-group -->
      
</div>
</div>
</div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
    <?php echo form_open_multipart(site_url("attendance/add_user"), array("class" => "form-horizontal")) ?>
       <div class="form-group row">
            <div class="col-md-4 ui-front">
              <label>Date</label>
               <div class="input-group">
                <input type="text" name="date" class="form-control datepicker" id="datepicker1" placeholder="<?php echo lang("ctn_1626") ?> " >
                <div class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>
            </div>
            
           <div class="col-md-3 ui-front">
           <label>User Groups</label>
                <select name="user_groups" id="user_groups" class="form-control field_type ">
                    <option value="All"><?php echo lang("ctn_1627") ?></option>
                    <?php foreach($usergroups->result() as $r) : ?>
            	<option value="<?php echo $r->ID ?>"><?php echo $r->name ?></option>
            <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-3 ui-front" id="users">
            <label>Users</label>
            <select name="users" class="form-control field_type filterText" id="filterText" >
                    <option value="All"><?php echo lang("ctn_1633") ?></option>
                    <?php foreach($users->result() as $r) : ?>
            	<option value="<?php echo $r->ID ?>"><?php echo $r->username ?></option>
            <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-2 ui-front" id="filter">
            <input type="button" class="btn btn-primary filter" name="filter" id="filterdata" value="<?php echo lang("ctn_1634") ?>">
            </div>
            
        </div>
        <div class="form-group row">
        <div class="col-md-4 ui-front" >
      <input type="text" class="form-control" name="day" id="datepicker2" >
            </div>
           
            </div>
    </div>
 
</div>
<br><br>
<div class="row" id="saveall">
            <a class="btn btn-danger editall" name="editall" >EditAll</a>
            
            <input type="submit" class="btn btn-success" name="saveall" value="SaveAll">
            </div>
<div class="panel panel-default">
<div class="panel-body">
<div class="table-responsive">
<table id="attendance-table" class="table table-bordered table-hover" disabled="">
<thead >
<tr class="table-header"><td><?php echo lang("ctn_1631") ?></td><td><?php echo lang("ctn_488") ?></td><td><?php echo lang("ctn_1629") ?></td><td><?php echo lang("ctn_1630") ?></td><td><?php echo lang("ctn_1632") ?></td></td><td><?php echo lang("ctn_1628") ?></td></tr>
</thead>

<tbody id="users1">

</tbody>


</table>
<?php echo form_close() ?>
</div>
</div>
</div>
<script>
// $(document).ready(function($) {

//  $('#filterdata').click(function() {
//   var selection = $('#user_groups').val();
//   if(selection) {
//   var dataset = $('tbody').find('tr');
//   dataset.show();
//     if(selection=='All')
//     {
//       dataset.show();
//     }
//     else{
//    dataset.filter(function(index, item) {
//      return $(item).find('td:first-child').text().split(',').indexOf(selection) === -1;
//    }).hide();
//   }
//   }
//   var selection1 = $('#filterText').val();
//   if(selection1) {
//   var dataset = $('tbody').find('tr');
//   dataset.show();
//     if(selection1=='All')
//     {
//       dataset.show();
//     }
//     else{
//    dataset.filter(function(index, item) {
//      return $(item).find('td:first-child').text().split(',').indexOf(selection1) === -1;
//    }).hide();
//   }
//   }
//  });
//  $('#filterdata').click(function() {
//   var dataset = $('tbody').find('tr');
//    var selection = $('#filterText').val();
//     dataset.show();
//     if(selection=='All')
//     {
//       dataset.show();
//     }
//     else{
//    dataset.filter(function(index, item) {
//      return $(item).find('td:first-child').text().split(',').indexOf(selection) === -1;
//    }).hide();
//   }

//  });
// });
</script>
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

$('#user_groups').change(function() {
        var id = $('#user_groups').val();
       
        $.ajax({
             type: "GET",
             url: global_base_url + "attendance/get_team_members/"+id,
             data: {
               id:id
             },
             success: function (msg) {
                 $('#users').html(msg);
             }
           
         });
    });
   
    $('#filterdata').on('click',function() {
        var id = $('#user_groups').val();
        $.ajax({
             type: "GET",
             url: global_base_url + "attendance/get_team_table/"+id,
             data: {
               id:id
             },
             success: function (msg) {
                 $('#users1').html(msg);
                
             }
           
         });
       
      
    });

    $('#filter').click(function() {
        var id = $('#user_groups').val();
        $.ajax({
             type: "POST",
             url: global_base_url + "attendance/get_team_table/"+id,
             data: {
               id:id
             },
             success: function (msg) {
                 $('#users1').html(msg);
             }
           
         });
      
    });
}); 
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#datepicker2").hide();
  var pickerOpts1 = {
      dateFormat: "yy-mm-dd",
      onSelect: function(dateText, inst) {
        var date = $(this).datepicker('getDate');
        $('#datepicker2').val($.datepicker.formatDate('DD', date)).show();
      }
  };
  $("#datepicker1").datepicker(pickerOpts1);
  
});
</script>

<script type="text/javascript">
$(document).ready(function() {

    var table = $('#attendance-table').DataTable({
        "dom" : "B<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
      "processing": false,
        "pagingType" : "full_numbers",
        "pageLength" : 20,
        "serverSide": true,
        "orderMulti": false,
        buttons: [
          { "extend": 'copy', "text":'<?php echo lang("ctn_1551") ?>',"className": 'btn btn-default btn-sm' },
          { "extend": 'csv', "text":'<?php echo lang("ctn_1552") ?>',"className": 'btn btn-default btn-sm' },
          { "extend": 'excel', "text":'<?php echo lang("ctn_1553") ?>',"className": 'btn btn-default btn-sm' },
          { "extend": 'pdf', "text":'<?php echo lang("ctn_1554") ?>',"className": 'btn btn-default btn-sm' },
          { "extend": 'print', "text":'<?php echo lang("ctn_1555") ?>', "className": 'btn btn-default btn-sm'}
        ],
        "order": [
          [0, "asc" ]
        ],
        "columns": [
        null,
        null,
        null,
        null,
        { "orderable": false },
        { "orderable": false }
    ],
        "ajax": {
            url : "<?php echo site_url("attendance/user_data/".$id) ?>",
            type : 'GET',
            data : function ( d ) {
                d.search_type = $('#search_type').val();
            }
        },
        "drawCallback": function(settings, json) {
        $('[data-toggle="tooltip"]').tooltip();
      }
    });
    $('#form-search-input').on('keyup change', function () {
    table.search(this.value).draw();
});

} );
function change_search(search) 
    {
      var options = [
        "search-like", 
        "search-exact",
        "name-exact",
        "type-exact",
        "user-exact"
      ];
      set_search_icon(options[search], options);
        $('#search_type').val(search);
        $( "#form-search-input" ).trigger( "change" );
    }

function set_search_icon(icon, options) 
    {
      for(var i = 0; i<options.length;i++) {
        if(options[i] == icon) {
          $('#' + icon).fadeIn(10);
        } else {
          $('#' + options[i]).fadeOut(10);
        }
      }
    }
</script>


</div>


