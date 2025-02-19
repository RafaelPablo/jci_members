<h1>New User</h1>
<form action="?page=Save" method="POST">
  <input type="hidden" name="action" value="register">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">    
    <label>Phone</label>
    <input type="text" name="phone" class="form-control">
  </div>
  <div class="mb-3">    
    <label>E-mail</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">    
    <label>Date Of Birth</label>
    <input type="date" name="dateOfBirth" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>  
</form>