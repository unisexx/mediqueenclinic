<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Product</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/products/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">SKIN CARE PRODUCTS (เพิ่ม / แก้ไข)</h3>
        </div>
        <div class="card-body">
            
            <div class="form-group">
                <label for="exampleInputFile">รูปภาพสินค้า</label>
                <?if($rs->image):?><div><img src="uploads/product/<?=$rs->image?>" width="90"></div><?endif;?>
                <div class="input-group">
                    <input type="file" name="imgUpload" class="form-control" id="fileField" />
                </div>
            </div>

            <div class="form-group">
                <label>ชื่อสินค้า (ภาษาไทย)</label>
                <input name="title_th" value="<?php echo @$rs->title_th?>" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label>ชื่อสินค้า (ภาษาอังกฤษ)</label>
                <input name="title_en" value="<?php echo @$rs->title_en?>" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>รายละเอียด (ภาษาไทย)</label>
                <textarea name="detail_th" class="form-control" rows="3"><?php echo @$rs->detail_th?></textarea>
            </div>

            <div class="form-group">
                <label>รายละเอียด (ภาษาอังกฤษ)</label>
                <textarea name="detail_en" class="form-control" rows="3"><?php echo @$rs->detail_en?></textarea>
            </div>

            <div class="form-group">
                <label>ราคา</label>
                <input name="price" value="<?php echo @$rs->price?>" type="text" class="form-control">
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