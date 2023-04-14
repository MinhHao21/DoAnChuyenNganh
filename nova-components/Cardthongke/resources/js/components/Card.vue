<template>
    <card class="flex flex-col items-center justify-center h-60">
        <div class="px-3 py-3">
            <h1 class="text-center text-3xl text-red-600 font-medium font-light ">
             THỐNG KÊ HỎI ĐÁP
            </h1>
            <div class="mt-2 inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="border-collapse  w-full min-w-full leading-normal">
                    <thead>
                        <tr class="border-solid ">
                            <th class="p-2 border-solid border-l border-t  border-b-0 border-gray-200 bg-gray-100 font-semibold text-gray-600 uppercase tracking-wider  ">Câu hỏi chưa trả lời</th>
                            <th class="p-2 border-solid border-l border-t  border-b-0 border-gray-200 bg-gray-100 font-semibold text-gray-600 uppercase tracking-wider ">Câu hỏi đã trả lời</th>
                            <th class="p-2 border-solid border-l border-t   border-r border-b-0 border-gray-200 bg-gray-100 font-semibold text-gray-600 uppercase tracking-wider "> Tổng Câu hỏi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-solid ">
                            <td  class="p-2 border-solid border-l border-t  border-b text-center border-gray-200 text-red-700" >{{datathongkehoidap.SLChuatraloi}}</td>
                            <td  class="p-2 border-solid border-l border-t  border-b text-center border-gray-200 text-green-500" >{{datathongkehoidap.SLdatraloi}}</td>
                            <td  class="p-2 border-solid border-l border-t  border-b border-r text-center border-gray-200 text-yellow-500" >{{datathongkehoidap.Tonghoidap}}</td>    
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </card>
</template>

<script>
export default {
    data: function () {
        return {
        datathongkehoidap: "",
        };
    },
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() {
         const self = this;
    axios.get("/thong-ke-hoi-dap").then(function (response) {
      self.datathongkehoidap = response.data;
      console.log(response.data);
    });
    // this.$parent.$el.classList.remove("h-60");
    // this.$parent.$el.classList.add("w-full");
     this.$parent.$el.classList.add("h-60");
    },
}
</script>
