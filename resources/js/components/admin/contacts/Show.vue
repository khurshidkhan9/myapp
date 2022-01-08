<template>
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Messages Table</h3>

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
              <th style="width: 10%">Name</th>
              <th style="width: 10%">Email</th>
              <th style="width: 10%">Phone</th>
              <th style="width: 10%">Subject</th>  
              <th style="width: 10%">Message</th>  
              <th style="width: 10%">Updated at</th>
              <!-- <th>Status</th> -->
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="contact in contacts" :key="contact.id">
              <td>{{ contact.id }}</td>
              <td>
                <a> {{ contact.name }} </a>
                <br />
                <small> {{ contact.created_at }} </small>
              </td>
              <td>{{ contact.email }}</td>
              <td>{{ contact.phone }}</td>
              <td>{{ contact.subject }}</td>
              <td>{{ contact.message }}</td>
              <td>{{ contact.updated_at }}</td>
              <!-- <td v-if="contact.email_verified_at" class="project-state">
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
                <router-link :to="{name: 'Updatecontacts', params: { id: contact.id }}" class="btn btn-info btn-sm">
                  <i class="fas fa-pencil-alt"> </i>
                  Edit
                </router-link>
                <a class="btn btn-danger btn-sm" @click="deletecontact(contact.id)">
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
      contacts: [],
    };
  },
  created() {
      axios.get("admin/contact").then(response => {
          this.contacts = response.data;
      });
  },
  methods: {
      deletecontact(id){
          axios.delete(`admin/contact/${id}`).then(response => {
              let i = then.contact.map(data => data.id).indexOf(id);
              this.contact.splice(i, 1)
          });
      }
  }
};
</script>

<style>
</style>