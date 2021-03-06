<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>REVIEWS</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/reviews/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">บทความ (เพิ่ม / แก้ไข)</h3>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label>หมวดหมู่</label>
                <?php echo form_dropdown('review_category_id',get_option('id','name_th','review_categories order by name_th asc'),@$rs->review_category_id,'class="form-control" style="width:auto;"','-- เลือกหมวดหมู่ --');?>
            </div>

            <div class="form-group">
                <label>หัวข้อ (ภาษาไทย)</label>
                <input name="title_th" value="<?php echo @$rs->title_th?>" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label>หัวข้อ (ภาษาอังกฤษ)</label>
                <input name="title_en" value="<?php echo @$rs->title_en?>" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>รายละเอียด (ภาษาไทย)</label>
                <textarea name="detail_th" class="form-control tinymce" rows="5"><?php echo @$rs->detail_th?></textarea>
            </div>
            
            <div class="form-group">
                <label>รายละเอียด (ภาษาอังกฤษ)</label>
                <textarea name="detail_en" class="form-control tinymce" rows="5"><?php echo @$rs->detail_en?></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูปประกอบบทความ (ภาษาไทย) - กว้าง 600 px</label>
                <?if($rs->img_th):?><div class="img_preview"><img src="uploads/review/<?=$rs->img_th?>" width="150"> <button class="del_img" data-name="img_th">ลบรูปนี้</button></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="img_th" class="form-control" id="fileField" />
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูปประกอบบทความ (ภาษาอังกฤษ) - กว้าง 600 px</label>
                <?if($rs->img_en):?><div class="img_preview"><img src="uploads/review/<?=$rs->img_en?>" width="150"> <button class="del_img" data-name="img_en">ลบรูปนี้</button></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="img_en" class="form-control" id="fileField" />
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
$('document').ready(function(){
    $('.del_img').click(function(){
        event.preventDefault();
        // console.log( $(this).data('name') );

        if (confirm('ยืนยันการลบรูป?')) {
            $("form").append('<input name="'+ $(this).data('name') +'" type="hidden" value="">');
            $(this).closest('.img_preview').remove();
        }

    });
});
</script>
<!-- /.content -->