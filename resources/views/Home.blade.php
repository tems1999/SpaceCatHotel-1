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
           <div class = " bg-[#EDEDED] mx-auto pl-3 pr-[8%] border-2 w-2/3 rounded-md mt-[-2%]  shadow-lg">
               <div class= "my-1 bg-white text-blue-800 text-sm font-medium w-full border-2 flex rounded-md ">
                    <img src="{{ URL('/picture/'.'footcat.png') }}"class="h-12 pl-3"/>
                    <div class="mx-4 inline-block h-[50px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED] opacity-100"></div>

                    <!-- date--> 
                        <div date-rangepicker class="flex items-center ">
                            <div class="relative  ">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <img src="{{ URL('/picture/'.'checkin.png') }}"class="h-7 pl-2"/>
                                </div>
                                             <input name="start" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-3" placeholder="Select date start">
                            </div>
                                    <span class="mx-8 text-gray-500 inline-block h-[50px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED]  opacity-100 "> </span>
                        
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none">
                                        <img src="{{ URL('/picture/'.'checkout.png') }}"class="h-7 pl-2 ml-0"/>
                                    </div>
                                             <input name="end" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                </div>
                        </div>
                                            <div class="mx-5 inline-block h-[50px] min-h-[1em] w-0.5 self-stretch bg-[#EDEDED] opacity-100 "></div>
                </div>
            </div>
       </div>
        <!-- โปรโมชั่น-->
        <div class="w-1/6 p-10  ">
            <div class="absulte min-w-[150px] min-h-[45px] text-[FFFFFF] text-center bg-[82C3FF]  border-2 border-white  p-2 shadow-lg origin-bottom -rotate-12 rounded-md  ">โปรโมชั่น</div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class= "bg-gray-400 h-[15em] mx-5  flex items-center justify-center">โปรโมชั่น1</div>       
            <div class= "bg-gray-400 h-[15em] mx-5  flex items-center justify-center">โปรโมชั่น2</div>
            <div class="bg-gray-400 h-[15em]  mx-5 flex items-center justify-center">โปรโมชั่น2</div>    
        </div>
    
        <p class= "border border-rose-600 mx-5" >จอง 3 ฟรี!</p>
        
        <p class= "border border-rose-600 mx-5" >จอง 3 ฟรี!</p>
        @endsection