<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DOCTORS</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/doctors/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">แพทย์ผู้เชี่ยวชาญ (เพิ่ม / แก้ไข)</h3>
        </div>
        <div class="card-body">
            
            <div class="form-group">
                <label for="exampleInputFile">รูปภาพ</label>
                <?if($rs->image):?><div><img src="uploads/doctor/<?=$rs->image?>" width="90"></div><?endif;?>
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
                <label>ชื่อเล่น (ภาษาไทย)</label>
                <input name="nickname_th" value="<?php echo @$rs->nickname_th?>" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label>ชื่อเล่น (ภาษาอังกฤษ)</label>
                <input name="nickname_en" value="<?php echo @$rs->nickname_en?>" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>ตำแหน่ง (ภาษาไทย)</label>
                <input name="position_th" value="<?php echo @$rs->position_th?>" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label>ตำแหน่ง (ภาษาอังกฤษ)</label>
                <input name="position_en" value="<?php echo @$rs->position_en?>" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>ประสบการณ์ (ภาษาไทย)</label>
                <textarea name="exp_th" class="form-control" rows="3"><?php echo @$rs->exp_th?></textarea>
            </div>

            <div class="form-group">
                <label>ประสบการณ์ (ภาษาอังกฤษ)</label>
                <textarea name="exp_en" class="form-control" rows="3"><?php echo @$rs->exp_en?></textarea>
            </div>

            <div class="form-group">
                <label>ความเชี่ยวชาญ (ภาษาไทย)</label>
                <textarea name="expert_th" class="form-control" rows="3"><?php echo @$rs->expert_th?></textarea>
            </div>

            <div class="form-group">
                <label>ความเชี่ยวชาญ (ภาษาอังกฤษ)</label>
                <textarea name="expert_en" class="form-control" rows="3"><?php echo @$rs->expert_en?></textarea>
            </div>

            <div class="form-group">
                <label>วีดีโอแนะนำตัว (youtube embed link) ตัวอย่าง https://www.youtube.com/embed/QTO65nAxKG4</label>
                <input name="youtube" value="<?php echo @$rs->youtube?>" type="text" class="form-control">
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