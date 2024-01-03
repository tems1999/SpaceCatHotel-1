<title>Home | Puenmeaw</title>

@extends('components/LayoutUser')

@section('Content')
<div class="flex">
           <div class = "inline-flex bg-[#EDEDED] mx-auto border-2 rounded-md w-full py-2  shadow-lg gap-2 mt-4">
               <div class= "flex bg-white  text-blue-800 text-sm font-medium border-2 rounded-md  mx-auto w-[95em] max-lg:grid max-lg:grid-cols-1"> 
                    <img src="{{ URL('/picture/'.'footcat.png') }}"class="h-12 pl-3 max-lg:hidden">
                    <!-- เส้นแบ่งตรงกลาง -->
                    <div class="mx-4 inline-block h-[50px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED] opacity-100 max-lg:hidden"></div>
                    <!-- date--> 
                    <div date-rangepicker class="flex items-center max-lg:p-2 max-lg:gap-4">
                        <div class="relative inline-flex">
                            <div class="flex items-center mr-2 pointer-events-none">
                                <img src="{{ URL('/picture/'.'checkin.png') }}"class="min-w-7 min-h-7"/>
                            </div>
                            <input name="start" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[23em] p-2 text-center" placeholder="Select date start">
                        </div>

                        <span class=" mx-8 text-gray-500 inline-block h-[50px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED]  opacity-100  max-lg:hidden"> </span>
    
                        <div class="relative inline-flex">
                            <div class="flex items-center mr-2 pointer-events-none">
                                <img src="{{ URL('/picture/'.'checkout.png') }}"class="min-w-7 min-h-7"/>
                            </div>
                            <input name="end" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2  w-[23em] p-2 text-center" placeholder="Select date end">
                        </div>
                        <!-- เส้นแบ่งตรงกลาง -->
                        <div class="mx-5 inline-block h-[50px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED] opacity-100 max-lg:hidden"></div>
                    </div>           

                    <!-- เพิ่มจำนวนแมว    -->
                    <div class = "inline-flex">
                        <img src="{{ URL('/picture/'.'cat1.png') }}"class="w-8 h-8 my-auto  ">   
                        <div class="flex-col">
                            <p class = "w-fit text-[C1C1C1]" >แมว :</p> 
                            <p class = "text-[000000]" >1</p> 
                        </div>
    
                        <div  class="flex-row inline-flex gap-2 mx-2 my-auto bg-gray-300 rounded-lg">
                            <p class="text-2xl ml-5 " >-</p>
                            <div class="mx-3 inline-block h-[32px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED] opacity-100 "></div>
                            <p class="text-2xl mr-5">+</p>
                        </div>
                    </div>
                    
                </div>

                <!-- ปุ่มกดไปหน้าจองห้อง -->
                <div class="h-full flex items-center mr-6">
                    <button id="btnroom" type="button"  class="relative flex h-fit bg-[4D994C] border border-[FFFFFF] rounded-md shadow-lg w-20">
                        <img src="{{ URL('/picture/'.'right-arrow1.png') }}" class=" w-12 ml-3   "/>
                    </button>
                </div>
            </div>      
       </div>

       <!-- ห้องแมว -->
       <div class=" flex grid grid-cols-5  gap-2 mt-3 px max-lg:grid max-lg:grid-cols-2 max-md:grid-col-1 px-[6em]">
                  <!-- ห้องJuno1 -->
                  @if(sizeof($room))
                    @foreach($room as $room)
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
                                    data-room_cat="{{ $room->room_cat }}" data-room_pic="{{ URL('/uploads/' . $room->room_pic) }}" data-room_name="{{ $room->room_name }}">จองห้อง</button>
                                </div>
                                
                            </div>   
                        </div> 
                    @endforeach
                    
                 @endif 
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
                                
                                    <div class="ml-[5em] flex col-span-4 gap-10 mt-2 mb-2">
                                        <img id="room_pic" src=" " alt="" class="w-[10em] h-[8em]" alt="logo"/>
                                        <div class="whitespace-nowrap flex-col  h-fit ">
                                            <p class="whitespace-nowrap" id="room_name" ></p>
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
                                       

                                    <div class="grid grid-cols-2 bg-gray-200 rounded-lg">
                                        <div class="p-2">
                                            <h1>รายละเอียดราคา</h1>
                                            <p>ราคามาตรฐาน <span id="room_price"></span> x 1 วัน</p>
                                        </div>

                                        <div class="p-2 inline-flex ml-auto mr-0 mt-auto mb-0">
                                            <p id="room_price"></p><span class="ml-2">บาท</span>
                                        </div>
                                        <p class=" border-t-2 border-gray-300 w-full col-span-3 "></p>

                                        <div class="p-2 flex ">
                                            <p>ราคามาตรฐาน <span id="room_price"></span> x 1 วัน</p>
                                            
                                        </div>
                                            <div class="p-2 inline-flex ml-auto mr-0 mb-0 ">
                                                <span id="room_price"></span><span class="ml-2">บาท</span>
                                            </div>
                                        <div class="p-2 flex items-center ml-auto mr-0 mt-[5em]">
                                            <button href="#!" class="relative inline-block text-lg group ">
                                                <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
                                                <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                                                <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-blue-800 group-hover:-rotate-180 ease"></span>
                                                    <span class="relative">ชำระเงิน</span>
                                                    </span>
                                                    <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
                                            </button>  
                                        </div>
                                    </div>
                                </div>
                                  <!-- start grid3 -->
                                  <div class = "border rounded-lg shadow-xl " >
                                    <input id="editprofile_id" class="hidden" value="{{ $room->user_id}}"> 
                                        <div class="flex mx-5 mt-3">
                                        <img src="{{ URL('/picture/'.'detail.png') }}" alt="" class="ml-2" alt="logo"/>
                                            <p class="ml-2">รายละเอียดการติดต่อ</p>
                                        </div> 
                                        <P class="border border-gray-200 mt-3 "></P>
                                        
                                        <!-- ชื่อ -->
                                        <div class="border border-gray300 mt-3 flex mx-5 rounded-xl">
                                            <img src="{{ URL('/picture/'.'user.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-2" alt="logo"/>
                                            <div class="ml-4">
                                                <P>ชื่อ:</P>
                                                <P class="text-gray-500">{{ Session::get('firstname')}}</P>                                                             
                                            </div>
                                        </div>
                                        <div class="border border-gray300 mt-3 flex mx-5 rounded-xl">
                                            <img src="{{ URL('/picture/'.'user.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-2" alt="logo"/>
                                            <div class="ml-4">
                                                <P>นามสกุล:</P>
                                                <P class="text-gray-500">{{ Session::get('lastname')}}</P>    
                                                                  
                                            </div>
                                        </div>
                                        <!-- เบอร์โทร -->
                                        <div class="border border-gray300 mt-3 flex mx-5 rounded-xl">
                                            <img src="{{ URL('/picture/'.'tell.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-2" alt="logo"/>
                                            <div class="ml-4">
                                                <P >เบอร์โทร :</P>
                                                <P class="text-gray-500" >{{ Session::get('tell')}}</P>                       
                                            </div>
                                        </div>
                                        <!-- email -->
                                        <div class="border border-gray300 mt-3 flex mx-5 rounded-xl">
                                            <img src="{{ URL('/picture/'.'email.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-2" alt="logo"/>
                                            <div class="ml-4">
                                                <P >Email:</P>
                                                <P class="text-gray-500">{{ Session::get('username')}}</P>                                  
                                            </div>                                         
                                        </div>
                                        <div class="flex">
                                            <a href="profile" class="ml-auto mr-5 mt-2 mb-2 rounded-lg px-4 py-2 bg-blue-600 hover:bg-[2344B8] duration-300 text-white">แก้ไข</a>
                                        </div>
                                       
                                    </div>
                             <!-- end -->
                             
                             
                        </div>                          
                    </div>               
                </div>
                
             

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
                                        <input onchange={fileChosen_Single(event)} id="file_input_slip" type="file" class="block w-fit h-fit text-sm text-gray-900 border border-gray-300 rounded-lg  bg-gray-50 ">         
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
                            $('.modal-content #room_name').text($(this).data('room_name'));
                            $('.modal-content #room_detail').text($(this).data('room_detail'));
                            $('.modal-content #room_price').text($(this).data('room_price'));
                            $('.modal-content #room_size').text($(this).data('room_size'));
                            $('.modal-content #room_hight').text($(this).data('room_hight'));
                            $('.modal-content #room_cat').text($(this).data('room_cat'));
                            $('.modal-content #room_pic').attr('src', $(this).data('room_pic'));

                            $('#modal-details-room').removeClass('hidden');

                        });
                        $('#btn-details-room').on('click', function() {
                            $('#modal-details-room').removeClass('hidden');
                        });
                        $('#details-close').on('click', function() {
                            $('#modal-details-room').addClass('hidden');
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
                    });

                    // START GET SINGLE IMAGE BASE64
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
                    // END GET SINGLE IMAGE BASE64
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