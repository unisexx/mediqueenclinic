<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>PROMOTION HILIGHTS</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/promotion_hilights/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">โปรโมชั่นไฮไลท์ (เพิ่ม / แก้ไข)</h3>
        </div>
        <div class="card-body">
            
            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูป (ภาษาไทย) - ขนาด 834 x 412 px</label>
                <?if($rs->img_th):?><div><img src="uploads/promotion_hilight/<?=$rs->img_th?>" width="300"></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="img_th" class="form-control" id="fileField" />
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูป (ภาษาอังกฤษ) - ขนาด 834 x 412 px</label>
                <?if($rs->img_en):?><div><img src="uploads/promotion_hilight/<?=$rs->img_en?>" width="300"></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="img_en" class="form-control" id="fileField" />
                </div>
            </div>

            <div class="form-group">
                <label>ลิ้งค์</label>
                <input name="url" value="<?php echo @$rs->url?>" type="text" class="form-control">
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