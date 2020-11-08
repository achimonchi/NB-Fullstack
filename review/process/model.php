<?php

function insert($post, $conn){
    $m_name = $post['m_name'];
    $m_email = $post['m_email'];
    $m_major = $post['m_major'];

    $query = "INSERT INTO mahasiswa (m_name, m_email, m_major) 
            VALUES ('$m_name', '$m_email', '$m_major') ";

    $result = $conn->query($query);

    return $result;
}

function update($post, $conn){
    $m_name = $_POST['m_name'];
    $m_email = $_POST['m_email'];
    $m_major = $_POST['m_major'];
    $_id = $_POST['_id'];
    
    $query = "UPDATE mahasiswa 
            SET m_name='$m_name', m_email='$m_email', m_major='$m_major' 
            WHERE _id = '$_id'";
    $update = $conn->query($query);
    return $update;
}

function delete($_id, $conn)
{
    $query = "DELETE FROM mahasiswa WHERE _id='$_id'";

    $delete = $conn->query($query);

    return $query;
}