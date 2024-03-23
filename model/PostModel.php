<?php

class PostModel extends BaseModel {

    // Lay bai viet bao tang lich su
    public function lay3BaiVietBaoTangLichSu() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 1';
        $post = $this->select($sql);

        $random = array_rand($post, 3);

        $bai_viet_random = [];
        $bai_viet_random[0] = $post[$random[0]];
        $bai_viet_random[1] = $post[$random[1]];
        $bai_viet_random[2] = $post[$random[2]];
        return $bai_viet_random;
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