<?php

if(isset($_FILES['userFile'])){
    $tmp_name = $_FILES["userFile"]["tmp_name"];
    $name = $_FILES["userFile"]["name"];
    move_uploaded_file($tmp_name, 'upload/' . $name);

};
