<?php
include_once 'database.php';
class tour extends database{

public function getTourInfo():array
{
    $sql = "SELECT * FROM tour";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    $data = [];
    if($numRows > 0){
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        
    }
    return $data;
}

function deleted($id)
{

    $sql = "DELETE FROM tour WHERE id_tour = $id";
    $result = $this->connect()->query($sql);

    return $result;
}


public function showTourInfo(){
    $datas = $this->getTourInfo();
    foreach($datas as $data){
        echo $data['username']."<br>";
        echo $data['email']."<br>";
        echo $data['password']."<br>";
        echo $data['image']."<br>";
   }
}


function insertion($country,$price,$duration,$image,$tmpName)
    {
        $image_filepath = "img/".$image ;
        $sql = "INSERT INTO tour (country, price, duration,imagee) VALUES('$country', '$price', '$duration','$image')";
        $result = $this->connect()->query($sql);
        if ($result) {
            move_uploaded_file($tmpName,$image_filepath);
            header('location:dashboard.php');
        } else {
            echo 'error';
        }
}


function edited($country,$price,$duration,$image,$tmpName,$id)
    {
        $image_filepath = "img/".$image ;
        $sql = "UPDATE tour SET country = '$country', price='$price', duration='$duration',imagee='$image' WHERE id_tour=$id";
        
        $result = $this->connect()->query($sql);
        if ($result) {
            move_uploaded_file($tmpName,$image_filepath);
            header('location:dashboard.php');
        } else {
            echo 'error';
        }
}


}