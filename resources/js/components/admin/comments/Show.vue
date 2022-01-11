<template>
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Comments Table</h3>

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
              <th style="width: 10%">Body</th>
              <th style="width: 10%">Created at</th>
              <th style="width: 10%">Updated at</th>
              <!-- <th>Status</th> -->
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="comment in comments" :key="comment.id">
              <td>{{ comment.id }}</td>
              <td>{{ comment.body }}</td>
              <td>{{ comment.created_at }}</td>
              <td>{{ comment.updated_at }}</td>
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                  <i class="fas fa-folder"> </i>
                  View
                </a>
                <router-link :to="{name: 'Updatecomments', params: { id: comment.id }}" class="btn btn-info btn-sm">
                  <i class="fas fa-pencil-alt"> </i>
                  Edit
                </router-link>
                <a class="btn btn-danger btn-sm" @click="deletecomment(comment.id)">
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
      comments: [],
    };
  },
  created() {
      axios.get("admin/comments").then(response => {
          this.comments = response.data;
      });
  },
  methods: {
      deletecomment(id){
          axios.delete(`admin/comments/${id}`).then(response => {
              let i = then.comment.map(data => data.id).indexOf(id);
              this.comment.splice(i, 1)
          });
      }
  }
};
</script>

<style>
</style>