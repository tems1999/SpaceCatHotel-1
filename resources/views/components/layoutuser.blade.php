<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Layout</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        </script>
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
                        <div class= " flex items-center ">
                            <img src="https://t.ly/T5_fM" class="h-5" alt="Flowbite Logo" />
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">อาบน้ำตัดขน</a>
                        </div>
                        <li>
                            <button id="btnLogin" type="button" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">เข้าสู่ระบบ</button>
                        </li>
                        <li>
                            <button id="btnRegister" type="button" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">สมัครสมาชิก  </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      

        <div">
            @yield('Content')
        </div>


        <!-- Modal Register -->
        <div id="modalRegister" class="modal hidden fixed z-[100] pt-[100px] left-0 top-0 w-[100%] h-[100%] overflow-auto max-md:px-[10px]">
            <!-- Modal content -->
            <div class="modal-content bg-white m-auto p-[20px] rounded-md drop-shadow-xl xl:w-[50%] lg:w-[60%] md:w-[60%] sm:w-[70%]">
                <div class="flex items-center">
                    <p class="text-2xl font-bold w-full ml-4 text-center">สมัครสมาชิก</p>
                    <span class="closeRegister text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>
                </div>
                <hr class="mt-4">
                <div class="mt-2">
                    <form action="#!" method="post" onsubmit="return false;">
                        @csrf   
                        <div class="grid gap-6 mb-6 grid-cols-2">
                            <div>
                                <label for="firstname_register" class="block mb-2 text-xl font-medium text-gray-700">ชื่อ <span class="text-red-800 text-xl">*</span></label>
                                <input type="text" id="firstname_register" class="bg-gray-50 border border-gray-300 text-gray-700 font-light text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 outline-none" placeholder="กรุณากรอกชื่อ" required>
                            </div>
                            <div>
                                <label for="lastname_register" class="block mb-2 text-xl font-medium text-gray-700">นามสกุล <span class="text-red-800 text-xl">*</span></label>
                                <input type="text" id="lastname_register" class="bg-gray-50 border border-gray-300 text-gray-700 font-light text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 outline-none" placeholder="กรุณากรอกนามสกุล" required>
                            </div>
                            <div>
                                <label for="username_register" class="block mb-2 text-xl font-medium text-gray-700">ชื่อผู้ใช้ <span class="text-red-800 text-xl">*</span></label>
                                <input type="text" id="username_register" class="bg-gray-50 border border-gray-300 text-gray-700 font-light text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 outline-none" placeholder="กรุณากรอกชื่อผู้ใช้" required>
                            </div>  
                            <div>
                                <label for="password_register" class="block mb-2 text-xl font-medium text-gray-700">รหัสผ่าน <span class="text-red-800 text-xl">*</span></label>
                                <input type="password" id="password_register" class="bg-gray-50 border border-gray-300 text-gray-700 font-light text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 outline-none" placeholder="กรุณากรอกรหัสผ่าน" required>
                            </div>
                        </div>
                        <hr class="mb-1">
                        <button type="submit" onClick="RegisterProcess()" class="text-white text-xl font-medium rounded-lg w-full sm:w-full px-5 py-2 text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">สมัครสมาชิก</button>
                    </form>
                    <div class="text-md text-center mt-4">
                        <p class="text-gray-400">มีบัญชีผู้ใช้แล้ว?
                            <span id="modalBtnLogin" class="text-blue-600 font-bold cursor-pointer">เข้าสู่ระบบ</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Login -->
        <div id="modalLogin" class="modal hidden fixed z-[100] pt-[100px] left-0 top-0 w-[100%] h-[100%] overflow-auto max-md:px-[10px]">
            <!-- Modal content -->
            <div class="modal-content bg-white m-auto p-[20px] rounded-md drop-shadow-xl xl:w-[50%] lg:w-[60%] md:w-[60%] sm:w-[70%]">
                <div class="flex items-center">
                    <p class="text-2xl font-bold w-full ml-4 text-center">เข้าสู่ระบบ</p>
                    <span class="closeLogin text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>
                </div>
                <hr class="mt-4">
                <div class="mt-2">
                    <form action="#!" method="post" onsubmit="return false;">
                        @csrf
                        <div class="grid gap-6 mb-6 grid-cols-2">
                            <div>
                                <label for="username_login" class="block mb-2 text-xl font-medium text-gray-700">ชื่อผู้ใช้</label>
                                <input type="text" id="username_login" class="bg-gray-50 border border-gray-300 text-gray-700 font-light text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 outline-none" placeholder="กรุณากรอกชื่อผู้ใช้" required>
                            </div>  
                            <div>
                                <label for="password_register" class="block mb-2 text-xl font-medium text-gray-700">รหัสผ่าน</label>
                                <input type="text" id="password_login" class="bg-gray-50 border border-gray-300 text-gray-700 font-light text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 outline-none" placeholder="กรุณากรอกรหัสผ่าน" required>
                            </div>
                        </div>
                        <hr class="mb-1">
                        <button type="submit" class="text-white text-xl font-medium rounded-lg w-full sm:w-full px-5 py-2 text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">เข้าสู่ระบบ</button>
                    </form>
                    <div class="text-md text-center mt-4">
                        <p class="text-gray-400">Not have an account?
                            <span id="modalBtnRegister" class="text-blue-600 font-bold cursor-pointer">Register</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @yield('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function () {
                // Modal Login
                $('#btnLogin').on('click', function () {
                    $("#modalLogin").css("display","block");
                });
                $('.closeLogin').on('click', function () {
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
                $('.closeRegister').on('click', function () {
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

            function RegisterProcess(){
                const minimum_username_length = 4;
                const minimum_password_length = 4;
                if(
                    ((document.getElementById("username_register").value).length >= minimum_username_length) && 
                    ((document.getElementById("password_register").value).length >= minimum_password_length) && 
                    document.getElementById("firstname_register").value != '' &&
                    document.getElementById("lastname_register").value != '' &&
                    document.getElementById("username_register").value.indexOf(' ') <= 0 && 
                    document.getElementById("password_register").value.indexOf(' ') <= 0
                ) {
                    fetch("{{ Route('RegisterStore') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json",
                            "X-CSRF-Token": '{{csrf_token()}}'
                        },
                        body:JSON.stringify(
                            {
                                username: document.getElementById("username_register").value,
                                password: document.getElementById("password_register").value,
                                firstname: document.getElementById("firstname_register").value,
                                lastname: document.getElementById("lastname_register").value
                            }
                        )
                    })
                    .then(async response => {
                        const isJson = response.headers.get('content-type')?.includes('application/json');
                        const data = isJson ? await response.json() : null; 

                        if(!response.ok){
                            const error = (data && data.errorMessage) || "{{trans('general.warning.system_failed')}}" + " (CODE:"+response.status+")";
                            return Promise.reject(error);
                        }

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'ลงทะเบียนสำเร็จ',
                            timer: 1500,
                            timerProgressBar: true
                        }).then((result) => {
                            window.location.reload();
                        })
                    }).catch((er) => {
                        console.log('Error: ' + er);
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'ลงทำเบียนไม่สำเร็จ!',
                            html: '<b class="text-rose-800">ชื่อผู้ใช้</b>นี้ถูกใช้ไปแล้ว'
                        })
                    });
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'ลงทำเบียนไม่สำเร็จ!',
                        html: 'ความยาวของชื่อผู้ใช้และรหัสผ่าน<br>จะต้องมีอย่างน้อย <b class="text-rose-800">4</b> ตัวอักษร <b class="text-rose-800">และไม่มีช่องว่าง</b>'
                    })
                }
            }
        </script>
    </body>
</html>