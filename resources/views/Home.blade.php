<title>Home | Puenmeaw</title>

@extends('components/LayoutUser')

@section('Content')


        <!-- พื้นหลังแมว --> 
       <div class="flex">
           <img src="https://shorturl.at/ceDHI" />
           <div class = "absolute w-full h-full">
               <div class="text-white flex grid mt-[10%] text-center">
                   <p class = "">โรงแรมแมว SPACE CAT HOTEL จักรวาลแมว</p>     
                   <p class = "">โรงแรมแมวแสนอบอุ่นญี่ปุ่นจ๋าย่านเจริญนคร เดินเพียง 5 นาทีจาก Icon Siam รายล้อมไปด้วยโรงแรมริมน้ำ 5 ดาว และนี่คือโรงแรมแมวลับๆ</p> 
                   <p class = "">ที่จะพาบรรดาทาสทั้งหลายจินตนาการว่ากำลังเลี้ยงแมวอยู่ในตรอกที่โตเกียว</p>          
               </div>
           </div>
       </div>
   
       <div class="flex">
           <div class = "inline-flex bg-[#EDEDED] mx-auto border-2 rounded-md px-[20px] py-2 mt-[-2%] shadow-lg gap-2">
               <div class= "flex bg-white w-full text-blue-800 text-sm font-medium border-2 rounded-md max-lg:grid max-lg:grid-cols-1">
                    <img src="{{ URL('/picture/'.'footcat.png') }}"class="h-12 pl-3 max-lg:hidden">
                    <div class="mx-4 inline-block h-[50px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED] opacity-100 max-lg:hidden"></div>

                    <!-- date--> 
                    <div date-rangepicker class="flex items-center max-lg:p-2 max-lg:gap-4">
                        <div class="relative inline-flex">
                            <div class="flex items-center mr-2 pointer-events-none">
                                <img src="{{ URL('/picture/'.'checkin.png') }}"class="min-w-7 min-h-7"/>
                            </div>
                            <input name="start" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Select date start">
                        </div>

                        <span class=" mx-8 text-gray-500 inline-block h-[50px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED]  opacity-100  max-lg:hidden"> </span>
    
                        <div class="relative inline-flex">
                            <div class="flex items-center mr-2 pointer-events-none">
                                <img src="{{ URL('/picture/'.'checkout.png') }}"class="min-w-7 min-h-7"/>
                            </div>
                            <input name="end" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Select date end">
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
                <div class="h-full flex items-center">
                    <button id="btnroom" type="button"  class="relative flex h-fit bg-[4D994C] border border-[FFFFFF] rounded-md shadow-lg w-20">
                        <img src="{{ URL('/picture/'.'right-arrow1.png') }}" class=" w-12 ml-3   "/>
                    </button>
                </div>
            </div>      
       </div>

        <!-- โปรโมชั่น-->
        <div class="w-1/6 p-10  ">
            <div class="absulte min-w-[150px] min-h-[45px] text-[FFFFFF] text-center bg-[82C3FF]  border-2 border-white  p-2 shadow-lg origin-bottom -rotate-12 rounded-md  ">โปรโมชั่น</div>
        </div>
        <div class="grid grid-cols-3 gap-6 px-[10em] max-md:grid-cols-2 max-sm:grid-cols-1">
            <img src="{{ URL('/picture/'.'pluto.png.png') }}"class=" h-[15em] flex items-center justify-center rounded-lg shadow-lg hover:scale-125 duration-300"/>     
            <img src="{{ URL('/picture/'.'juno.jpg') }}"class=" h-[15em] w-[21em] flex items-center justify-center rounded-lg shadow-lg hover:scale-125 duration-300"/>     
            <img src="{{ URL('/picture/'.'planet.jpg') }}"class=" h-[15em] flex items-center justify-center rounded-lg shadow-lg hover:scale-125 duration-300"/>     

        </div>
    
        <div class=" relative flex justify-center items-center px-[8em] py-[10em] mt-3 bg-gray-300 h-20">
            <!-- จักรวาลแมว -->
            <div class ="flex-col  px-6 w-full  h-[300px] flex items-centers text-center">
                <div class="my-auto">
                    <hr class="h-[2px] bg-gray-700 w-[35px] mx-auto">
                    <p class = "">SPACE CAT HOTEL จักรวาลแมว</p>     
                    <p class = "">โรงแรมแมวแสนอบอุ่นญี่ปุ่นจ๋าย่านเจริญนคร เดินเพียง 5 นาทีจาก Icon Siam รายล้อมไปด้วยโรงแรมริมน้ำ 5 ดาว และนี่คือโรงแรมแมวลับๆ</p> 
                    <p class = "">ที่จะพาบรรดาทาสทั้งหลายจินตนาการว่ากำลังเลี้ยงแมวอยู่ในตรอกที่โตเกียว</p>          
                </div> 
            </div>
       
        </div>


        @endsection