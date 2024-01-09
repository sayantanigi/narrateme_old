<?php //$this->load->view ('header');?>

<div class="page-container">
  <div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
      <?php $this->load->view ('leftbar');?>
    </div>
  </div>
  <div class="page-content-wrapper">
    <div class="page-content">
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li> <a href="<?php echo base_url(); ?>home">Home</a> <i class="fa fa-circle"></i> </li>
          <li> <span>Admin Panel</span> </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tabbable-line boxless tabbable-reversed">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_0">
                <div class="portlet box blue-hoki">
                  <div class="portlet-title">
                    <div class="caption"> <i class="fa fa-gift"></i>Product edit</div>
                    <div class="tools"> <a href="javascript:;" class="collapse"> </a> <a href="#portlet-config" data-toggle="modal" class="config"> </a> <a href="javascript:;" class="reload"> </a> <a href="javascript:;" class="remove"> </a> </div>
                  </div>
                  <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <?php foreach($viewproduct as $i){?>
                    <form method="post" class="form-horizontal form-bordered" action="<?php echo base_url().'index.php/product/edit_product '?>" enctype="multipart/form-data">
                      <div class="form-body">
                        
                        <div class="form-group">
                          <label class="control-label col-md-3">Product Image</label>
                          <div class="col-md-7">
							
                            <div id='default_img'><img id="select" src="<?php echo base_url()?>uploads/product/<?php echo $i->product_image;?>" alt="your image" style="width:150px;"/></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Product Title</label>
                          <div class="col-md-5">
                            <?php echo $i->product_name;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Product Type</label>
                          <div class="col-md-5">
                            <?php echo $i->product_type_title;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Price</label>
                          <div class="col-md-5">
                           $  <?php echo $i->price;?>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3">Discount</label>
                          <div class="col-md-5">
                             <?php echo $i->discount;?>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3">Quantity</label>
                          <div class="col-md-5">
                             <?php echo $i->quantity;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Descriptions</label>
                          <div class="col-md-7">
                            <?php echo $i->description;?>
                          </div>
                        </div>
                      </div>
                      
                       <div class="form-group">
                          <label class="control-label col-md-3">Product Status</label>
                          <div class="col-md-5">
                            <?php $st = $i->status;
							if($st == '1'){ echo "<b style='color:green;'>Active</b>"; }
							else{  echo "<b style='color:red;'>InActive</b>"; }
							?>
                          </div>
                        </div>
                      <div class="form-actions">
                        
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
