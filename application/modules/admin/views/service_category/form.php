<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>SERVICE CATEGORIES</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/service_categories/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">หมวดหมู่บริการความสวย (เพิ่ม / แก้ไข)</h3>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label>หัวข้อ (ภาษาไทย)</label>
                <input name="name_th" value="<?php echo @$rs->name_th?>" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>หัวข้อ (ภาษาอังกฤษ)</label>
                <input name="name_en" value="<?php echo @$rs->name_en?>" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูป (ภาษาไทย) - ขนาด 343 x 227 px</label>
                <?if($rs->img_th):?><div><img src="uploads/service_category/<?=$rs->img_th?>" width="300"></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="img_th" class="form-control" id="fileField" />
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">อัพโหลดรูป (ภาษาอังกฤษ) - ขนาด 343 x 227 px</label>
                <?if($rs->img_en):?><div><img src="uploads/service_category/<?=$rs->img_en?>" width="300"></div><?endif;?>
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