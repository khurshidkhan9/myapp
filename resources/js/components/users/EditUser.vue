<template>
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit User</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form
        class="myform"
        @submit.prevent="UpdateUser"
        id="myForm"
        enctype="multipart/form-data"
      >
        <div class="card-body">
          <div class="form-group">
            <label for="Name">Name</label>
            <input
              name="name"
              type="text"
              class="form-control"
              id="Name"
              :value="user.name"
              placeholder="Name"
            />
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input
              name="email"
              type="email"
              class="form-control"
              id="Email"
              :value="user.email"
              placeholder="Enter email"
            />
          </div>
          <div class="form-group">
            <label for="Position">Position</label>
            <input
              name="position"
              type="text"
              class="form-control"
              id="Position"
              :value="user.position"
              placeholder="Enter Position"
            />
          </div>
          <div class="form-group">
            <label for="Phone">Phone Number</label>
            <input
              name="phone"
              type="number"
              class="form-control"
              id="Phone"
              :value="user.phone"
              placeholder="Enter Phone"
            />
          </div>
          <div class="form-group">
            <label for="Address">Address</label>
            <input
              name="address"
              type="text"
              class="form-control"
              id="Address"
              :value="user.address"
              placeholder="Enter Address"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input
              name="password"
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              :value="user.password"
              placeholder="Password"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input
                  name="file"
                  type="file"
                  class="custom-file-input"
                  id="exampleInputFile"
                />
                <label class="custom-file-label" for="exampleInputFile"
                  >Choose file</label
                >
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group">

           <input type="datetime-local" name="email_verified_at" id="Date">
          </div>
          <div class="form-check">
            <input
              name="is_admin"
              type="checkbox"
              value="1"
              class="form-check-input"
              id="Admin"
            />
            <label class="form-check-label" for="Admin">Is Admin</label>
          </div>
          <div class="form-check">
            <input
              name="in_team"
              type="checkbox"
              value="1"
              class="form-check-input"
              id="Team"
            />
            <label class="form-check-label" for="Team">In Team</label>
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
export default {
  name: "UpdateUser",
  props: ["id"],

  data() {
    return {
      user: [],
    };
  },
  methods: {
    getUser() {
      let instance = this;
      axios
        .get("admin/users/" + instance.$route.params.id + "/edit")
        .then(function (response) {
          instance.user = response.data;
          console.log("Success");
        })
        .catch(function (error) {
          console.log("Error");
        });
    },

    UpdateUser() {
      var formData = new FormData(document.getElementById("myForm"));
      let instance = this;
      axios
        .post("admin/users/" + instance.$route.params.id, formData)
        .then(function (response) {
          console.log(formData);
          instance.$router.push("/users");
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
  mounted() {
    this.getUser();
  },
};
</script>

<style>
</style>