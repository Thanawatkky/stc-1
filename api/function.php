<?php 
 function insertDB($table, $data){
        $sql = "INSERT INTO $table";
        $fields = "";
        $values = "";
        foreach ($data as $row => $val) {
            $fields .= "$row, ";
            $values .= "'$val', ";
        }
        $fields = rtrim($fields, ", ");
        $values = rtrim($values, ", ");
        $sql .= "($fields) VALUES($values)";

        return update($sql);
    }
    function updateDB($table, $data, $id){
        try {
          $sql = "UPDATE $table SET ";
          foreach ($data as $row => $val) {
              $sql .= "$row = '$val', ";
          }
          $sql = rtrim($sql, ", ");
          foreach ($id as $data_id => $val_id) {
              $sql .= " WHERE $data_id = '$val_id' ";
          }
          return update($sql);
        } catch (Exception $e) {
          return $e->getMessage();
        }
      }
      function update($sql){
        $conn = new mysqli("localhost","root","","db_stc");
        return $conn->query($sql);
     }
?>