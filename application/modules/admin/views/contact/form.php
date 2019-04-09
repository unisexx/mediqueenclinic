<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>CONTACT</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/contacts/save/1" enctype="multipart/form-data" style="padding-bottom:20px;">
    <!-- ฟอร์มภาษาไทย -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">ติดต่อ</h3>
        </div>
        <div class="card-body">
            
            <div class="form-group">
                <label class="col-sm-2 control-label">ที่อยู่ (ภาษาไทย)</label>

                <div class="col-sm-12">
                    <textarea name="address_th" class="form-control tinymce" rows="5"><?php echo @$rs->address_th?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">ที่อยู่ (ภาษาอังกฤษ)</label>

                <div class="col-sm-12">
                    <textarea name="address_en" class="form-control tinymce" rows="5"><?php echo @$rs->address_en?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">เบอร์โทรศัพท์ (ภาษาไทย)</label>

                <div class="col-sm-12">
                    <textarea name="tel_th" class="form-control tinymce" rows="5"><?php echo @$rs->tel_th?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">เบอร์โทรศัพท์ (ภาษาอังกฤษ)</label>

                <div class="col-sm-12">
                    <textarea name="tel_en" class="form-control tinymce" rows="5"><?php echo @$rs->tel_en?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">เวลาทำการ (ภาษาไทย)</label>

                <div class="col-sm-12">
                    <textarea name="time_th" class="form-control tinymce" rows="5"><?php echo @$rs->time_th?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">เวลาทำการ (ภาษาอังกฤษ)</label>

                <div class="col-sm-12">
                    <textarea name="time_en" class="form-control tinymce" rows="5"><?php echo @$rs->time_en?></textarea>
                </div>
            </div>
            
        </div>
        <!-- /.card-body -->
        
    </div>
    <!-- /.card -->

    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>

    <!-- /.card -->
    </form>

</section>
<!-- /.content -->

<script src = "media/tinymce_file_manager/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
   selector: "textarea.tinymce",theme: "modern",
	 height: 150,
   plugins: [
       "advlist autolink link image lists charmap print preview hr anchor pagebreak",
       "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
       "table contextmenu directionality emoticons paste textcolor responsivefilemanager code" ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect | fontsizeselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   external_filemanager_path:"media/tinymce_file_manager/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "../filemanager/plugin.min.js"}
   ,relative_urls:false,
   remove_script_host:false
 });
</script>