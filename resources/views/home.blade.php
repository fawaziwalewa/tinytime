@extends('layouts.dashboard')
@section('header')
    {{-- Chart.js CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.js"></script>
@endsection
@section('content')
<div class="bg-thanks-giving-primary rounded-lg mt-7 p-5">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-2 lg:gap-4">
        <div class="bg-white rounded-lg p-3 flex overflow-x-auto overflow-y-hidden">
            <div class="p-2 bg-thanks-giving-primary rounded-lg flex items-center">
                <svg class="w-12" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M68.5093 19.6458L68.6553 19.7909C69.275 20.4071 70.2789 20.4072 70.8985 19.7909C71.5182 19.1747 71.5182 18.1749 70.8985 17.5602L68.3563 15.0337C67.7367 14.4175 66.7328 14.4175 66.1132 15.0337C65.4935 15.6499 65.4935 16.6497 66.1132 17.2644L66.2654 17.4158L63.674 19.9989C58.5765 14.9297 51.8589 11.4981 44.3814 10.4571V5.10167H46.3705C47.2474 5.10167 47.9569 4.39608 47.9569 3.52413C47.9569 2.65218 47.2474 1.94659 46.3705 1.94659H32.9485C32.0717 1.94659 31.3622 2.65218 31.3622 3.52413C31.3622 4.39608 32.0717 5.10167 32.9485 5.10167H34.9454V10.4559C27.442 11.4989 20.7058 14.952 15.6009 20.0486L12.9584 17.415L13.1098 17.2644C13.7295 16.6482 13.7295 15.6499 13.1098 15.0337C12.4902 14.4175 11.4863 14.4175 10.8666 15.0337L8.326 17.5602C7.70632 18.1764 7.70632 19.1747 8.326 19.7909C8.94564 20.4071 9.94952 20.4072 10.5692 19.7909L10.7152 19.6458L13.4642 22.3856C8.60601 28.2306 5.68311 35.7219 5.68311 43.8792C5.68307 62.5108 20.9254 77.6684 39.6595 77.6684C58.3952 77.6684 73.6375 62.5108 73.6375 43.8792C73.6375 35.6977 70.6948 28.1882 65.8103 22.336L68.5093 19.6458ZM38.1181 5.10937H41.2087V10.1694C40.6912 10.1462 40.1823 10.0915 39.6595 10.0915C39.139 10.0915 38.6328 10.1462 38.1181 10.1694V5.10937ZM39.6595 74.5133C22.6744 74.5133 8.85578 60.7715 8.85578 43.8792C8.85578 26.9885 22.6744 13.2466 39.6595 13.2466C56.6462 13.2466 70.4648 26.9885 70.4648 43.8792C70.4648 60.7715 56.6462 74.5133 39.6595 74.5133Z" fill="#010101"/>
                    <path d="M39.6594 20.9233C26.9314 20.9233 16.5752 31.222 16.5752 43.8792C16.5752 56.5381 26.9314 66.8367 39.6594 66.8367C52.3874 66.8367 62.7436 56.5381 62.7436 43.8792C62.7436 31.222 52.3874 20.9233 39.6594 20.9233ZM41.2458 63.6016V58.4361C41.2458 57.5641 40.5362 56.8585 39.6594 56.8585C38.7826 56.8585 38.0731 57.5641 38.0731 58.4361V63.6016C28.3597 62.8344 20.5996 55.1173 19.8285 45.4568H25.0228C25.8996 45.4568 26.6092 44.7512 26.6092 43.8792C26.6092 43.0073 25.8996 42.3017 25.0228 42.3017H19.8285C20.5999 32.6424 28.3597 24.9257 38.0731 24.1585V29.324C38.0731 30.1959 38.7826 30.9015 39.6594 30.9015C40.5362 30.9015 41.2458 30.1959 41.2458 29.324V24.1585C50.9591 24.9257 58.7189 32.6424 59.4904 42.3017H54.2975C53.4207 42.3017 52.7112 43.0073 52.7112 43.8792C52.7112 44.7512 53.4207 45.4568 54.2975 45.4568H59.4904C58.7192 55.1173 50.9591 62.8344 41.2458 63.6016Z" fill="#010101"/>
                    <path d="M41.2459 43.226V37.6399C41.2459 36.768 40.5364 36.0624 39.6596 36.0624C38.7828 36.0624 38.0732 36.768 38.0732 37.6399V43.8792C38.0732 44.2982 38.2406 44.6988 38.538 44.9946L43.5697 49.9983C43.8795 50.3064 44.2854 50.4605 44.6913 50.4605C45.0972 50.4605 45.5031 50.3064 45.8129 49.9983C46.4326 49.3821 46.4326 48.3838 45.8129 47.7676L41.2459 43.226Z" fill="#010101"/>
                </svg>
            </div>
            <div class="ml-3 flex flex-col justify-center">
                <h4 class="text-md">Total Timer</h4>
                <h1 class="font-semibold text-xl">50</h1>
            </div>
        </div>
        <div class="bg-white rounded-lg p-3 flex overflow-x-auto overflow-y-hidden">
            <div class="p-2 bg-[#D0EED8] rounded-lg flex items-center">
                <svg class="w-12" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_33_438)">
                    <path d="M38.5259 37.3763L34.5354 42.7548C33.5252 42.3509 32.4097 42.2926 31.3629 42.589C30.3161 42.8853 29.3967 43.5196 28.7481 44.3931C28.5001 44.74 28.2987 45.1179 28.1491 45.5171L22.2297 45.5895C21.9028 45.5914 21.5901 45.7231 21.3603 45.9556C21.1305 46.188 21.0025 46.5023 21.0044 46.8292C21.0064 47.156 21.138 47.4687 21.3705 47.6985C21.603 47.9283 21.9172 48.0563 22.2441 48.0544H22.2598L27.8431 47.9862C27.9417 48.7434 28.2149 49.4673 28.6412 50.1007C29.0675 50.7342 29.6352 51.2599 30.2996 51.6363C30.9639 52.0127 31.7066 52.2296 32.4691 52.2697C33.2316 52.3099 33.993 52.1722 34.6931 51.8677C35.3933 51.5631 36.0131 51.0999 36.5036 50.5148C36.9941 49.9296 37.3418 49.2384 37.5193 48.4958C37.6969 47.7531 37.6994 46.9794 37.5266 46.2357C37.3538 45.4919 37.0106 44.7985 36.5238 44.2102L40.5047 38.8447C40.6016 38.7148 40.6719 38.5671 40.7116 38.41C40.7513 38.2529 40.7596 38.0895 40.7361 37.9291C40.7126 37.7688 40.6576 37.6147 40.5744 37.4756C40.4913 37.3366 40.3815 37.2153 40.2513 37.1187C40.1212 37.0222 39.9733 36.9522 39.8161 36.9129C39.6589 36.8736 39.4955 36.8656 39.3352 36.8896C39.175 36.9135 39.021 36.9688 38.8821 37.0523C38.7433 37.1359 38.6222 37.246 38.526 37.3763H38.5259ZM34.7033 48.7765C34.3654 49.235 33.8789 49.5621 33.3268 49.7021C32.7747 49.8421 32.1911 49.7863 31.6755 49.5443C31.1599 49.3023 30.7442 48.889 30.4991 48.3748C30.2541 47.8606 30.1949 47.2774 30.3317 46.7245C30.4685 46.1715 30.7927 45.6832 31.2492 45.3425C31.7057 45.0019 32.2662 44.83 32.8351 44.8563C33.4041 44.8825 33.9464 45.1053 34.3695 45.4865C34.7927 45.8678 35.0706 46.3839 35.1559 46.9471C35.2054 47.2668 35.1909 47.5932 35.1132 47.9072C35.0355 48.2213 34.8962 48.5168 34.7033 48.7765ZM64.3532 12.3374C64.0448 12.2295 63.7063 12.2485 63.4119 12.3902C63.1176 12.532 62.8916 12.7848 62.7837 13.0932C62.5647 13.5841 62.2067 14 61.7538 14.2896C61.301 14.5792 60.7733 14.7298 60.2358 14.7228C59.8085 14.771 59.3728 14.783 58.936 14.7974C58.019 14.7907 57.1047 14.8966 56.2136 15.1128C55.2316 15.3852 54.3299 15.8908 53.5853 16.5866L49.7612 13.772C49.3704 13.4839 48.9267 13.2757 48.4554 13.1592C47.9841 13.0428 47.4944 13.0203 47.0145 13.0932C46.5345 13.1661 46.0736 13.3329 45.6581 13.584C45.2426 13.8351 44.8807 14.1656 44.593 14.5567L43.4473 16.1117C43.2865 16.3181 43.0656 16.4695 42.815 16.5449C42.5645 16.6204 42.2968 16.6162 42.0487 16.533C37.6457 15.2076 33.009 14.8454 28.4536 15.4711C23.8982 16.0968 19.5308 17.6957 15.6483 20.1592C11.7657 22.6228 8.45889 25.8931 5.9525 29.7481C3.44611 33.6032 1.79888 37.9525 1.12271 42.5007C0.446548 47.0489 0.757299 51.6894 2.03385 56.1068C3.3104 60.5242 5.52285 64.6151 8.52086 68.1015C11.5189 71.5879 15.2322 74.3882 19.4086 76.312C23.585 78.2359 28.1265 79.2382 32.7247 79.2509C34.1576 79.2506 35.5889 79.1557 37.0094 78.9669C42.4217 78.252 47.5614 76.1656 51.9406 72.9057C56.3197 69.6458 59.7929 65.3206 62.0304 60.3409C64.2679 55.3611 65.1954 49.8921 64.7248 44.4531C64.2542 39.0142 62.4011 33.7857 59.3415 29.2643C59.1873 29.0526 59.1031 28.7979 59.1007 28.5359C59.0983 28.2739 59.1779 28.0177 59.3283 27.8032L60.4729 26.2456C60.7607 25.8547 60.9687 25.4109 61.0849 24.9396C61.2012 24.4683 61.2235 23.9787 61.1505 23.4988C61.0775 23.0189 60.9107 22.558 60.6596 22.1426C60.4085 21.7271 60.078 21.3652 59.687 21.0775L55.6341 18.0946C56.0029 17.8197 56.4192 17.6151 56.8622 17.491C57.5689 17.3309 58.2919 17.2533 59.0165 17.2599C59.5172 17.2455 60.0167 17.2262 60.4885 17.1757C61.4958 17.1484 62.4724 16.8234 63.2952 16.2416C64.1179 15.6598 64.7499 14.8474 65.1114 13.9068C65.2189 13.5981 65.1994 13.2594 65.0573 12.9651C64.9151 12.6708 64.6618 12.445 64.3532 12.3374ZM58.2258 23.0611C58.4889 23.2551 58.6642 23.5456 58.7132 23.8688C58.7622 24.192 58.6809 24.5214 58.4871 24.7846L57.3425 26.3396V26.3421C56.8934 26.9674 56.6482 27.7161 56.6404 28.486C56.6327 29.2559 56.8627 30.0094 57.2992 30.6437C61.2602 36.5017 62.9909 43.5852 62.1774 50.6098C61.364 57.6344 58.0602 64.1349 52.8652 68.9327C47.6702 73.7304 40.9279 76.5078 33.8609 76.761C26.7939 77.0143 19.8701 74.7268 14.345 70.3132C8.6123 65.5991 4.82731 58.9299 3.71947 51.591C2.61164 44.2521 4.25938 36.7629 8.34513 30.5666C11.8777 25.3542 16.9857 21.409 22.9217 19.3084C28.8577 17.2077 35.3101 17.0618 41.335 18.892C42.0706 19.1214 42.8591 19.1179 43.5925 18.8817C44.326 18.6455 44.9684 18.1884 45.4319 17.5729L46.5777 16.0178C46.772 15.7556 47.0621 15.5808 47.3848 15.5317C47.7074 15.4825 48.0364 15.563 48.3 15.7555L52.9802 19.2002L52.9843 19.2049L52.9885 19.2064L58.2258 23.0611ZM61.999 10.5585C62.0674 10.57 62.1367 10.5756 62.2061 10.5753C62.4968 10.5747 62.778 10.4715 63.0002 10.284C63.2223 10.0964 63.3712 9.83644 63.4205 9.54992L64.7072 1.96745C64.7621 1.64505 64.6867 1.31405 64.4975 1.04725C64.3084 0.780446 64.021 0.599709 63.6986 0.544795C63.3762 0.489882 63.0452 0.565289 62.7784 0.75443C62.5116 0.94357 62.3309 1.23095 62.2759 1.55335L60.9893 9.13581C60.9349 9.45831 61.0107 9.7892 61.2 10.0559C61.3893 10.3226 61.6767 10.5033 61.999 10.5585V10.5585ZM68.3226 12.2675C68.5176 12.2681 68.7101 12.2221 68.8838 12.1333C69.0575 12.0446 69.2076 11.9157 69.3215 11.7573L73.8939 5.44339C74.0854 5.17876 74.164 4.8489 74.1123 4.52635C74.0606 4.20381 73.8829 3.91501 73.6183 3.72349C73.3537 3.53196 73.0238 3.4534 72.7013 3.50509C72.3787 3.55678 72.0899 3.73448 71.8984 3.9991L67.326 10.313C67.1925 10.4967 67.1124 10.7138 67.0945 10.9402C67.0767 11.1666 67.1219 11.3935 67.225 11.5958C67.3282 11.7982 67.4853 11.968 67.679 12.0866C67.8727 12.2052 68.0955 12.2678 68.3226 12.2677V12.2675ZM47.3324 27.4661C42.1617 23.6369 35.6888 22.0026 29.3201 22.9184C29.2744 22.9135 29.2285 22.9113 29.1826 22.9119C29.1537 22.9164 29.1319 22.9345 29.1037 22.9408C29.073 22.9455 29.0423 22.9457 29.0116 22.9504C22.6698 23.9029 16.955 27.306 13.096 32.428C13.0728 32.4545 13.041 32.4683 13.0198 32.4972C13.0072 32.5145 13.0056 32.5356 12.9938 32.5533C12.9553 32.6048 12.9111 32.6501 12.873 32.7018C8.9994 37.9593 7.37182 44.5398 8.34803 50.9968C9.32425 57.4539 12.8244 63.2591 18.0791 67.1365C18.0937 67.1483 18.1006 67.1656 18.1158 67.1769L18.1477 67.1872C22.3541 70.2941 27.4459 71.9702 32.6753 71.9694C33.9308 71.9691 35.1844 71.8742 36.4256 71.6854L36.4867 71.6731C36.527 71.6708 36.5673 71.6699 36.6086 71.6638C36.6426 71.6585 36.6684 71.6375 36.7012 71.6296C43.0617 70.6089 48.7636 67.1228 52.5715 61.9269C52.6213 61.8592 52.6599 61.7869 52.709 61.7189L52.7219 61.7079L52.7353 61.679C56.5088 56.4318 58.0623 49.9089 57.0593 43.5241C57.057 43.497 57.0672 43.4722 57.0632 43.445C57.0504 43.4021 57.0353 43.36 57.0179 43.3189C55.9902 36.9701 52.5125 31.2779 47.3323 27.4662L47.3324 27.4661ZM51.2584 45.5509C51.3205 45.5508 51.3824 45.546 51.4438 45.5365L54.7504 45.0382C55.2743 50.0073 54.0957 55.0071 51.4076 59.219L48.5853 57.1533C48.3217 56.9602 47.9921 56.8797 47.6691 56.9296C47.3461 56.9795 47.0561 57.1556 46.863 57.4193C46.6699 57.6829 46.5894 58.0125 46.6393 58.3355C46.6892 58.6585 46.8654 58.9484 47.129 59.1416L49.9693 61.2206C46.8091 65.1683 42.3838 67.9051 37.4402 68.969L36.8746 65.3038C36.8514 65.1426 36.7964 64.9876 36.713 64.8478C36.6295 64.708 36.5191 64.5861 36.3882 64.4892C36.2573 64.3923 36.1085 64.3223 35.9504 64.2832C35.7923 64.2441 35.628 64.2368 35.467 64.2616C35.3061 64.2864 35.1516 64.3429 35.0126 64.4277C34.8736 64.5126 34.7528 64.6242 34.6572 64.756C34.5616 64.8878 34.493 65.0373 34.4555 65.1958C34.418 65.3543 34.4123 65.5186 34.4386 65.6793L35.0058 69.3558C29.9471 69.8927 24.8586 68.6592 20.6072 65.8655L22.8459 62.8197C22.9421 62.6893 23.0116 62.5412 23.0505 62.384C23.0894 62.2267 23.0969 62.0633 23.0726 61.9031C23.0483 61.7429 22.9926 61.5891 22.9087 61.4505C22.8249 61.3118 22.7145 61.1911 22.5839 61.0952C22.4533 60.9993 22.3051 60.93 22.1477 60.8915C21.9904 60.8529 21.827 60.8458 21.6668 60.8705C21.5067 60.8952 21.353 60.9512 21.2146 61.0354C21.0761 61.1195 20.9556 61.2302 20.86 61.3609L18.6224 64.4051C14.6822 61.1753 11.9865 56.6769 10.9963 51.6792L14.8915 51.0824C15.2145 51.0329 15.5047 50.8571 15.6981 50.5937C15.8916 50.3303 15.9724 50.0008 15.923 49.6778C15.8735 49.3548 15.6977 49.0646 15.4343 48.8712C15.1709 48.6777 14.8414 48.5969 14.5184 48.6463L10.6434 49.2402C10.1905 44.2047 11.4888 39.1672 14.3192 34.9779L17.354 37.2029C17.4845 37.2985 17.6327 37.3675 17.7899 37.4058C17.9471 37.4442 18.1103 37.4513 18.2702 37.4266C18.4302 37.4019 18.5837 37.3459 18.722 37.2619C18.8603 37.1779 18.9807 37.0674 19.0763 36.9369C19.1719 36.8063 19.2409 36.6582 19.2793 36.501C19.3177 36.3438 19.3247 36.1806 19.3 36.0206C19.2753 35.8607 19.2193 35.7072 19.1353 35.5689C19.0513 35.4306 18.9409 35.3102 18.8103 35.2146L15.8005 33.008C19.0178 29.181 23.4445 26.5662 28.3492 25.5957L28.8926 29.1247C28.9374 29.4153 29.0847 29.6804 29.3078 29.8719C29.531 30.0635 29.8153 30.169 30.1094 30.1694C30.1726 30.1693 30.2358 30.1645 30.2983 30.1549C30.4583 30.1304 30.6119 30.0745 30.7503 29.9905C30.8887 29.9066 31.0092 29.7962 31.1049 29.6656C31.2006 29.535 31.2696 29.3869 31.308 29.2297C31.3464 29.0724 31.3534 28.9091 31.3287 28.7492L30.7943 25.2791C31.4541 25.2209 32.1159 25.1287 32.7717 25.1287C37.0622 25.1482 41.2529 26.4246 44.8257 28.8002L42.7744 31.5824C42.6783 31.7126 42.6087 31.8605 42.5698 32.0176C42.5308 32.1747 42.5232 32.3379 42.5473 32.498C42.5715 32.658 42.6269 32.8118 42.7105 32.9504C42.794 33.089 42.9041 33.2098 43.0344 33.3059C43.2455 33.4629 43.5018 33.5473 43.7649 33.5466C43.9581 33.5468 44.1486 33.5016 44.3211 33.4147C44.4936 33.3277 44.6432 33.2014 44.7579 33.0459L46.831 30.2342C50.6626 33.3926 53.3167 37.7511 54.364 42.6049L51.0754 43.1004C50.7681 43.1467 50.4896 43.3074 50.2958 43.5504C50.102 43.7933 50.0071 44.1005 50.0303 44.4105C50.0534 44.7204 50.1928 45.0101 50.4206 45.2216C50.6483 45.4331 50.9475 45.5507 51.2583 45.5508L51.2584 45.5509ZM76.0097 15.1585L68.615 15.2885C68.2882 15.2914 67.9758 15.424 67.7467 15.6571C67.5176 15.8903 67.3905 16.2049 67.3934 16.5318C67.3963 16.8586 67.5289 17.171 67.762 17.4001C67.9952 17.6292 68.3098 17.7563 68.6367 17.7534H68.6583L76.0531 17.6234C76.3799 17.6176 76.6911 17.4823 76.9182 17.2471C77.1452 17.0119 77.2696 16.6962 77.2638 16.3693C77.2475 16.046 77.1088 15.741 76.8759 15.5162C76.643 15.2914 76.3334 15.1635 76.0097 15.1585Z" fill="black"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_33_438">
                    <rect width="78.8769" height="78.8769" fill="white" transform="translate(0.851807 0.36908)"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="ml-3 flex flex-col justify-center">
                <h4 class="text-md">Running Timer</h4>
                <h1 class="font-semibold text-xl">2</h1>
            </div>
        </div>
        <div class="bg-white rounded-lg p-3 flex overflow-x-auto overflow-y-hidden">
            <div class="p-2 bg-[#EED0D0] rounded-lg flex items-center">
                <svg class="w-12" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M74.7992 39.8076C74.7995 46.5543 72.6704 53.129 68.7151 58.5947C64.7599 64.0604 59.1804 68.1383 52.7717 70.2472C46.3631 72.3561 39.4523 72.3884 33.0242 70.3395C26.5961 68.2907 20.9787 64.2651 16.9726 58.8366L20.9411 55.9034C24.5616 60.8206 29.7359 64.3717 35.6262 65.9817C41.5164 67.5916 47.7776 67.1662 53.396 64.7743C59.0143 62.3823 63.6607 58.1639 66.5828 52.8022C69.5049 47.4404 70.5316 41.2493 69.4966 35.2313C68.4616 29.2134 65.4255 23.721 60.88 19.6436C56.3344 15.5662 50.5457 13.1425 44.451 12.765C38.3564 12.3876 32.3128 14.0784 27.2989 17.5638C22.285 21.0491 18.5943 26.1249 16.8247 31.9692L19.2896 30.367L22.0503 34.4587L14.6555 39.3885C14.2198 39.6823 13.7016 39.8291 13.1766 39.8076C12.7728 39.8082 12.3751 39.7096 12.0184 39.5205C11.6617 39.3314 11.3568 39.0575 11.1307 38.723L6.20093 31.3283L10.2927 28.5676L11.9688 31.0325C14.1074 23.6235 18.8462 17.2342 25.3154 13.0371C31.7847 8.84008 39.5506 7.11675 47.1879 8.1834C54.8253 9.25005 61.8218 13.0351 66.8937 18.8441C71.9655 24.653 74.7723 32.0961 74.7992 39.8076ZM40.2905 22.5532V39.8076C40.2887 40.132 40.3508 40.4535 40.4735 40.7538C40.5962 41.0542 40.7769 41.3273 41.0054 41.5576L48.4001 48.9523L51.9002 45.4522L45.2204 38.7969V22.5532H40.2905Z" fill="black"/>
                </svg>
            </div>
            <div class="ml-3 flex flex-col justify-center">
                <h4 class="text-md">Expired Timer</h4>
                <h1 class="font-semibold text-xl">48</h1>
            </div>
        </div>
        <div class="bg-white rounded-lg p-3 flex overflow-x-auto overflow-y-hidden">
            <div class="p-2 bg-[#C1D7F8] rounded-lg flex items-center">
                <svg class="w-12" viewBox="0 0 75 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.2902 46.916C32.576 46.916 27.7078 45.7452 22.8088 43.4498C18.9728 41.6473 15.106 39.1516 11.3162 36.0242C4.92288 30.7401 0.979038 25.5022 0.809576 25.2865C0.147133 24.4084 0.147133 23.2067 0.809576 22.3286C0.979038 22.1129 4.92288 16.875 11.3162 11.5909C15.106 8.46354 18.9728 5.96783 22.8088 4.16537C27.7078 1.86993 32.576 0.699097 37.2902 0.699097C42.0043 0.699097 46.8725 1.86993 51.7715 4.16537C55.6075 5.96783 59.4743 8.46354 63.2641 11.5909C69.6574 16.875 73.6167 22.1129 73.7707 22.3286C74.4332 23.2067 74.4332 24.4084 73.7707 25.2865C73.6013 25.5022 69.6574 30.7401 63.2641 36.0242C59.4743 39.1516 55.6075 41.6473 51.7715 43.4498C46.8725 45.7452 42.0043 46.916 37.2902 46.916ZM5.95506 23.8076C9.82188 28.383 22.5932 41.9862 37.2902 41.9862C52.018 41.9862 64.7584 28.383 68.6252 23.8076C64.7584 19.2321 51.9871 5.6289 37.2902 5.6289C22.5624 5.6289 9.82188 19.2321 5.95506 23.8076Z" fill="black"/>
                    <path d="M37.2901 34.8997C31.174 34.8997 26.198 29.9236 26.198 23.8076C26.198 17.6915 31.174 12.7155 37.2901 12.7155C43.4061 12.7155 48.3821 17.6915 48.3821 23.8076C48.3821 29.9236 43.4061 34.8997 37.2901 34.8997ZM37.2901 17.6453C33.8854 17.6453 31.1278 20.4029 31.1278 23.8076C31.1278 27.2122 33.8854 29.9698 37.2901 29.9698C40.6947 29.9698 43.4523 27.2122 43.4523 23.8076C43.4523 20.4029 40.6947 17.6453 37.2901 17.6453Z" fill="black"/>
                </svg>
            </div>
            <div class="ml-3 flex flex-col justify-center">
                <h4 class="text-md">Timer Views</h4>
                <h1 class="font-semibold text-xl">150</h1>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-2 lg:gap-4 w-full mt-5">
        <div class="col-span-2 md:col-span-4 lg:col-span-3 bg-white rounded-lg p-5 flex flex-col justify-around overflow-x-auto overflow-y-hidden">
            <div class="flex flex-col sm:flex-row justify-between sm:items-center">
                <h3 class="text-md sm:text-xl font-semibold">Analytics</h3>
                <select name="days" id="days" class="border-2 border-thanks-giving-primary focus:outline-none rounded-lg px-2 py-1 text-sm w-32">
                    <option value="">Last 7 days</option>
                    <option value="">Last 5 days</option>
                    <option value="">Last 2 days</option>
                </select>
            </div>
            <div class="h-5/6 mt-5">
                <canvas id="myChart" class="min-w-full max-w-full max-h-96 h-full min-h-full"></canvas>
            </div>
        </div>
        <div class="col-span-2 md:col-span-4 lg:col-span-1 sm:grid sm:grid-cols-2 sm:gap-4 lg:block">
            <div class="bg-white p-4 rounded-lg md:mt-2 lg:mt-0 overflow-x-auto overflow-y-hidden">
                <div class="font-semibold flex justify-between items-center">
                    <h3 class="text-md sm:text-xl">Recent Timer</h3>
                    <a href="#" class="">
                        <svg class="w-2" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.01613 0.532253L10.4677 7.98386C11.1774 8.69354 11.1774 9.75805 10.4677 10.4677L3.01613 17.9193C2.30645 18.629 1.24194 18.629 0.532261 17.9193C-0.177416 17.2097 -0.177416 16.1451 0.532261 15.4355L6.74194 9.2258L0.532261 3.01612C0.177422 2.66128 1.96695e-06 2.30644 1.96695e-06 1.77419C1.96695e-06 1.24193 0.177422 0.887091 0.532261 0.532253C1.24194 -0.177424 2.30645 -0.177424 3.01613 0.532253Z" fill="#6C370B"/>
                        </svg>
                    </a>
                </div>
                <ul class="mt-3">
                    <li class="flex justify-between items-center text-sm mt-3">
                        <p class="">Album Release</p>
                        <p class="px-2 py-1 rounded-lg bg-[#D0EED8] font-semibold">Runnning</p>
                    </li>
                    <li class="flex justify-between items-center text-sm mt-3">
                        <p class="">Website Launch</p>
                        <p class="px-2 py-1 rounded-lg bg-[#D0EED8] font-semibold">Runnning</p>
                    </li>
                    <li class="flex justify-between items-center text-sm mt-3">
                        <p class="">Wedding day</p>
                        <p class="px-2 py-1 rounded-lg bg-[#EED0D0] font-semibold">Expired</p>
                    </li>
                    <li class="flex justify-between items-center text-sm mt-3">
                        <p class="">Anniversary</p>
                        <p class="px-2 py-1 rounded-lg bg-[#D0EED8] font-semibold">Runnning</p>
                    </li>
                </ul>
            </div>
            <div class="rounded-lg mt-4 sm:mt-0 md:mt-2 lg:mt-4 overflow-x-auto overflow-y-hidden">
                <h3 class="text-md sm:text-xl font-semibold">Upcoming Events</h3>
                <div id="calendar" class="mt-2"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script src="../vendor/js/dashboard.js"></script>

<script>
    let calA = new Calendar({
        id: "#calendar",
        theme: "glass",
        weekdayType: "long-upper",
        monthDisplayType: "long",
        calendarSize: "small",
        layoutModifiers: ["month-left-align"],
        eventsData: [
            {
                id: 1,
                name: "French class",
                start: "2020-12-17T06:00:00",
                end: "2020-12-18T20:30:00"
            },
            {
                id: 2,
                name: "Blockchain 101",
                start: "2020-12-20T10:00:00",
                end: "2020-12-20T11:30:00"
            },
            {
            id: 3,
                name: "Cheese 101",
                start: "2020-12-01T10:00:00",
                end: "2020-12-02T11:30:00"
            },
            {
                id: 4,
                name: "Cheese 101",
                start: "2020-12-01T10:00:00",
                end: "2020-12-02T11:30:00"
            }
        ],
        dateChanged: (currentDate, events) => {
            // console.log("date change", currentDate, events);
        },
        monthChanged: (currentDate, events) => {
            // console.log("month change", currentDate, events);
        }
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css"/>
<style>
    .calendar__monthyear{
        font-size: large !important;
    }
</style>
@endsection