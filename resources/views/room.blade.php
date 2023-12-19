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
                 <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room1.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class="grid grid-cols-2 flex">
                            <span class= "text-center uppercase">Juno Room</span>
                            <p  class="text-green-700 ml-auto mr-0">
                            <i class="fi fi-ss-bullet text-sm text-center"></i> ว่าง
                            </p>
                        </div>
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p  class=""> จำนวนแมว : 1ตัว</p>
                            <p  class="underline ml-auto mr-0">฿300 /คืน</p>
                        </div>
                        <div class = "mt-[1em] ">
                             <button id="btn-details-room" type="button" class="w-full text-amber-600 border border-[C09369] rounded-full py-1 hover:bg-[C09369] duration-300">จอง</button>
                        </div>
                    </div>
                </div>

                <!-- pluto2-->
                <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room2pluto.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class="grid grid-cols-2 flex">
                            <span class= "text-center uppercase">PLUTO ROOM </span>
                            <p  class="text-red-700 ml-auto mr-0">
                            <i class="fi fi-ss-bullet text-sm text-center"></i> ไม่ว่าง
                            </p>
                        </div>
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p class="">จำนวนแมว : 1-2ตัว</p>                          
                            <p  class="underline ml-auto mr-0">฿500 /คืน</p>
                        </div>
                        <div class = "mt-[1em]">
                            <button id="btn-clik-roompluto" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                        </div>
                    </div>
                </div>
                   <!-- Mercury room3  -->  
                   <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room3mercury.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class=" inline-flex  gap-[3em] ">
                            <span class= "uppercase ">MERCURY ROOM </span>
                            <span  class="text-red-700 ml-auto mr-0">
                            <i class="fi fi-ss-bullet"></i> ไม่ว่าง
                            </span>
                        </div>
                        
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p class="">จำนวนแมว : 1-3ตัว</p>                          
                            <p  class="underline ml-auto mr-0">฿600 /คืน</p>
                        </div>
                        <div class = "mt-[1em]">
                            <button type="button" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                        </div>
                    </div>
                </div>
               
                <!--Saturn room4-->
                <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room4SATURN.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class=" inline-flex  gap-[5em]  w-full">
                            <span class= "uppercase ">SATURN ROOM </span>
                            <span  class="text-green-700 ml-auto mr-0">
                                ว่าง
                            </span>
                        </div>
                        
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p class="">จำนวนแมว : 1-4ตัว</p>                          
                            <p  class="underline ml-auto mr-0">฿700 /คืน</p>
                        </div>
                        <div class = "mt-[1em]">
                            <button type="button" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                        </div>
                    </div>
                </div>

                   <!-- Venus room5 -->
                   <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room5venus.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class=" inline-flex  gap-[5em]  w-full">
                            <span class= "uppercase ">VENUS ROOM </span>
                            <p  class="text-green-700 ml-auto mr-0">
                            <i class="fi fi-ss-bullet"></i> ว่าง
                            </p>
                            
                        </div>
                        
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p class="">จำนวนแมว : 1-4ตัว</p>                          
                            <p  class="underline ml-auto mr-0">฿700 /คืน</p>
                        </div>
                        <div class = "mt-[1em]">
                            <button type="button" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                        </div>
                    </div>
                </div>

                 <!-- Planet6 -->
                 <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room6planet.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class=" inline-flex  gap-[3em] w-full">
                            <span class= "uppercase ">PLANET ROOM </span>
                            <span  class="text-green-700 ml-auto mr-0">
                            <i class="fi fi-ss-bullet"></i> ว่าง
                            </span>
                        </div>
                        
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p class="">จำนวนแมว : 1ตัว</p>                          
                            <p  class="underline ml-auto mr-0">฿300 /คืน</p>
                        </div>
                        <div class = "mt-[1em]">
                            <button type="button" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                        </div>
                    </div>
                </div>

               <!-- Mars7-->
                <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl "> 
                        <div class="relative">
                            <img src="{{ URL('/picture/'.'room7mars.png') }}"class="w-[30em] h-[10em] my-auto ">
                            <div class="absolute top-1 left-1 px-2 ">
                                <i class="fi fi-rs-heart  text-white text-2xl "></i>
                            </div>
                        </div>
                        <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                            <div class=" inline-flex  gap-[5em] w-full">
                                <span class= "uppercase ">MARS ROOM </span>
                                <span  class="text-green-700 ml-auto mr-0">
                                <i class="fi fi-ss-bullet"></i> ว่าง
                                </span>
                            </div>
                            
                            <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                                <p class="">จำนวนแมว : 1-2ตัว</p>                          
                                <p  class="underline ml-auto mr-0">฿500 /คืน</p>
                            </div>
                            <div class = "mt-[1em]">
                                <button type="button" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                            </div>
                        </div>
                    </div>
                
                 <!-- Jupiter8  -->
                 <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room8jupiter.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class=" inline-flex  gap-[3em] w-full">
                            <span class= "uppercase ">JUPITER ROOM </span>
                            <span  class="text-red-700 ml-auto mr-0">
                            <i class="fi fi-ss-bullet"></i> ไม่ว่าง
                            </span>
                        </div>
                        
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p class="">จำนวนแมว : 1-3ตัว</p>                          
                            <p  class="underline ml-auto mr-0">฿600 /คืน</p>
                        </div>
                        <div class = "mt-[1em]">
                            <button type="button" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                        </div>
                    </div>
                </div>
                
                <!--Neptune 9-->
                <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room9neptune.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class=" inline-flex  gap-[3em] w-full">
                            <span class= "uppercase ">NEPTUNE ROOM </span>
                            <span  class="text-green-700 ml-auto mr-0">
                            <i class="fi fi-ss-bullet"></i> ว่าง
                            </span>
                        </div>
                        
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p class="">จำนวนแมว : 1-ตัว</p>                          
                            <p  class="underline ml-auto mr-0">฿700 /คืน</p>
                        </div>
                        <div class = "mt-[1em]">
                            <button type="button" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                        </div>
                    </div>
                </div>

                <!-- Uranus10 -->
                <div class= "relative border border-gray-200 rounded-2xl shadow-xl duration-500 hover:scale-105 hover:shadow-xl ">
                    <div class="relative">
                        <img src="{{ URL('/picture/'.'room10uranus.png') }}"class="w-[30em] h-[10em] my-auto ">
                        <div class="absolute top-1 left-1 px-2 ">
                            <i class="fi fi-rs-heart  text-white text-2xl "></i>
                        </div>
                    </div>
                    <div class = "mt-[1em] flex-col space-y-1 px-3 mb-[0.7em]">
                        <div class=" inline-flex  gap-[3em] w-full">
                            <span class= "uppercase ">URANUS ROOM </span>
                            <span  class="text-green-700 ml-auto mr-0">
                            <i class="fi fi-ss-bullet"></i> ว่าง
                            </span>
                        </div>
                        
                        <div class="font-light text-gray-500 grid grid-cols-2 flex text-sm">
                            <p class="">จำนวนแมว : 1-4ตัว</p>                          
                            <p  class="underline ml-auto mr-0">฿700 /คืน</p>
                        </div>
                        <div class = "mt-[1em]">
                            <button type="button" class="w-full text-amber-600 border border-amber-400 rounded-full py-1 hover:bg-amber-100 duration-300">จอง</button>
                        </div>
                    </div>
                </div>
    </div>

                <!-- start modal1 -->
                <div id="modal-details-room" class="modal hidden fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">
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
                                                 <button id="btn-details-pay-room" class="ml-auto mr-5 mt-2 mb-2 rounded-lg px-4  bg-red-500 hover:bg-red-700 duration-300 text-white">ชำระเงิน</button>
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

                <!-- แสกนชำระเงิน2 -->
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
                </script>
        <!-- END MODAL ADD ADDRESS -->   
@endsection