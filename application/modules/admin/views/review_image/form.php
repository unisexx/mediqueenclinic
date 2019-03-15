<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>REVIEWS IMAGE</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <form class="form-horizontal" method="post" action="admin/review_images/save/<?=$rs->id?>" enctype="multipart/form-data" style="padding-bottom:20px;">
    
    <!-- ฟอร์มที่ใช้ร่วมกัน -->
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">อัลบัม (เพิ่ม / แก้ไข)</h3>
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
                <label>อัพโหลดรูป (เลือกได้พร้อมกันหลายรูป)</label>
                <input name="filUpload[]" type="file" class="form-control" multiple>
            </div>

            <!-- <button id="addList" type="button" class="btn btn-success btn-sm" style="margin-bottom:10px;">เพิ่มลิสต์รายการ</button> -->
            
            <table id="tbList" class="table table-bordered">
                <thead>
                    <tr>
                        <th>รูป</th>
                        <th width="150">จัดการ</th>
                    </tr>
                    <?php foreach($rs->review_image_detail->get() as $item):?>
                    <tr>
                        <td><img src="uploads/review_image/<?php echo $rs->id?>/<?php echo $item->image?>" width="200"></td>
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

<script>
$(document).ready(function(){
    $('#addList').click(function(){
        var txt = '';
            txt += '<tr>'
                    +'<td><input name="name_th[]" type="text" class="form-control"></td>'
                    +'<td><button type="button" class="btn btn-secondary btn-sm delList">ลบ</button></td>'
                    +'</tr>';
        $('#tbList tbody').append(txt);
    });

    $('body').on( "click", ".delList", function(){
        if(confirm('ยืนยันการลบข้อมูล')){
            $(this).closest('tr').fadeOut(300, function(){ 
                $(this).remove(); 
            });
        }
    });
});
</script>