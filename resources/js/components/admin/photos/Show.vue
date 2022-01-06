<template>
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All photos Table</h3>

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
              <th style="width: 10%">Updated at</th>
              <!-- <th>Status</th> -->
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="photo in photos" :key="photo.id">
              <td>{{ photo.id }}</td>
              <td>
                <img :src="photo.photo_path" width="100px" alt=""></td>
              <td>
                <a> {{ photo.name }} </a>
                <br />
                <small> {{ photo.created_at }} </small>
              </td>
              <td>{{ photo.updated_at }}</td>
              <!-- <td v-if="photo.email_verified_at" class="project-state">
                <span class="badge badge-success">verified</span>
              </td>
              <td v-else class="project-state">
                <span class="badge badge-danger">not verified</span>
              </td> -->
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                  <i class="fas fa-folder"> </i>
                  View
                </a>
                <router-link :to="{name: 'UpdatePhotos', params: { id: photo.id }}" class="btn btn-info btn-sm">
                  <i class="fas fa-pencil-alt"> </i>
                  Edit
                </router-link>
                <a class="btn btn-danger btn-sm" @click="deletephoto(photo.id)">
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
      photos: [],
    };
  },
  created() {
      axios.get("admin/photos").then(response => {
          this.photos = response.data;
      });
  },
  methods: {
      deletephoto(id){
          axios.delete(`admin/photos/${id}`).then(response => {
              let i = then.photo.map(data => data.id).indexOf(id);
              this.photo.splice(i, 1)
          });
      }
  }
};
</script>

<style>
</style>