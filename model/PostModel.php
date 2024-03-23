<?php

require_once 'BaseModel.php';

class PostModel extends BaseModel {

    // Lay bai viet bao tang lich su
    public function layBaiVietBaoTangLichSu() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 1 ';
        $post = $this->select($sql);

        return $post;
    }

    // Lay bai viet cac cong trinh giao thong
    public function layBaiVietCacCongTrinhGiaoThong() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 2 ';
        $post = $this->select($sql);

        return $post;
    }

    // Lay bai viet dia diem van song
    public function layBaiVietDiaDiemVanSong() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 3';
        $post = $this->select($sql);

        return $post;
    }
}