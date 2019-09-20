<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>REVIEWS FACEBOOK</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/review_fbs/save/<?= $rs->id ?>" enctype="multipart/form-data" style="padding-bottom:20px;">

        <!-- ฟอร์มที่ใช้ร่วมกัน -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title">รีวิว เฟสบุค (เพิ่ม / แก้ไข)</h3>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label>Facebook URL ของโพสต์</label>
                    <textarea name="post_url" class="form-control" cols="30" rows="3" placeholder="ตัวอย่าง https://www.facebook.com/MediqueenClinic/posts/2685861698094089"><?php echo @$rs->fb_embed ?></textarea>
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