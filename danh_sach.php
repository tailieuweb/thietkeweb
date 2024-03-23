<?php
require 'model/configs.php';
require 'model/BaseModel.php';
require 'model/PostModel.php';

$bai_viet = new PostModel();
$danh_muc_id = !empty($_GET['danh_muc_id'])? $_GET['danh_muc_id'] : 1;
$danh_sach_bai_viet = [];
$total = 0;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
switch ($danh_muc_id) {
    case 1:
        $danh_sach_bai_viet = $bai_viet->layBaiVietBaoTangLichSu();
        $total = $bai_viet->demBaiVietBaoTangLichSu();
        break;
    case 2:
        break;
    case 3:
        break;
}

$page = ceil($total/2);//2 trang demo
?>

<html>
    <head>
        <title>Danh sách bài viết theo danh mục</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Danh sách bài viết bài viết</h1>
        <ul class="pagination">
        <?php for ($index = 1; $index <= $page; $index++): ?>
            <li><a href="/danh_sach.php?page=<?php echo $index ?>"><?php echo $index ?></a></li>
        <?php endfor;?>
        </ul>
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
                <?php foreach($danh_sach_bai_viet as $bv):?>
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


    </body>
</html>
