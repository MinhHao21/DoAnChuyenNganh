<template>
  <div>
    <div v-if="value.length != 0" v-for="i in value">{{ i.tenfile }}</div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      value: [],
    };
  },
  props: ["resourceName", "field"],
  mounted() {
    console.log(this.field);
    const self = this;
    axios.get("/showfile/" + self.field.value).then(function (response) {
      self.value = response.data;
      console.log(self.value);
    });
  },
};
</script>
