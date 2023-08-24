<!-- CONTENT -->
<div class = "px-2 pt-20 pb-4 ml-12 duration-500 ease-in-out transform content md:px-5 ">
    @include('layouts.religious-menu')

<!-- CONTENT -->
    <ul class="inline-flex items-center gap-6 px-5 py-3 my-6 mb-2 text-xs font-semibold tracking-wider text-black bg-white shadow rounded-3xl">
        <a href="{{route('religious-groups')}}" class="relative nav active transition duration-300 ease-in-out hover:-translate-y-1 {{ request()->routeIs('events.index') ? 'text-red-500 ' : '' }}">
            <li class="font-bold capitalize">Champ List</li>
            <div class="nav-underline"></div>
        </a>
        <a href="{{route('religiousname.religiousname')}}" class="relative nav active transition duration-300 ease-in-out hover:-translate-y-1 {{ request()->routeIs('events.index') ? 'text-red-500 ' : '' }}">
            <li class="font-bold capitalize">Champ Name</li>
            <div class="nav-underline"></div>
        </a>
        <a href="{{route('religiousmonitoring.religiousmonitoring')}}" class="relative nav active transition duration-300 ease-in-out hover:-translate-y-1 {{ request()->routeIs('events.index') ? 'text-red-500 ' : '' }}">
            <li class="font-bold capitalize">Monitoring</li>
            <div class="nav-underline"></div>
        </a>
    </ul>

    <div class="flex my-6">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
    </div>

    <div class="w-full h-full p-6 mt-5 bg-white border border-gray-200 rounded-lg shadow ">
    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>


</div>
