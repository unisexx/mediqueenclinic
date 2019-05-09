<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>POPUP</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/popups/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">ป็อปอัพหน้าแรก (เพิ่ม / แก้ไข)</h3>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูป</label>
                <?if($rs->img_th):?><div><img src="uploads/popup/<?=$rs->img_th?>"></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="img_th" class="form-control" id="fileField" />
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">เปิดใช้งาน</label>
                <div class="input-group">
                    <input class="switch_status" type="checkbox" data-toggle="toggle" data-switch-id="<?php echo $rs->id?>" <?php echo $rs->status == 'public' ? 'checked' : '' ;?>>
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

<script>
$(function() {
    $(document).on('change', ".switch_status", function () {
        $.ajax({
            url: 'admin/ajax/changestatus',
            data:{ table : 'popups', status : $(this).prop('checked'), id : $(this).data('switch-id') },
            dataType: "json",
        });
    });
});
</script>