@extends('layout.trangchu')
@section('content')


 <!--form Tin tức - sự kiện-->
 <div class="w-full  rounded-lg">
                    <div class="grid grid-cols-12 mb-3 pb-2">
                        <div class=" sm:col-span-8 col-span-12 sm:px-2 sm:mr-2 sm:mb-0 ">
                            <div class="w-full overflow-hidden relative rounded-lg">
                                <div class="tintuc-img-l">
                                <a href="">
                                    <img class="overflow-hidden w-full	 "
                                        src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.cb5458eb-e3ae-402f-a0a9-6bcf06a7168e.jpg"
                                        alt="" >
                                </a>
                                </div>
                                <div class="absolute p-2" style="background-color: rgba(0, 0, 0, 0.664); bottom: 1px; ">
                                    <p class="sm:text-lg text-base text-white text-justify ">
                                        Gặp mặt 59 ứng cử viên đại biểu Hội đồng nhân dân huyện khóa XX, nhiệm
                                        kỳ 2021 – 2026

                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="sm:col-span-4 col-span-12 ">
                            <div>
                                <div class="bg-red-700  rounded-t-lg  border-b-2  py-3 px-2 rounded-t-lg sm:block hidden"
                                    style="width: 100%; height: 54px;">
                                    <a href="">
                                        <i class="far fa-newspaper text-xl px-2 text-white"></i>
                                        <span class=" font-bold text-lg  text-white ">TIN TỨC - SỰ KIỆN</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="overflow-y-scroll pt-2" style="height: 300px;">
                                    <ul>
                                        <li
                                            class="border-b mx-2 border-dashed text-justify text-sm font-bold py-2 border-gray-300">
                                            <i class="fas fa-angle-right text-red-700 text-sm "></i>
                                            <a href="" class="hover:text-red-600 "> Huyện Kỳ Anh sẵn sàng “kích
                                                hoạt” hệ thống phòng chống dịch bệnh covid - 19</a>
                                        </li>
                                        <li
                                            class="border-b mx-2 border-dashed text-justify text-sm font-bold py-2 border-gray-300">
                                            <i class="fas fa-angle-right text-red-700 text-sm"></i>
                                            <a href="" class="hover:text-red-600"> Kiểm tra công tác chuẩn bị
                                                cho bầu cử đại biểu Quốc hội khóa XV, HĐND các cấp nhiệm
                                                kỳ...</a>
                                        </li>
                                        <li
                                            class="border-b mx-2 border-dashed text-justify text-sm font-bold py-2 border-gray-300">
                                            <i class="fas fa-angle-right text-red-700 text-sm"></i>
                                            <a href="" class="hover:text-red-600"> Gặp mặt 59 ứng cử viên đại
                                                biểu Hội đồng nhân dân huyện khóa XX, nhiệm kỳ 2021 – 2026</a>
                                        </li>
                                        <li
                                            class="border-b mx-2 border-dashed text-justify text-sm font-bold py-2 border-gray-300">
                                            <i class="fas fa-angle-right text-red-700 text-sm"></i>

                                            <a href="" class="hover:text-red-600"> Tập trung đẩy mạnh công tác
                                                tuyên truyền và rà soát công tác chuẩn bị cho cuộc bầu cử...</a>
                                        </li>
                                        <li
                                            class="border-b mx-2 border-dashed text-justify text-sm font-bold py-2 border-gray-300">
                                            <i class="fas fa-angle-right text-red-700 text-sm"></i>
                                            <a href="" class="hover:text-red-600"> Lãnh đạo huyện Kỳ Anh đối
                                                thoại với đoàn viên công đoàn, thanh niên cơ sở</a>
                                        </li>
                                        <li
                                            class="border-b mx-2 border-dashed text-justify text-sm font-bold py-2 border-gray-300">
                                            <i class="fas fa-angle-right text-red-700 text-sm"></i>
                                            <a href="" class="hover:text-red-600"> Con Cuông: Tích cực tuyên
                                                truyền
                                                cuộc bầu cử Đại biểu Quốc hội khoá XV, Đại biểu HĐND nhiệm kỳ
                                                2021 –
                                                2026</a>
                                        </li>
                                        <li
                                            class="border-b mx-2 border-dashed text-justify text-sm font-bold py-2 border-gray-300">
                                            <i class="fas fa-angle-right text-red-700 text-sm"></i>
                                            <a href="" class="hover:text-red-600"> Kiểm tra công tác chuẩn bị
                                                cho bầu cử đại biểu Quốc hội khóa XV, HĐND các cấp nhiệm
                                                kỳ...</a>
                                        </li>
                                        <li class=" mx-2 text-justify text-sm font-bold py-2 border-gray-300">
                                            <i class="fas fa-angle-right text-red-700 text-sm"></i>
                                            <a href="" class="hover:text-red-600"> Huyện Kỳ Anh sẵn sàng “kích
                                                hoạt” hệ thống phòng chống dịch bệnh covid - 19</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

                <!--form bầu cử-->
                <div class=" mt-8  ">
                    <div class="grid grid-cols-12 pb-2">
                        <div class="col-span-12 text-center -mb-6 font-bold text-2xl text-red-600">
                            Bầu cử Đại biểu Quốc Hội và Hội đồng Nhân Dân các cấp
                        </div>
                    </div>
                    <hr class="w-full mt-5 mb-1 border-b  border-red-700 border-solid">
                    <div class="grid grid-cols-12 sm:mx-3 mt-3">
                        <div class="sm:col-span-3 col-span-12 text-center mt-2 sm:mr-3">
                            <div class="grid grid-cols-12">
                                <div
                                    class=" box-img-baucu overflow-hidden col-span-12 border border-gray-200 rounded-md w-full px-1 py-1 shadow-md">
                                    <img class="w-full h-full" src="/images/daibieu1.jpg">
                                </div>
                                <div
                                    class="baucu-content overflow-hidden col-span-12  text-justify  text-left mt-2 text-gray-900 hover:text-red-700">
                                    Hướng dẫn tuyên truyền cuộc bầu cử đại biểu Quốc hội khóa XV và đại biểu Hội
                                    đồng nhân dân các cấp, nhiệm kỳ 2021 - 2026
                                </div>
                            </div>

                        </div>
                        <div class="sm:col-span-3 col-span-12 text-center mt-2 sm:mr-3">
                            <div class="grid grid-cols-12">
                                <div
                                    class="box-img-baucu overflow-hidden col-span-12 border border-gray-200 rounded-md w-full sm:px-1 py-1 shadow-md">
                                    <img class="w-full " src="/images/daibieu2.jpg">
                                </div>
                                <div class="baucu-content overflow-hidden col-span-12 text-left mt-2 text-justify hover:text-red-700">
                                    Chỉ thị số 45-CT/TW ngày 20/6/2020 của Bộ Chính trị về lãnh đạo cuộc bầu cử
                                    đại biểu Quốc hội khóa XV và bầu cử đại biểu HĐND các cấp nhiệm kỳ 2021 -
                                    2026
                                </div>
                            </div>

                        </div>
                        <div class="sm:col-span-3  col-span-12  text-center mt-2 sm:mr-3">
                            <div class="grid grid-cols-12">
                                <div
                                    class="box-img-baucu overflow-hidden col-span-12 border border-gray-200 rounded-md w-full sm:px-1 py-1 shadow-md">
                                    <img class=" w-full h-full" src="/images/daibieu3.jpg">
                                </div>
                                <div class="baucu-content overflow-hidden col-span-12 text-left mt-2 hover:text-red-700 text-justify ">
                                    Thời sự Infographics: 16 mốc thời gian quan trọng về kỳ bầu cử đại biểu Quốc
                                    hội khóa XV và HĐND các cấp nhiệm kỳ 2021-2026
                                </div>
                            </div>

                        </div>
                        <div class="sm:col-span-3  col-span-12  text-center mt-2 ">
                            <div class="grid grid-cols-12">
                                <div
                                    class="box-img-baucu overflow-hidden col-span-12 border border-gray-200 rounded-md w-full sm:px-1 py-1 shadow-md">
                                    <img class="w-full h-full" src="/images/daibieu4.jpg">
                                </div>
                                <div class="baucu-content overflow-hidden col-span-12 text-left mt-2 text-justify  hover:text-red-700">
                                    Sách hỏi - đáp về bầu cử ĐBQH khóa XV và Đại biểu HĐND các cấp nhiệm kỳ
                                    2021-2026
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                  <!--------------------------- past 2--form điều hành tác nghiệp----------------------------->

        <div class="grid grid-cols-12 sm:mt-6 mx-3 mb-8">
            <div class="sm:col-span-12 col-span-12 sm:pl-0">

                <!-- khối giới thiệu  -->
                <div class="w-full">
                    <div class="w-full my-3 mb-6">
                        <div class="grid grid-cols-12 sm:block hidden ">
                            <div
                                class="col-span-12 text-center -mb-6 font-bold text-3xl text-red-600 text-xl font-bold">
                                ĐIỀU HÀNH TÁC NGHIỆP
                            </div>
                        </div>
                    </div>

                    
                    <div class="grid grid-cols-12 ">
                        <div class="sm:col-span-4 col-span-12 text-center  sm:mr-4 ">
                            <div class="col-span-4 text-center ">
                                <div class="tn-title bg-red-700  rounded-t-lg  border-b-2  py-3 px-2 rounded-t-lg ">
                                    <a href="">
                                        <i class="fas fa-file-contract text-2xl px-2 text-white"></i>
                                        <span class=" font-bold text-xl  text-white ">VĂN BẢN CHỈ ĐẠO ĐIỀU HÀNH</p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 border-4 border-red-700 tn-content">
                                
                                <div class="sm:col-span-12 col-span-12 overflow-y-auto h-80">
                                   
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="sm:col-span-4 col-span-12 text-center ">
                            <div class="bg-red-700 tn-title rounded-t-lg  border-b-2  py-3 px-2 rounded-t-lg sm:block hidden"
                                >
                                <a href="">
                                    <i class="fas fa-file-contract text-2xl px-2 text-white"></i>
                                    <span class=" font-bold text-lg  text-white ">VĂN BẢN QPPL</p>
                                    </span>
                                </a>
                            </div>
                            <div class="grid grid-cols-12 border-red-700 border-4 tn-content">
                                <div class="sm:col-span-12 col-span-12 overflow-y-auto h-80">
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-200 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" w-full bg-gray-50 my-1">
                                        <div class="grid grid-cols-12 px-2 py-2">
                                            <div class="col-span-12 text-left text-gray-400">
                                                20/04/2021
                                            </div>
                                            <div class="col-span-12 text-left text-blue-600 hover:text-blue-900">
                                                Quyết định số 476/QĐ-LĐTBXH về việc phân công công tác của Bộ
                                                trưởng và các Thứ trưởng
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="sm:col-span-4 col-span-12 text-center sm:ml-4">
                            <div class=" bg-red-700 tn-title  rounded-t-lg  border-b-2  py-3 pl-2 rounded-t-lg ">
                                <a href="">
                                    <i class="fas fa-laptop-medical  text-2xl px-2 text-white"></i>
                                    <span class=" font-bold text-xl  text-white ">CÔNG SỞ THÔNG MINH</p>
                                    </span>
                                </a>
                            </div>
                            <div class=" w-full mb-4 border-red-700 border-4 tn-content">
                                <div>
                                    <ul class="">
                                        <li class="pl-2 border border-t-0">
                                            <a href="/van-ban-chi-tiet/5" class="flex py-2">
                                                <i class="fas fa-calendar-week text-4xl text-red-700 pr-2 pt-2"></i>
                                                <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                                    LỊCH CÔNG TÁC
                                                </p>
                                            </a>
                                        </li>
                                        <li class="pl-2 border border-t-0">
                                            <a href="/van-ban-chi-tiet/5" class="flex py-2">
                                                <i class="fas fa-user-tie text-4xl text-red-700 pr-2 pt-2"></i>
                                                <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                                    MỘT CỬA ĐIỆN TỬ
                                                </p>
                                            </a>
                                        </li>
                                        <li class="pl-2 border border-t-0">
                                            <a href="/van-ban-chi-tiet/4" class="flex py-2">
                                                <i class="fas fa-portrait text-4xl text-red-700 pr-2 pt-2"></i>
                                                <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                                    DANH BẠ KÌ ANH
                                                </p>
                                            </a>
                                        </li>
                                        <li class="pl-2 border border-t-0">
                                            <a href="/van-ban-chi-tiet/5" class="flex py-2">
                                                <i class="fas fa-paste text-4xl text-red-700 pr-2 pt-2"></i>
                                                <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                                    GỬI NHẬN VĂN BẢN
                                                </p>
                                            </a>
                                        </li>
                                        <li class="pl-2 ">
                                            <a href="/van-ban-chi-tiet/5" class="flex py-2">
                                                <i class="fas fa-file-alt text-4xl text-red-700 pr-2 pt-2"></i>
                                                <p class=" mt-3 pr-2 text-justify hover:text-red-700 ">
                                                    TÀI LIỆU CÁC KỲ HỌP HĐND
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="sm:py-10 sm:px-10 sm:mb-5 px-2 py-2" style="background-color:#343434">
                    <div class="grid grid-cols-12 mb-4 overflow-hidden ">
                        <div class="sm:col-span-6 col-span-12 border-red-700 border-b-2">
                            <a href="">
                                <i class="fab fa-youtube text-xl text-white pr-2"></i>
                                <span class=" font-bold text-xl  text-white  ">TRUYỀN HÌNH ĐỊA PHƯƠNG</p>
                                </span>
                            </a>
                        </div>
                        <div class="sm:col-span-6 col-span-12 sm:border-b-2 border-white">
                        </div>
                    </div>
                    <div class="grid grid-cols-12">
                        <div class=" sm:col-span-8 col-span-12 sm:pr-4">

                            <iframe class="w-full vd-l mt-2" src="https://www.youtube.com/embed/Bp0amWOCiD4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                            <div class="vd-content-l overflow-hidden">
                                <p class="text-xl font-bold text-justify text-white "> Gặp mặt 59 ứng cử viên đại biểu
                                    Hội đồng nhân dân khóa XX, nhiệm kỳ 2021- 2026 </p>
                                <i class="fas fa-eye text-red-700 text-lg ">
                                    <span class="font-bold text-lg text-white"> 123 </span>
                                </i>
                                <i class="far fa-comment-dots pl-4 text-red-700 text-lg">
                                    <span class="font-bold text-white text-lg"> 57 </span>
                                </i>
                            </div>
                        </div>
                        <div class="sm:col-span-4 col-span-12">
                            <ul>
                                <li>
                                    <div class="grid grid-cols-12  border-white border-b border-dashed  pb-1">
                                        <div class="col-span-5 ">
                                            <iframe class="w-full vd-s mt-2 "
                                                src="https://www.youtube.com/embed/AOrUSiRQbDQ"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-span-7 ml-2">
                                            <p
                                                class="vd-content-s overflow-hidden text-lg text-justify overflow-hidden">
                                                <a href="" class="text-sm text-white font-bold">
                                                    “Giao lưu hữu nghị thanh niên, sinh viên Việt - Lào” năm
                                                    2021
                                                </a>

                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-cols-12  py-1">
                                        <div class="col-span-5 w-full ">
                                            <iframe class="w-full vd-s mt-2"
                                                src="https://www.youtube.com/embed/fsfdj3Uaico"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-span-7 mx-2">
                                            <p
                                                class="vd-content-s overflow-hidden text-lg text-justify overflow-hidden">
                                                <a href="" class="text-sm font-bold text-white">
                                                    [MS 20] Đoàn Thanh niên Công an tỉnh Nghệ An - "Tự hào
                                                    người cán bộ Đoàn"
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-cols-12 border-white border-b border-dashed border-t py-1">
                                        <div class="col-span-5 w-full mr-2 ">
                                            <iframe class="w-full vd-s mt-2"
                                                src="https://www.youtube.com/embed/fKz-HsrwTtM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-span-7 mx-2">
                                            <p
                                                class="vd-content-s overflow-hidden text-lg text-justify overflow-hidden">
                                                <a href="" class="text-sm text-white font-bold">
                                                    Phóng sự Kỷ niệm 90 năm Ngày thành lập Đoàn Thanh niên
                                                    Cộng sản Hồ Chí Minh (26/3/1931-26/3/2021)
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-cols-12 py-1">
                                        <div class="col-span-5 w-full mr-2">
                                            <iframe class="w-full vd-s mt-2"
                                                src="https://www.youtube.com/embed/JAcOQvG1dcQ"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-span-7 mx-2">
                                            <p
                                                class="vd-content-s overflow-hidden text-lg text-justify overflow-hidden">
                                                <a href="" class="text-sm text-white font-bold">
                                                    [MS 27] Huyện đoàn Nghi Lộc - "Tự hào người cán bộ Đoàn"
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-cols-12 py-1 border-t border-dashed border-white">
                                        <div class="col-span-5 w-full mr-2">
                                            <iframe class="w-full vd-s mt-2"
                                                src="https://www.youtube.com/embed/JAcOQvG1dcQ"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="col-span-7 mx-2">
                                            <p
                                                class="vd-content-s overflow-hidden text-lg text-justify overflow-hidden">
                                                <a href="" class="text-sm text-white font-bold">
                                                    [MS 27] Huyện đoàn Nghi Lộc - "Tự hào người cán bộ Đoàn"
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
                <!--form giáo dục - đào tạo-->
                <div class="">
                    <div class="grid grid-cols-12 mb-4 overflow-hidden ">
                        <div class="sm:col-span-5 col-span-12 border-red-700 border-b-2">
                            <a href="">
                                <i class="fas fa-book-reader text-3xl text-red-700 pr-2 "></i>
                                <span class=" font-bold text-3xl  text-red-700  ">GIÁO DỤC - ĐÀO TẠO</p>
                                </span>
                            </a>
                        </div>
                        <div class="sm:col-span-7 col-span-12 sm:border-b-2 border-gray-400">
                        </div>
                    </div>


                    <div class="grid grid-cols-12">

                        <div class="sm:col-span-6 col-span-12 mr-4">
                            <div>
                                <div class="gd-img-l overflow-hidden  ">
                                    <a href="">
                                        <img class="w-full"
                                            src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.bf6f1c6d887aa40e.5374696c6c303431325f30303030332e6a7067.jpg"
                                            alt=""></a>
                                </div>

                                <div class="gd-content-l overflow-hidden">
                                    <p class="font-bold text-justify"><a href=""
                                            class="text-xl hover:text-red-700 ">Trường
                                            Mầm
                                            non Kỳ Tây phối hợp
                                            với Ban
                                            đại diện cha mẹ học sinh đã tổ chức chương trình “ Hội chợ làng quê
                                            của bé’
                                            và “ Ca nhạc thiện nguyện” .</a></p>
                                    <p class="text-gray-500">Ngày đăng: 30/4/2021</p>
                                    <p class="pt-2 text-justify">Thực hiện nhiệm vụ năm học 2021 - 2022, thời
                                        gian qua,
                                        Công đoàn Trường Mầm non Kỳ Tây phối hợp với Ban đại diện cha mẹ học
                                        sinh đã tổ
                                        chức chương trình “Hội chợ làng quê của bé - ca nhạc thiện nguyện” nhân
                                        dịp
                                        khánh thành...</p>
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-6 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="col-span-6">
                                    <div class="mb-4">
                                        <div class="gd-img-s overflow-hidden">
                                            <img class="w-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.92fc2a18491b80b8.31283133292e6a7067.jpg"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-justify font-bold gd-content-s overflow-hidden"> Chi hội Văn
                                                học
                                                Nghệ thuật Kỳ Anh – Một nhiệm
                                                kỳ nhìn lại chặng đường hoạt động</p>
                                            <p class="text-gray-500 test-base ">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="gd-img-s overflow-hidden">
                                            <img class="w-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.8ca12592bbcc6202.4b54565f343833352e4a5047.JPG"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-justify gd-content-s overflow-hidden font-bold">
                                                Trường THCS Kỳ Tân tổ chức chương trình ngoại khoá Văn học với chủ đề “
                                                Truyện Trung đại Việt Nam”</p>
                                            <p class="text-gray-500 test-base ">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 ml-4">
                                    <div class="mb-4">
                                        <div class="gd-img-s overflow-hidden">
                                            <img class="w-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.b1e1c69c3f82ebcf.332e6a7067.jpg"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-justify gd-content-s overflow-hidden font-bold"> UBND huyện
                                                Kỳ
                                                Anh: Tập huấn Câu Lạc bộ dân ca Ví Giặm năm 2018</p>
                                            <p class="text-gray-500 test-base ">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="gd-img-s overflow-hidden">
                                            <img class="w-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.87ea4180aedde4f2.4b54565f393038382e4a5047.JPG"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-justify gd-content-s overflow-hidden font-bold"> [Photo] Sôi
                                                nổi
                                                liên hoan văn nghệ mừng Đảng, mừng Xuân ở Kỳ Lạc.</p>
                                            <p class="text-gray-500 test-base ">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--form thư viện ảnh-->
                <div class="my-6">
                    <div class="grid grid-cols-12 my-4 overflow-hidden ">
                        <div class="sm:col-span-5 col-span-12 border-red-700 border-b-2">
                            <a href="">
                                <i class="fas fa-images text-3xl text-red-700 pr-2 "></i>
                                <span class=" font-bold text-3xl  text-red-700  ">THƯ VIỆN ẢNH</p>
                                </span>
                            </a>
                        </div>
                        <div class="sm:col-span-7 col-span-12 sm:border-b-2 border-gray-400">
                        </div>
                    </div>


                    <div class="grid grid-cols-12">

                        <div class="sm:col-span-4 col-span-12 sm:block hidden">
                            <div class="tva-content-l text-xl text-gray-300 py-10 px-5 text-justify font-bold">
                                Huyện Kỳ Anh tổ chức hội thi sáng tạo khoa học kỷ thuật thanh thiếu niên nhi đồng năm
                                2017.
                            </div>
                            <div
                                class="tva-content-l opacity-80 text-xl text-gray-300 py-10 px-5 text-justify font-bold">
                                Ban Quản lý rừng phòng hộ Nam Hà Tĩnh tặng nhà tình nghĩa cho gia đình có hoàn cảnh khó
                                khăn ở xã Kỳ Sơn
                            </div>

                        </div>
                        <div class="tva-img-l sm:col-span-8 col-span-12 overflow-hidden">
                            <a href=""> <img class="w-full"
                                    src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/hinh_anh/hinh_anh.avatar.a339a0dac6d37426.494d475f303631312e4a5047.JPG"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="sm:grid grid-cols-12 mt-3 sm:block hidden">
                        <div class="col-span-3 pr-4">
                            <div class="tva-img-s overflow-hidden">
                                <img class="w-full"
                                    src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/hinh_anh/hinh_anh.avatar.88b50110ff627a91.4453435f323935352e4a5047.JPG"
                                    alt="">
                            </div>
                            <p class="tva-content-s text-justify">Ban Chỉ huy Quân sự huyện Kỳ Anh tặng quà cho các gia
                                đình chính sách </p>
                        </div>
                        <div class="col-span-3 pr-4">
                            <div class="tva-img-s overflow-hidden">
                                <img class="w-full"
                                    src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/hinh_anh/hinh_anh.avatar.9cf47249e65e2192.53616320627561312e6a7067.jpg"
                                    alt="">
                            </div>
                            <p class="tva-content-s text-justify">Hình ảnh hát múa Sắc bùa Kỳ Anh </p>
                        </div>
                        <div class="col-span-3 pr-4">
                            <div class="tva-img-s overflow-hidden">
                                <img class="w-full"
                                    src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/hinh_anh/hinh_anh.avatar.b47213ad698b22b2.4453435f333133352e4a5047.JPG"
                                    alt="">
                            </div>
                            <p class="tva-content-s text-justify">Đại hội Hội CCB huyện Kỳ Anh nhiệm kỳ 2017-2022. </p>
                        </div>
                        <div class="col-span-3 ">
                            <div class="tva-img-s overflow-hidden">
                                <img class="w-full"
                                    src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/hinh_anh/hinh_anh.avatar.8872aac7aec628b9.4453435f353734342e4a5047.JPG"
                                    alt="">
                            </div>
                            <p class="tva-content-s text-justify">Huyện Kỳ Anh kỷ niệm 70 năm ngày Thương binh Liệt sỹ.
                            </p>
                        </div>
                    </div>
                </div>

                <!--form văn hóa - xã hội-->
                <div class="">
                    <div class="grid grid-cols-12 mb-4 overflow-hidden ">
                        <div class="sm:col-span-5 col-span-12 border-red-700 border-b-2">
                            <a href="">
                                <i class="fas fa-atom text-3xl text-red-700 pr-2 "></i>
                                <span class=" font-bold text-3xl  text-red-700  ">VĂN HÓA - XÃ HỘI</p>
                                </span>
                            </a>
                        </div>
                        <div class="sm:col-span-7 col-span-12 sm:border-b-2 border-gray-400">
                        </div>
                    </div>


                    <div class="grid grid-cols-12">

                        <div class="sm:col-span-6 col-span-12 mr-4">

                            <div class="gd-img-l overflow-hidden  ">
                                <a href="">
                                    <img class="w-full"
                                        src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.b9b11bfc960c9ded.494d475f32303231303432365f3039353932372e6a7067.jpg"
                                        alt=""></a>
                            </div>

                            <div class="gd-content-l overflow-hidden">
                                <p class="font-bold text-justify"><a href="" class="text-xl hover:text-red-700 ">Khai
                                        mạc và trao giải bóng chuyền văn phòng các Xã, khai trương mùa Du lịch biển Kỳ
                                        Xuân 2021</a></p>
                                <p class="text-gray-500">Ngày đăng: 30/4/2021</p>
                                <p class="pt-2 text-justify">Nằm trong khuôn khổ Đại hội TDTT huyện Kỳ Anh 2021 và chuỗi
                                    các họat động khai trương mùa du lịch biển . Trong ngày 25/ 4 tại xã Kỳ Xuân, Ban tổ
                                    chức Đại hội TDTT huyện Kỳ Anh, lần thứ IX khai mạc giải bóng chuyền nam văn phòng,
                                    chào mừng kỷ niệm 46 năm ngày giải phóng...</p>
                            </div>
                        </div>

                        <div class="sm:col-span-6 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="col-span-6 ">
                                    <div class="mb-4">
                                        <div class="gd-img-s overflow-hidden">
                                            <img class="w-full h-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.870b4e7ab62eb6c6.5374696c6c303432325f30303031342e6a7067.jpg"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-justify font-bold gd-content-s overflow-hidden"> Khai mạc
                                                giải bóng chuyền nam đại hội thể dục thể thao toàn tỉnh lần thứ IX năm
                                                2021</p>
                                            <p class="text-gray-500 test-base ">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="gd-img-s overflow-hidden">
                                            <img class="w-full h-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.b862727091756fde.6461206368696e682e6a7067.jpg"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-justify gd-content-s overflow-hidden font-bold">
                                                Xử phạt 10 triệu đồng về hành vi khai báo ý tế không trung thực phòng
                                                chống dịch bệnh Covid-19</p>
                                            <p class="text-gray-500 test-base ">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 ml-4">
                                    <div class="mb-4">
                                        <div class="gd-img-s overflow-hidden">
                                            <img class="w-full h-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.b598976ac079480c.5374696c6c313232315f30303030382e6a7067.jpg"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-justify gd-content-s overflow-hidden font-bold"> Lễ trao tặng
                                                quà cho người khuyết tật - trẻ mồ côi và người nghèo khắc phục lũ lụt
                                                thiên tai</p>
                                            <p class="text-gray-500 test-base ">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="gd-img-s overflow-hidden">
                                            <img class="w-full h-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/news/news.avatar.87ea4180aedde4f2.4b54565f393038382e4a5047.JPG"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-justify gd-content-s overflow-hidden font-bold"> [Photo] Sôi
                                                nổi
                                                liên hoan văn nghệ mừng Đảng, mừng Xuân ở Kỳ Lạc.</p>
                                            <p class="text-gray-500 test-base ">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--form quốc phòng an ninh  + form tiềm năng cơ hôi-->
                <div>
                    <div class="grid grid-cols-12 my-6">

                        <!--form QPAN-->
                        <div class="sm:col-span-6 col-span-12 sm:mr-4">
                            <div class="grid grid-cols-12 my-4 overflow-hidden ">
                                <div class="sm:col-span-7 col-span-12 border-red-700 border-b-2 ">
                                    <a href="">
                                        <i class="far fa-star text-xl text-red-700 pr-2"></i>
                                        <span class=" font-bold text-xl  text-red-700  ">QUỐC PHÒNG - AN NINH</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="sm:col-span-5 col-span-12 sm:border-b-2 border-gray-400">
                                </div>
                            </div>
                            <div class="border-b border-gray-400 border-dashed ">
                                <div class="gd-img-l overflow-hidden  ">
                                    <a href="">
                                        <img class="w-full h-full"
                                            src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.d01ea7cc-7f21-4da9-a263-5f3eccd67c2c.jpg"
                                            alt=""></a>
                                </div>

                                <div class="gd-content-l overflow-hidden">
                                    <p class="font-bold text-justify"><a href="" class="text-xl hover:text-red-700 ">Hội
                                            thao huấn luyện dân quân cụm 1 năm 2021
                                        </a></p>
                                    <p class="text-gray-500">Ngày đăng: 30/4/2021</p>
                                    <p class="pt-2 text-justify">Sáng ngày 23/4, Ban Chỉ huy Quân sự huyện Kỳ Anh tổ
                                        chức hội thao huấn luyện cho lực lượng dân quân cụm 1 năm 2021. Các đồng chí
                                        Hoàng Trọng Lý, UVBTV, phó Chủ tịch Thường trực HĐND huyện; Dương Thị Vân Anh,
                                        UVBTV, Phó Chủ tịch UBND huyện; Lê Mã Lương, UVBTV, Chủ tịch UBMTTQ huyện cùng
                                        tham dự.</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-2">
                                <div class="col-span-4 pr-3">
                                    <div class="qp-img-s overflow-hidden mb-1 ">
                                        <a href="">
                                            <img class="w-full h-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.d0a9745f-c3b5-474c-af2b-61abefb70541.jpg"
                                                alt=""></a>
                                    </div>

                                    <div class="">
                                        <p class="qp-content-s overflow-hidden font-bold text-xs text-justify"><a
                                                href="" class="text-bold hover:text-red-700 ">Huyện Kỳ Anh phấn đấu đến
                                                ngày 10/6 hoàn thành 87.000 thẻ căn cước công dân có gắn chíp điện tử.
                                            </a></p>
                                        <p class="text-gray-500 text-xs">Ngày đăng: 30/4/2021</p>
                                    </div>
                                </div>
                                <div class="col-span-4 pr-3">
                                    <div class="qp-img-s overflow-hidden mb-1 ">
                                        <a href="">
                                            <img class="w-full h-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.33d2ed3d-a173-4946-9d29-8ee32c641d3b.jpg"
                                                alt=""></a>
                                    </div>

                                    <div class="">
                                        <p class="qp-content-s overflow-hidden font-bold text-xs     text-justify"><a
                                                href="" class="text-bold hover:text-red-700 ">Ban chỉ huy quân sự huyện
                                                tập huấn cán bộ năm 2021.

                                            </a></p>
                                        <p class="text-gray-500 text-xs">Ngày đăng: 30/4/2021</p>
                                    </div>
                                </div>
                                <div class="col-span-4">
                                    <div class="qp-img-s overflow-hidden mb-1 ">
                                        <a href="">
                                            <img class="w-full h-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.4121c4fb-2bd1-4f96-9e4c-aca2c8f62836.jpg"
                                                alt=""></a>
                                    </div>

                                    <div class=" ">
                                        <p class="font-bold text-xs  qp-content-s overflow-hidden  text-justify"><a
                                                href="" class="text-bold hover:text-red-700 ">Dâng hương tri ân các anh
                                                hùng liệt sỹ nhân ngày thành lập Quân đội nhân dân Việt Nam

                                            </a></p>
                                        <p class="text-gray-500 text-xs">Ngày đăng: 30/4/2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--form TNCH-->
                        <div class="sm:col-span-6 col-span-12">
                            <div class="col-span-6">
                                <div class="grid grid-cols-12 my-4 overflow-hidden ">
                                    <div class="sm:col-span-8 col-span-12 border-red-700 border-b-2 ">
                                        <a href="">
                                            <i class="fas fa-chart-line text-xl text-red-700 pr-2 "></i>
                                            <span class=" font-bold text-xl  text-red-700  ">TIỀM NĂNG - CƠ HỘI ĐẦU TƯ
                                                </p>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="sm:col-span-4 col-span-12 sm:border-b-2 border-gray-400">

                                    </div>
                                </div>
                                <div class="border-b border-gray-400 border-dashed">
                                    <div class="gd-img-l overflow-hidden  ">
                                        <a href="">
                                            <img class="w-full h-full"
                                                src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.531633a0-407b-41c7-b187-b9ed1a46f442.jpg"
                                                alt=""></a>
                                    </div>

                                    <div class="gd-content-l overflow-hidden">
                                        <p class="font-bold text-justify"><a href=""
                                                class="text-xl hover:text-red-700 ">UBND huyện: Họp nghe và cho ý kiến
                                                về bản thiết kế Trụ sở Trung tâm Hành chính huyện Kỳ Anh (lần 3).
                                            </a></p>
                                        <p class="text-gray-500">Ngày đăng: 30/4/2021</p>
                                        <p class="pt-2 text-justify">Chiều 17/01, đồng chí Nguyễn Tiến Hùng – Phó bí thư
                                            TT Huyện ủy và đồng chí Bùi Quang Hoàn – Chủ tịch UBND huyện đã chủ trì hội
                                            nghị nghe và cho ý kiến về bản thiết kế Trụ sở Trung tâm hành chính huyện Kỳ
                                            Anh (lần 3). Dự hội nghị có các đồng chí Ủy viên Ban Thường vụ Huyện ủy; các
                                            đồng chí Phó Chủ tịch UBND huyện; Chủ tịch UBMTTQ huyện; các phòng ban liên
                                            quan của huyện; Công ty Cổ phần Tư vấn xây dựng Quảng Bình.</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 mt-2">
                                    <div class="col-span-4 pr-3">
                                        <div class="qp-img-s overflow-hidden mb-1 ">
                                            <a href="">
                                                <img class="w-full h-full"
                                                    src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.c743ef7d-2d76-4793-bd3a-1fda2caff3b1.jpg"
                                                    alt=""></a>
                                        </div>

                                        <div class="">
                                            <p class="qp-content-s overflow-hidden font-bold text-xs text-justify"><a
                                                    href="" class="text-bold hover:text-red-700 ">HTX Trung Khang: Sự tử
                                                    tế làm nên thương hiệu

                                                </a></p>
                                            <p class="text-gray-500 text-xs">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                    <div class="col-span-4 pr-3">
                                        <div class="qp-img-s overflow-hidden mb-1 ">
                                            <a href="">
                                                <img class="w-full h-full"
                                                    src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.5a82150b-d462-4987-a455-e33ed611d39a.jpg"
                                                    alt=""></a>
                                        </div>

                                        <div class="">
                                            <p class="qp-content-s overflow-hidden font-bold text-xs     text-justify">
                                                <a href="" class="text-bold hover:text-red-700 ">Đồng chí Đặng Quốc
                                                    Vinh, Phó Chủ tịch UBND tỉnh kiểm tra Luỹ đá cổ ở Kỳ Lạc


                                                </a>
                                            </p>
                                            <p class="text-gray-500 text-xs">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                    <div class="col-span-4">
                                        <div class="qp-img-s overflow-hidden mb-1 ">
                                            <a href="">
                                                <img class="w-full h-full"
                                                    src="http://kyanh.hatinh.gov.vn/kyanh/static/uploads/ckeditor/images.thumb.914707fa-4b39-4b1f-ade1-0970f6c2adc2.jpg"
                                                    alt=""></a>
                                        </div>

                                        <div class=" ">
                                            <p class="font-bold text-xs  qp-content-s overflow-hidden  text-justify"><a
                                                    href="" class="text-bold hover:text-red-700 ">UBND huyện Kỳ Anh:
                                                    Thông qua đồ án quy hoạch phân khu xây dựng Khu du lịch ven biển Kỳ
                                                    Xuân lần thứ 2


                                                </a></p>
                                            <p class="text-gray-500 text-xs">Ngày đăng: 30/4/2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- 3 tab-->
                <div class="w-full shadow-xl my-4 rounded-lg sm:block hidden">
                    <div class="tab ">
                        <button class="tablinks font-bold hover:text-white rounded-t-lg"
                            onclick="openCity(event, 'tab-1')" id="defaultOpen"> XÃ</button>
                        <button class="tablinks font-bold hover:text-white rounded-t-lg"
                            onclick="openCity(event, 'tab-2')">SỞ - BAN - NGÀNH</button>
                        <button class="tablinks font-bold hover:text-white rounded-t-lg"
                            onclick="openCity(event, 'tab-3')">THÀNH PHỐ - HUYỆN - THỊ</button>
                    </div>

                    <div id="tab-1" class="tabcontent">
                        <div class="grid grid-cols-12">
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Phong</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Bắc</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Tiên</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Xuân</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Giang</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Khang</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Đồng</span>
                                </div>
                            </div>
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Sơn</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Thượng</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Lạc</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Tây</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Trung</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Hợp</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Châu</span>
                                </div>
                            </div>
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Phú</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Thọ</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Thư</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Văn</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Hải</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Xã Kỳ Châu</span>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div id="tab-2" class="tabcontent">
                        <div class="grid grid-cols-12">
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">VP Đoàn ĐBQH & HĐND tỉnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Nông nghiệp và PTNT</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Y tế</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Nội vụ</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Thông tin và Truyền thông</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Xây dựng</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Trường Chính trị Trần phú</span>
                                </div>
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Ban QL Khu KT tỉnh Hà Tĩnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Trường đại học Hà Tĩnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Bảo hiểm xã hội tỉnh</span>
                                </div>
                            </div>
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Kế hoạch và Đầu Tư</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Tài chính</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Giáo dục và Đào tạo</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Ngoại vụ</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Lao động - TBXH</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Ngân hàng Nhà nước</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Ban VSTBCPN tỉnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Cục thuế Hà Tĩnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Văn Phòng UBND Tỉnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Công an tỉnh Hà Tĩnh</span>
                                </div>


                            </div>
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Công thương</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở VH-TT-DL</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Khoa học và Công nghệ</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Tài nguyên và Môi trường</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Sở Tư pháp</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Cục Hải quanc</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Viện kiểm sát nhân dân</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Tòa án nhân dân tỉnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Ban chỉ đạo xây dựng NTM</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Thanh Tra Tỉnh</span>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div id="tab-3" class="tabcontent">
                        <div class="grid grid-cols-12">
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Thành Phố Hà Tĩnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Nghi Xuân</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Thị xã Kỳ Anh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Thị Xã Hồng Lĩnh</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Kỳ Anh</span>
                                </div>

                            </div>
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Cẩm Xuyên</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Hương Khê</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Thạch Hà</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Vũ Quang</span>
                                </div>

                            </div>
                            <div class="sm:col-span-4 col-span-12 ">
                                <div class="flex my-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Can Lộc</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Lộc Hà</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Đức Thọ</span>
                                </div>
                                <div class="flex mb-3">
                                    <img class="w-6" src="assets/img/222px-Emblem_of_Vietnam.svg.png" alt="">
                                    <span class="ml-2">Huyện Hương Sơn</span>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

@endsection