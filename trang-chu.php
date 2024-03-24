<?php
require 'model/configs.php';
require 'model/BaseModel.php';
require 'model/PostModel.php';

$bai_viet = new PostModel();
$bai_viet_bao_tang = $bai_viet->lay3BaiVietBaoTangLichSu();
$bai_viet_cong_trinh = $bai_viet->layBaiVietCacCongTrinhGiaoThong();
$bai_viet_ven_song = $bai_viet->layBaiVietDiaDiemVanSong();
?>

<html>
    <head>
        <title>Trang chủ</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Danh sách bài viết bài viết</h1>
        <table class="ds_bai_viet_bao_tang">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Mô tả</th>
                    <th>Lượt thích</th>
                    <th>Lượt xem</th>
                </tr>
            </thead>
            <tbody class="">
                <?php foreach($bai_viet_bao_tang as $bv):?>
                <tr class="bai_viet_bao_tang">
                    <td class="id"><?php echo $bv['id'] ?></td>
                    <td class="tieu_de"><?php echo $bv['tieu_de'] ?></td>
                    <td class="mo_ta"><?php echo $bv['mo_ta'] ?></td>
                    <td class="luot_thich"><?php echo $bv['luot_thich'] ?></td>
                    <td class="luot_xem"><?php echo $bv['luot_xem'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h2 class="tai_them_bv_bao_tang">Tải thêm</h2>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".tai_them_bv_bao_tang").click(function(){
                link_url = '/api/tai_bai_viet.php?danh_muc_id=1'
                $.ajax({url: link_url, success: function(result){
                        var data = jQuery.parseJSON(result);
                        $.each(data, function(index, value) {
                           //Clone
                            $new_row = $('.ds_bai_viet_bao_tang').find('tr:last').clone();

                            $new_row.find('.id').val(value.id);
                            $new_row.find('.tieu_de').val(value.tieu_ve);

                            //Add to table
                            $('.ds_bai_viet_bao_tang').append($new_row);
                        })
                }});
            });
        });
    </script>
    </body>
</html>
