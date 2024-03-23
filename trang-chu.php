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
    </head>
    <body>
        <h1>Danh sách bài viết bài viết</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Mô tả</th>
                    <th>Lượt thích</th>
                    <th>Lượt xem</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($bai_viet_bao_tang as $bv):?>
                <tr>
                    <td><?php echo $bv['id'] ?></td>
                    <td><?php echo $bv['tieu_de'] ?></td>
                    <td><?php echo $bv['mo_ta'] ?></td>
                    <td><?php echo $bv['luot_thich'] ?></td>
                    <td><?php echo $bv['luot_xem'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
