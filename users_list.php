<h1>Users List</h1>

<?php
  $sql = "SELECT * FROM USERS";

  $result = $connection->query($sql);

  $quantity = $result->num_rows;

  if($quantity > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
      print "<tr>";
        print "<td>#</td>";
        print "<td>Name</td>";
        print "<td>Phone</td>";
        print "<td>E-mail</td>";
        print "<td>Date Of Birth</td>";
        print "<td>Actions</td>";
      print "</tr>";
    while($row = $result->fetch_object()){
      print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->name."</td>";
        print "<td>".$row->phone."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->dateOfBirth."</td>";
        print "<td>
                <button onclick=\"location.href='?page=Edit&id=".$row->id."'\" class='btn btn-success'>Edit</button>
                <button onclick=\"if(confirm('Are you sure? This action is irriversible!')){location.href='?page=Save&action=delete&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Delete</button>
               </td>";
      print "</tr>";
    }
    print "<table>";
  }else{
    print "<p class='alert alert-danger'> There are no users!</p>";
  }
?>