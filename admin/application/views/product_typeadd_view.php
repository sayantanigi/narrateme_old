<?php //$this->load->view ('header');?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
$(function() {
    setTimeout(function() { $("#testdiv").fadeOut(1500); }, 5000);
    $('#btnclick').click(function() {
        $('#testdiv').show();
        setTimeout(function() { $("#testdiv").fadeOut(1500); }, 5000)
    })
})
</script>
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
                    <li> <span>Admin panel</span> </li>
                </ul>
            </div>
            <div class="alert alert-success alert-dismissable" style="padding:10px;">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button" style="right:0;"></button>
                <strong>
                <?php $last = end($this->uri->segments); 
				if($last=="success"){echo "Data Added Successfully ......";}
				if($last=="successdelete"){echo "Data Deleted Successfully ......";} ?>
                </strong>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line boxless tabbable-reversed">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_0">
                                <div class="portlet box blue-hoki">
                                    <div class="portlet-title">
                                        <div class="caption"><i class="fa fa-gift"></i>Add Product type</div>
                                        <div class="tools">
                                            <a href="javascript:void(0);" class="collapse"></a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                            <a href="javascript:void(0);" class="reload"></a>
                                            <a href="javascript:;" class="remove"></a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form action="<?php echo base_url().'index.php/product_type/add_product_type' ?>" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Product type Image</label>
                                                    <div class="col-md-8">
                                                        <?php $file = array('type' => 'file','name' => 'userfile' ,'id' => 'userfile' ,'onchange' => 'readURL(this);');
                                                        echo form_input($file); ?>
                                                        <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"> Product type Title</label>
                                                    <div class="col-md-8"> <?php echo form_input(array('id' => 'product_type_title', 'name' => 'product_type_title','class'=>'form-control')); ?>
                                                        <?php echo form_error('product_type_title'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit' ,'class'=>'btn red')); ?>
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //$this->load->view ('footer');?>
<script>
$('INPUT[type="file"]').change(function () {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
            $('#userfile').attr('disabled', false);
        break;
        default:
        alert('This is not an allowed file type.');
        this.value = '';
    }
});
</script>
