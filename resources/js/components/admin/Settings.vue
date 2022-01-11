<template>
    <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="myform" @submit.prevent="AddNewUser" id="myForm" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input name="name" type="text" class="form-control" id="Name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input name="email" type="email" class="form-control" id="Email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="Position">Position</label>
                    <input name="position" type="text" class="form-control" id="Position" placeholder="Enter Position">
                  </div>
                  <div class="form-group">
                    <label for="Phone">Phone Number</label>
                    <input name="phone" type="number" class="form-control" id="Phone" placeholder="Enter Phone">
                  </div>
                  <div class="form-group">
                    <label for="Address">Address</label>
                    <input name="address" type="text" class="form-control" id="Address" placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="file" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input name="is_admin" type="checkbox" value=1 class="form-check-input" id="Admin">
                    <label class="form-check-label" for="Admin">Is Admin</label>
                  </div>
                  <div class="form-check">
                    <input name="in_team" type="checkbox" value=1 class="form-check-input" id="Team">
                    <label class="form-check-label" for="Team">In Team</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
</template>

<script>
export default {

}
</script>

<style>

</style>