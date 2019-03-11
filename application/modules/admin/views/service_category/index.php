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

    <div id="btnBox" align="right" style="margin-bottom:10px;">
        <input type="button" title="เพิ่มรายการ" value="เพิ่มรายการ" onclick="document.location='admin/service_categories/form'" class="btn btn-primary" />
    </div>

    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">หมวดหมู่บริการความสวย</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>หัวข้อ (ภาษาไทย)</th>
                    <th>หัวข้อ (ภาษาอังกฤษ)</th>
                    <th>รูป (ภาษาไทย)</th>
                    <th>รูป (ภาษาอังกฤษ)</th>
                    <th width="150">จัดการ</th>
                </tr>
                <?foreach($rs as $key=>$row):?>
                <tr>
                    <td><?=($key+1)+$rs->paged->current_row?></td>
                    <td><?php echo $row->name_th?></td>
                    <td><?php echo $row->name_en?></td>
                    <td><?if($row->img_th):?><img src="uploads/service_category/<?=$row->img_th?>" width="350"><?endif;?></td>
                    <td><?if($row->img_en):?><img src="uploads/service_category/<?=$row->img_en?>" width="350"><?endif;?></td>
                    <td>
                        <a href="admin/service_categories/form/<?=$row->id?>">
                            <button type="button" class="btn btn-secondary btn-sm">แก้ไข</button>
                        </a>
                        <a href="admin/service_categories/delete/<?=$row->id?>">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</button>
                        </a>
                    </td>
                </tr>
                <?endforeach;?>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <?php echo $rs->pagination()?>
        </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->