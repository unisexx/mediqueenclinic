<!-- <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script> -->

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

    <div id="btnBox" align="right" style="margin-bottom:10px;">
        <input type="button" title="เพิ่มรายการ" value="เพิ่มรายการ" onclick="document.location='admin/review_fbs/form'" class="btn btn-primary" />
    </div>

    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">รีวิว เฟสบุค</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>สถานะ</th>
                    <th width="150">จัดการ</th>
                </tr>
                <? foreach ($rs as $key => $row) : ?>
                    <tr>
                        <td><?= ($key + 1) + $rs->paged->current_row ?></td>
                        <td>
                            <input class="switch_status" type="checkbox" data-toggle="toggle" data-switch-id="<?php echo $row->id ?>" <?php echo $row->status == 'public' ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <div class="fb-post" data-href="<?php echo $row->post_url ?>" data-width="500"></div>
                        </td>
                        <td>
                            <a href="admin/review_fbs/form/<?= $row->id ?>">
                                <button type="button" class="btn btn-secondary btn-sm">แก้ไข</button>
                            </a>
                            <a href="admin/review_fbs/delete/<?= $row->id ?>">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="return confirm('<?php echo lang('notice_confirm_delete'); ?>')">ลบ</button>
                            </a>
                        </td>
                    </tr>
                <? endforeach; ?>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <?php echo $rs->pagination() ?>
        </div>
    </div>
    <!-- /.card -->

</section>

<script>
    $(function() {
        $(document).on('change', ".switch_status", function() {
            $.ajax({
                url: 'admin/ajax/changestatus',
                data: {
                    table: 'review_fbs',
                    status: $(this).prop('checked'),
                    id: $(this).data('switch-id')
                },
                dataType: "json",
            });
        });
    });
</script>
<!-- /.content -->