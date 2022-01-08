<template>
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" :src="profile.img_path" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center" >{{ profile.name }}</h3>

                <p class="text-muted text-center">{{ profile.email }}</p>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{profile.address}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Position</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">{{profile.position}}</span>
                </p>

                <hr>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input v-model="profile.name" type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input v-model="profile.email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputposition" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                          <input v-model="profile.position" type="text" class="form-control" id="inputposition" placeholder="Position">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputaddress" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input v-model="profile.address" type="text" class="form-control" id="inputaddress" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</template>

<script>
    export default {
         data() {
    return {
      profile: []
    };
  },
  created() {
      axios.get("profile").then(response => {
          this.profile = response.data;
          console.log(this.profile);
      });
  },
    }
</script>
