<template>
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Upload New Photo</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
     <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
    </div>
  </div>
</template>

<script>
  
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
   
    export default {
     components: {
        vueDropzone: vue2Dropzone
      },
      data: function () {
        return {
          dropzoneOptions: {
              url: 'admin/photos',
              headers: {
                "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
               }
          }
        }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
</style>