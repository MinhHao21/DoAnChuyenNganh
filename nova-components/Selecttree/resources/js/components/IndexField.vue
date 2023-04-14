<template>
    <span>{{ Tendanhmuc}} </span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
    data() {
        return {
        // define the default value
            Tendanhmuc:'',
        }
    },

    // mounted(){
    //     const self = this;
    //     // Lấy dữ liệu
    //     axios
    //     .get("/lay-ten-danh-muc?id="+this.field.value)
    //     .then(function (response) {
    //     self.Tendanhmuc = response.data
    //     console.log(  this.field.value)
    //     });

    // },
}

</script>
