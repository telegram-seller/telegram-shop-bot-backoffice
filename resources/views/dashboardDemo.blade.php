@extends('layouts.main')
@section('page')
    <div class="w-screen h-screen flex text-center">
        <div class="w-[400px] h-full bg-gray-200 text-white">
            <div class="h-[50px] bg-gray-900 flex justify-start items-center">
                <div class="px-[20px]"></div>
                <h3 class="font-bold text-xl">Admin Dashboard</h3>
            </div>
            <div class="h-[calc(100vh-50px)] bg-gray-800 py-[20px]">
                <div class="px-[20px] flex flex-col space-y-[10px]">
                    <a href="#" class="inline-flex relative items-center py-[10px] px-[10px] w-full">
                        <i class="bi bi-chat px-[10px]"></i>
                        <span>Mensagens</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full h-full bg-gray-400">
            <div class="h-[50px] bg-gray-900 flex justify-end">
                <div>
                    <div class="bg-gray-900 text-white flex items-center px-8 cursor-pointer h-full" onclick="dropdown()">
                        <h4 class="pr-2">Nome do usuário</h4>
                        <i class="bi bi-caret-down-fill text-sm rotate-180" id="arrow"></i>
                    </div>
                    <div class="bg-gray-900 pb-3 text-white flex flex-col items-end" id="submenu">
                        <a href="#" class="text-red flex items-center px-8 pt-1">
                            <i class="bi bi-person-fill text-sm"></i>
                            <h4 class="px-2">Meus Dados</h4>
                        </a>
                        <a href="#" class="text-red flex items-center px-8 pt-1">
                            <i class="bi bi-box-arrow-in-right text-sm"></i>
                            <h4 class="px-2">Logout</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-[calc(100vh-50px)] bg-white">
            </div>
        </div>
    </div>


<script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }

    dropdown();
</script>
@endsection