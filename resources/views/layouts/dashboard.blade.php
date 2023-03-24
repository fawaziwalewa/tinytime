<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Vite::asset('resources/images/stopwatch.png') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
   <!-- Custom Stylesheet and JS -->
   @vite(['resources/js/app.js', 'resources/vendor/css/main.css', 'resources/vendor/css/jquery.classycountdown.min.css'])
   @vite('resources/css/app.css')
   <script src="https://code.jquery.com/jquery-3.6.1.min.js"
       integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @livewireStyles
    @yield('header')
</head>

<body class="flex justify-center px-3 py-5 font-poppins min-h-screen">
    <main class="flex max-w-7xl w-full">
        {{-- Sidebar --}}
        <div class="bg-thanks-giving-primary rounded-lg min-h-full p-5 h-full w-52 sidebar grid content-between font-semibold">
            <a href="/" class="flex items-center">
                <svg class="w-9" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M44.0079 63.2503C54.6414 63.2503 63.2616 54.6318 63.2616 44.0003C63.2616 33.3688 54.6414 24.7503 44.0079 24.7503C33.3744 24.7503 24.7543 33.3688 24.7543 44.0003C24.7543 54.6318 33.3744 63.2503 44.0079 63.2503Z" fill="#DF9C63"/>
                    <path d="M44.0077 77C39.2612 77.0011 34.5704 75.9787 30.2551 74.0025C29.5913 73.6961 29.0763 73.1387 28.8236 72.4528C28.5708 71.7669 28.6009 71.0087 28.9073 70.345C29.2137 69.6813 29.7712 69.1664 30.4573 68.9137C31.1433 68.661 31.9017 68.6911 32.5655 68.9975C37.3552 71.1914 42.6743 71.9639 47.8903 71.2231C53.1063 70.4823 57.9999 68.2594 61.9889 64.8186C65.978 61.3778 68.8948 56.864 70.3924 51.8139C71.8901 46.7638 71.9056 41.39 70.4371 36.3313C68.9687 31.2726 66.078 26.7421 62.1089 23.2783C58.1397 19.8146 53.2592 17.5634 48.0475 16.7925C42.8358 16.0216 37.5123 16.7634 32.7101 18.9297C27.9079 21.096 23.8289 24.5956 20.9583 29.0124C20.7596 29.3158 20.5032 29.577 20.2035 29.7813C19.9039 29.9855 19.5669 30.1288 19.2119 30.2028C18.8569 30.2769 18.4907 30.2803 18.1344 30.2129C17.7781 30.1455 17.4385 30.0085 17.1351 29.8099C16.8317 29.6113 16.5704 29.3549 16.3661 29.0553C16.1618 28.7557 16.0185 28.4188 15.9444 28.0638C15.8704 27.7089 15.867 27.3428 15.9344 26.9865C16.0018 26.6303 16.1388 26.2908 16.3374 25.9874C19.4585 21.1973 23.7707 17.2999 28.8514 14.6773C33.9322 12.0547 39.6073 10.7967 45.3206 11.0266C51.034 11.2565 56.5896 12.9664 61.4431 15.9889C66.2966 19.0113 70.2815 23.2425 73.0074 28.268C75.7333 33.2934 77.1067 38.9407 76.9929 44.6564C76.8792 50.3722 75.2822 55.9603 72.3586 60.8734C69.4349 65.7864 65.2847 69.8558 60.3148 72.6828C55.3449 75.5098 49.7257 76.9975 44.0077 77Z" fill="black"/>
                    <path d="M46.7589 0H41.2579C39.0694 0 36.9706 0.869196 35.4231 2.41637C33.8756 3.96355 33.0063 6.06197 33.0063 8.25001V13.75C33.0063 14.4794 33.2961 15.1788 33.8119 15.6946C34.3277 16.2103 35.0273 16.5 35.7568 16.5H52.26C52.9894 16.5 53.689 16.2103 54.2049 15.6946C54.7207 15.1788 55.0105 14.4794 55.0105 13.75V8.25001C55.0105 6.06197 54.1411 3.96355 52.5937 2.41637C51.0462 0.869196 48.9474 0 46.7589 0ZM59.9064 31.2951C59.4526 30.7284 58.7931 30.3642 58.0717 30.2817C57.3504 30.1993 56.6257 30.4054 56.0557 30.8551L48.3267 37.0151C47.0392 36.1863 45.5396 35.7471 44.0084 35.7501C42.3764 35.7501 40.781 36.2339 39.4241 37.1404C38.0671 38.047 37.0095 39.3354 36.3849 40.8429C35.7604 42.3504 35.597 44.0092 35.9154 45.6096C36.2338 47.2099 37.0196 48.6799 38.1736 49.8337C39.3276 50.9875 40.7979 51.7732 42.3986 52.0916C43.9992 52.4099 45.6583 52.2465 47.1661 51.6221C48.6739 50.9977 49.9626 49.9402 50.8693 48.5835C51.776 47.2268 52.26 45.6318 52.26 44.0001C52.2564 43.0616 52.0888 42.1309 51.7649 41.2501L59.4663 35.0901C60.0172 34.6378 60.371 33.9894 60.4531 33.2814C60.5352 32.5735 60.3392 31.8613 59.9064 31.2951ZM24.7547 35.7501H8.25157C7.52209 35.7501 6.82248 36.0398 6.30666 36.5555C5.79084 37.0712 5.50105 37.7707 5.50105 38.5001C5.50105 39.2294 5.79084 39.9289 6.30666 40.4446C6.82248 40.9603 7.52209 41.2501 8.25157 41.2501H24.7547C25.4842 41.2501 26.1838 40.9603 26.6996 40.4446C27.2155 39.9289 27.5052 39.2294 27.5052 38.5001C27.5052 37.7707 27.2155 37.0712 26.6996 36.5555C26.1838 36.0398 25.4842 35.7501 24.7547 35.7501ZM24.7547 46.7501H2.75052C2.02104 46.7501 1.32143 47.0398 0.80561 47.5555C0.289786 48.0713 0 48.7707 0 49.5001C0 50.2294 0.289786 50.9289 0.80561 51.4446C1.32143 51.9604 2.02104 52.2501 2.75052 52.2501H24.7547C25.4842 52.2501 26.1838 51.9604 26.6996 51.4446C27.2155 50.9289 27.5052 50.2294 27.5052 49.5001C27.5052 48.7707 27.2155 48.0713 26.6996 47.5555C26.1838 47.0398 25.4842 46.7501 24.7547 46.7501ZM24.7547 57.7501H8.25157C7.52209 57.7501 6.82248 58.0398 6.30666 58.5555C5.79084 59.0713 5.50105 59.7708 5.50105 60.5001C5.50105 61.2294 5.79084 61.9289 6.30666 62.4446C6.82248 62.9604 7.52209 63.2501 8.25157 63.2501H24.7547C25.4842 63.2501 26.1838 62.9604 26.6996 62.4446C27.2155 61.9289 27.5052 61.2294 27.5052 60.5001C27.5052 59.7708 27.2155 59.0713 26.6996 58.5555C26.1838 58.0398 25.4842 57.7501 24.7547 57.7501Z" fill="black"/>
                </svg>
                <span class="text-xl ml-2 sidebar-text">{{ config('app.name') }}</span>
            </a>
            <div class="sidebar-links">
                <a href="{{ route("dashboard") }}" class="flex rounded-lg p-2 bg-[#FCF1E2]">
                    <svg class="w-5" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 22.5H15.75C16.9875 22.5 18 21.4875 18 20.25V2.25C18 1.0125 16.9875 0 15.75 0H2.25C1.0125 0 0 1.0125 0 2.25V20.25C0 21.4875 1.0125 22.5 2.25 22.5ZM2.25 40.5H15.75C16.9875 40.5 18 39.4875 18 38.25V29.25C18 28.0125 16.9875 27 15.75 27H2.25C1.0125 27 0 28.0125 0 29.25V38.25C0 39.4875 1.0125 40.5 2.25 40.5ZM24.75 40.5H38.25C39.4875 40.5 40.5 39.4875 40.5 38.25V20.25C40.5 19.0125 39.4875 18 38.25 18H24.75C23.5125 18 22.5 19.0125 22.5 20.25V38.25C22.5 39.4875 23.5125 40.5 24.75 40.5ZM22.5 2.25V11.25C22.5 12.4875 23.5125 13.5 24.75 13.5H38.25C39.4875 13.5 40.5 12.4875 40.5 11.25V2.25C40.5 1.0125 39.4875 0 38.25 0H24.75C23.5125 0 22.5 1.0125 22.5 2.25Z" fill="black"/>
                    </svg>
                    <span class="ml-3 sidebar-text">Dashboard</span>
                </a>
                <a href="{{route("history")}}" class="flex rounded-lg p-2">
                    <svg class="w-5" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.25 36.0775C11.475 36.0775 4.5 29.2226 4.5 20.5987C4.5 11.9749 11.475 5.11999 20.25 5.11999C24.75 5.11999 29.025 7.11011 31.95 10.2059L27.9 10.8692C26.775 11.0904 25.875 12.196 26.1 13.5227C26.325 14.6284 27.225 15.2917 28.35 15.2917H28.8L38.25 13.5227C39.375 13.3016 40.275 12.196 40.05 10.8692L38.25 1.80311C38.025 0.697486 36.9 -0.187014 35.55 0.034111C34.425 0.255236 33.525 1.36086 33.75 2.68761L34.425 6.44674C30.6 2.90874 25.65 0.697486 20.25 0.697486C12.825 0.697486 6.3 4.67774 2.7 10.6481C0.9 13.7439 0 17.0607 0 20.5987C0 24.1367 0.9 27.4536 2.7 30.5494C4.5 33.6451 6.975 36.0775 10.125 37.8465C13.275 39.6155 16.65 40.5 20.25 40.5C21.15 40.5 22.05 39.8366 22.275 39.1732C22.5 38.9521 22.5 38.5099 22.5 38.2887C22.5 38.0676 22.5 37.6254 22.275 37.4043C22.05 36.7409 21.15 36.0775 20.25 36.0775Z" fill="black"/>
                        <path d="M38.25 22.81C39.4926 22.81 40.5 21.82 40.5 20.5988C40.5 19.3775 39.4926 18.3875 38.25 18.3875C37.0074 18.3875 36 19.3775 36 20.5988C36 21.82 37.0074 22.81 38.25 22.81Z" fill="black"/>
                        <path d="M37.755 30.603C38.3763 29.5453 38.0076 28.1929 36.9315 27.5823C35.8553 26.9717 34.4792 27.3341 33.8579 28.3917C33.2366 29.4493 33.6053 30.8017 34.6815 31.4123C35.7576 32.0229 37.1337 31.6606 37.755 30.603Z" fill="black"/>
                        <path d="M30.342 37.7788C31.4181 37.1682 31.7869 35.8158 31.1655 34.7582C30.5442 33.7006 29.1681 33.3382 28.092 33.9488C27.0158 34.5595 26.6471 35.9118 27.2684 36.9695C27.8898 38.0271 29.2658 38.3895 30.342 37.7788Z" fill="black"/>
                        <path d="M22.5 19.7143V13.965C22.5 12.6383 21.6 11.7538 20.25 11.7538C18.9 11.7538 18 12.6383 18 13.965V20.5988C18 21.2621 18.225 21.7044 18.675 22.1466L23.175 26.5691C23.625 27.0114 24.3 27.2325 24.75 27.2325C25.2 27.2325 25.875 27.0114 26.325 26.5691C27.225 25.6846 27.225 24.3579 26.325 23.4734L22.5 19.7143Z" fill="black"/>
                    </svg>
                    <span class="ml-3 sidebar-text">History</span>
                </a>
                <a href="{{route("profile")}}" class="flex rounded-lg p-2">
                    <svg class="w-5" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.25 40.5C31.4341 40.5 40.5 31.4341 40.5 20.25C40.5 9.06592 31.4341 0 20.25 0C9.06592 0 0 9.06592 0 20.25C0 31.4341 9.06592 40.5 20.25 40.5ZM26.325 16.2C26.325 17.8112 25.685 19.3564 24.5457 20.4957C23.4064 21.635 21.8612 22.275 20.25 22.275C18.6388 22.275 17.0936 21.635 15.9543 20.4957C14.815 19.3564 14.175 17.8112 14.175 16.2C14.175 14.5888 14.815 13.0436 15.9543 11.9043C17.0936 10.765 18.6388 10.125 20.25 10.125C21.8612 10.125 23.4064 10.765 24.5457 11.9043C25.685 13.0436 26.325 14.5888 26.325 16.2ZM8.1 30.375C9.51347 28.4875 11.3476 26.9556 13.4568 25.901C15.5659 24.8465 17.8919 24.2983 20.25 24.3C22.6081 24.2983 24.9341 24.8465 27.0432 25.901C29.1524 26.9556 30.9865 28.4875 32.4 30.375C30.9865 32.2625 29.1524 33.7944 27.0432 34.849C24.9341 35.9035 22.6081 36.4517 20.25 36.45C17.8919 36.4517 15.5659 35.9035 13.4568 34.849C11.3476 33.7944 9.51347 32.2625 8.1 30.375Z" fill="black"/>
                    </svg>    
                    <span class="ml-3 sidebar-text">User</span>
                </a>
                <a href="{{route("upgrade")}}" class="flex rounded-lg p-2">
                    <svg class="w-5 h-5" viewBox="0 0 36 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.1815 15.2294L19.9674 1.01529C18.6137 -0.33843 16.5831 -0.33843 15.2294 1.01529L1.01529 15.2294C-0.33843 16.5831 -0.33843 18.6137 1.01529 19.9674C2.36901 21.3211 4.39959 21.3211 5.75331 19.9674L17.5984 8.12233L29.4434 19.9674C30.1203 20.6442 30.7972 20.9827 31.8124 20.9827C32.8277 20.9827 33.5046 20.6442 34.1815 19.9674C35.5352 18.6137 35.5352 16.5831 34.1815 15.2294Z" fill="#DF9C63"/>
                        <path d="M34.1815 30.238L19.9674 16.024C18.6137 14.6702 16.5831 14.6702 15.2294 16.024L1.01529 30.238C-0.33843 31.5917 -0.33843 33.6223 1.01529 34.9761C2.36901 36.3298 4.39959 36.3298 5.75331 34.9761L17.5984 23.131L29.4434 34.9761C30.1203 35.6529 30.7972 35.9913 31.8124 35.9913C32.8277 35.9913 33.5046 35.6529 34.1815 34.9761C35.5352 33.6223 35.5352 31.5917 34.1815 30.238Z" fill="#A56D3F"/>
                        <path d="M34.1815 45.2467L19.9674 31.0326C18.6137 29.6789 16.5831 29.6789 15.2294 31.0326L1.01529 45.2467C-0.33843 46.6004 -0.33843 48.631 1.01529 49.9847C2.36901 51.3384 4.39959 51.3384 5.75331 49.9847L17.5984 38.1396L29.4434 49.9847C30.1203 50.6616 30.7972 51 31.8124 51C32.8277 51 33.5046 50.6616 34.1815 49.9847C35.5352 48.631 35.5352 46.6004 34.1815 45.2467Z" fill="#6C370B"/>
                    </svg>       
                    <span class="ml-3 sidebar-text">Upgrade</span>
                </a>
                <form action="{{route("logout")}}" method="POST" id="logout">
                    @csrf
                    <button type="submit" class="flex items-center rounded-lg p-2">
                        <svg class="w-5" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.275 19.35C40.05 19.125 40.05 18.9 39.825 18.675L33.075 11.925C32.175 11.025 30.825 11.025 29.925 11.925C29.025 12.825 29.025 14.175 29.925 15.075L32.85 18H22.5C21.15 18 20.25 18.9 20.25 20.25C20.25 21.6 21.15 22.5 22.5 22.5H32.85L29.925 25.425C29.025 26.325 29.025 27.675 29.925 28.575C30.375 29.025 31.05 29.25 31.5 29.25C31.95 29.25 32.625 29.025 33.075 28.575L39.825 21.825C40.05 21.6 40.275 21.375 40.275 21.15C40.5 20.475 40.5 20.025 40.275 19.35Z" fill="black"/>
                            <path d="M28.125 33.975C25.65 35.325 22.95 36 20.25 36C11.475 36 4.5 29.025 4.5 20.25C4.5 11.475 11.475 4.5 20.25 4.5C22.95 4.5 25.65 5.175 28.125 6.525C29.25 7.2 30.6 6.75 31.275 5.625C31.95 4.5 31.5 3.15 30.375 2.475C27.225 0.9 23.85 0 20.25 0C9 0 0 9 0 20.25C0 31.5 9 40.5 20.25 40.5C23.85 40.5 27.225 39.6 30.375 37.8C31.5 37.125 31.725 35.775 31.275 34.65C30.6 33.75 29.25 33.3 28.125 33.975Z" fill="black"/>
                        </svg>          
                        <span class="ml-3 sidebar-text">Logout</span>
                    </button>
                </form>
            </div>
            <div>
                <a href="#" class="flex rounded-lg p-2 collapseSidebar">
                    <svg class="w-5" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.4705 17.7245H25.3403C24.6686 17.7245 24.0245 17.4579 23.5495 16.9833C23.0746 16.5088 22.8077 15.8651 22.8077 15.1939V5.07155C22.8077 4.4004 23.0746 3.75673 23.5495 3.28215C24.0245 2.80757 24.6686 2.54095 25.3403 2.54095C26.012 2.54095 26.6561 2.80757 27.1311 3.28215C27.606 3.75673 27.8728 4.4004 27.8728 5.07155V12.6633H35.4705C36.1422 12.6633 36.7863 12.93 37.2613 13.4045C37.7362 13.8791 38.0031 14.5228 38.0031 15.1939C38.0031 15.8651 37.7362 16.5088 37.2613 16.9833C36.7863 17.4579 36.1422 17.7245 35.4705 17.7245Z" fill="black"/>
                        <path d="M25.3402 17.7246C24.8372 17.7275 24.3447 17.5807 23.9255 17.3028C23.5063 17.0249 23.1794 16.6286 22.9865 16.1644C22.7936 15.7002 22.7435 15.1891 22.8424 14.6962C22.9414 14.2034 23.1849 13.7512 23.5421 13.3972L36.2049 0.744243C36.6893 0.329664 37.3125 0.113029 37.9499 0.137629C38.5873 0.16223 39.1919 0.426253 39.643 0.876939C40.094 1.32762 40.3582 1.93178 40.3828 2.56867C40.4075 3.20556 40.1907 3.82828 39.7758 4.31239L27.113 16.9654C26.6454 17.4422 26.0082 17.7151 25.3402 17.7246ZM15.21 17.7246H5.07979C4.40812 17.7246 3.76395 17.4579 3.28901 16.9834C2.81406 16.5088 2.54724 15.8651 2.54724 15.194C2.54724 14.5228 2.81406 13.8791 3.28901 13.4046C3.76395 12.93 4.40812 12.6634 5.07979 12.6634H12.6775V5.07157C12.6775 4.40041 12.9443 3.75674 13.4192 3.28216C13.8942 2.80758 14.5383 2.54097 15.21 2.54097C15.8817 2.54097 16.5258 2.80758 17.0008 3.28216C17.4757 3.75674 17.7426 4.40041 17.7426 5.07157V15.194C17.7426 15.8651 17.4757 16.5088 17.0008 16.9834C16.5258 17.4579 15.8817 17.7246 15.21 17.7246Z" fill="black"/>
                        <path d="M15.2101 17.7245C14.8768 17.7265 14.5464 17.6626 14.2378 17.5367C13.9293 17.4108 13.6486 17.2252 13.412 16.9907L0.749197 4.33768C0.272308 3.86116 0.00439453 3.21485 0.00439453 2.54095C0.00439454 1.86705 0.272308 1.22075 0.749197 0.744227C1.22609 0.267706 1.87289 5.02096e-09 2.54731 0C3.22173 -5.02096e-09 3.86853 0.267706 4.34542 0.744227L17.0082 13.3972C17.3654 13.7512 17.6089 14.2034 17.7079 14.6962C17.8068 15.189 17.7567 15.7002 17.5638 16.1644C17.3709 16.6286 17.044 17.0249 16.6248 17.3028C16.2056 17.5806 15.7131 17.7275 15.2101 17.7245ZM15.2101 37.9693C14.5384 37.9693 13.8942 37.7027 13.4193 37.2281C12.9443 36.7536 12.6775 36.1099 12.6775 35.4387V27.8469H5.07986C4.40819 27.8469 3.76402 27.5803 3.28908 27.1057C2.81413 26.6312 2.54731 25.9875 2.54731 25.3163C2.54731 24.6452 2.81413 24.0015 3.28908 23.5269C3.76402 23.0524 4.40819 22.7857 5.07986 22.7857H15.2101C15.8818 22.7857 16.5259 23.0524 17.0009 23.5269C17.4758 24.0015 17.7426 24.6452 17.7426 25.3163V35.4387C17.7426 36.1099 17.4758 36.7536 17.0009 37.2281C16.5259 37.7027 15.8818 37.9693 15.2101 37.9693Z" fill="black"/>
                        <path d="M2.54728 40.5C2.04425 40.5029 1.55175 40.356 1.13256 40.0782C0.713377 39.8003 0.386497 39.404 0.193601 38.9398C0.000704342 38.4756 -0.0494693 37.9645 0.0494767 37.4716C0.148423 36.9788 0.392005 36.5266 0.749169 36.1726L13.4119 23.5196C13.8964 23.1051 14.5196 22.8884 15.157 22.913C15.7944 22.9376 16.399 23.2017 16.85 23.6523C17.3011 24.103 17.5653 24.7072 17.5899 25.3441C17.6145 25.981 17.3977 26.6037 16.9828 27.0878L4.32007 39.7408C3.85248 40.2176 3.21529 40.4904 2.54728 40.5ZM25.3403 37.9694C24.6686 37.9694 24.0244 37.7027 23.5495 37.2282C23.0745 36.7536 22.8077 36.1099 22.8077 35.4388V25.3164C22.8077 24.6452 23.0745 24.0015 23.5495 23.527C24.0244 23.0524 24.6686 22.7858 25.3403 22.7858H35.4705C36.1421 22.7858 36.7863 23.0524 37.2613 23.527C37.7362 24.0015 38.003 24.6452 38.003 25.3164C38.003 25.9875 37.7362 26.6312 37.2613 27.1058C36.7863 27.5803 36.1421 27.847 35.4705 27.847H27.8728V35.4388C27.8728 36.1099 27.606 36.7536 27.131 37.2282C26.6561 37.7027 26.0119 37.9694 25.3403 37.9694Z" fill="black"/>
                        <path d="M38.0031 40.4999C37.6698 40.5018 37.3394 40.438 37.0308 40.3121C36.7222 40.1861 36.4416 40.0006 36.205 39.766L23.5422 27.113C23.1273 26.6289 22.9105 26.0062 22.9351 25.3693C22.9597 24.7324 23.224 24.1283 23.675 23.6776C24.126 23.2269 24.7306 22.9629 25.368 22.9383C26.0054 22.9137 26.6286 23.1303 27.1131 23.5449L39.7759 36.1979C40.1229 36.5516 40.3585 36.9993 40.4533 37.4855C40.5481 37.9717 40.498 38.475 40.3093 38.9331C40.1205 39.3911 39.8014 39.7837 39.3915 40.0623C38.9815 40.3408 38.4988 40.493 38.0031 40.4999Z" fill="black"/>
                    </svg>              
                    <span class="ml-3 sidebar-text">Collapse</span>
                </a>
            </div>
        </div>

        {{-- Main --}}
        <div class="w-full px-5">
            <header class="flex justify-between">
                <h3 class="text-xl font-medium">Good day, {{ Ucfirst(auth()->user()->name) }}</h3>
                <div class="flex">
                    <label for="search" class="hidden md:block relative">
                        <svg class="pointer-events-none w-5 absolute top-1/2 transform -translate-y-1/2 left-5" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.5564 24.4271L21.4581 19.3438C23.103 17.2481 23.9956 14.6603 23.9923 11.9961C23.9923 9.62353 23.2887 7.3042 21.9706 5.33144C20.6524 3.35869 18.7789 1.82112 16.5869 0.913157C14.3949 0.0051977 11.9828 -0.232366 9.65581 0.230508C7.32879 0.693381 5.19128 1.8359 3.51359 3.51359C1.8359 5.19128 0.693381 7.32879 0.230508 9.65581C-0.232366 11.9828 0.0051977 14.3949 0.913157 16.5869C1.82112 18.7789 3.35869 20.6524 5.33144 21.9706C7.3042 23.2887 9.62353 23.9923 11.9961 23.9923C14.6603 23.9956 17.2481 23.103 19.3438 21.4581L24.4271 26.5564C24.5665 26.697 24.7324 26.8085 24.9151 26.8847C25.0978 26.9608 25.2938 27 25.4918 27C25.6897 27 25.8857 26.9608 26.0685 26.8847C26.2512 26.8085 26.417 26.697 26.5564 26.5564C26.697 26.417 26.8085 26.2512 26.8847 26.0685C26.9608 25.8857 27 25.6897 27 25.4918C27 25.2938 26.9608 25.0978 26.8847 24.9151C26.8085 24.7324 26.697 24.5665 26.5564 24.4271V24.4271ZM2.99904 11.9961C2.99904 10.2167 3.52671 8.47718 4.51532 6.99762C5.50394 5.51805 6.90909 4.36487 8.5531 3.6839C10.1971 3.00293 12.0061 2.82476 13.7514 3.17192C15.4967 3.51907 17.0998 4.37596 18.358 5.63423C19.6163 6.8925 20.4732 8.49563 20.8204 10.2409C21.1675 11.9862 20.9893 13.7952 20.3084 15.4392C19.6274 17.0832 18.4742 18.4883 16.9947 19.477C15.5151 20.4656 13.7756 20.9932 11.9961 20.9932C9.60996 20.9932 7.32151 20.0453 5.63423 18.358C3.94694 16.6708 2.99904 14.3823 2.99904 11.9961Z" fill="#A56D3F" fill-opacity="0.25"/>
                        </svg>
                        <input type="search" name="search" id="search" placeholder="Search..."
                        class="w-96 border-2 border-thanks-giving-primary focus:outline-none rounded-lg px-12 py-1">
                    </label>
                    <button class="bg-thanks-giving-primary ml-3 p-2 border-2 border-dashed border-thanks-giving-secondary rounded-full">
                        <svg class="w-4" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="12.696" width="4.32" height="28.8" rx="2.16" fill="#6C370B"/>
                            <rect x="0.600098" y="16.704" width="4.32" height="16.416" rx="2.16" transform="rotate(-90 0.600098 16.704)" fill="#6C370B"/>
                            <rect x="19.6082" y="16.704" width="4.32" height="9.792" rx="2.16" transform="rotate(-90 19.6082 16.704)" fill="#6C370B"/>
                        </svg>
                    </button>
                </div>
            </header>

            @yield('content')
        </div>
    </main>

    @livewireScripts
    @yield('footer')
    <script src="../vendor/js/all.js"></script>
</body>

</html>