<title>Home | Puenmeaw</title>

@extends('components/LayoutUser')

@section('Content')
        <div class="modeal border border-gray-300 relative mt-4 flex items-center py-3">    
                <button class="absolute border border-gray-400 flex w-fit mt-2 mb-2 rounded-lg px-2 py-1 ml-7 ">
                        <img src="{{ URL('/picture/'.'arrow-right.png') }}" alt="" class=" w-[20px] h-[20px] mb-[3px] mt-[3px] " alt="logo"/>      
                        <span class="ml-1.5">กลับ</span>
                </button>  
                <div class= " flex mx-auto text-xl">
                    <span>ประวัติการชำระเงิน</span>
                </div>
            </div>
                   
        </div> 
            <div class=" items-center justify-center flex ">
                <div class="mt-[8em] w-fit h-auto  bg-grey-lighter border-2 border-gray-300 border-dashed bg-gray-100 py-[2em] px-[10em] shadow-lg">
                    <label class="w-64 flex flex-col items-center px-4 py-6 bg-gray-300 text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">เพิ่มแมวของคุณ </span>
                       
                    </label>
                </div>     
            </div>

            <!-- start_modal_addcat -->
            <div id="modal-details-room" class="modal hidden1 fixed z-[100] flex my-auto left-0 top-0 w-[100%] h-[100%] overflow-auto  ">
                <div class="modal-content bg-white m-auto p-[10px] rounded-md drop-shadow-xl w-[50%] max-md:w-[100%] grid grid-cols-3">
                        <div class="flex items-center">
                            <span id="details-close" class="text-gray-500 text-[30px] font-medium absolute top-0 right-0 mr-4 hover:text-indigo-600 cursor-pointer">&times;</span>           
                        </div>
                      
                        <!-- body -->
                        <div class="">
                         <p class="border border-red-300 w-full flex ">s </p>
                        </div>
                    </div>        
                </div>
            </div>
@endsection