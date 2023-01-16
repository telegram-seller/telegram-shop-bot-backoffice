<div class="font-[Poppins] sidebar fixed top-0 bottom-0 lg:left-0 left-[300px] p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
    <div class="text-gray-100 text-x1">
        <div class="p-2 5 mt-1 flex items-center">
            <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">Tailwindbar</h1>
            <i class="bi bi-x ml-20 cursor-pointer lg:hidden"></i>
        </div>
        <hr class="my-2 text-gray-600">
    </div>

    <div class="p-2 5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
        <i class="bi bi-search text-sm"></i>
        <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none">
    </div>

    <div class="p-2 5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200">Home</span>
    </div>

    <div class="p-2 5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200">Bookmark</span>
    </div>

    <hr class="my-4 text-gray-600">

    <div class="p-2 5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown()">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200">Chatbox</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>

    <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-gray-200" id="submenu">
        <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Social</h1>
        <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Personal</h1>
        <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Friends</h1>
    </div>

    <div class="p-2 5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-200">Logout</span>
    </div>

</div>

<script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }

    // dropdown();
</script>