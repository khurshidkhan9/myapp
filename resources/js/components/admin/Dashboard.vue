<template>
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ user.length }}</h3>

            <p>Total Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <router-link to="/users" class="small-box-footer"
            >More info <i class="fas fa-arrow-circle-right"></i
          ></router-link>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ post }}</h3>

            <p>Total Posts</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <router-link to="/posts" class="small-box-footer"
            >More info <i class="fas fa-arrow-circle-right"></i
          ></router-link>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ comment }}</h3>

            <p>Total comments</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <router-link to="/comments" class="small-box-footer"
            >More info <i class="fas fa-arrow-circle-right"></i
          ></router-link>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ photo }}</h3>

            <p>Total Photos</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <router-link to="/photos" class="small-box-footer"
            >More info <i class="fas fa-arrow-circle-right"></i
          ></router-link>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable ui-sortable">
        <div id="linechart" style="width: 900px; height: 500px"></div>
      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable ui-sortable">
        <!-- Map card -->
        <div class="card bg-gradient-primary">
          <div
            class="card-header border-0 ui-sortable-handle"
            style="cursor: move"
          >
            <h3 class="card-title">
              <i class="fas fa-map-marker-alt mr-1"></i>
              Visitors
            </h3>
            <!-- card tools -->
            <div class="card-tools">
              <button
                type="button"
                class="btn btn-primary btn-sm daterange"
                title="Date range"
              >
                <i class="far fa-calendar-alt"></i>
              </button>
              <button
                type="button"
                class="btn btn-primary btn-sm"
                data-card-widget="collapse"
                title="Collapse"
              >
                <i class="fas fa-minus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>

          <div class="card-footer bg-transparent">
            <div class="row">
              <div class="col-4 text-center">
                <div id="sparkline-1"></div>
                <div class="text-white">{{ visitor['Click'] }}</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-2"></div>
                <div class="text-white">2034</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-3"></div>
                <div class="text-white">980</div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body-->
          <div class="card-footer bg-transparent">
            <div class="row">
              <div class="col-4 text-center">
                <div id="sparkline-1"></div>
                <div class="text-white">Visitors</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-2"></div>
                <div class="text-white">Online</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-3"></div>
                <div class="text-white">Sales</div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
        </div>

        <!-- <div class="col-md-6"> -->
          <div class="card">
            <div class="card-header">
              <h3 class="panel-title">Last online Users</h3>
            </div>
            <div class="card-body card-full">
              <table
                class="table table-bordered table-condensed table-responsive"
                id="table"
              >
                <thead>
                  <tr>
                    <th>Profile Photo</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Last seen</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in user" :key="user.id">
                    <td>
                      <a class="btnInfo" href="#"
                        ><img class="rounded" :src="user.img_path" width="80"
                      /></a>
                    </td>
                    <td>{{ user.name }}</td>

                    <td v-if="user.last_seen" class="project-state">
                <span class="badge badge-success">Online</span>
              </td>
              <td v-else class="project-state">
                <span class="badge badge-danger">Offline</span>
              </td>
                    <td>{{ user.last_seen | formatDate }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!--/.Panel -->
        <!-- </div> -->

        <!-- /.card -->
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div>
</template>

<script>

export default {
  data() {
    return {
      user: [],
      post: [],
      photo: [],
      comment: [],
      visitor: [],
    };
  },
  created() {
    axios.get("admin/details").then((res) => {
      this.user = res.data.user;
      this.post = res.data.post.length;
      this.photo = res.data.photo.length;
      this.comment = res.data.comment.length;
      this.visitor = res.data.visitor;

        google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var as = JSON.parse(res.data.visitor);
        var data = google.visualization.arrayToDataTable(as);

        var options = {

          title: 'Site Visitor Line Chart',

          curveType: 'function',

          legend: { position: 'bottom' }

        };

        var chart = new google.visualization.LineChart(document.getElementById('linechart'));

        chart.draw(data, options);

      };

      console.log(res.data);
    });
  },
};
</script>
