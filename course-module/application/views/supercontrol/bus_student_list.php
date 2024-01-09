<?php
$this->load->model('supercontrol/generalmodel');
 //$this->load->view ('header');?>
<!-- BEGIN CONTAINER -->
<style>
#sample_1_filter {
	padding: 8px;
	float: right;
}
#sample_1_length {
	padding: 8px;
}
#sample_1_info {
	padding: 8px;
}
#sample_1_paginate {
	float: right;
	padding: 8px;
}
</style>
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
          <li> <a href="<?php echo base_url(); ?>supercontrol/home">Home</a> <i class="fa fa-circle"></i> </li>
          <li> <span>Admin Panel</span> <i class="fa fa-circle"></i> </li>
          <li> <span>Show Details </span> </li>
        </ul>
      </div>
      
      <!-- END PAGE BAR --> 
      <!-- BEGIN PAGE TITLE--> 
      <!-- END PAGE TITLE--> 
      <!-- END PAGE HEADER-->
      <?php if (isset($success_msg)) { echo $success_msg; } ?>
      <?php if (isset($success_msg1)) { echo $success_msg1; } ?>
      <div class="row">
        <div class="col-md-12">
          <div class="tabbable-line boxless tabbable-reversed">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_0">
                <div class="portlet box blue-hoki">
                  <div class="portlet-title">
                    <div class="caption"> <i class="fa fa-gift"></i>Business wise Student List</div>
                    <div class="tools"> <a href="javascript:;" class="collapse"> </a>  <a href="javascript:;" class="reload"> </a> <a href="javascript:;" class="remove"> </a> </div>
                  </div>
                  <div class="portlet-body form"> 
                    <!-- BEGIN FORM-->
                    <table class="table table-striped table-bordered table-hover table-checkable order-column dt-responsive" id="sample_1">
                      <thead>
                        <tr>
                          <th width="200">Business [Contact Person]</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          
                          <th align="center">Certificate</th>
                          <th>Status</th>
                          <th>Chat</th>
                          <th>View</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                			foreach($userlist as $i){
                		?>
                        <tr class="table table-striped table-bordered table-hover table-checkable order-column dt-responsive" id="sample_1">
                          <td><?php 
                              $bid=$i->business_id;
                              $query = $this->generalmodel->fetch_single_join("select * from member where member_id='$bid'");
                              echo $query->business_name." [".$query->contact_name."]";
        
                          //echo $i->business_id;

                          ?></td>
                          <td width="60" style="max-width:190px;"><?php echo $i->first_name." ".$i->last_name;?></td>
                          <td  style="max-width:200px;"><?php echo $i->email;?></td>
                          <td  style="max-width:200px;"><?php echo $i->phoneno;?></td>
                          
                          <td  style="max-width:200px;" align="center"><?php if($i->user_type=='std'){?><a href="<?php echo base_url()?>supercontrol/member/add_cirtificate/<?php echo $i->member_id;?>"><i class="fa fa-plus" aria-hidden="true"></i></a><?php }else{ echo "N/A"; }?></td>
                          <td  style="max-width:200px;"><?php if($i->status=='1'){ echo "<b style='color:green;'>Active</b>"; }else{ echo "<b style='color:red;'>InActive</b>"; }?></td>
                          <td style="max-width:50px;"><a class="btn blue btn-sm btn-outline sbold uppercase" href="<?php echo base_url()?>supercontrol/member/chat_member_id/<?php echo $i->member_id; ?>">Chat</a></td>
                          <td style="max-width:50px;"><a class="btn yellow btn-sm btn-outline sbold uppercase" href="<?php echo base_url()?>supercontrol/member/view_member_id/<?php echo $i->member_id; ?>">View</a></td>
                          <td style="max-width:50px;"><a class="btn green btn-sm btn-outline sbold uppercase" href="<?php echo base_url()?>supercontrol/member/show_member_id/<?php echo $i->member_id; ?>">Edit</a></td>
                          <td style="max-width:50px;"><a onclick="return confirm('Are you sure you want to delete ?');" class="btn red btn-sm btn-outline sbold uppercase" href="<?php echo base_url()?>supercontrol/member/delete_member/<?php echo $i->member_id;?>">Delete</a></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
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
<script>
	function f1(stat,id)
	{
		$.ajax({
                    type:"get",
                    url:"<?php echo base_url(); ?>supercontrol/property/statusproperty",
                     data:{stat : stat, id :id}
					 
					  });
		//$.get('<?php echo base_url(); ?>banner/statusbanner',{ stat : stat , id : id });
	}
</script> 
<!-- END CONTAINER -->
<?php //$this->load->view ('footer');?>
