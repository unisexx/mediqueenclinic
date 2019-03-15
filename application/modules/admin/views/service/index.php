<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>SERVICES</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div id="btnBox" align="right" style="margin-bottom:10px;">
        <input type="button" title="เพิ่มรายการ" value="เพิ่มรายการ" onclick="document.location='admin/services/form'" class="btn btn-primary" />
    </div>

    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">บริการความสวย</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>หัวข้อ</th>
                    <th>หมวดหมู่</th>
                    <th width="150">จัดการ</th>
                </tr>
                <?foreach($rs as $key=>$row):?>
                <tr>
                    <td><?=($key+1)+$rs->paged->current_row?></td>
                    <td><?php echo $row->title_th?></td>
                    <td><?php echo $row->service_category->name_th?></td>
                    <td>
                        <a href="admin/services/form/<?=$row->id?>">
                            <button type="button" class="btn btn-secondary btn-sm">แก้ไข</button>
                        </a>
                        <a href="admin/services/delete/<?=$row->id?>">
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
<!-- /.content -->