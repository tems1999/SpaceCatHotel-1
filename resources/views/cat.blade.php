<title>Home | Puenmeaw</title>
@extends('components/LayoutUser')

@section('Content')


        <div id= "modal-Profile-cat" class="border border-gray-300 relative mt-4 flex items-center py-3">    
                <button class="absolute border border-gray-400 flex w-fit mt-2 mb-2 rounded-lg px-2 py-1 ml-7 ">
                        <img src="{{ URL('/picture/'.'arrow-right.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>      
                        <span class="ml-1.5">กลับ</span>
                </button>  
                <div class= " flex mx-auto text-xl">
                    <span>เพิ่มแมวของคุณ</span>
                    
                </div>
                <button id="btn-profile-cat" type="button"  class="text-lg w-[6em] mr-5 flex flex-col bg-gray-300 items-center px-2 py-2 text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">เพิ่มแมว
                    </button>
            </div>             
        </div> 
        <div class=" flex grid grid-cols-5  gap-2 mt-[5em] px max-lg:grid max-lg:grid-cols-2 max-md:grid-col-1 px-[6em]">
        @if(sizeof($cats))
             @foreach($cats as $cat)
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-end px-4 pt-4">
                         <button class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                        </button>
                </div>
                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ URL('/uploads/' . $cat->cat_pic) }}" alt="Bonnie image"/>
                    
                    <h5 class="mt-[1em] mb-1 text-xl font-bold text-gray-900 dark:text-white">ชื่อ : {{ $cat->cat_name }}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">พันธุ์ : {{ $cat->cat_breed }} </span>   
                    <span class="text-sm text-gray-500 dark:text-gray-400">น้ำหนัก : {{ $cat->cat_weight }} กิโลกรัม </span>   
                    <div class="flex mt-4 md:mt-6">
                        <button data-cat_id="{{ $cat->cat_id }}" class="btn-edit-cat inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">แก้ไข</button>
                        <button data-cat_id="{{ $cat->cat_id }}" data-cat_name="{{ $cat->cat_name }}" class="btn-cat-delete inline-flex items-center ml-5 px-4 py-2 text-sm font-medium text-center text-white bg-red-800 rounded-lg hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">ลบ</button>
                       
                    </div>
                </div>
            </div>
            @endforeach
        @endif
            <!-- start_modal_addcat -->
            <div id="modal-add-cat" class="modal hidden fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">
                <div class="modal-content bg-white m-auto p-[10px] rounded-md drop-shadow-xl w-[65%] max-md:w-[100%] gap-2">
                    <span id="details-close" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>   
                    <!-- รายละเอียดแมว -->
                    <div class="grid grid-cols-3 p-4">
                        <div class="w-fit ">
                            <p class="text-lg">รายละเอียดแมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มรายระเอียดของแมวคุณ</p>
                        </div>

                        <!-- input_history_cat -->
                        <div class="col-span-2 relative border 300 w-full bg-white shadow-lg rounded-xl p-3">
                            <div class="grid grid-cols-2 gap-3"> 
                                <div>
                                    <label for="email" class="text-sm font-medium text-gray-900 ">ชื่อแมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input id="cat_name" class="ml-2 font-light bg-gray-100"  type="name" name="name" placeholder="กรอกชื่อแมว">   
                                    </div>       
                                </div> 
                                <div>
                                    <label for="email" class="ml-3 ml-2 text-sm font-medium text-gray-900 ">พันธ์แมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input id="cat_breed" class="ml-2 font-light bg-gray-100"  type="name" name="name" placeholder="กรอกพันธ์แมว">   
                                    </div>       
                                </div>     
                                    
                            </div>
                            
                            <div class="w-fit h-fit my-auto flex  mt-2"> 
                                <div class="">
                                    <label for="email" class="ml-3 block ml-2 text-sm font-medium text-gray-900 ">น้ำหนักแมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input id="cat_weight" class="ml-2 font-light bg-gray-100  "  type="name" name="name" placeholder="น้ำหนักแมวแมว">   
                                    </div>       
                                </div>     
                                <div class="ml-[5.5em]">
                                    <label for="countries" class="block ml-3 text-sm font-medium text-gray-900 ">เพศ</label>
                                    <select id="cat_gender" class="bg-gray border bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 shadow-md">
                                        <option selected>กรุณาเลือก</option>
                                        <option value="เพศผู้">เพศผู้ </option>
                                        <option value="เพศเมีย">เพศเมีย</option>
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
                                <input id="cat_date" datepicker datepicker-buttons type="date" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block ps-10 p-2 shadow-lg mb-3 " placeholder="Select date">
                            </div>
                        </div>
                    </div>
                        <!-- เพิ่มรูปภาพแมว -->
                    <div class="grid grid-cols-3 p-4">
                        <div>
                            <p class="text-lg">รูปโปรไฟล์แมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มโปรไฟล์แมวของแมวคุณ</p>
                            <P class="text-gray-500 text-sm font-light"> รูปภาพนี้จะถูกนำไปใช้เป็นโปรไฟล์แมวของคุณ</P>
                            <label class="mt-7 w-40 flex flex-col items-center bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-black">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal text-green-700">คลิกเพื่อเพิ่มรูปภาพ</span>
                                    <input onchange={fileChosen_Cat(event)} type='file' class="hidden" />
                                </label>
                        </div>
                    <div class="col-span-2 relative border 300 w-1/2 bg-white shadow-lg rounded-xl p-3">
                        <img id="pic_cat" class="outline-none w-[100px] h-auto rounded-xl">   
                    </div>
                    </div>
                    <div class="grid grid-cols-3 p-4">
                        <div>
                            <p class="text-lg">เอกสารแมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มเอกสารที่เกี่ยวข้องกับแมวของคุณรวมถึงรายละเอียดการฉีดวัคซีน</p>
                            <label class="mt-7 w-40 flex flex-col items-center bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-black">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal text-green-700   ">คลิกเพื่อเพิ่มรูปภาพ</span>
                                    <input onchange={fileChosen_Doc(event)} type='file' class="hidden" />
                                </label>
                        </div>
                        <div class="col-span-2 relative border 300 w-1/2 bg-white shadow-lg rounded-xl p-3">
                            <img id="pic_doc" class="items-center w-[100px] h-auto">
                        </div>

                       
                </div>
                    <button onClick="SubmitCat()" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 rounded-lg text-sm px-5 py-2.5 text-center ml-auto mr-5 flex">Red</button>       
            </div>
        </div>
            <!-- start_modal_editcat -->
            <div id="modal-edit-cat" class="modal hidden fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">
                <div class="modal-content bg-white m-auto p-[10px] rounded-md drop-shadow-xl w-[65%] max-md:w-[100%] gap-2">
                    <span id="details-close-edit" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>   
                    <!-- รายละเอียดแมว -->
                    <div class="grid grid-cols-3 p-4">
                        <div class="w-fit ">
                            <p class="text-lg">รายละเอียดแมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มรายระเอียดของแมวคุณ</p>
                            <input id="cat_id" class="hidden" value="{{ $cat->cat_id}}"> 

                        </div>

                        <!-- input_history_cat -->
                        <div class="col-span-2 relative border 300 w-full bg-white shadow-lg rounded-xl p-3">
                            <div class="grid grid-cols-2 gap-3"> 
                                <div>
                                    <label for="email" class="text-sm font-medium text-gray-900 ">ชื่อแมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input id="cat_name1" class="ml-2 font-light bg-gray-100"  type="name" name="name" placeholder="กรอกชื่อแมว">   
                                    </div>       
                                </div> 
                                <div>
                                    <label for="email" class="ml-3 ml-2 text-sm font-medium text-gray-900 ">พันธ์แมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input id="cat_breed1" class="ml-2 font-light bg-gray-100"  type="name" name="name" placeholder="กรอกพันธ์แมว">   
                                    </div>       
                                </div>     
                                    
                            </div>
                            
                            <div class="w-fit h-fit my-auto flex  mt-2"> 
                                <div class="">
                                    <label for="email" class="ml-3 block ml-2 text-sm font-medium text-gray-900 ">น้ำหนักแมว :</label>
                                    <div class="p-2 rounded-xl border flex w-full bg-gray-100 shadow-md">
                                        <input id="cat_weight1" class="ml-2 font-light bg-gray-100  "  type="name" name="name" placeholder="น้ำหนักแมวแมว">   
                                    </div>       
                                </div>     
                                <div class="ml-[5.5em]">
                                    <label for="countries" class="block ml-3 text-sm font-medium text-gray-900 ">เพศ</label>
                                    <select id="cat_gender1" class="bg-gray border bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 shadow-md">
                                        <option selected>กรุณาเลือก</option>
                                        <option value="เพศผู้">เพศผู้ </option>
                                        <option value="เพศเมีย">เพศเมีย</option>
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
                                <input id="cat_date1" datepicker datepicker-buttons type="date" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block ps-10 p-2 shadow-lg mb-3 " placeholder="Select date">
                            </div>
                        </div>
                    </div>
                        <!-- เพิ่มรูปภาพแมว -->
                    <div class="grid grid-cols-3 p-4">
                        <div>
                            <p class="text-lg">รูปโปรไฟล์แมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มโปรไฟล์แมวของแมวคุณ</p>
                            <P class="text-gray-500 text-sm font-light"> รูปภาพนี้จะถูกนำไปใช้เป็นโปรไฟล์แมวของคุณ</P>
                            <label class="mt-7 w-40 flex flex-col items-center bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-black">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal text-green-700">คลิกเพื่อเพิ่มรูปภาพ</span>
                                    <input onchange={fileChosen_Cat(event)} type='file' class="hidden" />
                                </label>
                        </div>
                    <div class="col-span-2 relative border 300 w-1/2 bg-white shadow-lg rounded-xl p-3">
                        <img id="pic_cat1" class="outline-none w-[100px] h-auto rounded-xl">   
                    </div>
                    </div>
                    <div class="grid grid-cols-3 p-4">
                        <div>
                            <p class="text-lg">เอกสารแมว</p>
                            <p class="text-gray-500 text-sm font-light">กรุณาเพิ่มเอกสารที่เกี่ยวข้องกับแมวของคุณรวมถึงรายละเอียดการฉีดวัคซีน</p>
                            <label class="mt-7 w-40 flex flex-col items-center bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-black">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal text-green-700   ">คลิกเพื่อเพิ่มรูปภาพ</span>
                                    <input onchange={fileChosen_Doc(event)} type='file' class="hidden" />
                                </label>
                        </div>
                        <div class="col-span-2 relative border 300 w-1/2 bg-white shadow-lg rounded-xl p-3">
                            <img id="pic_doc1" class="items-center w-[100px] h-auto">
                        </div>

                       
                </div>
                    <button onClick="SubmitCatEdit()" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 rounded-lg text-sm px-5 py-2.5 text-center ml-auto mr-5 flex">Red</button>       
            </div>

        <!-- END MODAL CONTENT -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('.btn-edit-cat').on('click', function() {
                            $('.modal-content #cat_id').val($(this).data('cat_id'));
                            $('.modal-content #cat_name').val($(this).data('cat_name'));

                            $('#modal-edit-cat').removeClass('hidden');

                        });
                        $('#details-close-edit').on('click', function() {
                            $('#modal-edit-cat').addClass('hidden');
                        });
                        $('#btn-profile-cat').on('click', function() {
                            $('#modal-add-cat').removeClass('hidden');
                        });
                        $('#details-close').on('click', function() {
                            $('#modal-add-cat').addClass('hidden');
                        });
                                  
                         // MODAL DELETE
                         $('.btn-cat-delete').on('click', function () {
                            Swal.fire({
                                title: `คุณแน่ใจหรือไม่? <br><b class="text-xl font-medium">(ชื่อหมวดหมู่: ${$(this).data('cat_name')})</b>`,
                                text: "การดำเนินการนี้ไม่สามารถเรียกคืนได้",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'ใช่, ลบ',
                                cancelButtonText: 'ยกเลิก',
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    SubmitCatDelete($(this).data('cat_id'));
                                }
                            })
                        });
                    });
                    
            var _image64_cat = '';
            function fileChosen_Cat(event) {
                this.fileToDataUrl_Cat(event, src => this.fileHanddle_Cat(src));
            }
            function fileToDataUrl_Cat(event, callback) {
                if (! event.target.files.length){ 
                    callback('');
                    return
                }

                let file = event.target.files[0],
                    reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = function (e) {
                    var img = new Image;
                    img.src = e.target.result;
                    img.onload = function(){
                        var canvas = document.createElement('canvas');
                        var ctx = canvas.getContext('2d');
                        var cw = canvas.width;
                        var ch = canvas.height;
                        var maxW = '1920';
                        var maxH = '1080';

                        var iw = img.width;
                        var ih = img.height;
                        if(iw <= maxW || ih <= maxH) {
                            var _avatar_base64 = img.src;
                        }else {
                            var scale = Math.min((maxW/iw),(maxH/ih));
                            var iwScaled = iw * scale;
                            var ihScaled = ih * scale;
                            canvas.width = iwScaled;
                            canvas.height = ihScaled;
                            ctx.drawImage(img,0,0,iwScaled,ihScaled);
                            var converted_img = canvas.toDataURL();
                            var _avatar_base64 = converted_img;        
                        }                        
                        callback(_avatar_base64);                        
                    }					
                };
            }
            function fileHanddle_Cat(src){
                $("#pic_cat").attr("src", src);
                $("#pic_cat1").attr("src", src);

                _image64_cat = src;
            }

            var _image64_doc = '';
            function fileChosen_Doc(event) {
                this.fileToDataUrl_Doc(event, src => this.fileHanddle_Doc(src));
            }
            function fileToDataUrl_Doc(event, callback) {
                if (! event.target.files.length){ 
                    callback('');
                    return
                }

                let file = event.target.files[0],
                    reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = function (e) {
                    var img = new Image;
                    img.src = e.target.result;
                    img.onload = function(){
                        var canvas = document.createElement('canvas');
                        var ctx = canvas.getContext('2d');
                        var cw = canvas.width;
                        var ch = canvas.height;
                        var maxW = '1920';
                        var maxH = '1080';

                        var iw = img.width;
                        var ih = img.height;
                        if(iw <= maxW || ih <= maxH) {
                            var _avatar_base64 = img.src;
                        }else {
                            var scale = Math.min((maxW/iw),(maxH/ih));
                            var iwScaled = iw * scale;
                            var ihScaled = ih * scale;
                            canvas.width = iwScaled;
                            canvas.height = ihScaled;
                            ctx.drawImage(img,0,0,iwScaled,ihScaled);
                            var converted_img = canvas.toDataURL();
                            var _avatar_base64 = converted_img;        
                        }                        
                        callback(_avatar_base64);                        
                    }					
                };
            }
            function fileHanddle_Doc(src){
                $("#pic_doc").attr("src", src);
                $("#pic_doc1").attr("src", src);

                _image64_doc = src;
            }

            function SubmitCatEdit() {
                console.log('value = ' + document.getElementById("cat_name1").value);
                fetch("{{ Route('SubmitCatEdit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            cat_id: document.getElementById("cat_id").value,
                            cat_name: document.getElementById("cat_name1").value,
                            cat_breed: document.getElementById("cat_breed1").value,
                            cat_weight: document.getElementById("cat_weight1").value,
                            cat_gender: document.getElementById("cat_gender1").value,
                            cat_date: document.getElementById("cat_date1").value,
                            image64_cat: _image64_cat,
                            image64_doc: _image64_doc
                           


                            
                        }
                    )
                })
                .then(async response => {
                    const isJson = response.headers.get('content-type')?.includes('application/json');
                    const data = isJson ? await response.json() : null; 

                    console.log(data);
                    if(!response.ok){
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'เพิ่มบัญชีไม่สำเร็จ!',
                            html: `${data.status}`,
                            confirmButtonText: 'ตกลง',
                        })

                        const error = (data && data.errorMessage) || "{{trans('general.warning.system_failed')}}" + " (CODE:"+response.status+")";
                        return Promise.reject(error);
                    }

                    Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'เพิ่มบัญชีสำเร็จ',
                            confirmButtonText: 'ตกลง',
                            timer: 1000,
                            timerProgressBar: true
                    }).then((result) => {
                        location.reload();
                    })
                })
                .catch((er) => {
                    console.log('Error' + er);
                });                    
            }
                  

            function SubmitCat() {
                fetch("{{ Route('SubmitCat') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            cat_name: document.getElementById("cat_name").value,
                            cat_breed: document.getElementById("cat_breed").value,
                            cat_weight: document.getElementById("cat_weight").value,
                            cat_gender: document.getElementById("cat_gender").value,
                            cat_date: document.getElementById("cat_date").value,
                            image64_cat: _image64_cat,   
                            image64_doc: _image64_doc      
                        }
                    )
                })
                .then(async response => {
                    const isJson = response.headers.get('content-type')?.includes('application/json');
                    const data = isJson ? await response.json() : null; 

                    console.log(data);
                    if(!response.ok){
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'เพิ่มบัญชีไม่สำเร็จ!',
                            html: `${data.status}`,
                            confirmButtonText: 'ตกลง',
                        })

                        const error = (data && data.errorMessage) || "{{trans('general.warning.system_failed')}}" + " (CODE:"+response.status+")";
                        return Promise.reject(error);
                    }

                    Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'เพิ่มบัญชีสำเร็จ',
                            confirmButtonText: 'ตกลง',
                            timer: 1000,
                            timerProgressBar: true
                    }).then((result) => {
                        location.reload();
                    })
                })
                .catch((er) => {
                    console.log('Error' + er);
                });                    
            }
            function SubmitCatDelete(cat_id) {
                fetch("{{ Route('SubmitCatDelete') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            cat_id: cat_id,
                        }
                    )
                })
                .then(async response => {
                    const isJson = response.headers.get('content-type')?.includes('application/json');
                    const data = isJson ? await response.json() : null; 

                    console.log(data);
                    if(!response.ok){
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'ลบห้องไม่สำเร็จ!',
                            html: `${data.status}`,
                            confirmButtonText: 'ตกลง',
                        })

                        const error = (data && data.errorMessage) || "{{trans('general.warning.system_failed')}}" + " (CODE:"+response.status+")";
                        return Promise.reject(error);
                    }

                    Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'ลบห้องสำเร็จ',
                            confirmButtonText: 'ตกลง',
                            timer: 1000,
                            timerProgressBar: true
                    }).then((result) => {
                        location.reload();
                    })
                })
                .catch((er) => {
                    console.log('Error' + er);
                });                    
            }
                </script>
@endsection