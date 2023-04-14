@extends('layout.layoutchinh')
@section('content')
<div id="timkiem" class="col-span-12">
    <span> <a href="/"> <i class="fa fa-home text-black mr-3 mb-5"> </i> </a> <i
            class="fa fa-chevron-right text-black mr-3"></i> <span class="font-bold text-blue-600 text-lg">Tìm
            kiếm</span>

        <div>
            <input @keyup="searchTitle($event)" v-model=" searchName " type="text" name="" id=""
                style="border: 2px solid #cdb6b6; width:90%; float: left; padding: 6px 6px">
            <button @click="search" style="width: 10% ; background-color:#5bc0de; height: 40px; "> <i
                    class="fa fa-search text-lg mt-2 text-white"></i> </button>
        </div>
        <div class="grid grid-cols-12 mt-4">
            <div class="col-span-6 mr-6">
                <select @change="chuyenMuc($event)" v-model="chuyenmuc_id" name="cars" id="cars"
                    style="border: 2px solid #cdb6b6; padding: 9px 6px; width:100%">
                    <option value="">--- Chọn chuyên mục ---</option>
                    @foreach ($menuleft as $dm)
                    <option value="{{$dm['id']}}">-- {{$dm['label']}}
                        @if ($dm['kiemtra']==1)
                        @include('layout.childtimkiem', ['danhmuc' => $dm['children']])
                        @endif
                    </option>

                    @endforeach
                </select>
            </div>
            <div class="col-span-3 mr-3">
                <input v-model=" ngaybd " type="date" name="" id=""
                    style="border: 2px solid #cdb6b6; padding: 5px 6px; width:100%">
            </div>
            <div class="col-span-3">
                <input v-model=" ngaykt " type="date" name="" id=""
                    style="border: 2px solid #cdb6b6; padding: 5px 6px; width:100%">
            </div>
        </div>

        <div v-for="post in listPost" class="grid grid-cols-12 mt-4">
            <div class=" col-span-12 grid grid-cols-12 my-2 bg-white p-4" style="border: 1px solid gray">
                <div class="col-span-3">
                    <div>
                        <img class="w-full" :src="'/storage/'+post['thumbnail']" alt="">
                    </div>
                </div>

                <div class="col-span-8 ml-4">
                    <div class="col-span-12 text-justify ">
                        <a :href="'/chi-tiet-tin-tuc/' + post['slug']">
                            <p class="sm:text-lg text-base text-gray-700 font-bold mb-4" style="color: #000;">
                                @{{post.title}}</p>
                        </a>
                    </div>
                    <div v-if="post.published_at">
                        <div class="col-span-12">
                            <p class="text-gray-500 sm:text-base text-sm"><i class="fas fa-calendar-alt"></i>
                                @{{post.published_at}}</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
var vm = new Vue({
    el: '#timkiem',
    data: {
        listPost: [],
        chuyenmuc_id: '',
        show: false,
        isActivemodal: true,
        searchName: '',
        ngaybd: '',
        ngaykt: '',
    },
    // chạy ngay khi web load
    mounted: function() {
        const self = this;
        console.log('1')
    },
    // chạy khi thực hiện event
    methods: {
        search() {
            const self = this;
            axios.get("/searchPost?searchName=" + self.searchName + '&chuyenmuc_id=' + self.chuyenmuc_id +
                    '&ngaybd=' + self.ngaybd + '&ngaykt=' + self.ngaykt)
                .then(function(response) {
                    self.listPost = response.data.data;
                });
        },
        searchTitle(e) {
            this.searchName = e.target.value;
            console.log(this.searchName);
        },
        chuyenMuc(e) {
            this.chuyenmuc_id = e.target.value;
        },

    }
})
</script>

@endsection