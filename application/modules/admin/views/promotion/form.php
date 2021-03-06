<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>PROMOTIONS</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/promotions/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">บริการความสวย (เพิ่ม / แก้ไข)</h3>
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
                <label>รายละเอียด (ภาษาไทย)</label>
                <textarea name="detail_th" class="form-control tinymce" rows="5"><?php echo @$rs->detail_th?></textarea>
            </div>
            
            <div class="form-group">
                <label>รายละเอียด (ภาษาอังกฤษ)</label>
                <textarea name="detail_en" class="form-control tinymce" rows="5"><?php echo @$rs->detail_en?></textarea>
            </div>

            <div class="form-group">
                <label>อัพโหลดรูป (เลือกได้พร้อมกันหลายรูป)</label>
                <input name="filUpload[]" type="file" class="form-control" multiple>
            </div>

            <table id="tbList" class="table table-bordered">
                <thead>
                    <tr>
                        <th>รูป</th>
                        <th width="150">จัดการ</th>
                    </tr>
                    <?php foreach($rs->promotion_image->get() as $item):?>
                    <tr>
                        <td><img src="uploads/promotion_image/<?php echo $rs->id?>/<?php echo $item->image?>" width="200"></td>
                        <td>
                            <input type="hidden" name="oldImage[]" value="<?php echo $item->image?>">
                            <button type="button" class="btn btn-secondary btn-sm delList">ลบ</button>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </thead>
                <tbody>
                </tbody>
            </table>
            
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
$(document).ready(function(){
    $('body').on( "click", ".delList", function(){
        if(confirm('ยืนยันการลบข้อมูล')){
            $(this).closest('tr').fadeOut(300, function(){ 
                $(this).remove(); 
            });
        }
    });
});
</script>