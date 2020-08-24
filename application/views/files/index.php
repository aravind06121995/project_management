<style type="text/css">
  .modal.fade .modal-dialog {
    width: 80%;
  }
 .form-horizontal .form-group {
    width: 100%;
  }
  .form-inline .form-control {
    width: 100%;
  }
</style>

<div class="white-area-content">

<div class="db-header clearfix">
    <div class="page-header-title"> <span class="glyphicon glyphicon-file"></span> <?php echo lang("ctn_463") ?></div>
    <div class="db-header-extra form-inline"> 
      <div class="btn-group">
    <div class="dropdown">
  <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <?php echo lang("ctn_448") ?>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      <li><a href="<?php echo site_url("files/" . $page) ?>"><?php echo lang("ctn_449") ?></a></li>
      <li><a href="<?php echo site_url("files/" . $page . "/0/0") ?>"><?php echo lang("ctn_483") ?></a></li>
    <?php foreach($projects->result() as $r) : ?>
      <li><a href="<?php echo site_url("files/".$page."/0/" . $r->ID) ?>"><?php echo $r->name ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>
</div>

    <div class="form-group has-feedback no-margin">
<div class="input-group">
<input type="text" class="form-control input-sm" placeholder="Search ..." id="form-search-input" />
<div class="input-group-btn">
    <input type="hidden" id="search_type" value="0">
        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        <ul class="dropdown-menu small-text" style="min-width: 90px !important; left: -90px;">
          <li><a href="#" onclick="change_search(0)"><span class="glyphicon glyphicon-ok" id="search-like"></span> <?php echo lang("ctn_355") ?></a></li>
          <li><a href="#" onclick="change_search(1)"><span class="glyphicon glyphicon-ok no-display" id="search-exact"></span> <?php echo lang("ctn_356") ?></a></li>
          <li><a href="#" onclick="change_search(2)"><span class="glyphicon glyphicon-ok no-display" id="name-exact"></span> <?php echo lang("ctn_484") ?></a></li>
          <li><a href="#" onclick="change_search(3)"><span class="glyphicon glyphicon-ok no-display" id="type-exact"></span> <?php echo lang("ctn_485") ?></a></li>
          <li><a href="#" onclick="change_search(4)"><span class="glyphicon glyphicon-ok no-display" id="user-exact"></span> <?php echo lang("ctn_357") ?></a></li>
        </ul>
      </div><!-- /btn-group -->
</div>
</div>
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><?php echo lang("ctn_486") ?></button>
    <!-- 
      <a href="<?php echo site_url("files/add_file/" . $folder_parent) ?>" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><?php echo lang("ctn_486") ?></a> 
    -->
<div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" title="Close" style="color: #fff">&times;</button>
                  <h4 class="modal-title">Add Files</h4>
                </div>
                <div class="modal-body">
                 <script type="text/javascript">
                  $(document).ready(function() {
                      $('#project-select').change(function() {
                          var projectid = $('#project-select').val();
                          $.ajax({
                              url: global_base_url + 'files/get_folders_for_project/',
                              type: 'GET',
                              data: {
                                  projectid : projectid
                              },
                              success: function(msg) {
                                  $('#folder-area').html(msg);
                              }
                          });
                      });

                      var default_projectid = <?php echo $default_projectid ?>;
                      var folderid = <?php echo $folderid ?>;

                      if(default_projectid) {
                          get_projects(default_projectid, folderid);
                      }

                      function get_projects(projectid, nfolderid) 
                      {
                          $.ajax({
                              url: global_base_url + 'files/get_folders_for_project/',
                              type: 'GET',
                              data: {
                                  projectid : projectid,
                                  folderid : nfolderid
                              },
                              success: function(msg) {
                                  $('#folder-area').html(msg);
                              }
                          });
                      }
                  });
                </script>
<div class="white-area-content">

<div class="db-header clearfix">
    <div class="page-header-title"> <span class="glyphicon glyphicon-file"></span> <?php echo lang("ctn_463") ?></div>
    <div class="db-header-extra"> 
</div>
</div>


