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
                <label for="exampleInputFile">รูปภาพ</label>
                <?if($rs->image):?><div><img src="uploads/testimonial/<?=$rs->image?>" width="90"></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="imgUpload" class="form-control" id="fileField" />
                </div>
            </div>

            <div class="form-group">
                <label>ชื่อ (ภาษาไทย)</label>
                <input name="name_th" value="<?php echo @$rs->name_th?>" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label>ชื่อ (ภาษาอังกฤษ)</label>
                <input name="name_en" value="<?php echo @$rs->name_en?>" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>บริการที่ได้รับ ความพึงพอใจ (ภาษาไทย)</label>
                <textarea name="detail_th" class="form-control" rows="3"><?php echo @$rs->detail_th?></textarea>
            </div>

            <div class="form-group">
                <label>บริการที่ได้รับ ความพึงพอใจ (ภาษาอังกฤษ)</label>
                <textarea name="detail_en" class="form-control" rows="3"><?php echo @$rs->detail_en?></textarea>
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