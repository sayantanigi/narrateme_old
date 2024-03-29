<div class="page-container">

  <!-- BEGIN SIDEBAR -->

  <div class="page-sidebar-wrapper">

    <!-- BEGIN SIDEBAR -->

    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->

    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

    <?php //include"lib/leftbar.php"?>

    <?php $this->load->view('leftbar'); ?>

    <!-- END SIDEBAR -->

  </div>

  <!-- END SIDEBAR -->

  <!-- BEGIN CONTENT -->

  <div class="page-content-wrapper">

    <!-- BEGIN CONTENT BODY -->

    <div class="page-content">

      <!-- END THEME PANEL -->

      <!-- BEGIN PAGE TITLE-->

      <h3 class="page-title">

        <?//=$pagetitle?>

        <!--<small>classic page head option</small>-->

      </h3>

      <!-- END PAGE TITLE-->

      <!-- BEGIN PAGE BAR -->

      <div class="page-bar">

        <ul class="page-breadcrumb">

          <li> <a href="dashboard.php">Home</a> <i class="fa fa-angle-right"></i> </li>

          <li> <span>

           <?php echo $title;?>

            </span> </li>

        </ul>

      </div>

      <!-- END PAGE BAR -->

      <?php //} ?>

      <?php

        //if($_REQUEST['mess'] == 'added') {

        ?>

      <div class="alert alert-success alert-dismissable" style="padding:10px;">

        <button class="close" aria-hidden="true" data-dismiss="alert" type="button" style="right:0;"></button>

        <?php //echo $h1title;//echo $this->session->flashdata('success_msg');; ?>

      </div>

      <?php // } ?>

      <div class="row">

        <div class="col-md-12">

          <!-- BEGIN PORTLET-->

          <div class="portlet box blue-hoki">

            <div class="portlet-title">

              <div class="caption"> <i class="fa fa-reorder"></i>

                <?//=$pagetitle?>

              </div>

              <div class="tools"> <a href="javascript:;" class="collapse"> </a> <a href="#portlet-config" data-toggle="modal" class="config"> </a> <a href="javascript:;" class="reload"> </a> <a href="javascript:;" class="remove"> </a> </div>

            </div>

            <div class="portlet-body form">

             <?php foreach($ecms as $i){?>

              <form method="post" class="form-horizontal form-bordered" action="<?php echo base_url()?>index.php/cms/edit_cms_individual" enctype="multipart/form-data">

                <div class="form-body">

                <input type="hidden" name="cms_id" value="<?=$i->id;?>">

                 <div class="form-group">

                    <label class="control-label col-md-3">Page Title</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="cms_pagetitle" value="<?php echo $i->cms_pagetitle;?>" name="cms_pagetitle">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Heading</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="cms_page_heading" value="<?php echo $i->cms_page_heading;?>" name="cms_page_heading">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Meta Keyword</label>

                    <div class="col-md-5">

                      <textarea class="form-control" name="meta_keywords" rows="6" id="meta_keywords"><?php echo $i->meta_keywords;?></textarea>

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Meta Descriptions</label>

                    <div class="col-md-5">

                      <textarea class="form-control" name="meta_description" rows="6" id="meta_description"><?php echo $i->meta_description;?></textarea>

                    </div>

                  </div>

                   <div class="form-group">

                    <label class="control-label col-md-3">

                    Address Map

                    <div style="font-size:10px; color:#ff0000;">(Enter Google Iframe code here)</div>

                    </label>

                    <div class="col-md-7">

                      <textarea class="form-control" name="cmsmap" rows="6" id="cmsmap"><?php echo $i->cmsmap;?></textarea>

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Descriptions</label>

                    <div class="col-md-7">

                      <!--<input type="text" class="form-control" id="cms_pagedes" value="<?php echo $i->cms_pagedes;?>" name="cms_pagedess">-->

                      <textarea class="form-control" name="cms_pagedes" rows="6" id="cms_pagedes"><?php echo $i->cms_pagedes;?></textarea>

                    </div>

                  </div>

                 <div class="form-group">
                    <label class="control-label col-md-3">Image Upload</label>
                    <div class="col-md-7">
                    <?php
                    $file = array('type' => 'file','name' => 'userfile','onchange' => 'readURL(this);');
					echo form_input($file);
                    ?>
                    	<?php //echo form_input(array('id' => 'name', 'name'=>'image','type' =>'file' ,'class'=>'form-control fileimage')); ?>
                     <div id='default_img'><img id="select" src="<?php echo base_url()?>/uploads/<?php echo $i->cmsimg;?>" alt="your image" style="width:150px;"/></div>
                    </div>
                  </div>

                </div>

                <div class="form-actions">

                  <div class="row">

                    <div class="col-md-offset-3 col-md-9">

                      <!--<button type="submit" class="btn red" name="submit" value="Submit"> <i class="fa fa-check"></i> Submit</button>-->

                      <input type="submit" class="btn red" id="submit" value="Submit" name="update">

                      <a href="<?php echo base_url()?>index.php/cms"><button class="btn default" type="button">Cancel</button></a>

                    </div>

                  </div>

                </div>

              </form>

              <?php }?>

              <!-- BEGIN FORM-->

              <!-- END FORM-->

            </div>

          </div>

          <!-- END PORTLET-->

        </div>

      </div>

    </div>

    <!-- END CONTENT BODY -->

  </div>

  <!-- END CONTENT -->

  <!-- BEGIN QUICK SIDEBAR -->

  <!-- END QUICK SIDEBAR -->

</div>

