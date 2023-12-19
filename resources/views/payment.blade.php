<title>Home | Puenmeaw</title>

@extends('components/LayoutUser')

@section('Content')
    <div class="modeal border border-gray-300 relative mt-4 flex items-center py-3">    
        <button class="absolute border border-gray-400 flex w-fit mt-2 mb-2 rounded-lg px-2 py-1 ml-7 shadow-lg">
                <img src="{{ URL('/picture/'.'arrow-right.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>      
                <span class="">กลับ</span>
        </button>  
        <div class= " flex mx-auto text-xl">
            <span>ประวัติการชำระเงิน</span>
        </div>
    </div>
    <div class="relative border border-gray-400 mt-[10em] mx-auto w-[36em]">
            <div class="flex items-center">
                <img src="{{ URL('/picture/'.'history-tell.png') }}" alt="" class=" w-[40px] h-[40px] mb-[3px] mt-[3px] " alt="logo"/> 
                <p class=" ">ประวัติการชำระเงิน</p>          
            </div>
            <P class="border border-gray-200"></P>
            <div class="border border-gray300 mt-3 flex mx-5 rounded-xl py-2 mb-[15em]">
                <img src="{{ URL('/picture/'.'user.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-1.5" alt="logo"/>
                <div class="ml-4 items-center justify-center flex gap-5">
                    <P>สถานการชำระเงิน:</P>      
                    <span class="text-gray-300">จาก 6 ธ.ค. ถึง 7ธ.ค.</span> 
                    <span  class="ml-8">รอการตรวจสอบ</span>
                    <button id="btn-details-room" class="hover:text-green-900 mt-1.5">
                        <i class="fi fi-rr-angle-small-right text-3xl items-center "></i>
                    </button>
                            
                </div>
            </div>
    </div> 
  
         <!-- start modal histoty -->
         <div id="modal-details-room" class="modal hidden fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">

                    <!-- START MODEL CONTENT -->
                    <div class="modal-content bg-white m-auto p-[10px] rounded-md drop-shadow-xl w-[90%] max-md:w-[100%]">
                        <div class="flex items-center">
                            <p class="text-[20px] font-bold w-full ml-4 text-center">รายละเอียดการจอง</p>
                            <span id="details-close" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>
                        </div>
                        <hr class="mt-4">
                        <!-- body -->
                            <div class="mt-4 grid grid-cols-2 px-[4em] gap-4 ">
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
                                        <div class="border border-gray300 mt-3 flex mx-5 rounded-xl mb-5">
                                            <img src="{{ URL('/picture/'.'email.png') }}" alt="" class="ml-2 w-7 h-[2em] mt-2" alt="logo"/>
                                            <div class="ml-4">
                                                <P >Email:</P>
                                                <P class="text-gray-400">admin@gmail.com</P>                   
                                            </div>                                         
                                        </div>
                                       
                                    </div>
                    </div>               
                </div>
                <!-- END MODAL CONTENT -->

        
        
        
        
        
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#btn-details-room').on('click', function() {
                    $('#modal-details-room').removeClass('hidden');
                });
                $('#details-close').on('click', function() {
                    $('#modal-details-room').addClass('hidden');
                });
                
            });
           
        </script>
     
@endsection
