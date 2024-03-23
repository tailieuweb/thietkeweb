<?php

require_once 'BaseModel.php';

class PostModel extends BaseModel {

    public function layBaiVietBaoTangLichSu() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 1 ';
        $post = $this->select($sql);

        return $post;
    }

    public function layBaiVietCacCongTrinhGiaoThong() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 2 ';
        $post = $this->select($sql);

        return $post;
    }

    public function layBaiVietDiaDiemVanSong() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 3';
        $post = $this->select($sql);

        return $post;
    }
}