
<template>
  <div class="container py-2">
    <div class="large-12 medium-12 small-12 cell">
      <div v-for="(file, key) in files" class="file-listing">
        <div class="flex items-center">
          <!-- <a
            href="javascript:;"
            class="mr-2 whitespace-nowrap truncate"
            :title="file.name"
            @click="viewdk"
          > -->
          <a href="javascript:;" v-on:click="openModal()">
            {{ file.tenfile }}
          </a>
          <!-- </a> -->
          <span class="ml-4" v-on:click="removeFile(key, file)">Xóa</span>
        </div>
      </div>
    </div>
    <div class="large-12 medium-12 small-12 cell">
      <label>
        <input
          type="file"
          id="files"
          ref="files"
          multiple
          v-on:change="handleFilesUpload()"
        />
      </label>
    </div>

    <!-- overlay -->
  </div>
</template>
<script>
export default {
  name: "uploadfile",
  props: {
    tenbang: {
      type: String,
      default: "None",
    },
      id: {
      type: String,
      default: "None",
    },
    truong_id: {
      type: String,
      default: "None",
    },
  },
  data() {
    return {
      files: [],
      configfile: [],
      view: false,
    };
  },
  watch: {},
  mounted() {
    const self = this;
    // Lấy dữ liệu từ file config
    axios.get("/config").then(function (response) {
      self.configfile = response.data;
    });
    self.loadfile();

  },
  /*
      Defines the method used by the component
    */

  methods: {
    closeModal() {
      this.view = false;
    },
    loadfile() {
      const self = this;
      // Lấy dữ liệu
      axios
        .get("/load-file?uuid=" + self.truong_id + "&tenbang=" + self.tenbang+"&id="+this.id)
        .then(function (response) {
          self.files = response.data;
        });
    },
    openModal() {
      this.view = true;
    },
    submitFiles() {
      const self = this;
      /*
          Initialize the form data
        */
      let formData = new FormData();

      /*
          Iteate over any file sent over appending the files
          to the form data.
        */
      //  Lấy dữ liệu file
      for (var i = 0; i < this.files.length; i++) {
        let file = this.files[i];

        formData.append("files[" + i + "]", file);
      }
      // Dữ liệu đính kèm
      formData.append("tenbang", this.tenbang);
      formData.append("truong_id", this.truong_id);
      /*
          Make the request to the POST /select-files URL
        */
      axios
        .post("/uploads", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then(function (response) {
          self.loadfile();
          self.$toasted.success("Tải file thành công");
        })
        .catch(function () {
          self.$toasted.error("Tải file thất bại");
        });
    },
    /*
        Handles the uploading of files
      */
    //  Sau khi thêm file thì chạy
    handleFilesUpload() {
      const self = this;
      let uploadedFiles = this.$refs.files.files;
      /*
          Adds the uploaded file to the files array
        */
        var check = 0;
      for (var i = 0; i < uploadedFiles.length; i++) {
        // Lấy tên fiel và đuôi file
        // Lấy vị trí dấu chấm
        var fileupload = uploadedFiles[i].name.lastIndexOf(".");
        //Lấy tên file
        var tenfile = uploadedFiles[i].name.slice(0, fileupload);
        // Lấy đuôi file
        var duoi = uploadedFiles[i].name.slice(fileupload + 1);
        // Kiểm tra đuôi file có nằm trong tập tin cofig ko(nằm trong là cho phép pull)
        //
        if (self.configfile.includes(duoi)) {
             self.files.push(uploadedFiles[i]);
          // Thêm dữ liệu vào biến files và gọi đến submit
        } 
        else{
             check = 1;
        }
      }
      console.log(check)
      if(check == 0)
      {
        self.submitFiles();
      }
      else {
        self.$toasted.error("File không hợp lệ");
        }
       
    },

    /*
        Removes a select file the user has uploaded
      */
    //  xóa file
    removeFile(key, file) {
      const self = this;
      axios
        .get("/xoa-file?name=" + file.tenfile + "&uuid=" + self.truong_id)
        .then(function (response) {
          self.$toasted.success("Xóa thành công");
          self.loadfile();
        })
        .catch(function () {
          self.$toasted.error("Xóa thất bại!!");
        });
    },
  },
};
</script>

<style>
div.file-listing {
  width: 200px;
}

span.remove-file {
  color: red;
  cursor: pointer;
  float: right;
}
</style>