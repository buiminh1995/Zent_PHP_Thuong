<?php
class baiViet{
    var $tieu_de;
    var $duong_dan;
    var $mo_ta;
    var $noi_dung;

    public function __construct()
    {
        
    }

    function inThongTin(){
        echo "<br>Tiêu đề: " . $this->tieu_de;
        echo "<br>Đường dẫn: " . $this->duong_dan;
        echo "<br>Mô tả: " . $this->mo_ta;
        echo "<br>Nội dung: " . $this->noi_dung;
        echo "<br>";
    }
}

class danhMuc{
    var $ten;
    var $duong_dan;
    var $danh_muc_cha;
    var $anh;
    var $mo_ta;

    public function __construct()
    {
        
    }

    function inThongTin(){
        echo "<br>Tên: " . $this->ten;
        echo "<br>Đường dẫn: " . $this->duong_dan;
        echo "<br>Danh mục cha: " . $this->danh_muc_cha;
        echo "<br>Ảnh: " . $this->anh;
        echo "<br>Mô tả: " . $this->mo_ta;
        echo "<br>";
    }
}

class nguoiDung{
    var $ten;
    var $email;
    var $mat_khau;
    var $anh;

    public function __construct()
    {
        
    }

    function inThongTin(){
        echo "<br>Tên: " . $this->ten;
        echo "<br>Email: " . $this->email;
        echo "<br>Mật khẩu: " . $this->mat_khau;
        echo "<br>Ảnh đại diện: " . $this->anh;
        echo "<br>";
    }
}

//Bài viết
$bai = new baiViet();
$bai->tieu_de = "Bị Khắc Việt doạ vào tận nhà để gặp và giải quyết, đây là động thái của Vũ Khắc Tiệp!";
$bai->duong_dan = "https://kenh14.vn/bi-khac-viet-doa-vao-tan-nha-de-gap-va-giai-quyet-day-la-dong-thai-cua-vu-khac-tiep-20200609103106001.chn";
$bai->mo_ta = "Động thái mới của Vũ Khắc Tiệp giữa ồn ào mâu thuẫn cực căng với nam ca sĩ Khắc Việt đang được công chúng đặc biệt quan tâm.";
$bai->noi_dung = "Hai ông choảng nhau";

//Danh mục
$danh_muc = new danhMuc();
$danh_muc->ten = "Sao Việt";
$danh_muc->duong_dan = "https://kenh14.vn/star/sao-viet.chn";
$danh_muc->danh_muc_cha = "Star";
$danh_muc->anh = "https://kenh14cdn.com/thumb_w/620/2020/6/6/artboard-1-copy-3-1-15914593198361725346729.png";
$danh_muc->mo_ta = "Vũ Khắc Tiệp";

//Người dùng
$nguoi_dung = new nguoiDung();
$nguoi_dung->ten = "Bùi Quang Minh";
$nguoi_dung->email = "buiminh2000@gmail.com";
$nguoi_dung->mat_khau = "4567";
$nguoi_dung->anh = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Anonymous_emblem.svg/1200px-Anonymous_emblem.svg.png";


//In thông tin
$bai->inThongTin();
$danh_muc->inThongTin();
$nguoi_dung->inThongTin();
?>