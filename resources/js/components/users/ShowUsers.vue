<template>
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Users Table</h3>

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
              <th style="width: 10%">Name</th>
              <th style="width: 10%">Email</th>
              <th style="width: 10%">Phone</th>
              <th style="width: 10%">Address</th>
              <th>Verified</th>
              <th>Status</th>
              <th>Member</th>
              <th>Position</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="user in users" :key="user.id">
              <td>{{ user.id }}</td>
              <td>
                <img :src="user.img_path" width="100px" alt=""></td>
              <td>
                <a> {{ user.name }} </a>
                <br />
                <small> {{ user.created_at }} </small>
              </td>
              <td>{{ user.email }}</td>
              <td>{{ user.phone }}</td>
              <td>{{ user.address }}</td>
              <td v-if="user.email_verified_at" class="project-state">
                <span class="badge badge-success">verified</span>
              </td>
              <td v-else class="project-state">
                <span class="badge badge-danger">not verified</span>
              </td>
              <td v-if="user.is_admin" class="project-state">
                <span class="badge badge-success">admin</span>
              </td>
              <td v-else class="project-state">
                <span class="badge badge-danger">visitor</span>
              </td>
              <td v-if="user.in_team" class="project-state">
                <span class="badge badge-success">In Team</span>
              </td>
              <td v-else class="project-state">
                <span class="badge badge-danger">Member</span>
              </td>
              <td>{{ user.position }}</td>
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                  <i class="fas fa-folder"> </i>
                  View
                </a>
                <router-link :to="{name: 'UpdateUser', params: { id: user.id }}" class="btn btn-info btn-sm">
                  <i class="fas fa-pencil-alt"> </i>
                  Edit
                </router-link>
                <a class="btn btn-danger btn-sm" @click="deleteUser(user.id)">
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
      users: [],
    };
  },
  created() {
      axios.get("admin/users").then(response => {
          this.users = response.data;
      });
  },
  methods: {
      deleteUser(id){
          axios.delete(`admin/users/${id}`).then(response => {
              let i = then.user.map(data => data.id).indexOf(id);
              this.user.splice(i, 1)
          });
      }
  }
};
</script>

<style>
</style>