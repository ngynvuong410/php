<?php
  require_once dirname(__FILE__,3) . "\DataCommon\ACDatabase.php";

    class HomeModel extends  ACDatabase
    {
        private  $db=null;
        public  function HomeModel()
        {
          $this->db= new ACDatabase();
        }
        public  function getSlide()
        {

            $sql= "SELECT * FROM slide";
            $res= $this->db->Execute($sql);
            return $res;
        }
        public  function  getMenu()
        {
            $sql='SELECT theloai.*,GROUP_CONCAT(loaitin.Ten,\',\',loaitin.TenKhongDau) as Typenews
                    FROM theloai JOIN loaitin
                    on theloai.id =loaitin.idTheLoai
                    GROUP BY theloai.id';
            return $this->db->Execute($sql);
        }
    }