<div class="panel panel-default">
<div class="panel-body">

 <?php echo form_open_multipart(site_url("files/add_file_process"), array("class" => "form-horizontal")) ?>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_464") ?></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="name" value="">
                    </div>
            </div>
            <br><br>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_465") ?></label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" name="userfile">
                    </div>
            </div>
            <br><br>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_466") ?></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="file_url">
                        <span class="help-block"><?php echo lang("ctn_467") ?></span>
                    </div>
            </div>
            <br><br>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_468") ?></label>
                    <div class="col-md-8">
                        <textarea name="note" id="file_note"></textarea>
                    </div>
            </div>
            <input type="hidden" name="folderid" value="<?php // echo $id; ?>">
            <input type="hidden" name="projectid" value="0">
            <!-- <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_469") ?></label>
                    <div class="col-md-8 ui-front">
                        <select name="projectid" class="form-control" id="project-select">
                        <option value="-1"><?php echo lang("ctn_470") ?></option>
                        <option value="0"><?php echo lang("ctn_471") ?></option>
                        <?php foreach($projects->result() as $r) : ?>
                            <option value="<?php echo $r->ID ?>"<?php if('$project_id_display' == $r->ID) echo "selected" ?>><?php echo $r->name ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
            </div> -->
          <!--
            <div class="form-group" id="folder-area">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_472") ?></label>
                    <div class="col-md-8">
                        <select name="folderid" class="form-control" value="<?php echo $id; ?>">
                        <option value="-1"><?php echo lang("ctn_473") ?></option>
                        </select>
                        <span class="help-block"><?php echo lang("ctn_474") ?></span>
                    </div>
            </div>
          -->
            <hr style="border-bottom: 1px solid #000;">
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><b><?php echo lang("ctn_1619") ?></b></label>
                    <div class="col-md-8">
                      <span><b>
                        <ol class="breadcrumb">
                          <?php if(count($folders) == 0) : ?>
                          <li class="active"><?php echo lang("ctn_487") ?></li>
                        <?php else : ?>
                          <li><a href="<?php echo site_url("files") ?>"><?php echo lang("ctn_487") ?></a></li>
                        <?php endif; ?>
                          <?php foreach($folders as $folder) : ?>
                            <?php if($folder->ID == $folder_parent) : ?>
                              <li class="active"><?php echo $folder->file_name ?></li>
                            <?php else : ?>
                              <li><a href="<?php echo site_url("files/".$page."/" . $folder->ID) ?>"><?php echo $folder->file_name ?></a></li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </ol>
                      </b>
                      </span>
                    </div>
            </div>
<!--             <b><?php echo lang("ctn_475") ?></b>-->
            <br><br>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_476") ?></label>
                    <div class="col-md-8">
                        <input type="checkbox" name="folder_flag" value="1">
                        <span class="help-block"><?php echo lang("ctn_477") ?></span>
                    </div>
            </div>
            <br><br>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_478") ?></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="folder_name" value="">
                    </div>
            </div>
            <br><br>
            <input type="submit" class="btn btn-primary form-control" id="submit" value="<?php echo lang("ctn_465") ?>" />
            <?php echo form_close() ?>
</div>
</div>

</div>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
				 </div>
          </div>
        </div>
</div>
</div>

<ol class="breadcrumb">
  <?php if(count($folders) == 0) : ?>
  <li class="active"><?php echo lang("ctn_487") ?></li>
<?php else : ?>
	<li><a href="<?php echo site_url("files") ?>"><?php echo lang("ctn_487") ?></a></li>
<?php endif; ?>
  <?php foreach($folders as $folder) : ?>
  	<?php if($folder->ID == $folder_parent) : ?>
  		<li class="active"><?php echo $folder->file_name ?></li>
  	<?php else : ?>
  		<li><a href="<?php echo site_url("files/".$page."/" . $folder->ID) ?>"><?php echo $folder->file_name ?></a></li>
  	<?php endif; ?>
  <?php endforeach; ?>
</ol>


<div class="table-responsive">
<table id="files-table" class="table table-bordered table-hover">
<thead>
<tr class="table-header"><td><?php echo lang("ctn_488") ?></td><td><?php echo lang("ctn_489") ?></td><td><?php echo lang("ctn_490") ?></td><td><?php echo lang("ctn_491") ?></td><td><?php echo lang("ctn_492") ?></td><td><?php echo lang("ctn_52") ?></td></tr>
</thead>
<tbody>
</tbody>
</table>
</div>


</div>
<script type="text/javascript">	
CKEDITOR.replace('file_note', { height: '100'});	
</script>

<script type="text/javascript">
$(document).ready(function() {

   var st = $('#search_type').val();
    var table = $('#files-table').DataTable({
      "dom": 'lBfrtip',
      "processing": false,
        "pagingType" : "full_numbers",
        "pageLength" : 5,
        "serverSide": true,
        "orderMulti": false,
        buttons: [
          { "extend": 'copy', "text":'<?php echo lang("ctn_1551") ?>',"className": 'btn btn-default btn-sm' },
          { "extend": 'csv', "text":'<?php echo lang("ctn_1552") ?>',"className": 'btn btn-default btn-sm' },
          { "extend": 'excel', "text":'<?php echo lang("ctn_1553") ?>',"className": 'btn btn-default btn-sm' },
          { "extend": 'pdf', "text":'<?php echo lang("ctn_1554") ?>',"className": 'btn btn-default btn-sm' },
          { "extend": 'print', "text":'<?php echo lang("ctn_1555") ?>',"className": 'btn btn-default btn-sm' }
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
            url : "<?php echo site_url("files/file_page/" . $page . "/" . $folder_parent . "/" . $projectid ) ?>",
            type : 'GET',
            data : function ( d ) {
                d.search_type = $('#search_type').val();
            }
        },
        "lengthMenu": [[5 ,25, 100,100000], [5, 25, 100, "All"]],
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
