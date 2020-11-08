<?php

$id = $_GET['id'];
header('location:../process/controller.php?type=delete&_id='.$id);