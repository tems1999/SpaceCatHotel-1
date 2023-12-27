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
            </div>
                   
        </div> 

        <div class="relative rounded-lg border mt-[5em] mx-auto w-[55em] shadow-lg pb-[7em]">
            <div class="flex items-center">
                <img src="{{ URL('/picture/'.'report.png') }}" alt="" class="ml-5 mr-2 w-[40px] h-[40px] mb-[3px] mt-[3px] " alt="logo"/> 
                <p class="font-semibold">รายละเอียดการติดต่อ </p>

            </div>
            <P class="border border-gray-200"></P>
            <input id="editprofile_id" class="hidden" value="{{ $profile->user_id}}"> 

            <div class = "flex relative rounded-lg border mt-[4em] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'email.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    ชื่อผู้ใช้ :
                    <div class=" ">
                    <input id="editprofile_username" class="text-gray-500 font-light w-[30em]"  type="username" name="username" placeholder="ชื่อผู้ใช้" value="{{ $profile->username }}" readonly> 
                    </div>
                </div>
            </div> 

            <div class = "flex relative rounded-lg border mt-[5px] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'users.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    ชื่อ :
                    <div class=" ">
                        <input id="editprofile_name" class="text-gray-500 font-light w-[30em]"  type="name" name="name" placeholder="ชื่อนามสกุล" value="{{ $profile->firstname}}"> 
                    </div>
                </div>
            </div>

            <div class = "flex relative rounded-lg border mt-[5px] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'users.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    นามสกุล :
                    <div class=" ">
                    <input id="editprofile_lastname" class="text-gray-500 font-light w-[30em]"  type="name" name="name" placeholder="นามสกุล" value="{{ $profile->lastname}}"> 
                    </div>
                </div>
            
            </div>

            <div class = "flex relative rounded-lg border mt-[5px] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'tell.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    เบอร์โทร :
                    <div class=" ">
                    <input id="editprofile_tel" class="text-gray-500 font-light w-[30em]"  type="tel" name="tel" placeholder="เบอร์โทร" value="{{ $profile->tell }}"> 
                    </div>
                </div>
            
            </div>
            <button onClick="SubmitProfileEdit()" class="flex ml-[45em] mt-[1em] bg-green-800 text-white py-2 px-4 rounded items-center">บันทึก<img src="{{ URL('/picture/'.'diskette.png') }}"class="ml-1 w-5 h-5 "></button>
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
                    <input id="editprofile_password" class="font-light w-[30em]"  type="password" name="password" placeholder="รหัสผ่าน"> 
                    </div>
                </div>
            </div>

            <div class = "flex relative rounded-lg border mt-[5px] mx-auto w-[50em]"><img src="{{ URL('/picture/'.'unlock.png') }}"class="mx-3 my-3 w-12 h-12 ">
                <div class="mt-2">
                    ยืนยันรหัสผ่าน :
                    <div class=" ">
                    <input id="editprofile_confirmpassword" class="font-light w-[30em]"  type="password" name="confirmpassword" placeholder="ยืนยันรหัสผ่าน"> 
                    </div>
                </div>          
            </div>
            <button onClick="SubmitProfileEditPassword()" class="flex ml-[45em] mt-[1em] bg-blue-900 text-white py-2 px-4 rounded items-center">บันทึก<img src="{{ URL('/picture/'.'check-mark.png') }}"class="ml-1 w-5 h-5 "></button>
         </div>
         <script>
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
                $("#account_image").attr("src", src);
                _image64_single = src;
            }
            // END GET SINGLE IMAGE BASE64

         function SubmitProfileEdit() {
            console.log('value = ' + document.getElementById("editprofile_name").value);
                fetch("{{ Route('SubmitProfileEdit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            user_id: document.getElementById("editprofile_id").value,
                            password: document.getElementById("editprofile_password").value,
                            firstname: document.getElementById("editprofile_name").value,
                            lastname: document.getElementById("editprofile_lastname").value,
                            tell: document.getElementById("editprofile_tel").value,
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

            function SubmitProfileEditPassword() {
                fetch("{{ Route('SubmitProfileEditPassword') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    body:JSON.stringify(
                        {
                            user_id: document.getElementById("editprofile_id").value,
                            password: document.getElementById("editprofile_password").value,
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

@endsection