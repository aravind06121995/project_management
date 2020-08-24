<div class="white-area-content">
  <div class="db-header clearfix">
    <div class="page-header-title"> <span class="glyphicon glyphicon-file"></span> <?php echo lang("ctn_463") ?></div>
    <div class="db-header-extra form-inline"> 
        <style type="text/css">
          .orderlist {
            margin: 2%;
            display: inline-block;
            position: relative;
          }
          .text_name {
            white-space: nowrap; 
            width: 150px; 
            overflow: hidden;
            text-overflow: ellipsis; 
          }
          .orderlist1:hover .trash {
              opacity: 1;
              z-index: 99;
              position: absolute;
          }
          img {
            border-radius: 5%;
            cursor: pointer;
          }
          .trash {
            position: absolute;
            right: -120px;
            top: -5px;
            margin-top: 4px;
            border: none;
            cursor: pointer;
            opacity: 0;
            display: block;
            transition: all .5s ease-in-out;
          }
           
          @media screen and (min-width: 768px) {
            .modal-dialog {
              width: 100%; /* New width for default modal */
            }
            .modal-sm {
              width: 350px; /* New width for small modal */
            }
          }
          @media screen and (min-width: 992px) {
            .modal-lg {
              width: 950px; /* New width for large modal */
            }
          }
          #desc-zoom-img-show { 
            max-height: 600px;
			width: auto;
			height: auto;
			max-width: 100%;
          }
          .text_name {
            text-align: center;
            color: black;
            font-size: 15px;
          } 
		  .modal1.fade1 .modal-dialog1 {
            width: 80%;
          }
		  .form-horizontal .form-group {
            width: 100%;
          }
          .form-inline .form-control {
            width: 100%;
          }
          .image {
            object-fit: contain;
          }
        </style>

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
        <!-- Add Files button on top right corner
      <a href="<?php echo site_url("technical/add_file/" . $folder_parent) ?>" class="btn btn-primary btn-sm"><?php echo lang("ctn_486") ?></a> 
    -->
		
		<div class="modal fade modal1 fade1" id="myModal1" role="dialog">
            <div class="modal-dialog modal-dialog1">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" title="Close" style="color: #fff">&times;</button>
                  <h4 class="modal-title">Add Files</h4>
                </div>
                <div class="modal-body">
                 <div class="white-area-content">

                  <div class="db-header clearfix">
                      <div class="page-header-title"> <span class="glyphicon glyphicon-file"></span> <?php echo lang("ctn_463") ?></div>
                      <div class="db-header-extra"> 
                  </div>
                  </div>

                  <div class="panel panel-default">
                  <div class="panel-body">
                  <!-- getting folder id from url -->
                  <?php $uri =  $_SERVER["REQUEST_URI"]; //it will print full url
                      $uriArray = explode('/', $uri); //convert string into array with explode
                      $id = $uriArray[5];
                  ?>
        <?php echo form_open_multipart(site_url("technical/add_file_process"), array("class" => "form-horizontal")) ?>
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
            <input type="hidden" name="folderid" value="<?php echo $id; ?>">
            <input type="hidden" name="projectid" value="0">

           <!--  <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><?php echo lang("ctn_469") ?></label>
                    <div class="col-md-8 ui-front">
                        <select name="projectid" class="form-control" id="project-select">
                        <option value="-1"><?php echo lang("ctn_470") ?></option>
                        <option value="0"><?php echo lang("ctn_471") ?></option>
                        <?php foreach($projects->result() as $r) : ?>
                            <option value="<?php echo $r->ID ?>"><?php echo $r->name ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div> 
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
            <hr style="border-bottom: : 1px solid #000">
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading"><b><?php echo lang("ctn_1619") ?></b></label>
                    <div class="col-md-8">
                      <span><b>
                        <ol class="breadcrumb">
                          <?php if(count($folders) == 0) : ?>
                          <li class="active"><?php echo lang("ctn_487") ?></li>
                        <?php else : ?>
                          <li><a href="<?php echo site_url("technical") ?>"><?php echo lang("ctn_487") ?></a></li>
                        <?php endif; ?>
                          <?php foreach($folders as $folder) : ?>
                            <?php if($folder->ID == $folder_parent) : ?>
                              <li class="active"><?php echo $folder->file_name ?></li>
                            <?php else : ?>
                              <li><a href="<?php echo site_url("technical/".$page."/" . $folder->ID) ?>"><?php echo $folder->file_name ?></a></li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </ol>
                      </b>
                      </span>
                    </div>
            </div>
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
      <li><a href="<?php echo site_url("technical/all") ?>"><?php echo lang("ctn_487") ?></a></li>
    <?php endif; ?>
      <?php foreach($folders as $folder) : ?>
        <?php if($folder->ID == $folder_parent) : ?>
          <li class="active"><?php echo $folder->file_name ?></li>
        <?php else : ?>
          <li><a href="<?php echo site_url("technical/".$page."/" . $folder->ID) ?>"><?php echo $folder->file_name ?></a></li>
        <?php endif; ?>
      <?php endforeach; ?>
  </ol>
  <!-- getting the data from controller Files.php -->
  <div id="gallery"></div> 
  
 </div> 
 <script type="text/javascript">
CKEDITOR.replace('file_note', { height: '100'});
</script>
 <script type="text/javascript">
    // to get the value from controller using ajax 
    $(document).ready(function() {
      $.ajax({
        url: "<?php echo site_url("technical/file_page1/" . $page . "/" . $folder_parent . "/" . $projectid ) ?>",
        type : 'GET'
      }).done(function(data){
        $("#gallery").html(data);
      })
    });
    // while click on image it will return the current id to controller, to show the respective value based on id
    $(document).on("click", ".zoom-img-open", function () {
      //getting sorce file name & id in array on data-id, by using split can get the value in array format 
       var zoomImg = $(this).data('id').split(',');
       var zoomdeslink = '/index.php/technical/view_file/'+zoomImg[1];
       // alert(zoomImg[1]);

       $(".modal-body #desc-zoom-img-show").attr('src', zoomImg[0]);//setting the source value by its id name
       $(".modal-body #desc-zoom-detail-show").attr('src', zoomdeslink);//setting the source value by its id name
       // it is unnecessary to have to manually call the modal.
       $('#myModal').modal('show');
      });

  </script>