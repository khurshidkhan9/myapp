<template>
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Upload New Photo</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form
        class="myform"
        @submit.prevent="AddNewPhoto"
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
              id="name"
              placeholder="name"
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
          <div class="form-check">
            <input
              name="is_admin"
              type="checkbox"
              value="1"
              class="form-check-input"
              id="Admin"
            />
            <label class="form-check-label" for="Admin">Is Published</label>
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
  data() {
    return {
      Photo: [],
    };
  },

  methods: {
    AddNewPhoto() {
      var formData = new FormData(document.getElementById("myForm"));
      let instance = this;
      axios
        .post("admin/photos", formData)
        .then(function (response) {
          console.log(formData);
          instance.$router.push("/photos");
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>

<style>
</style>