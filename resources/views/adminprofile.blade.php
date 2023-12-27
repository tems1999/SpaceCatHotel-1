<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Layout</title>
        <link  href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/stlyes.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </head>
    <body>
         <!-- Nav Bar -->

         <nav class="bg-white border-gray-200 dark:bg-gray-800">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between">
                <a class="flex items-center space-x-3 rtl:space-x-reverse">               
                    <img src="{{ URL('/picture/'.'cat.png') }}"class="h-20" alt="Flowbite Logo" />
                    <div class=" text-center " >
                        <p class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white font-extrabold text-transparent text-2xl bg-clip-text bg-gradient-to-r from-purple-500 to-pink-600">Space Cat Hotel</p>
                        <p >space cat hotel</p>
                    </div>
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <div class= " flex items-center ">                             
                                <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">เพิ่มเติม 
                                <img src="{{ URL('/picture/'.'menu.png') }}"class="w-5 h-5 ">
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[20em] h-[20em] dark:bg-gray-700 dark:divide-gray-600">
                                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <a href="#" class="font-medium truncate flex items-center text-lg drop-shadow-md"><img src="{{ URL('/picture/'.'users.png') }}"class="mr-5 w-10 h-10 "> นพวินท์ แก้วกองศรี</a>
                                    <p class="text-gray-500 text-center mt-[-10px]">tems.12363@gmail.com</p>
                                    </div>
                                    <ul class="py-2 text-sm text-gray-500 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">รายละเอียดการจอง</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">รายงาน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">โปรไฟล์ลูกค้า</a>
                                    </li>
                                    </ul>
                                    <div class="py-2">
                                    <a href="#" class="block px-4 py-2 text-sm text-red-800 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">ออกจากระบบ</a>
                                    </div>
                                </div>

                            </div>
                </div>
            </div>
        </nav>   
        <div id= "modal-Profile-cat" class="border border-gray-300 relative mt-4 flex items-center py-3">    
                <button class="absolute border border-gray-400 flex w-fit mt-2 mb-2 rounded-lg px-2 py-1 ml-7 ">
                        <img src="{{ URL('/picture/'.'arrow-right.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>      
                        <span class="ml-1.5">กลับ</span>
                </button>  
                <div class= " flex mx-auto text-xl">
                    <span>โปรไฟล์</span>
                </div>
            </div>
                   
        </div> 

        <div class="relative rounded-lg border mt-[5em] mx-auto w-[55em] shadow-lg pb-[7em]">
            <div class="flex items-center">
                <img src="{{ URL('/picture/'.'report.png') }}" alt="" class="ml-5 mr-2 w-[40px] h-[40px] mb-[3px] mt-[3px] " alt="logo"/> 
                <p class="font-semibold">รายละเอียดการติดต่อ </p>

            </div>
            <P class="border border-gray-200"></P>
            
            <div class = "flex relative rounded-lg border mt-[4em] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'users.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    ชื่อ - นามสกุล :
                    <div class=" ">
                    <input class="font-light w-[30em]"  type="name" name="name" placeholder="ชื่อนามสกุล"> 
                    </div>
                </div>
            
            </div>

            <div class = "flex relative rounded-lg border mt-[5px] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'tell.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    เบอร์โทร :
                    <div class=" ">
                    <input class="font-light w-[30em]"  type="name" name="name" placeholder="เบอร์โทร"> 
                    </div>
                </div>
            
            </div>

            <div class = "flex relative rounded-lg border mt-[5px] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'email.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    อีเมล :
                    <div class=" ">
                    <input class="font-light w-[30em]"  type="name" name="name" placeholder="อีเมล"> 
                    </div>
                </div>
            </div> 
            <button class="flex ml-[45em] mt-[1em] bg-green-800 text-white py-2 px-4 rounded items-center">บันทึก<img src="{{ URL('/picture/'.'diskette.png') }}"class="ml-1 w-5 h-5 "></button>
        </div>

        <div class="relative rounded-lg border mt-[2em] mx-auto w-[55em] shadow-lg pb-[5em]">
            <div class="flex items-center">
                <img src="{{ URL('/picture/'.'key.png') }}" alt="" class="ml-5 mr-2 w-[40px] h-[40px] mb-[3px] mt-[3px] " alt="logo"/> 
                <p class="font-semibold">เปลี่ยนรหัสผ่าน </p>

            </div>
            <P class="border border-gray-200"></P>
            
            <div class = "flex relative rounded-lg border mt-[4em] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'padlock.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    รหัสผ่าน :
                    <div class=" ">
                    <input class="font-light w-[30em]"  type="password" name="password" placeholder="รหัสผ่าน"> 
                    </div>
                </div>
            </div>

            <div class = "flex relative rounded-lg border mt-[5px] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'unlock.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    ยืนยันรหัสผ่าน :
                    <div class=" ">
                    <input class="font-light w-[30em]"  type="password" name="confirmpassword" placeholder="ยืนยันรหัสผ่าน"> 
                    </div>
                </div>          
            </div>
            <button class="flex ml-[45em] mt-[1em] bg-blue-900 text-white py-2 px-4 rounded items-center">บันทึก<img src="{{ URL('/picture/'.'check-mark.png') }}"class="ml-1 w-5 h-5 "></button>
         </div>
    </body>
</html>