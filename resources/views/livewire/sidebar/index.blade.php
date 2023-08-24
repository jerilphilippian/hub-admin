<div>
    <!-- component -->
<!-- full tailwind config using javascript -->
<!-- https://github.com/neurolinker/popice -->

<body class = "body bg-white dark:bg-[#0F172A]">
    <aside class = "w-60 -translate-x-48 fixed top-0 transition transform ease-in-out duration-1000 z-50 flex h-screen bg-[#1E293B] ">
        <!-- open sidebar button -->
        <div class = "max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-between border-4 border-white dark:border-[#0F172A] bg-[#1E293B]  absolute top-2 rounded-full h-12">

            <div class="flex items-center pl-4 space-x-2 ">
                <div>
                <div onclick="setDark('dark')" class="moon text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M1160 4366 c-106 -27 -181 -92 -221 -192 l-24 -59 -3 -1799 c-1 -990 1 -1803 5 -1807 5 -3 101 54 216 128 l207 135 0 1553 c0 1234 3 1554 13 1558 12 4 149 -23 217 -42 128 -37 178 -54 285 -96 583 -226 1132 -664 1266 -1008 56 -146 48 -250 -31 -412 -44 -88 -83 -140 -201 -262 -72 -75 -95 -113 -69 -113 5 0 80 46 167 101 87 56 228 146 313 200 85 55 234 150 330 212 96 62 279 180 405 261 127 81 234 151 238 155 4 4 -84 56 -195 116 -112 59 -223 119 -248 133 -25 14 -205 110 -400 214 -195 105 -373 200 -395 213 -22 12 -80 44 -130 70 -49 26 -184 98 -300 160 -427 228 -504 269 -744 389 -136 67 -282 135 -326 150 -154 54 -277 67 -375 42z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        version="1.0"
                        class="mb-4 ml-2 w-7 h-7"
                        viewBox="0 0 509.000000 490.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,490.000000) scale(0.100000,-0.100000)"
                        fill="red"
                        stroke="none">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M1160 4366 c-106 -27 -181 -92 -221 -192 l-24 -59 -3 -1799 c-1 -990 1 -1803 5 -1807 5 -3 101 54 216 128 l207 135 0 1553 c0 1234 3 1554 13 1558 12 4 149 -23 217 -42 128 -37 178 -54 285 -96 583 -226 1132 -664 1266 -1008 56 -146 48 -250 -31 -412 -44 -88 -83 -140 -201 -262 -72 -75 -95 -113 -69 -113 5 0 80 46 167 101 87 56 228 146 313 200 85 55 234 150 330 212 96 62 279 180 405 261 127 81 234 151 238 155 4 4 -84 56 -195 116 -112 59 -223 119 -248 133 -25 14 -205 110 -400 214 -195 105 -373 200 -395 213 -22 12 -80 44 -130 70 -49 26 -184 98 -300 160 -427 228 -504 269 -744 389 -136 67 -282 135 -326 150 -154 54 -277 67 -375 42z"/>
                        </g>
                        </svg>
                </div>
                <div onclick="setDark('light')" class = "sun hidden text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                      </svg>
                </div>
            </div >
                {{-- <div class = "text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </div> --}}
            </div>
            <div  class = "flex items-center py-1 pl-10 pr-2 space-x-3 text-white bg-red-500 rounded-full group">
                <div class= "mr-12 text-[12px] duration-300 ease-in-out transform">
                    Champ Admin
                </div>
            </div>
        </div>
        <div onclick="openNav()" type="button" class ="cursor-pointer -right-6 transition transform ease-in-out duration-500 flex border-4 border-white dark:border-[#0F172A] bg-[#1E293B] dark:hover:bg-blue-500 hover:bg-red-500 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
        </div>
        <!-- MAX SIDEBAR-->
        <div type="button" class= "cursor-pointer max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
            <div class =  "hover:ml-4 w-full text-white hover:text-red-400 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" strokeWidth={1.5} stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9" />
                </svg>
                <div>
                    <a href="{{route('index')}}">Dashboard</a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-red-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                </svg>
                <div>
                    <a href="{{route('user-account.user-account')}}">User Account</a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-red-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512.000000 512.000000" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3375 4685 c-84 -18 -123 -35 -449 -194 l-289 -141 -803 0 -804 0 -453 110 c-249 61 -467 110 -484 110 -19 0 -44 -10 -62 -26 -27 -23 -31 -32 -31 -77 1 -54 11 -76 45 -94 11 -6 227 -62 480 -125 l460 -113 597 -5 597 -5 -431 -210 c-238 -115 -447 -223 -466 -239 -50 -44 -73 -97 -74 -171 0 -82 34 -147 117 -222 210 -192 470 -293 755 -293 200 0 274 20 734 199 142 56 263 101 270 101 21 0 1276 -1277 1291 -1314 8 -20 15 -58 15 -86 0 -128 -100 -229 -228 -230 -61 0 -103 15 -151 56 -48 40 -118 41 -157 3 -38 -39 -43 -95 -10 -139 48 -65 66 -112 66 -175 0 -106 -72 -197 -179 -225 -80 -21 -156 7 -231 85 -73 76 -123 92 -180 58 -55 -32 -67 -111 -25 -161 82 -98 85 -221 7 -312 -47 -55 -104 -83 -172 -84 -72 0 -120 24 -193 97 -33 32 -71 63 -85 68 -67 25 -142 -28 -142 -100 0 -28 10 -51 39 -90 50 -67 68 -134 51 -199 -24 -95 -87 -160 -180 -182 -41 -10 -58 -9 -105 5 -47 13 -70 29 -141 97 l-84 80 57 62 c81 89 116 169 121 276 4 103 -18 177 -77 255 -63 84 -178 145 -271 145 l-38 0 -4 58 c-5 72 -44 157 -98 216 -49 53 -148 105 -211 112 -89 10 -86 8 -92 74 -14 156 -155 305 -307 325 -91 12 -90 12 -90 54 0 94 -61 208 -144 271 -116 88 -277 105 -406 43 -38 -18 -95 -58 -137 -97 l-72 -67 -205 36 c-240 41 -255 42 -290 14 -25 -20 -27 -26 -24 -87 4 -90 11 -94 233 -133 l180 -32 0 -101 c0 -92 3 -106 30 -159 57 -114 174 -196 303 -213 l50 -6 12 -66 c31 -178 162 -304 339 -328 55 -7 54 -5 65 -89 8 -61 61 -158 112 -205 59 -54 144 -93 215 -98 l56 -4 5 -63 c10 -117 87 -227 203 -288 58 -31 65 -32 182 -32 l121 -1 100 -96 c116 -111 191 -154 300 -170 240 -38 459 119 504 360 l11 60 82 -6 c168 -10 304 53 391 182 36 53 74 158 74 206 l0 27 98 -5 c81 -3 107 -1 161 18 170 57 277 197 289 375 l5 85 56 0 c117 0 229 49 310 135 85 89 124 196 119 323 -2 69 -1 74 28 103 29 29 39 31 200 54 234 34 229 33 258 60 21 20 26 33 26 75 0 57 -26 94 -74 106 -15 3 -129 -10 -258 -30 -214 -34 -235 -39 -261 -63 l-28 -27 -667 667 c-577 577 -672 668 -702 673 -29 4 -105 -22 -410 -139 -390 -150 -422 -160 -530 -177 -134 -20 -274 -3 -426 51 -100 37 -235 123 -307 197 l-48 49 73 35 c139 68 1034 506 1383 678 193 95 383 188 424 207 141 65 259 78 394 44 97 -25 145 -50 212 -111 66 -60 166 -112 272 -142 97 -27 261 -29 375 -5 42 9 174 37 293 62 119 25 224 49 235 55 32 17 50 52 50 98 0 57 -41 102 -93 102 -32 0 -397 -74 -521 -106 -168 -43 -361 2 -471 111 -56 54 -183 118 -289 145 -94 24 -276 26 -371 5z m-2377 -2462 c50 -41 74 -84 74 -137 0 -62 -18 -90 -120 -188 -79 -76 -95 -87 -135 -93 -95 -14 -187 62 -195 161 -4 48 -1 59 31 106 41 61 128 148 172 172 48 26 126 16 173 -21z m400 -400 c50 -41 74 -84 74 -137 0 -59 -11 -78 -101 -169 -88 -91 -117 -109 -176 -109 -108 0 -201 115 -174 215 12 45 142 187 199 218 53 29 129 21 178 -18z m373 -383 c73 -38 116 -134 90 -202 -8 -22 -179 -198 -211 -218 -23 -15 -98 -12 -129 4 -73 38 -119 129 -100 199 12 45 142 188 199 217 46 25 101 25 151 0z m389 -389 c87 -46 123 -147 82 -227 -11 -21 -56 -73 -99 -116 -95 -92 -139 -110 -210 -83 -85 33 -132 111 -118 196 6 32 25 57 112 144 103 103 106 105 152 105 26 0 61 -8 81 -19z" />
                </svg>
                <div>
                    <a href="{{route('employee-management')}}">Employee Management</a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-red-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1101.000000 1024.000000" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <g transform="translate(0.000000,1024.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3095 10124 c-947 -62 -1815 -519 -2371 -1249 -324 -426 -526 -950 -596 -1550 -16 -141 -16 -586 0 -730 55 -478 181 -901 391 -1310 197 -385 364 -607 734 -980 l209 -210 2 -155 c2 -120 8 -172 24 -231 105 -387 442 -661 843 -686 l96 -6 6 -101 c28 -466 397 -833 868 -863 l96 -6 6 -101 c28 -466 395 -832 868 -863 l96 -6 6 -101 c20 -339 219 -630 530 -776 133 -62 237 -84 397 -84 150 1 225 14 346 65 151 63 206 109 597 498 203 201 395 399 428 439 78 96 152 249 180 370 22 92 22 94 48 87 14 -3 94 -9 176 -12 169 -6 262 10 395 66 165 71 331 216 424 369 81 135 136 330 136 480 l0 47 88 3 c226 7 436 98 601 261 168 165 262 371 277 610 l7 96 85 3 c235 8 442 100 612 272 145 147 236 334 261 541 l12 96 80 89 c389 434 646 933 770 1494 131 591 89 1233 -119 1806 -88 244 -207 480 -347 689 -517 772 -1255 1225 -2202 1352 -186 25 -656 24 -850 0 -603 -78 -1204 -302 -1642 -613 -34 -24 -65 -44 -68 -44 -4 0 -41 32 -83 71 -520 480 -1135 766 -1842 854 -124 15 -459 26 -575 19z m415 -474 c621 -53 1225 -316 1651 -718 l70 -66 -1088 -1088 -1088 -1088 105 -106 c174 -176 293 -266 475 -359 258 -132 570 -193 853 -167 218 19 384 64 571 153 255 121 321 177 945 801 296 296 541 538 545 538 3 0 652 -647 1442 -1437 1409 -1412 1436 -1439 1468 -1509 76 -171 43 -357 -90 -498 -70 -75 -153 -120 -256 -137 -93 -15 -174 -1 -273 47 -73 36 -109 71 -1110 1069 -569 568 -1049 1040 -1066 1049 -147 73 -334 -43 -334 -207 0 -92 -44 -44 1075 -1167 1031 -1035 1052 -1056 1084 -1127 73 -163 44 -350 -76 -483 -141 -156 -333 -198 -526 -114 -58 26 -133 98 -1117 1080 l-1055 1052 -59 17 c-50 15 -68 16 -112 6 -145 -33 -224 -187 -163 -321 15 -35 254 -279 1063 -1090 1112 -1115 1077 -1077 1105 -1201 32 -138 -9 -291 -106 -399 -175 -194 -447 -209 -643 -35 -28 25 -55 45 -59 45 -5 0 -41 38 -80 84 -169 201 -402 319 -658 333 l-103 6 0 62 c0 270 -140 548 -360 714 -154 116 -321 178 -507 188 l-103 6 0 62 c0 270 -140 548 -360 714 -154 116 -321 178 -507 188 l-103 6 0 62 c0 338 -210 665 -524 814 -225 108 -496 120 -723 31 -159 -61 -200 -95 -629 -522 l-400 -398 -170 172 c-198 202 -270 289 -406 493 -263 393 -434 857 -505 1365 -27 194 -24 617 6 810 121 795 500 1393 1156 1826 506 334 1141 496 1745 444z m4501 -270 c519 -52 977 -225 1359 -513 122 -93 320 -284 427 -415 255 -309 457 -712 554 -1107 199 -812 13 -1695 -499 -2357 l-44 -57 -48 57 c-89 105 -3075 3080 -3108 3097 -48 23 -124 30 -179 15 -45 -12 -92 -57 -698 -660 -357 -356 -675 -665 -705 -687 -307 -221 -662 -290 -1010 -197 -87 23 -270 102 -313 135 -16 13 71 102 960 990 991 988 1036 1030 1255 1177 420 282 955 471 1474 521 129 12 455 13 575 1z m-4873 -4335 c182 -43 320 -187 353 -370 18 -101 -6 -217 -66 -310 -18 -27 -205 -221 -416 -431 -350 -347 -390 -383 -448 -408 -245 -108 -546 38 -616 298 -25 93 -17 211 21 297 25 59 60 97 423 462 336 338 405 402 456 428 99 49 187 59 293 34z m953 -965 c137 -26 264 -122 324 -243 66 -133 68 -253 9 -390 -25 -56 -64 -99 -417 -454 -270 -271 -405 -400 -439 -418 -253 -138 -578 2 -653 279 -25 93 -17 211 21 297 25 59 60 97 423 462 336 338 405 402 456 428 93 46 177 58 276 39z m970 -970 c138 -26 271 -128 330 -254 59 -126 60 -248 3 -379 -25 -56 -64 -99 -417 -454 -270 -271 -405 -400 -439 -418 -207 -113 -469 -44 -598 157 -84 129 -93 296 -25 436 35 73 59 98 419 457 398 397 423 418 537 449 65 18 118 19 190 6z m970 -970 c138 -26 271 -128 330 -254 58 -124 59 -250 3 -378 -25 -57 -63 -98 -413 -451 -212 -214 -405 -400 -429 -414 -207 -123 -480 -56 -612 149 -84 129 -93 296 -25 436 35 73 59 99 419 458 400 399 429 423 541 450 63 16 118 17 186 4z" />
                </svg>
                <div>
                    <a href="{{route('religious-groups')}}">Cham Groups</a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-red-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill='none' viewBox="0 0 20 19" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/> <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                </svg>
                <div>
                    <a href="{{route('group-management')}}">Group Management</a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-red-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill='none' viewBox="0 0 18 20" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571" />
                </svg>
                <div>
                    <a href="{{route('posts-management')}}">Posts Management</a>
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-white hover:text-red-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill='none' viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                </svg>
                <div>
                    <a href="{{route('inquiry-page')}}">Inquiry Page</a>
                </div>
            </div>



        </div>
        <!-- MINI SIDEBAR-->
        <div type="button" class= "cursor-pointer mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-red-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{route('index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" strokeWidth={1.5} stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9" />
                </svg>
            </a>
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-red-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{route('user-account.user-account')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                </svg>
                </a>
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-red-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{route('employee-management')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 512.000000 512.000000" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3375 4685 c-84 -18 -123 -35 -449 -194 l-289 -141 -803 0 -804 0 -453 110 c-249 61 -467 110 -484 110 -19 0 -44 -10 -62 -26 -27 -23 -31 -32 -31 -77 1 -54 11 -76 45 -94 11 -6 227 -62 480 -125 l460 -113 597 -5 597 -5 -431 -210 c-238 -115 -447 -223 -466 -239 -50 -44 -73 -97 -74 -171 0 -82 34 -147 117 -222 210 -192 470 -293 755 -293 200 0 274 20 734 199 142 56 263 101 270 101 21 0 1276 -1277 1291 -1314 8 -20 15 -58 15 -86 0 -128 -100 -229 -228 -230 -61 0 -103 15 -151 56 -48 40 -118 41 -157 3 -38 -39 -43 -95 -10 -139 48 -65 66 -112 66 -175 0 -106 -72 -197 -179 -225 -80 -21 -156 7 -231 85 -73 76 -123 92 -180 58 -55 -32 -67 -111 -25 -161 82 -98 85 -221 7 -312 -47 -55 -104 -83 -172 -84 -72 0 -120 24 -193 97 -33 32 -71 63 -85 68 -67 25 -142 -28 -142 -100 0 -28 10 -51 39 -90 50 -67 68 -134 51 -199 -24 -95 -87 -160 -180 -182 -41 -10 -58 -9 -105 5 -47 13 -70 29 -141 97 l-84 80 57 62 c81 89 116 169 121 276 4 103 -18 177 -77 255 -63 84 -178 145 -271 145 l-38 0 -4 58 c-5 72 -44 157 -98 216 -49 53 -148 105 -211 112 -89 10 -86 8 -92 74 -14 156 -155 305 -307 325 -91 12 -90 12 -90 54 0 94 -61 208 -144 271 -116 88 -277 105 -406 43 -38 -18 -95 -58 -137 -97 l-72 -67 -205 36 c-240 41 -255 42 -290 14 -25 -20 -27 -26 -24 -87 4 -90 11 -94 233 -133 l180 -32 0 -101 c0 -92 3 -106 30 -159 57 -114 174 -196 303 -213 l50 -6 12 -66 c31 -178 162 -304 339 -328 55 -7 54 -5 65 -89 8 -61 61 -158 112 -205 59 -54 144 -93 215 -98 l56 -4 5 -63 c10 -117 87 -227 203 -288 58 -31 65 -32 182 -32 l121 -1 100 -96 c116 -111 191 -154 300 -170 240 -38 459 119 504 360 l11 60 82 -6 c168 -10 304 53 391 182 36 53 74 158 74 206 l0 27 98 -5 c81 -3 107 -1 161 18 170 57 277 197 289 375 l5 85 56 0 c117 0 229 49 310 135 85 89 124 196 119 323 -2 69 -1 74 28 103 29 29 39 31 200 54 234 34 229 33 258 60 21 20 26 33 26 75 0 57 -26 94 -74 106 -15 3 -129 -10 -258 -30 -214 -34 -235 -39 -261 -63 l-28 -27 -667 667 c-577 577 -672 668 -702 673 -29 4 -105 -22 -410 -139 -390 -150 -422 -160 -530 -177 -134 -20 -274 -3 -426 51 -100 37 -235 123 -307 197 l-48 49 73 35 c139 68 1034 506 1383 678 193 95 383 188 424 207 141 65 259 78 394 44 97 -25 145 -50 212 -111 66 -60 166 -112 272 -142 97 -27 261 -29 375 -5 42 9 174 37 293 62 119 25 224 49 235 55 32 17 50 52 50 98 0 57 -41 102 -93 102 -32 0 -397 -74 -521 -106 -168 -43 -361 2 -471 111 -56 54 -183 118 -289 145 -94 24 -276 26 -371 5z m-2377 -2462 c50 -41 74 -84 74 -137 0 -62 -18 -90 -120 -188 -79 -76 -95 -87 -135 -93 -95 -14 -187 62 -195 161 -4 48 -1 59 31 106 41 61 128 148 172 172 48 26 126 16 173 -21z m400 -400 c50 -41 74 -84 74 -137 0 -59 -11 -78 -101 -169 -88 -91 -117 -109 -176 -109 -108 0 -201 115 -174 215 12 45 142 187 199 218 53 29 129 21 178 -18z m373 -383 c73 -38 116 -134 90 -202 -8 -22 -179 -198 -211 -218 -23 -15 -98 -12 -129 4 -73 38 -119 129 -100 199 12 45 142 188 199 217 46 25 101 25 151 0z m389 -389 c87 -46 123 -147 82 -227 -11 -21 -56 -73 -99 -116 -95 -92 -139 -110 -210 -83 -85 33 -132 111 -118 196 6 32 25 57 112 144 103 103 106 105 152 105 26 0 61 -8 81 -19z" />
                </svg>
                </a>
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-red-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{route('religious-groups')}}">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1101.000000 1024.000000" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <g transform="translate(0.000000,1024.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3095 10124 c-947 -62 -1815 -519 -2371 -1249 -324 -426 -526 -950 -596 -1550 -16 -141 -16 -586 0 -730 55 -478 181 -901 391 -1310 197 -385 364 -607 734 -980 l209 -210 2 -155 c2 -120 8 -172 24 -231 105 -387 442 -661 843 -686 l96 -6 6 -101 c28 -466 397 -833 868 -863 l96 -6 6 -101 c28 -466 395 -832 868 -863 l96 -6 6 -101 c20 -339 219 -630 530 -776 133 -62 237 -84 397 -84 150 1 225 14 346 65 151 63 206 109 597 498 203 201 395 399 428 439 78 96 152 249 180 370 22 92 22 94 48 87 14 -3 94 -9 176 -12 169 -6 262 10 395 66 165 71 331 216 424 369 81 135 136 330 136 480 l0 47 88 3 c226 7 436 98 601 261 168 165 262 371 277 610 l7 96 85 3 c235 8 442 100 612 272 145 147 236 334 261 541 l12 96 80 89 c389 434 646 933 770 1494 131 591 89 1233 -119 1806 -88 244 -207 480 -347 689 -517 772 -1255 1225 -2202 1352 -186 25 -656 24 -850 0 -603 -78 -1204 -302 -1642 -613 -34 -24 -65 -44 -68 -44 -4 0 -41 32 -83 71 -520 480 -1135 766 -1842 854 -124 15 -459 26 -575 19z m415 -474 c621 -53 1225 -316 1651 -718 l70 -66 -1088 -1088 -1088 -1088 105 -106 c174 -176 293 -266 475 -359 258 -132 570 -193 853 -167 218 19 384 64 571 153 255 121 321 177 945 801 296 296 541 538 545 538 3 0 652 -647 1442 -1437 1409 -1412 1436 -1439 1468 -1509 76 -171 43 -357 -90 -498 -70 -75 -153 -120 -256 -137 -93 -15 -174 -1 -273 47 -73 36 -109 71 -1110 1069 -569 568 -1049 1040 -1066 1049 -147 73 -334 -43 -334 -207 0 -92 -44 -44 1075 -1167 1031 -1035 1052 -1056 1084 -1127 73 -163 44 -350 -76 -483 -141 -156 -333 -198 -526 -114 -58 26 -133 98 -1117 1080 l-1055 1052 -59 17 c-50 15 -68 16 -112 6 -145 -33 -224 -187 -163 -321 15 -35 254 -279 1063 -1090 1112 -1115 1077 -1077 1105 -1201 32 -138 -9 -291 -106 -399 -175 -194 -447 -209 -643 -35 -28 25 -55 45 -59 45 -5 0 -41 38 -80 84 -169 201 -402 319 -658 333 l-103 6 0 62 c0 270 -140 548 -360 714 -154 116 -321 178 -507 188 l-103 6 0 62 c0 270 -140 548 -360 714 -154 116 -321 178 -507 188 l-103 6 0 62 c0 338 -210 665 -524 814 -225 108 -496 120 -723 31 -159 -61 -200 -95 -629 -522 l-400 -398 -170 172 c-198 202 -270 289 -406 493 -263 393 -434 857 -505 1365 -27 194 -24 617 6 810 121 795 500 1393 1156 1826 506 334 1141 496 1745 444z m4501 -270 c519 -52 977 -225 1359 -513 122 -93 320 -284 427 -415 255 -309 457 -712 554 -1107 199 -812 13 -1695 -499 -2357 l-44 -57 -48 57 c-89 105 -3075 3080 -3108 3097 -48 23 -124 30 -179 15 -45 -12 -92 -57 -698 -660 -357 -356 -675 -665 -705 -687 -307 -221 -662 -290 -1010 -197 -87 23 -270 102 -313 135 -16 13 71 102 960 990 991 988 1036 1030 1255 1177 420 282 955 471 1474 521 129 12 455 13 575 1z m-4873 -4335 c182 -43 320 -187 353 -370 18 -101 -6 -217 -66 -310 -18 -27 -205 -221 -416 -431 -350 -347 -390 -383 -448 -408 -245 -108 -546 38 -616 298 -25 93 -17 211 21 297 25 59 60 97 423 462 336 338 405 402 456 428 99 49 187 59 293 34z m953 -965 c137 -26 264 -122 324 -243 66 -133 68 -253 9 -390 -25 -56 -64 -99 -417 -454 -270 -271 -405 -400 -439 -418 -253 -138 -578 2 -653 279 -25 93 -17 211 21 297 25 59 60 97 423 462 336 338 405 402 456 428 93 46 177 58 276 39z m970 -970 c138 -26 271 -128 330 -254 59 -126 60 -248 3 -379 -25 -56 -64 -99 -417 -454 -270 -271 -405 -400 -439 -418 -207 -113 -469 -44 -598 157 -84 129 -93 296 -25 436 35 73 59 98 419 457 398 397 423 418 537 449 65 18 118 19 190 6z m970 -970 c138 -26 271 -128 330 -254 58 -124 59 -250 3 -378 -25 -57 -63 -98 -413 -451 -212 -214 -405 -400 -429 -414 -207 -123 -480 -56 -612 149 -84 129 -93 296 -25 436 35 73 59 99 419 458 400 399 429 423 541 450 63 16 118 17 186 4z" />
                </svg>
                </a>
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-red-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{route('group-management')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill='none' viewBox="0 0 20 19" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/> <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                </svg>
                </a>
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-red-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{route('posts-management')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill='none' viewBox="0 0 18 20" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571" />
                </svg>
                </a>
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-red-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <a href="{{route('inquiry-page')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill='none' viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                </svg>
                </a>
            </div>

        </div>

    </aside>
</div>
