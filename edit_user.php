<h1>Edit User</h1>

<?php
  $sql = "SELECT * FROM USERS WHERE ID=".$_REQUEST["id"];

  $result = $connection->query($sql);
  $row = $result->fetch_object();
?>

<form action="?page=Save" method="POST">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
  </div>
  <div class="mb-3">    
    <label>Phone</label>
    <input type="text" name="phone" value="<?php print $row->phone; ?>" class="form-control">
  </div>
  <div class="mb-3">    
    <label>E-mail</label>
    <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
  </div>
  <div class="mb-3">    
    <label>Date Of Birth</label>
    <input type="date" name="dateOfBirth" value="<?php print $row->dateOfBirth; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>  
</form>