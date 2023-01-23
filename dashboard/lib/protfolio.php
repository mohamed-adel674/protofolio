<?php
function AddNewPro($image,$description,$user_id){

    $con = mysqli_connect("localhost","root","","proone");

    $sql = "INSERT INTO `protofolio`(`image`, `description`, `user_id`) VALUES ('$image','$description','$user_id')";

    mysqli_query($con,$sql);

    $res = mysqli_affected_rows($con);

    if($res == 1){
        return true;
    }else{ 
        return false;
    }
}


function GetProtofolios(){

    $con = mysqli_connect("localhost","root","","proone");

    $sql ="SELECT * FROM `userprotofolio`";
    $q =  mysqli_query($con,$sql);

   $projects = [];

    while($res = mysqli_fetch_assoc($q)){
        $projects[] = $res;
    }
    return $projects;
}

function DeletPro($pro_id){

    $con = mysqli_connect("localhost","root","","proone");

    $sql = "DELETE FROM `protofolio` WHERE `id`= $pro_id";

    mysqli_query($con,$sql);

    $res = mysqli_affected_rows($con);

    if($res == 1){
        return true;
    }else{ 
        return false;
    }
}

function GetProtofolioBYID($id){

    $con = mysqli_connect("localhost","root","","proone");

    $sql ="SELECT * FROM `userprotofolio` WHERE `id` = $id";
    $q =  mysqli_query($con,$sql);
  
   $projects = [];

    $res = mysqli_fetch_assoc($q);
    
    return $res;
}





