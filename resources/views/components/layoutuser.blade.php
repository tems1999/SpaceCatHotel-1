<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Layout</title>
        <link  href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/stlyes.css') }}" rel="stylesheet">
        
        </script>
    </head>
    <body>
        <!-- Nav Bar -->
        <nav class="bg-white border-gray-200 dark:bg-gray-800 ">
            <div class="max-w-screen-xl-hidden flex flex-wrap items-center justify-between mr-[6em]">
                <a class="flex items-center space-x-3 rtl:space-x-reverse">               
                    <img src="{{ URL('/picture/'.'cat.png') }}"class="h-20" alt="Flowbite Logo" />
                    <div class=" text-center " >
                        <p href="Home" class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white font-extrabold text-transparent text-2xl bg-clip-text bg-gradient-to-r from-purple-500 to-pink-600">Space Cat Hotel</p>
                        <p >space cat hotel</p>
                    </div>
                </a>

                <div class="hidden md:block md:w-auto flex  " id="navbar-default ">
                    <ul class="font-medium flex flex-col md:p-2 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-2 md:border-0 md:bg-white">
                        <div class= " flex items-center ">
                            <img src="https://t.ly/T5_fM" class="h-5" alt="Flowbite Logo" />
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">อาบน้ำตัดขน</a>
                        </div>
                        @if(Session::get('authen')) 
                        <div class="hidden w-full md:block md:w-auto pt-1" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <div class= " flex items-center ">                             
                                <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">เพิ่มเติม 
                                <img src="{{ URL('/picture/'.'menu.png') }}"class="w-5 h-5 ">
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[20em] h-[20em] dark:bg-gray-700 dark:divide-gray-600">
                                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <a href="profile" class="font-medium truncate flex items-center text-lg drop-shadow-md"><img src="{{ URL('/picture/'.'users.png') }}"class="mr-5 w-10 h-10 "> {{ Session::get('firstname')." ".Session::get('lastname') }}</a>
                                        <p class="text-gray-500 text-center mt-[-10px]">{{ Session::get('username') }}</p>
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
                                    <a href="{{ Route('Logout') }}" class="block px-4 py-2 text-sm text-red-800 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">ออกจากระบบ</a>
                                    </div>
                                </div>

                            </div>
                         </div>
                        @else
                            <li>
                                <button id="btnLogin" type="button" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">เข้าสู่ระบบ</button>
                            </li>
                            <li>
                                <button id="btnRegister" type="button" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">สมัครสมาชิก  </button>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div">
            @yield('Content')
        </div>


        <!-- Modal Register -->
        <div id="modalRegister" class="modal hidden fixed z-[120] pt-[100px] left-0 top-0 w-[100%] h-[100%] overflow-auto max-md:px-[10px]">
            <!-- Modal content -->
                <section>
                    <div class="flex flex-col items-center justify-center ">
                        <div class="w-fit bg-white rounded-lg px-[2em]">
                            <div class="px-7 py-4 md:space-y-6 max-sm:p-8 relative">
                                <!-- ปุ่มกากบาท -->
                                <span id="closeRegister" class=" text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr- hover:text-indigo-600 cursor-pointer">&times;</span>
                                    
                                <form class="space-y-4 mt-0" action="#!" method="post" onsubmit="return false;">
                                    <img src="{{ URL('/picture/'.'register.png') }}" class="h-[10em] mx-auto "/>
                                    <!-- อีเมลล์&รหัสผ่าน -->
                                    <div  class="flex gap-5">
                                        <div>
                                            <label for="username_register" class="block ml-2 text-sm font-medium text-gray-900 ">ชื่อผู้ใช้</label>
                                            <div class="p-2 rounded-xl border flex w-fit bg- bg-gray-100 shadow-md">
                                                <img src="{{ URL('/picture/'.'email.png') }}" class="h-5 mt-[2px]"/>    
                                                <input  id="username_register" class="ml-2  font-light  bg-gray-100 outline-none"  type="email"  placeholder="กรอกชื่อผู้ใช้">   
                                            </div>            
                                        </div>
                                        
                                        <div>
                                            <label for="password_register" class="ml-2 block text-sm font-medium text-gray-900 dark:text-white">รหัสผ่าน</label>
                                            <div class="p-2 rounded-xl border flex w-fit bg-gray-100 shadow-md">
                                                <img src="{{ URL('/picture/'.'lock1.png') }}" class="h-6"/>    
                                                <input id="password_register" class="ml-2 bg-gray-100 outline-none" type="password"  placeholder="••••••••">   
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ชื่อ&นามสกุล -->
                                    <div  class="flex gap-5 ">
                                        <div>
                                            <label for="firstname_register" class="block ml-2 text-sm font-medium text-gray-900 ">ชื่อ</label>
                                            <div class="p-2 rounded-xl border flex w-fit bg-gray-100 shadow-md">
                                                <img src="{{ URL('/picture/'.'user.png') }}" class="h-5"/>    
                                                <input id="firstname_register" class="ml-2 font-light bg-gray-100 outline-none" type="name"  placeholder="กรอกชื่อผู้ใช้">   
                                            </div>            
                                        </div>
                                        
                                        <div>
                                            <label for="lastname_register" class="ml-2 block text-sm font-medium text-gray-900 dark:text-white">นามสกุล</label>
                                            <div class="p-2 rounded-xl border flex w-fit bg-gray-100 shadow-md">
                                                <img src="{{ URL('/picture/'.'detail.png') }}" class="h-6"/>    
                                                <input  id="lastname_register" class="ml-2 font-light bg-gray-100 outline-none" type="last_name" placeholder="กรอกนามสกุล" >   
                                            </div>   
                                                
                                        </div>
                                    </div>
                                    <!-- เบอร์โทร-->
                                    <div  class="flex gap-5">
                                        <div>
                                            <label for="tell_register" class="block ml-2 text-sm font-medium text-gray-900 ">เบอร์โทร</label>
                                            <div class="p-2 rounded-xl border flex w-fit bg-gray-100 shadow-md">
                                                <img src="{{ URL('/picture/'.'tell.png') }}" class="h-5"/>    
                                                <input id="tell_register" type="tel"  class="ml-2 font-light bg-gray-100 outline-none" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="กรอกเบอร์โทร">   
                                            </div>            
                                        </div>
                                        
                                    </div>
                                    <button onClick="SubmitRegister()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">สมัครสมาชิก</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
           
        <!-- Modal Login -->
        <div id="modalLogin" class="modal hidden fixed z-[100] pt-[100px] left-0 top-0 w-[100%] h-[100%] overflow-auto max-md:px-[10px]">
            <section class="flex items-center justify-center">
                    <!-- login container -->
                    <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center relative">
                         <!-- ปุ่มกากบาท -->
                         <span id="closeLogin" class=" mr-5 text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr- hover:text-indigo-600 cursor-pointer">&times;</span>
                            <!-- form -->
                        <div class="md:w-1/2 px-5 md:px-16 relative">
                            <img src="{{ URL('/picture/'.'logo login.png') }}" class=" h-[10em] mx-auto"/>
                            <form action="#!" method="post" onsubmit="return false;" class="flex flex-col gap-4">

                                <input id="username_login" class="p-2 rounded-xl border" type="text" placeholder="Email">
                                <div class="relative">
                                <input id="password_login" class="p-2 rounded-xl border w-full" type="password" placeholder="Password">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                                </div>

                                <button onClick="LoginVerify()" class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
                            </form>

                            <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
                                <hr class="border-gray-400">
                                <p class="text-center text-sm">OR</p>
                                <hr class="border-gray-400">
                            </div>

                            <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]">
                                <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
                                <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                </svg>
                                Login with Google
                            </button>

                            <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
                                <a href="#">Forgot your password?</a>
                            </div>

                            <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                                <p>Don't have an account?</p>
                                <button id="modalBtnRegister" class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">Register</button>
                            </div>
                        </div>
                    
                        <!-- image -->
                        <div class="md:block hidden w-1/2">
                            <img src="{{ URL('/picture/'.'login p.png') }}"/>
                        </div>  
                       
                    </div>
            </section>
        </div>

        @yield('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
        <script>
            $(document).ready(function () {
                // Modal Login
                $('#btnLogin').on('click', function () {
                    $("#modalLogin").css("display","block");
                });
                $('#closeLogin').on('click', function () {
                    var modal = document.getElementById("modalLogin");
                    modal.classList.add("fade-out-modal");

                    setTimeout(function() {
                        modal.style.display = "none";
                        modal.classList.remove("fade-out-modal");
                    }, 500);
                });

                // Modal Register
                $('#btnRegister').on('click', function () {
                    $("#modalRegister").css("display","block");
                });
                $('#closeRegister').on('click', function () {
                    var modal = document.getElementById("modalRegister");
                    modal.classList.add("fade-out-modal");

                    setTimeout(function() {
                        modal.style.display = "none";
                        modal.classList.remove("fade-out-modal");
                    }, 500);
                });

                // Swap Modal from Login to Register
                $('#modalBtnRegister').on('click', function () {
                    $("#modalLogin").css("display","none");
                    $("#modalRegister").css("display","block");
                });
                // Swap Modal from Register to Login
                $('#modalBtnLogin').on('click', function () {
                    $("#modalRegister").css("display","none");
                    $("#modalLogin").css("display","block");
                });
            });

            function LoginVerify() {
                fetch("{{ Route('LoginVerify') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            username: document.getElementById("username_login").value,
                            password: document.getElementById("password_login").value
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
                            title: 'เข้าสู่ระบบไม่สำเร็จ!',
                            html: `${data.status}`,
                            confirmButtonText: 'ตกลง',
                        })

                        const error = (data && data.errorMessage) || "{{trans('general.warning.system_failed')}}" + " (CODE:"+response.status+")";
                        return Promise.reject(error);
                    }

                    Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'เข้าสู่ระบบสำเร็จ',
                            confirmButtonText: 'ตกลง',
                            timer: 1000,
                            timerProgressBar: true
                    }).then((result) => {
                        if(data.role === 3) {
                            location.href="{{ Route('adminhome') }}";
                        } else {
                            location.reload();
                        }
                    })
                })
                .catch((er) => {
                    console.log('Error' + er);
                });                    
            }

            function SubmitRegister() {
                fetch("{{ Route('SubmitRegister') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            username: document.getElementById("username_register").value,
                            password: document.getElementById("password_register").value,
                            firstname: document.getElementById("firstname_register").value,
                            lastname: document.getElementById("lastname_register").value,
                            tell: document.getElementById("tell_register").value,
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
           

        </script>
    </body>
</html>