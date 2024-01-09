<?php //$this->load->view ('header');?>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <?php $this->load->view ('supercontrol/leftbar');?>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>supercontrol/home">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>supercontrol Panel</span>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line boxless tabbable-reversed">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">
                                        <div class="portlet box blue-hoki">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Blog View</div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                               <?php foreach($ecms as $i){?>
                                               <table class="table table-striped table-bordered table-hover table-checkable order-column dt-responsive" id="sample_1"><br />
											   
											    <tr><td style="width:30%;" >Blog Image:</td>  <td height="130px;" width="500px"><?php if($i->blog_image==""){?>
                            No Image
                            <?php }else{?>
                            <img src="<?php echo base_url()?>uploads/blog/<?php echo $i->blog_image;?>" width="150" height="100" style="border: 2px solid #ddd;"/>
                            <?php }?></td></tr>
                                                <tr><td >Blog Title :</td>  <td><?php echo $i->blog_title;?></td></tr>
                                                <tr><td >Posted By :</td>  <td><?php echo $i->posted_by;?></td></tr> 
                                                      
                                                <tr><td >Blog Description:</td>  <td height="130px;" width="500px"><?php echo $i->blog_desc;?></td></tr>
                                               </table>
                                               
                                               
                                              
              
              <?php }?> 
              <div style="margin-left:537px;">
<td style="max-width:70px;"><a class="btn green btn-sm btn-outline sbold uppercase" href="<?php echo base_url()?>supercontrol/blog/show_blog" style="width:70px; margin-left: 450px; margin-bottom: 20px;">Back</a></td></div>
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
