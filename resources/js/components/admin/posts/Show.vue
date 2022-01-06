<template>
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Posts Table</h3>

        <div class="card-tools">
          <button
            type="button"
            class="btn btn-tool"
            data-card-widget="collapse"
            title="Collapse"
          >
            <i class="fas fa-minus"></i>
          </button>
          <button
            type="button"
            class="btn btn-tool"
            data-card-widget="remove"
            title="Remove"
          >
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0" style="display: block">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">#</th>
              <th style="width: 10%">Image</th>
              <th style="width: 10%">Title</th>
              <th style="width: 10%">Body</th>
              <th style="width: 10%">Updated at</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="post in posts" :key="post.id">
              <td>{{ post.id }}</td>
              <td>
                <img :src="post.img_path" width="100px" alt=""></td>
              <td>
                <a> {{ post.title }} </a>
                <br />
                <small> {{ post.created_at }} </small>
              </td>
              <td>{{ post.body }}</td>
              <td>{{ post.updated_at }}</td>
              <td v-if="post.email_verified_at" class="project-state">
                <span class="badge badge-success">verified</span>
              </td>
              <td v-else class="project-state">
                <span class="badge badge-danger">not verified</span>
              </td>
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                  <i class="fas fa-folder"> </i>
                  View
                </a>
                <router-link :to="{name: 'UpdatePost', params: { id: post.id }}" class="btn btn-info btn-sm">
                  <i class="fas fa-pencil-alt"> </i>
                  Edit
                </router-link>
                <a class="btn btn-danger btn-sm" @click="deletepost(post.id)">
                  <i class="fas fa-trash"> </i>
                  Delete
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
    };
  },
  created() {
      axios.get("admin/posts").then(response => {
          this.posts = response.data;
      });
  },
  methods: {
      deletepost(id){
          axios.delete(`admin/posts/${id}`).then(response => {
              let i = then.post.map(data => data.id).indexOf(id);
              this.post.splice(i, 1)
          });
      }
  }
};
</script>

<style>
</style>