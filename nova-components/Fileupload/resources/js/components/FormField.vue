<template>
  <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
    <template slot="field">
      <uploadfile :tenbang="field.tenbang" :truong_id="uuid" :id="resourceId"></uploadfile>

     
    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import uploadfile from "./uploadfile.vue";
import { uuid } from "../../../../../node_modules/vue-uuid";

export default {
  mixins: [FormField, HandlesValidationErrors],
  components: {
    uploadfile,
  },
  data: function () {
    return {
      uuid: uuid.v1(),
    };
  },

  props: ["resourceName", "resourceId", "field"],
  mounted(){

  },
  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      const self = this;
      axios.get("/sua-tai-lieu/" + self.field.value).then(function (response) {
      });
    },
    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.uuid || "");
    },
  },
};
</script>