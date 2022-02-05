<template>
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All donations Table</h3>

        <div class="card-tools">
          <button class="btn btn-primary" onclick="printTable();"><span class="fas fa-print"></span> Print</button>
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
        <table class="table table-striped projects" id="toPrint">
          <thead>
            <tr>
              <th style="width: 1%">#</th>
              <th style="width: 10%">Amount $</th>
              <th style="width: 10%">receiver name </th>
              <th style="width: 10%">receiver email </th>
              <th style="width: 10%">receiver id </th>
              <th style="width: 10%">receiver address </th>
              <th>|</th>
              <th style="width: 10%">sender name </th>
              <th style="width: 10%">sender email  </th>
              <th style="width: 10%">sender id  </th>
              <th style="width: 10%">sender phone  </th>
              <th style="width: 10%">sender address  </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="donation in donations" :key="donation.id">
              <td>{{ donation.id }}</td>
              <td>{{donation.amount}}</td>
              <td>
                <a> {{ donation.payee_name }} </a>
                <br />
                <small> {{ donation.created_at }} </small>
              </td>
              <td>{{ donation.payee_email  }}</td>
              <td>{{ donation.payee_id  }}</td>
              <td>{{ donation.payee_address  }}</td>
              <td>|</td>
              <td>
                <a> {{ donation.payer_name }} </a>
                <br />
                <small> {{ donation.created_at }} </small>
              </td>
              <td>{{ donation.payer_email  }}</td>
              <td>{{ donation.payer_id  }}</td>
              <td>{{ donation.payer_phone }}</td>
              <td>{{ donation.payer_address  }}</td>

              <td class="project-actions text-right">
                <a class="btn btn-danger btn-sm" @click="deletedonation(donation.id)">
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
      donations: [],
    };
  },
  created() {
      axios.get("admin/donations").then(response => {
          this.donations = response.data;
          console.log(response.data);
      });
  },
  methods: {
      deletedonation(id){
          axios.delete(`admin/donations/${id}`).then(response => {
              let i = then.donation.map(data => data.id).indexOf(id);
              this.donation.splice(i, 1)
          });
      }
  }
};
</script>

<style>
</style>
