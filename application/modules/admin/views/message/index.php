<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>MESSAGES</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div id="btnBox" align="right" style="margin-bottom:10px;">
        <input type="button" title="เพิ่มรายการ" value="เพิ่มรายการ" onclick="document.location='admin/hilights/form'" class="btn btn-primary" />
    </div>

    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">ข้อความจากผู้ใช้งาน</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>ชื่อ</th>
                    <th>อีเมล์</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>ข้อความ</th>
                    <th width="150">จัดการ</th>
                </tr>
                <?foreach($rs as $key=>$row):?>
                <tr>
                    <td><?=($key+1)+$rs->paged->current_row?></td>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->email?></td>
                    <td><?php echo $row->tel?></td>
                    <td><?php echo $row->message?></td>
                    <td>
                        <a href="admin/messages/delete/<?=$row->id?>">
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

<script>
$(function() {
    $(document).on('change', ".switch_status", function () {
        $.ajax({
            url: 'admin/ajax/changestatus',
            data:{ table : 'hilights', status : $(this).prop('checked'), id : $(this).data('switch-id') },
            dataType: "json",
        });
    });
});
</script>
<!-- /.content -->