<template>
  <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
    <template slot="field">

      <treeselect  v-model="value"   value-consists-of="BRANCH_PRIORITY"  :searchable="searchable" :multiple="flase" :options="options" />
     
    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
// select
import Treeselect from "../../../node_modules/@riophae/vue-treeselect";
import "../../../node_modules/@riophae/vue-treeselect/dist/vue-treeselect.css";
export default {
  mixins: [FormField, HandlesValidationErrors],
  data() {
      return {
        // define the default value
        value: [],
        // define options
        options: [ ],
        
      }
    },

  components: { Treeselect },
 watch: {
            value: function (value) {
  
            },
        },
         mounted(){
             const self = this;
      // Lấy dữ liệu
      axios
        .get("/"+this.field.api)
        .then(function (response) {
        self.options = response.data

        });

  },
  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value.push(this.field.value)

    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
     
      formData.append(this.field.attribute, this.value || '')
    },
  },
}
</script>
