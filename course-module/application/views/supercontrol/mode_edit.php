<?php //$this->load->view ('header');?>

<div class="page-container">
  <div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
      <?php $this->load->view ('supercontrol/leftbar');?>
    </div>
  </div>
  <div class="page-content-wrapper">
    <div class="page-content">
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li> <a href="<?php echo base_url(); ?>supercontrol/home">Home</a> <i class="fa fa-circle"></i> </li>
          <li> <span>supercontrol Panel</span> </li>
        </ul>
      </div>
	  
      <div class="row">
        <div class="col-md-12">
          <div class="tabbable-line boxless tabbable-reversed">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_0">
                <div class="portlet box blue-hoki">
                  <div class="portlet-title">
                    <div class="caption"> <i class="fa fa-gift"></i>Mode edit</div>
                    <div class="tools"> <a href="javascript:;" class="collapse"> </a> <a href="#portlet-config" data-toggle="modal" class="config"> </a> <a href="javascript:;" class="reload"> </a> <a href="javascript:;" class="remove"> </a> </div>
                  </div>
                  <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <?php foreach($ecms as $i){?>
                    <form method="post" class="form-horizontal form-bordered" action="<?php echo base_url().'supercontrol/mode/edit_mode '?>" enctype="multipart/form-data">
                      <div class="form-body">
                        <input type="hidden" name="mode_id" value="<?=$i->id;?>">

                        
                        <div class="form-group">
                          <label class="control-label col-md-3">Mode Title</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="mode_title" value="<?php echo $i->mode_title;?>" name="mode_title">
                          </div>
                        </div>
                        <!--<div class="form-group">
                          <label class="control-label col-md-3">Posted By</label>
                          <div class="col-md-5">
                            <input type="text" class="form-control" id="posted_by" value="<?php echo $i->posted_by;?>" name="posted_by">
                          </div>
                        </div>-->
                       <!-- <div class="form-group">
                          <label class="control-label col-md-3">Mode Descriptions</label>
                          <div class="col-md-7">
                            <textarea class="form-control" name="mode_desc" rows="6" id="pagedes"><?php echo $i->mode_desc;?></textarea>
                          </div>
                        </div>-->
                      </div>
                      <div class="form-actions">
                        <div class="row">
                          <div class="col-md-offset-3 col-md-9">
                            <!--<button type="submit" class="btn red" name="submit" value="Submit"> <i class="fa fa-check"></i> Submit</button>-->
                            <input type="submit" class="btn red" id="submit" value="Submit" name="update">
                            <button class="btn default" type="button" onclick="goBack()">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <?php }?>
                    <!-- END FORM-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CONTENT BODY -->
  </div>
  <!-- END CONTENT -->
  <!-- BEGIN QUICK SIDEBAR -->
  <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<?php //$this->load->view ('footer');?>
