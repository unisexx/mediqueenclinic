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

    <div id="btnBox" align="right" style="margin-bottom:10px;">
        <input type="button" title="เพิ่มรายการ" value="เพิ่มรายการ" onclick="document.location='admin/products/form'" class="btn btn-primary" />
    </div>

    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">SKIN CARE PRODUCTS</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>สถานะ</th>
                    <th>รูป</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคา</th>
                    <th width="150">จัดการ</th>
                </tr>
                <?foreach($rs as $key=>$row):?>
                <tr>
                    <td><?=($key+1)+$rs->paged->current_row?></td>
                    <td>
                        <input class="switch_status" type="checkbox" data-toggle="toggle" data-switch-id="<?php echo $row->id?>" <?php echo $row->status == 'public' ? 'checked' : '' ;?>>
                    </td>
                    <td><?if($row->image):?><img src="uploads/product/<?=$row->image?>" width="90"><?endif;?></td>
                    <td>
                        <div>ภาษาไทย :: <?php echo $row->title_th?></div>
                        <div>ภาษาอังกฤษ :: <?php echo $row->title_en?></div>
                    </td>
                    <td><?php echo $row->price?></td>
                    <td>
                        <a href="admin/products/form/<?=$row->id?>">
                            <button type="button" class="btn btn-secondary btn-sm">แก้ไข</button>
                        </a>
                        <a href="admin/products/delete/<?=$row->id?>">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</button>
                        </a>
                    </td>
                </tr>
                <?endforeach;?>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <!-- <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul> -->
            <?php echo $rs->pagination()?>
        </div>
    </div>
    <!-- /.card -->

</section>

<script>
$(function() {
    $(document).on('change', ".switch_status", function () {
        $.ajax({
            url: 'admin/ajax/changestatus',
            data:{ table : 'products', status : $(this).prop('checked'), id : $(this).data('switch-id') },
            dataType: "json",
        });
    });
});
</script>
<!-- /.content -->