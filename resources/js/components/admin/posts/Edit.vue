<template>
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Post</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form
        class="myform"
        @submit.prevent="UpdatePost"
        id="myForm"
        enctype="multipart/form-data"
      >
            <div class="card-body">
          <div class="form-group">
            <label for="Title">Title</label>
            <input
              name="title"
              type="text"
              class="form-control"
              id="Title"
              placeholder="Title"
              :value="post.title"
            />
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <textarea
              class="form-control"
              id="tinymce"
              name="body"
              rows="3"
              placeholder="Enter a description for your post"
              :value="post.body"
            ></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <img :src="post.img_path" width="100" class="img-fluid mb-3" alt="">
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
  name: "UpdateUser",
  props: ["id"],

  data() {
    return {
      post: [],
    };
  },
  methods: {
    getUser() {
      let instance = this;
      axios
        .get("admin/posts/" + instance.$route.params.id + "/edit")
        .then(function (response) {
          instance.post = response.data;
          console.log("Success");
        })
        .catch(function (error) {
          console.log("Error");
        });
    },

    UpdatePost() {
      var formData = new FormData(document.getElementById("myForm"));
      let instance = this;
      axios
        .post("admin/posts/" + instance.$route.params.id, formData)
        .then(function (response) {
          console.log(formData);
          instance.$router.push("/posts");
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