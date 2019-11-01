<?php
class Students extends DB{

    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
        // Không chuyên nghiệp
    }

    public function SinhVien2(){
        $qr = "SELECT * FROM sinhvien";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
        // Perfect!!!!
    }

    public function DanhSach(){
        return "TEO-TI-TUN";
    }

}
?>