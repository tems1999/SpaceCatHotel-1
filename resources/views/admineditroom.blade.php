<title>Home | Puenmeaw</title>

@extends('components/LayoutUser')

@section('Content')
<div id= "modal-Profile-cat" class="border border-gray-300 relative mt-4 flex items-center py-3">    
                <button class="absolute border border-gray-400 flex w-fit mt-2 mb-2 rounded-lg px-2 py-1 ml-7 ">
                        <img src="{{ URL('/picture/'.'arrow-right.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>      
                        <span class="ml-1.5">กลับ</span>
                </button>  
                <div class= " flex mx-auto text-xl">
                    <span>โปรไฟล์</span>
                </div>
                <button id="btn-details-room1" type="button"  class="text-lg w-[6em] mr-5 flex flex-col bg-gray-300 items-center px-2 py-2 text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">เพิ่มห้อง
                    </button>
            </div>
                   
        </div> 



       <!-- ห้องแมว -->
       <div class=" flex grid grid-cols-5  gap-2 mt-[5em] px max-lg:grid max-lg:grid-cols-2 max-md:grid-col-1 px-[6em]">
                 <!-- ห้องJuno1 -->
                 @if(sizeof($rooms))
                    @foreach($rooms as $room)
                        <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                            <div class="relative">
                                <img src="{{ URL('/uploads/' . $room->room_pic) }}"class="w-full h-[20em] my-auto ">
                                <div class="absolute top-1 left-1 px-2 ">
                                    <i class="fi fi-rs-heart  text-white text-2xl "></i>
                                </div>
                            </div>
                            <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                                <div class="grid grid-cols-2 flex">
                                    <span class= "text-center uppercase">{{ $room->room_name }}</span>
                                    <p  class="text-green-700 ml-auto mr-0">
                                    <i class="fi fi-ss-bullet text-sm text-center"></i> ว่าง
                                    </p>
                                </div>
                                <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                                    <p  class=""> จำนวนแมว : {{ $room->room_cat }}</p>
                                    <p  class="underline ml-auto mr-0">฿{{ $room->room_price }} /คืน</p>
                                </div>
                                <div class = "mt-[1em] ">
                                    <button type="button" class="btn-details-room w-full text-amber-600 border border-[C09369] rounded-full py-1 hover:bg-[C09369] duration-300"
                                    data-room_id="{{ $room->room_id }}"  data-room_detail="{{ $room->room_detail }}" data-room_price="{{ $room->room_price }}" data-room_size="{{ $room->room_size }}" data-room_hight="{{ $room->room_hight }}" 
                                    data-room_cat="{{ $room->room_cat }}" data-room_pic="{{ URL('/uploads/' . $room->room_pic) }}">รายละเอียดห้อง</button>
                                </div>
                                <div class = "mt-[1em] ">
                                    <button type="button" class="btn-room-delete w-full text-amber-600 border border-[C09369] rounded-full py-1 hover:bg-[C09369] duration-300"
                                    data-room_id="{{ $room->room_id }}" data-room_name="{{ $room->room_name }}">ลบ</button>
                                </div>
                            </div>   
                        </div> 
                    @endforeach
                    
                 @endif

                 
        </div>
    
                <div id="modal-details-room1" class="modal hidden fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">
                    <!-- START MODEL CONTENT -->
                    <div class="modal-content bg-white m-auto p-[10px] rounded-md drop-shadow-xl w-[50%] h-[50%] max-md:w-[100%]">
                        <div class="flex items-center">
                            <p class="text-[20px] font-bold w-full ml-4 text-center">แก้ไขรายละเอียดห้อง</p>
                            <span id="details-close-room1" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>
                        </div>
                            <!-- start grid2 -->
                                <div class = "border rounded-lg shadow-xl h-[90%]" >
                                        <div class="ml-[5em] flex col-span-4 gap-10 mt-[2em]">
                                            <div class="flex justify-center w-30">
                                                <section class="container w-full mx-auto items-center">
                                                    <div class="flex">
                                                        <div class="px-4 py-6">
                                                        <div id="image-preview" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
                                                            <input onchange={fileChosen_Single(event)} id="room_pic" type="file" class="hidden" accept="image/*" />
                                                            <label for="room_pic" class="cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                                            </svg>
                                                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
                                                            <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
                                                            <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG, or GIF</b> format.</p>
                                                            <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                                                            </label>
                                                        </div>
                                                        <div class="flex items-center justify-center">
                                                        
                                                        </div>
                                                        </div>
                                                    </div>
                                            </section>
                                        </div> 
                                        
                                        <div class="whitespace-nowrap flex-col h-fit ml-[3em] mr-[3em]">
                                        <input id="room_name" class="block py-2.5 w-full text-sm bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"  type="name" name="name" placeholder="กรุณากรอกชื่อห้อง" >                            
                                        <label for="underline_select" class="sr-only">Underline select</label>
                                        <select id="room_cat" class="block py-2.5 px-0 w-1/2 text-sm text-gray-400 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                            <option selected >กรุณาเลือกจำนวนแมว</option>
                                            <option value="1-2">1-2 ตัว</option>
                                            <option value="3-4">3-4 ตัว</option>
                                            <option value="5-6">5-6 ตัว</option>
                                        </select>

                                        
                                            <div class="flex gap-2">
                                            <input id="room_size" class="block py-2.5 w-full text-sm bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"  type="name" name="name" placeholder="ขนาดของห้อง(cm.)" > 
                                            <input id="room_hight" class="block py-2.5 w-full text-sm bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"  type="name" name="name" placeholder="ความสูงของห้อง(cm.)" > 
                                            </div>
                                            <input id="room_price" class="block py-2.5 w-full text-sm bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"  type="name" name="name" placeholder="กรุณากรอกราคาห้องพัก / 1 วัน (บาท)" >
                                            <textarea id="room_detail" rows="4" class="resize-none mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="กรุณากรอกรายละเอียดห้อง"></textarea>   
                                            <button onClick="SubmitRoomEdit()" type="button" class="mt-[1em] w-[5em] h-[2em] border border-gray-500 rounded-lg bg-green-800 text-white ">เพิ่มห้อง</button>               
                                        </div>
                                    </div>                                                      
                                </div>

                                 <!-- end -->
                        </div>    
                    </div>               
                </div>
                <!-- start modal1 -->
                <div id="modal-details-room" class="modal hidden fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">
                    <!-- START MODEL CONTENT -->
                    <div class="modal-content bg-white m-auto p-[10px] rounded-md drop-shadow-xl w-[90%] max-md:w-[100%]">
                        <div class="flex items-center">
                            <p class="text-[20px] font-bold w-full ml-4 text-center">แก้ไขรายละเอียดห้อง</p>
                            <span id="details-close" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>
                        </div>
                        <hr class="mt-4">
                        <!-- body -->
                        <div class="mt-4 grid grid-cols-2 px-[5em] gap-4 ">
                            <!-- start grid1-->
                            <div class = "grid grid-cols-2 border rounded-lg shadow-xl ">
                                <div class="col-span-2 grid grid-cols-2 border-b-2 border-gray-200">
                                    <div class="grid grid-cols-3 mx-1 my-2 border-r-2 border-gray-200">
                                       <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'checkin.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "col-span-2 flex-col whitespace-nowrap">
                                           <span>เช็คอิน: 6 ธ.ค.</span>
                                           <p class="text-gray-300">จาก 10:00</p>   
                                       </div>           
                                   </div>
    
                                    <!-- checkout -->
                                    <div class="grid grid-cols-3 mx-1 my-2 ">
                                        <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'checkout.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "col-span-2 flex-col whitespace-nowrap">
                                           <span>เช็คเอาท์: 6 ธ.ค.</span>
                                           <p class="text-gray-300">จาก 10:00</p>   
                                       </div> 
                                    </div>
                                </div>

                                <div class="col-span-2 grid grid-cols-2">
                                    <!-- checkin -->
                                   <div class="grid grid-cols-3 mx-1 my-2 border-r-2 border-gray-200">
                                       <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'calendar.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "flex-col">
                                           <span class="whitespace-nowrap">จำนวนวันทั้งหมด :</span>
                                           <p>1</p>   
                                       </div>           
                                   </div>

                                   <div class="grid grid-cols-3 mx-1 my-2">
                                       <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'catnumber.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "flex-col">
                                           <span class="whitespace-nowrap">จำนวนแมว :</span>
                                           <p>1</p>   
                                       </div>           
                                   </div>
                                </div>
                                
                                    <div class="grid grid-cols-6 col-span-2  my-2 border-t-2">
                                       <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'map.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "flex-col w-full col-span-2 h-[10em] max-lg:overflow-hidden">
                                       
                                           <span id="room_detail" class="  left-0">
                                                -
                                            </span> 
         
                                       </div>           
                                    </div>
                            </div>
                            <!-- end -->

                            <!-- start grid2 -->
                                <div class = "  border rounded-lg shadow-xl " >
                                
                                    <div class="ml-[5em] flex col-span-4 gap-10 mt-2">
                                        <img id="room_pic" src=" " alt="" class="w-[10em] h-[8em]" alt="logo"/>
                                        <div class="whitespace-nowrap flex-col  h-fit ">
                                            <p class="whitespace-nowrap" >JUNO ROOM</p>
                                            <div class=" border border-gray-400 mt-2 rounded-xl flex font-light items-center justify-center w-fit">
                                                <div class="px-4 flex">
                                                    <img src="{{ URL('/picture/'.'cat1.png') }}" alt="" class="w-[25px] h-[25px] mb-[3px] mt-[3px] " alt="logo"/>
                                                    <p class="mt-1" id="room_cat"></p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div class="border border-gray-400  mt-2 rounded-xl flex font-light">
                                                    <div class="items-center px-8 flex gap-2 py-[4px]">
                                                        <img src="{{ URL('/picture/'.'frame.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>
                                                        <p class=" " id="room_size"></p>cm.
                                                    </div>              
                                                </div>
                                                <div class="border border-gray-400  mt-2 rounded-xl flex font-light mr-2 ">
                                                    <div class="items-center px-8 flex gap-2 py-[4px]">
                                                        <img src="{{ URL('/picture/'.'arrow.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>
                                                        <p class=" " id="room_hight"></p>cm.
                                                    </div>              
                                                </div>
                                            </div>
                                        </div>                                      
                                    </div> 
                                    <div class="grid mt-3 h-[10em] bg-gray-200 rounded-lg">
                                        <div class="col-span-2 ml-10 mt-4">
                                            <p class="text-lg">รายละเอียดราคา</p>
                                            <div class="flex font-light  text-sm ">
                                                <p>ราคามาตรฐาน <input id="room_price" class="bg-gray-200 w-10 mb-[1em] focus:outline-none" value=" " readonly> x 1วัน</p>
                                                <p class="ml-auto mr-[5em]" id="room_price"><input id="room_price" class="bg-gray-200 w-10 mb-[1em] focus:outline-none" value=" " readonly> บาท</p>
                                            </div>                                          
                                        </div>
                                        <p class=" border-t-2 border-gray-300 w-full col-span-3 "></p>
                                        <div class="flex  ml-10 border mt-[2em]">
                                                <p>ราคามาตรฐาน <input id="room_price" class="bg-gray-200 w-10 focus:outline-none" value=" " readonly> x 1วัน</p>
                                            
                                                <input id="room_price" class="bg-gray-200 w-10 focus:outline-none ml-[23em] mb-5" value="" readonly> <p class="">บาท</p>
                                        </div>
                                     </div>                                
                                </div>
                                 <!-- end -->
                        </div>    
                    </div>               
                </div>
                <!-- END MODAL CONTENT -->

                <!-- แสกนชำระเงิน1 -->
                <div id="modal-pay-room" class="modal hidden fixed z-[120] flex my-auto top-0 w-[100%] h-[100%] overflow-auto  ">
                    <!-- START MODEL CONTENT -->
                    <div  class="modal-content bg-gray-300 m-auto p-[10px] rounded-md drop-shadow-xl w-[50%] max-md:w-[100%] ">
                        <div class="flex items-center">
                            <p class="text-[20px] font-bold w-full ml-4 text-center">แสกนด้วยแอปธนาคารหรือแอปชำระเงินของคุณ</p>
                            <span id="details-close-qr" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>
                        </div>
                        <p class="border border-white-300 w-full mt-2"></p>
                        <div class="mt-3 items-center flex-col flex justify-center ">
                            <img src="{{ URL('/picture/'.'qr.png') }}" alt="" class="w-[10em] h-[10em] mx-auto" alt="logo"/>
                            <div >
                                <p>แอปธนาคารหรือแอปชำระเงินมากมายรองรับ PromptPay แล้ว</p>
                                <p> เช่น KBank, SCB, Bangkok Bank, Krunthai Bank และ Krungsri</p>
                            </div>
                            <p class="border border-white-300 w-full mt-2 "></p>
                            
                                <div class=" text-center  w-full">
                                    <label class="block mb-2 text-md font-medium text-gray-900 dark:text-white mt-2" for="file_input">Upload file</label>
                                    <div class="flex ml-[13em]">
                                        <div class="ml-auto mr-0">
                                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium
                                            rounded-lg text-sm px-5 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none
                                            dark:focus:ring-blue-800">เสร็จสิ้น
                                        </button>
                                    </div>              
                                </div>
                                <p class="mt-1 text-sm text-white-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>  
                                
                                </div>       
                        </div>
                    </div>
                </div>

                 <!-- start modal2 -->
                 <div id="modal-details-roompluto" class="modal hidden fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">
                    <!-- START MODEL CONTENT -->
                    <div class="modal-content bg-white m-auto p-[10px] rounded-md drop-shadow-xl w-[90%] max-md:w-[100%]">
                        <div class="flex items-center">
                            <p class="text-[20px] font-bold w-full ml-4 text-center">รายละเอียดการจอง</p>
                            <span id="details-close" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>
                        </div>
                        <hr class="mt-4">
                        <!-- body -->
                        <div class="mt-4 grid grid-cols-2 px-[5em] gap-4 ">
                            <!-- start grid1-->
                            <div class = "grid grid-cols-2 border rounded-lg shadow-xl ">
                                <div class="col-span-2 grid grid-cols-2 border-b-2 border-gray-200">
                                    <div class="grid grid-cols-3 mx-1 my-2 border-r-2 border-gray-200">
                                       <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'checkin.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "col-span-2 flex-col whitespace-nowrap">
                                           <span>เช็คอิน: 6 ธ.ค.</span>
                                           <p class="text-gray-300">จาก 10:00</p>   
                                       </div>           
                                   </div>
    
                                    <!-- checkout -->
                                    <div class="grid grid-cols-3 mx-1 my-2 ">
                                        <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'checkout.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "col-span-2 flex-col whitespace-nowrap">
                                           <span>เช็คเอาท์: 6 ธ.ค.</span>
                                           <p class="text-gray-300">จาก 10:00</p>   
                                       </div> 
                                    </div>
                                </div>

                                <div class="col-span-2 grid grid-cols-2">
                                    <!-- checkin -->
                                   <div class="grid grid-cols-3 mx-1 my-2 border-r-2 border-gray-200">
                                       <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'calendar.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "flex-col">
                                           <span class="whitespace-nowrap">จำนวนวันทั้งหมด :</span>
                                           <p>1</p>   
                                       </div>           
                                   </div>

                                   <div class="grid grid-cols-3 mx-1 my-2">
                                       <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'catnumber.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "flex-col">
                                           <span class="whitespace-nowrap">จำนวนแมว :</span>
                                           <p>1</p>   
                                       </div>           
                                   </div>
                                </div>
                                
                                    <div class="grid grid-cols-6 col-span-2  my-2 border-t-2">
                                       <div class="relative bg-white min-w-[40px] min-h-[40px] max-w-[40px] max-h-[40px] p-1 overflow-hidden">
                                           <img src="{{ URL('/picture/'.'map.png') }}" alt="" class="w-full h-full object-cover my-auto" alt="logo"/>
                                       </div>
                                       <div class= "flex-col w-full col-span-2 h-[10em] max-lg:overflow-hidden">
                                           <span class="  left-0">
                                                สถานที่
                                                Space Cat Hotel
                                                หมู่บ้านภูริรังสิต คลอง5 เลขที่ 59/46 ตำบลคลองห้า                                                                                               
                                                อำเภอคลองหลวง ปทุมธานี 12120
                                                
                                            </span> 
         
                                       </div>           
                                    </div>
                            </div>
                            <!-- end -->

                            <!-- start grid2 -->
                                <div class = "  border rounded-lg shadow-xl " >

                                    <div class="ml-[5em] flex col-span-4 gap-10 mt-2">
                                        <img src="{{ URL('/picture/'.'selectroom.png') }}" alt="" class="w-[10em] h-[8em]" alt="logo"/>
                                        <div class="whitespace-nowrap flex-col  h-fit ">
                                            <p class="whitespace-nowrap" >JUNO ROOM</p>
                                            <div class=" border border-gray-400 mt-2 rounded-xl flex font-light items-center justify-center w-fit">
                                                <div class="px-4 flex">
                                                    <img src="{{ URL('/picture/'.'cat1.png') }}" alt="" class="w-[25px] h-[25px] mb-[3px] mt-[3px] " alt="logo"/>
                                                    <p>1 สูงสุด</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <div class="border border-gray-400  mt-2 rounded-xl flex font-light">
                                                    <div class="items-center px-8 flex gap-2 py-[4px]">
                                                        <img src="{{ URL('/picture/'.'frame.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>
                                                        <p class=" ">70x120 cm</p>
                                                    </div>              
                                                </div>
                                                <div class="border border-gray-400  mt-2 rounded-xl flex font-light mr-2 ">
                                                    <div class="items-center px-8 flex gap-2 py-[4px]">
                                                        <img src="{{ URL('/picture/'.'arrow.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>
                                                        <p class=" ">130 cm</p>
                                                    </div>              
                                                </div>
                                            </div>
                                        </div>                                      
                                    </div> 
                                    <div class="grid mt-3 h-[10em] bg-gray-200 rounded-lg">
                                        <div class="col-span-2 ml-10 mt-4">
                                            <p class="text-lg">รายละเอียดราคา</p>
                                            <div class="flex font-light  text-sm ">
                                                <p>ราคามาตรฐาน (300 x 1วัน)</p>
                                                <p class="ml-auto mr-[5em]">300 บาท</p>
                                            </div>                                          
                                        </div>
                                        <p class=" border-t-2 border-gray-300 w-full col-span-3 "></p>
                                        <div class="flex  ml-10 border">
                                                <p>ราคามาตรฐาน (300 x 1วัน)</p>
                                            </div>    
                                                <p class="ml-auto mr-[4em] mt-1.8">300 บาท</p>
                                            <div class="flex">
                                                 <button id="btn-details-pay-room2" class="ml-auto mr-5 mt-2 mb-2 rounded-lg px-4  bg-red-500 hover:bg-red-700 duration-300 text-white">ชำระเงิน</button>
                                            </div>
                                     </div>                                
                                </div> 
                                                               
                            <!-- start grid3 -->
                                    <div class = "border rounded-lg shadow-xl " >
                                        <div class="flex mx-5 mt-3">
                                        <img src="{{ URL('/picture/'.'detail.png') }}" alt="" class="ml-2" alt="logo"/>
                                            <p class="ml-2">รายละเอียกการติดต่อ</p>
                                        </div> 
                                        <P class="border border-gray-200 mt-3 "></P>
                                        
                                        <!-- ชื่อ -->
                                        <div class="border border-gray300 mt-3 flex mx-5 rounded-xl">
                                            <img src="{{ URL('/picture/'.'user.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-2" alt="logo"/>
                                            <div class="ml-4">
                                                <P >ชื่อ-นามสกุล:</P>
                                                <P class="text-gray-400">นายวรเทพ ปานเจริญ</P>                   
                                            </div>
                                        </div>
                                        <!-- เบอร์โทร -->
                                        <div class="border border-gray300 mt-3 flex mx-5 rounded-xl">
                                            <img src="{{ URL('/picture/'.'tell.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-2" alt="logo"/>
                                            <div class="ml-4">
                                                <P >เบอร์โทร :</P>
                                                <P class="text-gray-400">0806046944</P>                   
                                            </div>
                                        </div>
                                        <!-- email -->
                                        <div class="border border-gray300 mt-3 flex mx-5 rounded-xl">
                                            <img src="{{ URL('/picture/'.'email.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-2" alt="logo"/>
                                            <div class="ml-4">
                                                <P >Email:</P>
                                                <P class="text-gray-400">admin@gmail.com</P>                   
                                            </div>                                         
                                        </div>
                                        <div class="flex">
                                            <button class="ml-auto mr-5 mt-2 mb-2 rounded-lg px-4 py-2 bg-blue-600 hover:bg-[2344B8] duration-300 text-white">แก้ไข</button>
                                        </div>
                                    </div>
                    </div>               
                </div>
                <!-- END MODAL CONTENT2 -->

                <!-- แสกนชำระเงิน -->
                <div id="modal-pay-room2" class="modal hidden fixed z-[120] flex my-auto top-0 w-[100%] h-[100%] overflow-auto  ">
                    <!-- START MODEL CONTENT -->
                    <div  class="modal-content bg-gray-300 m-auto p-[10px] rounded-md drop-shadow-xl w-[50%] max-md:w-[100%] ">
                        <div class="flex items-center">
                            <p class="text-[20px] font-bold w-full ml-4 text-center">แสกนด้วยแอปธนาคารหรือแอปชำระเงินของคุณ</p>
                            <span id="details-close-qr" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>
                        </div>
                        <p class="border border-white-300 w-full mt-2"></p>
                        <div class="mt-3 items-center flex-col flex justify-center ">
                            <img src="{{ URL('/picture/'.'qr.png') }}" alt="" class="w-[10em] h-[10em] mx-auto" alt="logo"/>
                            <div >
                                <p>แอปธนาคารหรือแอปชำระเงินมากมายรองรับ PromptPay แล้ว</p>
                                <p> เช่น KBank, SCB, Bangkok Bank, Krunthai Bank และ Krungsri</p>
                            </div>
                            <p class="border border-white-300 w-full mt-2 "></p>
                            
                                <div class=" text-center  w-full">
                                    <label class="block mb-2 text-md font-medium text-gray-900 dark:text-white mt-2" for="file_input">Upload file</label>
                                    <div class="flex ml-[13em]">
                                        <input class="block w-fit h-fit text-sm text-gray-900 border border-gray-300 rounded-lg  bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">         
                                        <div class="ml-auto mr-0">
                                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium
                                             rounded-lg text-sm px-5 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none
                                              dark:focus:ring-blue-800">เสร็จสิ้น
                                            </button>   
                                        </div>              
                                    </div>
                                    <p class="mt-1 text-sm text-white-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>  
                                </div>       
                        </div>
                    </div>
                </div>

           <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    
                    $(document).ready(function() {
                        $('.btn-details-room').on('click', function() {
                            console.log($(this).data('room_detail'));
                            $('.modal-content #room_detail').text($(this).data('room_detail'));
                            $('.modal-content #room_price').val($(this).data('room_price'));
                            $('.modal-content #room_size').text($(this).data('room_size'));
                            $('.modal-content #room_hight').text($(this).data('room_hight'));
                            $('.modal-content #room_cat').text($(this).data('room_cat'));
                            $('.modal-content #room_pic').attr('src', $(this).data('room_pic'));

                            $('#modal-details-room').removeClass('hidden');

                        });
                        $('#details-close').on('click', function() {
                            $('#modal-details-room').addClass('hidden');
                        });
                        $('#btn-details-room1').on('click', function() {
                            $('#modal-details-room1').removeClass('hidden');
                        });
                        $('#details-close-room1').on('click', function() {
                            $('#modal-details-room1').addClass('hidden');
                        });
                        $('#btn-details-pay-room').on('click', function() {
                            $('#modal-pay-room').removeClass('hidden');
                        });
                        $('#details-close-qr').on('click', function() {
                            $('#modal-pay-room').addClass('hidden');
                        });

                        $('#btn-clik-roompluto').on('click', function() {
                            $('#modal-details-roompluto').removeClass('hidden');
                        });
                        $('#details-close').on('click', function() {
                            $('#modal-details-roompluto').addClass('hidden');
                        });

                        // MODAL DELETE
                        $('.btn-room-delete').on('click', function () {
                            Swal.fire({
                                title: `คุณแน่ใจหรือไม่? <br><b class="text-xl font-medium">(ชื่อหมวดหมู่: ${$(this).data('room_name')})</b>`,
                                text: "การดำเนินการนี้ไม่สามารถเรียกคืนได้",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'ใช่, ลบ',
                                cancelButtonText: 'ยกเลิก',
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    SubmitRoomDelete($(this).data('room_id'));
                                }
                            })
                        });
                    });

                    var _image64_single = '';
                    function fileChosen_Single(event) {
                        this.fileToDataUrl_Single(event, src => this.fileHanddle_Single(src));
                    }
                    function fileToDataUrl_Single(event, callback) {
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
                    function fileHanddle_Single(src){
                        $("#room_pic1").attr("src", src);
                        _image64_single = src;
                    }

            function SubmitRoomEdit() {
                fetch("{{ Route('SubmitRoomEdit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            room_name: document.getElementById("room_name").value,
                            room_cat: document.getElementById("room_cat").value,
                            room_size: document.getElementById("room_size").value,
                            room_hight: document.getElementById("room_hight").value,
                            room_price: document.getElementById("room_price").value,
                            room_detail: document.getElementById("room_detail").value,
                            image64: _image64_single
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

            function SubmitRoomDelete(room_id) {
                fetch("{{ Route('SubmitRoomDelete') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            room_id: room_id,
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

            const uploadInput = document.getElementById('room_pic');
            const filenameLabel = document.getElementById('filename');
            const imagePreview = document.getElementById('image-preview');

            // Check if the event listener has been added before
            let isEventListenerAdded = false;

            uploadInput.addEventListener('change', (event) => {
                const file = event.target.files[0];

                if (file) {
                filenameLabel.textContent = file.name;

                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.innerHTML =
                    `<img src="${e.target.result}" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />`;
                    imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');

                    // Add event listener for image preview only once
                    if (!isEventListenerAdded) {
                    imagePreview.addEventListener('click', () => {
                        uploadInput.click();
                    });

                    isEventListenerAdded = true;
                    }
                };
                reader.readAsDataURL(file);
                } else {
                filenameLabel.textContent = '';
                imagePreview.innerHTML =
                    `<div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center text-gray-500">No image preview</div>`;
                imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');

                // Remove the event listener when there's no image
                imagePreview.removeEventListener('click', () => {
                    uploadInput.click();
                });

                isEventListenerAdded = false;
                }
            });

            uploadInput.addEventListener('click', (event) => {
                event.stopPropagation();
            });
                </script>
        <!-- END MODAL ADD ADDRESS -->   
@endsection