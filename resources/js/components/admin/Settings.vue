

<template>
   <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Settings</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <form
            class="myform"
            @submit.prevent="AddNewUser"
            id="myForm"
            enctype="multipart/form-data"
            >
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="Site Logo">Site Logo</label>
                        <input
                           name="site_logo"
                           type="file"
                           class="form-control"
                           id="Name"
                           placeholder="Site Logo"
                           />
                     </div>
                     <div class="form-group">
                        <label for="Site title">Site Title</label>
                        <input
                           name="site_title"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Site Title"
                           />
                     </div>
                     <div class="form-group">
                        <label for="Site url">Site Url</label>
                        <input
                           name="site_url"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Site Url"
                           />
                     </div>
                     <div class="form-group">
                        <label for="Site address">Site Address</label>
                        <input
                           name="site_address"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Site address"
                           />
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input
                           name="site_email"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Email"
                           />
                     </div>
                     <div class="form-group">
                        <label for="phone">Phone</label>
                        <input
                           name="phone"
                           type="number"
                           class="form-control"
                           id="Name"
                           placeholder="Phone"
                           />
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="email">Facebook</label>
                        <input
                           name="site_email"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Email"
                           />
                     </div>
                     <div class="form-group">
                        <label for="Twitter">Twitter</label>
                        <input
                           name="twitter"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Twitter"
                           />
                     </div>
                     <div class="form-group">
                        <label for="google">Google</label>
                        <input
                           name="google"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="google"
                           />
                     </div>
                     <div class="form-group">
                        <label for="video">Video</label>
                        <input
                           name="video"
                           type="file"
                           class="form-control"
                           id="Name"
                           placeholder="Video"
                           />
                     </div>
                     <div class="form-group">
                        <label for="days">Day of Week</label>
                        <input name="dow" type="text" class="form-control" id="Name" />
                     </div>
                     <div class="form-group">
                        <label for="start_time">Start time</label>
                        <input
                           name="start_time"
                           type="text"
                           class="form-control"
                           id="Name"
                           />
                     </div>
                     <div class="form-group">
                        <label for="start_time">Close time</label>
                        <input
                           name="close_time"
                           type="text"
                           class="form-control"
                           id="Name"
                           />
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
               <button name="submit" type="submit" class="btn btn-primary">
               Submit
               </button>
            </div>
         </form>
      </div>
   </div>
</template>
<script>
   export default {};
</script>
<style></style>

