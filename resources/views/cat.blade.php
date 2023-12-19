<title>Home | Puenmeaw</title>

@extends('components/LayoutUser')

@section('Content')
        <div id= "modal-Profile-cat" class="border border-gray-300 relative mt-4 flex items-center py-3">    
                <button class="absolute border border-gray-400 flex w-fit mt-2 mb-2 rounded-lg px-2 py-1 ml-7 ">
                        <img src="{{ URL('/picture/'.'arrow-right.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>      
                        <span class="ml-1.5">กลับ</span>
                </button>  
                <div class= " flex mx-auto text-xl">
                    <span>ประวัติการชำระเงิน</span>
                </div>
            </div>
                   
        </div> 
        <!-- add_cat -->
            <div class=" items-center justify-center flex ">
                <div class="mt-[8em] w-fit h-auto  bg-grey-lighter border-2 border-gray-300 border-dashed bg-gray-100 py-[2em] px-[10em] shadow-lg">
                    <button id=" btn-profile-cat" type="button"  class="w-64 flex flex-col items-center px-4 py-6 bg-gray-300 text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class=" mt-2 text-base leading-normal">เพิ่มแมวของคุณ </span>
                    </button>
                </div>     
            </div>

            <!-- start_modal_addcat -->
            <div id="modal-Profile-cat" class="modal hidden fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">
                <div class="modal-content bg-white m-auto p-[10px] rounded-md drop-shadow-xl w-[65%] max-md:w-[100%] gap-2">
                    <span id="details-close" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>   

                    <div class="grid grid-cols-3 p-4">
                        <div class="w-fit border border-red-300  ">
                            <p class="text-lg">รายละเอียดแมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มรายระเอียดของแมวคุณ</p>
                        </div>

                        <!-- input_history_cat -->
                        <div class="col-span-2 relative border 300 w-full bg-white shadow-lg rounded-xl p-3">
                            <div class="grid grid-cols-2 gap-3"> 
                                <div>
                                    <label for="email" class="text-sm font-medium text-gray-900 ">ชื่อแมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input class="ml-2 font-light bg-gray-100"  type="name" name="name" placeholder="กรอกชื่อแมว">   
                                    </div>       
                                </div> 
                                <div>
                                    <label for="email" class="ml-3 ml-2 text-sm font-medium text-gray-900 ">พันธ์แมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input class="ml-2 font-light bg-gray-100"  type="name" name="name" placeholder="กรอกพันธ์แมว">   
                                    </div>       
                                </div>     
                                    
                            </div>
                            
                            <div class="w-fit h-fit my-auto flex  mt-2"> 
                                <div class="">
                                    <label for="email" class="ml-3 block ml-2 text-sm font-medium text-gray-900 ">น้ำหนักแมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input class="ml-2 font-light bg-gray-100  "  type="name" name="name" placeholder="น้ำหนักแมวแมว">   
                                    </div>       
                                </div>     
                                <div class="ml-2">
                                    <label for="countries" class="block ml-3 text-sm font-medium text-gray-900 ">เพศ</label>
                                    <select id="countries" class="bg-gray border bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 shadow-md">
                                    <option selected>กรุณาเลือก</option>
                                    <option value="US">เพศผู้ </option>
                                    <option value="CA">เพศเมีย</option>
                                    </select>
                                </div>                                      
                            </div>  
                            
                            <div class="relative max-w-sm mt-2">
                            <label for="email" class="block ml-2 text-sm font-medium text-gray-900 ">วันเกิด :</label>
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="mt-4 w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input datepicker datepicker-buttons type="date" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block ps-10 p-2 shadow-lg mb-3 " placeholder="Select date">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 p-4">
                        <div class="border border-blue-700">
                            <p class="text-lg">รูปโปรไฟล์แมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มโปรไฟล์แมวของแมวคุณ</p>
                            <P class="text-gray-500 text-sm font-light"> รูปภาพนี้จะถูกนำไปใช้เป็นโปรไฟล์แมวของคุณ</P>
                            <label class="mt-7 w-40 flex flex-col items-center bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-black">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal text-green-700   ">คลิกเพื่อเพิ่มรูปภาพ</span>
                                    <input type='file' class="hidden" />
                                </label>
                        </div>

                        <div class="border col-span-2 w-full">
                            <div class="flex bg-grey-lighter">
                                <div class="border border-rose-400 w-full">
                                <div class="col-span-2 relative border-dashed border-2 border-grey-500 w-full bg-white rounded-xl p-3">
                               <p class="text-gray-500 text-center">ไม่พบรูปภาพ</p>
                            
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="grid grid-cols-3 p-4">
                        <div class="border border-blue-700">
                            <p class="text-lg">เอกสารแมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มเอกสารที่เกี่ยวข้องกับแมวของคุณรวมถึงรายละเอียดการฉีดวัคซีน</p>
                            <label class="mt-7 w-40 flex flex-col items-center bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-black">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal text-green-700   ">คลิกเพื่อเพิ่มรูปภาพ</span>
                                    <input type='file' class="hidden" />
                                </label>
                        </div>

                        <div class="border col-span-2 w-full">
                            <div class="flex bg-grey-lighter">
                                <div class="border border-rose-400 w-full">
                                <div class="col-span-2 relative border-dashed border-2 border-grey-500 w-full bg-white rounded-xl p-3">
                               <p class="text-gray-500 text-center">ไม่พบรูปภาพ</p>
                            
                        </div>

                    </div>
                    </div>
                <!-- body -->
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#btn-profile-cat').on('click', function() {
                            $('#modal-Profile-cat').removeClass('hidden');
                        });
                        $('#details-close').on('click', function() {
                            $('#modal-Profile-cat').addClass('hidden');
                        });           
                    });
                </script>
@endsection