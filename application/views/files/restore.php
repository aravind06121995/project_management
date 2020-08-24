<div class="white-area-content">
  <div class="db-header clearfix">
    <div class="page-header-title"> <span class="glyphicon glyphicon-file"></span> <?php echo lang("ctn_1624") ?></div>
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
            height: 520px; /* Setting modal box image height and width   */
            width: 100%;
          }
          .text_name {
            text-align: center;
            color: black;
            font-size: 15px;
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
        <a href="<?php echo site_url("files/add_file/" .$folder_parent) ?>" class="btn btn-primary btn-sm"><?php echo lang("ctn_486") ?></a>
    </div>
  </div>

  <ol class="breadcrumb">
      <?php if(count($folders) == 0) : ?>
      <li class="active"><?php echo lang("ctn_487") ?></li>
    <?php else : ?>
      <li><a href="<?php echo site_url("files/restore") ?>"><?php echo lang("ctn_487") ?></a></li>
    <?php endif; ?>
      <?php foreach($folders as $folder) : ?>
        <?php if($folder->ID == $folder_parent) : ?>
          <li class="active"><?php echo $folder->file_name ?></li>
        <?php else : ?>
          <li><a href="<?php echo site_url("files/".$page."/" . $folder->ID) ?>"><?php echo $folder->file_name ?></a></li>
        <?php endif; ?>
      <?php endforeach; ?>
  </ol>
  <!-- getting the data from controller Files.php -->
  <div id="gallery"></div> 
  
</div>
<script type="text/javascript">
    // to get the value from controller using ajax 
    $(document).ready(function() {
      $.ajax({
        url: "<?php echo site_url("files/file_restore_page/" . $page . "/" . $folder_parent . "/" . $projectid ) ?>",
        type : 'GET'
      }).done(function(data){
        $("#gallery").html(data);
      })
    });
    // while click on image it will return the current id to controller, to show the respective value based on id
    $(document).on("click", ".zoom-img-open", function () {
      //getting sorce file name & id in array on data-id, by using split can get the value in array format 
       var zoomImg = $(this).data('id').split(',');
       var zoomdeslink = '/project_management/index.php/files/view_file/'+zoomImg[1];
       // alert(zoomImg[1]);

       $(".modal-body #desc-zoom-img-show").attr('src', zoomImg[0]);//setting the source value by its id name
       $(".modal-body #desc-zoom-detail-show").attr('src', zoomdeslink);//setting the source value by its id name
       // it is unnecessary to have to manually call the modal.
       $('#myModal').modal('show');
      });

  </script>