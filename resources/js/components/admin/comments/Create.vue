<template>
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Add New Comment</h3>
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
          <div class="row">
            <div class="col-lg-6">
              <input
                type="text"
                name="message-name"
                class="form-control mb-30"
                placeholder="Your Name"
              />
            </div>
            <div class="col-lg-6">
              <input
                type="email"
                name="message-email"
                class="form-control mb-30"
                placeholder="Your Email"
              />
            </div>
            <div class="col-12 mt-3">
              <textarea
                name="body"
                class="form-control mb-30"
                placeholder="Your Message"
              ></textarea>
            </div>
            <input type="hidden" name="post_id" value="" />
            <input type="hidden" name="parent_id" value="" />
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