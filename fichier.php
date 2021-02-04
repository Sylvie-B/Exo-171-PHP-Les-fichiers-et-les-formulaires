<?php

if(isset($_FILES['userFile']) && $_FILES['userFile']['error'] === 0){
    $tmp_name = $_FILES["userFile"]["tmp_name"];
    $name = $_FILES["userFile"]["name"];
    $ext = pathinfo($name);
    move_uploaded_file($tmp_name, 'upload/jewel.'.$ext['extension']);
};

