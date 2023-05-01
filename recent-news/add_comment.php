<?php

$connect =new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$error ='';
$comment_name ='';
$comment_content='';

if(empty($_POST["comment_name"]))
{
    $error .='<p class="text-danger">Name is required</p>';

}
else{
    $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
    $error .='<p class="text-danger">comment is required</p>';

}
else{
    $comment_content = $_POST["comment_content"];
}

if($error == '')
{
    $query ="
    INSERT INTO tbl_comment
    (parent_comment_id, comment, comment_sender_name)
    VALUES (:parent_comment_id, :comment, :comment_sender_name)
    ";
    $statement = $connect->prepare($query);
    $statement ->execute(
        array(
            ':parent_comment_id'   => '0',
            ':comment'             => $comment_content,
            ':comment_sender_name' => $comment_name
        )
    );
    $error .='<p class="text-danger">comment added</p>';
}

$data = array(
    'error'     => $error
);

echo json_encode($data);












?>