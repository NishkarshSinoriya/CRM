<?php
    require_once '../inc/db.php';
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $company=$_POST['company'];
    $status=$_POST['status'];
    $followup=$_POST['followup'];
    $query=$_POST['query'];
    $comment=$_POST['comment'];
    $type=$_POST['type'];
    $id=$_GET['id'];
    $sql="UPDATE info
    LEFT JOIN client
    ON info.client_id = client.id
    set client.name='$name', client.contact='$contact', client.email='$email', client.company='$company',info.status='$status',info.followup='$followup',info.comment='$comment',info.type='$type' WHERE info.id='$id'";
    mysqli_query($link,$sql);
    header("location:../updatecard.php?id=$id");
   ?>
