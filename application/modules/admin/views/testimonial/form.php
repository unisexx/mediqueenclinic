<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>TESTIMONIAL</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/testimonials/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">เสียงจากลูกค้า (เพิ่ม / แก้ไข)</h3>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label>หัวข้อ (ภาษาไทย)</label>
                <input name="title_th" value="<?php echo @$rs->title_th?>" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label>หัวข้อ (ภาษาอังกฤษ)</label>
                <input name="title_en" value="<?php echo @$rs->title_en?>" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>บริการที่ได้รับ ความพึงพอใจ (ภาษาไทย)</label>
                <textarea name="detail_th" class="form-control tinymce" rows="5"><?php echo @$rs->detail_th?></textarea>
            </div>

            <div class="form-group">
                <label>บริการที่ได้รับ ความพึงพอใจ (ภาษาอังกฤษ)</label>
                <textarea name="detail_en" class="form-control tinymce" rows="5"><?php echo @$rs->detail_en?></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูปประกอบบทความ (ภาษาไทย) - กว้าง 800 px</label>
                <?if($rs->img_th):?><div><img src="uploads/testimonial/<?=$rs->img_th?>" width="300"></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="img_th" class="form-control" id="fileField" />
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูปประกอบบทความ (ภาษาอังกฤษ) - กว้าง 800 px</label>
                <?if($rs->img_en):?><div><img src="uploads/testimonial/<?=$rs->img_en?>" width="300"></div><?endif;?>
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
<!-- /.content -->