

<template>
  <div class="col-md-12">
    <!-- form start -->
    <form
      class="myform"
      @submit.prevent="Addsettings"
      id="myForm"
      enctype="multipart/form-data"
    >
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="#general" data-toggle="tab"
                  >General Settings</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#social" data-toggle="tab"
                  >Social Links</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#payment" data-toggle="tab"
                  >Payment Settings</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Timing" data-toggle="tab"
                  >Office Timing</a
                >
              </li>
            </ul>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="general">
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
                           name="address"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Site address"
                           />
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input
                           name="email"
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
                           type="tel"
                           class="form-control"
                           id="Name"
                           placeholder="Phone"
                           />
                     </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="social">
                 <div class="form-group">
                        <label for="Facebook">Facebook</label>
                        <input
                           name="facebook"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Facebook"
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
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="payment">
                 <div class="form-group">
                        <label for="Site url">Paypal Api Key</label>
                        <input
                           name="Paypal-key"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Paypal key"
                           />
                     </div>
                     <div class="form-group">
                        <label for="Site url">Stripe Key</label>
                        <input
                           name="stirpe-key"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="stripe key"
                           />
                     </div>
                     <div class="form-group">
                        <label for="Site url">Stripe Secret Key</label>
                        <input
                           name="stirpe-secret-key"
                           type="text"
                           class="form-control"
                           id="Name"
                           placeholder="Stripe Secret Key"
                           />
                     </div>
                     <div class="form-group">
                        <label for="Site url">Select Payment Method</label>
                         <div class="custom-control custom-switch">
                         <input type="checkbox" class="custom-control-input" name="payment-mt" value="paypal" id="customSwitch1">
                         <label class="custom-control-label" for="customSwitch1">Paypal</label>
                    </div>
                         <div class="custom-control custom-switch">
                         <input type="checkbox" class="custom-control-input" name="payment-mt" value="stripe" id="customSwitch2">
                         <label class="custom-control-label" for="customSwitch2">Stripe</label>
                    </div>

                  
                     </div>
              </div>

              <div class="tab-pane" id="Timing">
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
              <!-- /.tab-content -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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
</template>
<script>
export default {
  data() {
    return {
      settings: [],
    };
  },

  methods: {
    Addsettings() {
      var formData = new FormData(document.getElementById("myForm"));
      let instance = this;
      axios
        .post("admin/settings", formData)
        .then(function (response) {
          console.log(formData);
          instance.$router.push("/settings");
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>
<style></style>

