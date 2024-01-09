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

              <form method="post" class="form-horizontal form-bordered" action="<?php echo base_url()?>index.php/institute/edit_institute">

			  

			  <input type="hidden" name="id" id="id" value="<?php echo $i->id?>">

                <div class="form-body">

                  <!--<div class="form-group">

                    <label class="control-label col-md-3">Member Type</label>

                    <div class="col-md-5">

                      <select class="form-control" name="member_type">

                        <option value="1" <?php if($i->member_type == 1){?> selected <?php }?>>newsmedia</option>

                        <option value="2" <?php if($i->member_type == 2){?> selected <?php }?>>Student</option>

                        <option value="3" <?php if($i->member_type == 3){?> selected <?php }?>>Educational Institution</option>

                        <option value="4" <?php if($i->member_type == 4){?> selected <?php }?>>Instructional Facility /School</option>

                      </select>

                    </div>

                  </div>-->

                  <div class="form-group">

                    <label class="control-label col-md-3">Name</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="name" value="<?php echo $i->name;?>" name="name">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Description</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="cms_pagedes" value="<?php echo $i->description;?>" name="description">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">School Bulletin</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="school_bulletin" value="<?php echo $i->school_bulletin;?>" name="school_bulletin">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Instructor</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="instructor" value="<?php echo $i->instructor;?>" name="instructor">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Address</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="address" value="<?php echo $i->address;?>" name="address">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Telephone No</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="tel_no" value="<?php echo $i->tel_no;?>" name="tel_no">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">Email</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="email" value="<?php echo $i->email;?>" name="email">

                    </div>

                  </div>

                  <div class="form-group">

                    <label class="control-label col-md-3">SMS No</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="sms_no" value="<?php echo $i->sms_no;?>" name="sms_no">

                    </div>

                  </div><div class="form-group">

                    <label class="control-label col-md-3">IP Address</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="ip_address" value="<?php echo $i->ip_address;?>" name="ip_address">

                    </div>

                  </div><div class="form-group">

                    <label class="control-label col-md-3">Website</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="website" value="<?php echo $i->website;?>" name="website">

                    </div>

                  </div><div class="form-group">

                    <label class="control-label col-md-3">Domain Name</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="domain_name" value="<?php echo $i->domain_name;?>" name="domain_name">

                    </div>

                  </div><div class="form-group">

                    <label class="control-label col-md-3">URL</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="url" value="<?php echo $i->url;?>" name="url">

                    </div>

                  </div><div class="form-group">

                    <label class="control-label col-md-3">Learning Portal</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="learning_portal" value="<?php echo $i->learning_portal;?>" name="learning_portal">

                    </div>

                  </div><div class="form-group">

                    <label class="control-label col-md-3">Schools</label>

                    <div class="col-md-5">

                      <input type="text" class="form-control" id="schools" value="<?php echo $i->schools;?>" name="schools">

                    </div>

                  </div>

                </div>

                <div class="form-actions">

                  <div class="row">

                    <div class="col-md-offset-3 col-md-9">

                      <!--<button type="submit" class="btn red" name="submit" value="Submit"> <i class="fa fa-check"></i> Submit</button>-->

                      <input type="submit" class="btn red" id="submit" value="Submit" name="update">

                      <button class="btn default" type="button" onClick="window.location='<?php echo base_url()?>index.php/institute/view_institute';">Cancel</button>

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

