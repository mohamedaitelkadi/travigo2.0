<?php


class admin{
    public function getAdminInfo(){
        $sql = "SELECT * FROM admin";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $adminData[] = $row;
            }
            return $adminData;
        }

}
}