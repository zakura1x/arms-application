<!-- Sidebar -->
<div id="sidebar" class="bg-custom1 shadow-right h-screen fixed transition-transform duration-300 ease-in-out">
    <ul class="menu">
        <li class="sidebar-item">
            <button id="nav-button" class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-5 h-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </li>
        <li class="sidebar-item">
            <a class="flex-row w-full" href="{{ route('ph.dashboard') }}">
                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M33.75 17.8313V20.3031C33.75 26.6419 33.75 29.8115 31.8461 31.7807C29.9425 33.75 26.8782 33.75 20.75 33.75H14.25C8.12174 33.75 5.05762 33.75 3.1538 31.7807C1.25 29.8115 1.25 26.6419 1.25 20.3031V17.8313C1.25 14.1127 1.25 12.2533 2.0937 10.712C2.9374 9.17059 4.47879 8.21395 7.56155 6.30071L10.8115 4.28366C14.0703 2.26122 15.6997 1.25 17.5 1.25C19.3003 1.25 20.9297 2.26122 24.1885 4.28366L27.4385 6.30069C30.5213 8.21395 32.0626 9.17059 32.9063 10.712M22.375 27.25H12.625"
                        stroke="black" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="flex-row w-full" href="{{ route('ph.plan') }}">
                <svg width="35" height="41" viewBox="0 0 35 41" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.0444 38.478H2.01953V4.1084H6.29102C6.66455 4.88623 7.45557 5.42236 8.36963 5.42236H20.6348C21.5488 5.42236 22.3442 4.88184 22.7134 4.1084H26.9629V24.2397C26.9629 24.7231 27.3584 25.1187 27.8418 25.1187C28.3252 25.1187 28.7207 24.7231 28.7207 24.2397V3.72607C28.7207 2.96582 28.0923 2.35059 27.3232 2.35059H22.8101C22.4936 1.4585 21.6367 0.8125 20.6348 0.8125H8.36963C7.37207 0.8125 6.51514 1.4585 6.19434 2.35059H1.65479C0.885742 2.35059 0.257324 2.96582 0.257324 3.72607V38.8647C0.257324 39.625 0.885742 40.2402 1.65479 40.2402H17.0444C17.5278 40.2402 17.9233 39.8447 17.9233 39.3613C17.9233 38.8779 17.5322 38.478 17.0444 38.478Z"
                        fill="black" />
                    <path
                        d="M23.043 15.7803C23.043 15.2969 22.6475 14.9014 22.1641 14.9014H6.02295C5.78565 14.6685 5.46045 14.5234 5.0957 14.5234C4.36621 14.5234 3.77734 15.1123 3.77734 15.8418C3.77734 16.5713 4.36621 17.1602 5.0957 17.1602C5.51318 17.1602 5.88672 16.9668 6.12842 16.6592H22.1641C22.6475 16.6592 23.043 16.2637 23.043 15.7803ZM23.043 21.8228C23.043 21.3394 22.6475 20.9438 22.1641 20.9438H6.15479C5.91309 20.6187 5.53076 20.4121 5.0957 20.4121C4.36621 20.4121 3.77734 21.001 3.77734 21.7305C3.77734 22.46 4.36621 23.0488 5.0957 23.0488C5.43848 23.0488 5.75049 22.917 5.98779 22.7017H22.1641C22.6475 22.7017 23.043 22.3062 23.043 21.8228ZM6.02735 27.0303C5.79004 26.793 5.46045 26.6436 5.0957 26.6436C4.36621 26.6436 3.77734 27.2324 3.77734 27.9619C3.77734 28.6914 4.36621 29.2803 5.0957 29.2803C5.51318 29.2803 5.88233 29.0869 6.12402 28.7881H19.1846C19.668 28.7881 20.0635 28.3926 20.0635 27.9092C20.0635 27.4258 19.668 27.0303 19.1846 27.0303H6.02735ZM33.7568 21.2646C33.3262 21.0405 32.7944 21.2075 32.5703 21.6382L24.0405 38.0342L17.73 34.5801C17.3081 34.3472 16.7676 34.5054 16.5391 34.9272C16.3062 35.3491 16.4644 35.8896 16.8862 36.1182L24.0098 40.0205C24.4316 40.2534 24.9722 40.0952 25.2007 39.6733C25.2402 39.5986 25.271 39.5195 25.2886 39.4404L34.1304 22.4556C34.3545 22.0249 34.1875 21.4888 33.7568 21.2646Z"
                        fill="black" />
                    <path
                        d="M23.8076 12.7261H4.95508C4.30469 12.7261 3.77734 12.1987 3.77734 11.5483V7.97119C3.77734 7.3208 4.30469 6.79346 4.95508 6.79346H23.8076C24.458 6.79346 24.9854 7.3208 24.9854 7.97119V11.5483C24.9854 12.1987 24.458 12.7261 23.8076 12.7261Z"
                        fill="black" />
                </svg>
                <span class="text">Learning Development Plan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="flex-row w-full" href="{{ route('ph.questionbank') }}">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M37.2101 0.0319824H0.78999C0.42367 0.0319824 0.126953 0.328805 0.126953 0.695019V33.5828C0.126953 33.9489 0.423691 34.2458 0.78999 34.2458H5.38782V37.305C5.38782 37.6711 5.68475 37.968 6.05086 37.968H11.2368C11.6031 37.968 11.8999 37.6711 11.8999 37.305V34.2458H26.1002V37.305C26.1002 37.6711 26.3969 37.968 26.7632 37.968H31.9492C32.3153 37.968 32.6122 37.6711 32.6122 37.305V34.2458H37.2101C37.5762 34.2458 37.8731 33.9489 37.8731 33.5828V0.694998C37.8731 0.328805 37.5762 0.0319824 37.2101 0.0319824ZM10.5738 36.642H6.71392V34.3213H10.5738V36.642H10.5738ZM31.2861 36.642H27.4263V34.3213H31.2861V36.642ZM4.54217 4.21373H33.4579V30.1963H4.54217V4.21373ZM3.21608 21.6949H1.45303V12.6016H3.21608V21.6949ZM36.547 32.9197H1.45303V23.0208H3.21608V30.8594C3.21608 31.2255 3.51284 31.5224 3.87914 31.5224H34.1209C34.4871 31.5224 34.7839 31.2255 34.7839 30.8594V3.5507C34.7839 3.18448 34.4871 2.88766 34.1209 2.88766H3.87914C3.51284 2.88766 3.21608 3.18448 3.21608 3.5507V11.2756H1.45303V1.35806H36.547V32.9197Z"
                        fill="black" />
                    <path
                        d="M25.3811 10.8686C25.365 10.8482 25.348 10.8283 25.3292 10.8096C25.3104 10.7908 25.2905 10.7737 25.2702 10.7577C23.654 9.16932 21.4396 8.18781 18.9999 8.18781C16.5604 8.18781 14.3461 9.16913 12.73 10.7573C12.7094 10.7735 12.6893 10.7906 12.6705 10.8095C12.6515 10.8284 12.6344 10.8485 12.6182 10.869C11.0301 12.4852 10.0488 14.6994 10.0488 17.1389C10.0488 19.578 11.0299 21.7921 12.6178 23.4082C12.634 23.4289 12.6512 23.4492 12.6704 23.4682C12.6895 23.4873 12.7097 23.5045 12.7304 23.5208C14.3465 25.1087 16.5606 26.0899 18.9999 26.0899C21.4395 26.0899 23.6538 25.1084 25.27 23.5202C25.2904 23.5041 25.3103 23.4871 25.3292 23.4682C25.3481 23.4493 25.3652 23.4294 25.3813 23.4089C26.9696 21.7928 27.951 19.5784 27.951 17.1389C27.951 14.6991 26.9694 12.4847 25.3811 10.8686ZM25.2543 17.8019H26.5943C26.4553 19.4069 25.8179 20.871 24.8367 22.038L23.8912 21.0925C23.6323 20.8336 23.2124 20.8336 22.9535 21.0925C22.6946 21.3514 22.6946 21.7713 22.9535 22.0302L23.899 22.9757C22.732 23.9568 21.2679 24.5941 19.663 24.7333V23.3931C19.663 23.027 19.3661 22.7302 19 22.7302C18.6336 22.7302 18.3369 23.027 18.3369 23.3931V24.7333C16.7318 24.5941 15.2677 23.9568 14.1007 22.9756L15.0462 22.0302C15.3051 21.7713 15.3051 21.3515 15.0462 21.0925C14.7874 20.8338 14.3675 20.8336 14.1085 21.0925L13.1631 22.038C12.1819 20.871 11.5445 19.4069 11.4054 17.8019H12.7456C13.1117 17.8019 13.4086 17.505 13.4086 17.1389C13.4086 16.7727 13.1117 16.4758 12.7456 16.4758H11.4054C11.5445 14.8708 12.1819 13.4068 13.1631 12.2398L14.1085 13.1853C14.238 13.3148 14.4076 13.3795 14.5773 13.3795C14.7469 13.3795 14.9168 13.3148 15.0462 13.1853C15.3051 12.9264 15.3051 12.5066 15.0462 12.2476L14.1007 11.3021C15.2677 10.3209 16.7318 9.68355 18.3369 9.54451V10.8846C18.3369 11.2508 18.6336 11.5476 18.9999 11.5476C19.366 11.5476 19.663 11.2508 19.663 10.8846V9.54451C21.2679 9.68353 22.732 10.3209 23.899 11.3021L22.9535 12.2476C22.6946 12.5066 22.6946 12.9264 22.9535 13.1853C23.0829 13.3148 23.2526 13.3795 23.4224 13.3795C23.592 13.3795 23.7617 13.3148 23.8912 13.1853L24.8367 12.2398C25.8179 13.4068 26.4553 14.8708 26.5942 16.4758H25.2543C24.888 16.4758 24.5912 16.7727 24.5912 17.1389C24.5912 17.505 24.888 17.8019 25.2543 17.8019Z"
                        fill="black" />
                    <path
                        d="M18.9998 13.8237C17.1718 13.8237 15.6846 15.3108 15.6846 17.1388C15.6846 18.9668 17.1718 20.4541 18.9998 20.4541C20.8278 20.4541 22.315 18.9668 22.315 17.1388C22.315 15.3108 20.8278 13.8237 18.9998 13.8237ZM18.9998 19.128C17.9029 19.128 17.0107 18.2357 17.0107 17.1388C17.0107 16.042 17.9029 15.1497 18.9998 15.1497C20.0966 15.1497 20.9889 16.042 20.9889 17.1388C20.9889 18.2357 20.0966 19.128 18.9998 19.128Z"
                        fill="black" />
                </svg>
                <span class="text">Question Bank</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="flex-row w-full" href="{{ route('ph.class') }}">
                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.4592 18.7834C15.8427 18.7834 17.1952 18.3731 18.3456 17.6045C19.4959 16.8358 20.3925 15.7433 20.922 14.4651C21.4515 13.1869 21.59 11.7803 21.3201 10.4234C21.0502 9.06643 20.3839 7.81998 19.4056 6.84167C18.4273 5.86336 17.1809 5.19712 15.8239 4.9272C14.4669 4.65729 13.0604 4.79582 11.7822 5.32528C10.504 5.85473 9.41145 6.75134 8.64279 7.90171C7.87414 9.05209 7.46387 10.4046 7.46387 11.7881C7.46692 13.6424 8.20491 15.4199 9.51612 16.7312C10.8273 18.0424 12.6048 18.7804 14.4592 18.7834ZM14.4592 7.09373C15.3854 7.09373 16.2907 7.36837 17.0608 7.88292C17.8309 8.39748 18.4311 9.12883 18.7855 9.98451C19.14 10.8402 19.2327 11.7817 19.052 12.6901C18.8713 13.5985 18.4253 14.4329 17.7704 15.0878C17.1155 15.7427 16.2811 16.1887 15.3728 16.3694C14.4644 16.5501 13.5228 16.4573 12.6671 16.1029C11.8115 15.7485 11.0801 15.1483 10.5656 14.3782C10.051 13.6081 9.77637 12.7027 9.77637 11.7765C9.77942 10.5355 10.2738 9.3462 11.1513 8.46866C12.0288 7.59113 13.2182 7.09678 14.4592 7.09373ZM28.7273 32.8665C28.6198 32.7582 28.4919 32.6721 28.351 32.6134C28.2101 32.5547 28.059 32.5245 27.9064 32.5245C27.7537 32.5245 27.6026 32.5547 27.4617 32.6134C27.3208 32.6721 27.1929 32.7582 27.0854 32.8665C26.9802 32.9765 26.8976 33.1062 26.8426 33.2481C26.7834 33.3871 26.7519 33.5364 26.7501 33.6875C26.7501 33.9941 26.8719 34.2882 27.0888 34.5051C27.3056 34.7219 27.5997 34.8437 27.9064 34.8437C28.213 34.8437 28.5071 34.7219 28.724 34.5051C28.9408 34.2882 29.0626 33.9941 29.0626 33.6875C29.0608 33.5364 29.0294 33.3871 28.9701 33.2481C28.9151 33.1062 28.8326 32.9765 28.7273 32.8665ZM23.2814 32.5312H18.6564C18.3497 32.5312 18.0556 32.653 17.8388 32.8699C17.6219 33.0867 17.5001 33.3808 17.5001 33.6875C17.5001 33.9941 17.6219 34.2882 17.8388 34.5051C18.0556 34.7219 18.3497 34.8437 18.6564 34.8437H23.2814C23.588 34.8437 23.8821 34.7219 24.099 34.5051C24.3158 34.2882 24.4376 33.9941 24.4376 33.6875C24.4376 33.3808 24.3158 33.0867 24.099 32.8699C23.8821 32.653 23.588 32.5312 23.2814 32.5312Z"
                        fill="#231815" />
                    <path
                        d="M27.0738 30.1378H27.1547C27.2163 30.1009 27.2744 30.0583 27.3281 30.0106L27.4669 29.895C27.5205 29.8309 27.567 29.7611 27.6056 29.6869C27.6933 29.5735 27.7456 29.4367 27.7559 29.2938C27.7622 29.2245 27.7622 29.1549 27.7559 29.0856C27.7637 29.0087 27.7637 28.9313 27.7559 28.8544C27.7606 28.7967 27.7606 28.7387 27.7559 28.6809C26.7413 25.9757 24.9287 23.6426 22.5583 21.9907C20.1878 20.3388 17.3714 19.4461 14.4822 19.4309C10.7067 19.4697 7.09575 20.982 4.41947 23.6454C1.74318 26.3087 0.21335 29.9122 0.15625 33.6875C0.15625 33.9942 0.278069 34.2883 0.494908 34.5051C0.711747 34.7219 1.00584 34.8438 1.3125 34.8438H14.0312C14.3379 34.8438 14.632 34.7219 14.8488 34.5051C15.0657 34.2883 15.1875 33.9942 15.1875 33.6875C15.1875 33.3808 15.0657 33.0868 14.8488 32.8699C14.632 32.6531 14.3379 32.5313 14.0312 32.5313H2.56125C2.87269 29.5814 4.25635 26.8485 6.44958 24.8513C8.64282 22.8542 11.493 21.7318 14.4591 21.6972C16.8854 21.7111 19.2501 22.463 21.239 23.8529C23.2278 25.2429 24.7467 27.205 25.5938 29.4788V29.5713C25.7118 29.8004 25.9031 29.9836 26.1372 30.0916H26.195C26.3261 30.1496 26.4679 30.1795 26.6112 30.1795C26.7546 30.1795 26.8964 30.1496 27.0275 30.0916L27.0738 30.1378ZM19.4425 3.50938C19.8633 3.13192 20.3596 2.84849 20.8986 2.67796C21.4375 2.50743 22.0066 2.45373 22.5679 2.52043C23.1292 2.58714 23.6698 2.77271 24.1538 3.06479C24.6377 3.35687 25.0538 3.74875 25.3744 4.2143C25.695 4.67985 25.9127 5.20839 26.0129 5.76469C26.1132 6.32098 26.0937 6.89225 25.9558 7.44043C25.8179 7.98861 25.5648 8.5011 25.2133 8.94375C24.8617 9.3864 24.4199 9.74904 23.9172 10.0075C23.7813 10.0758 23.6602 10.1703 23.5608 10.2854C23.4614 10.4005 23.3856 10.5341 23.3378 10.6785C23.2901 10.8229 23.2712 10.9753 23.2823 11.127C23.2934 11.2787 23.3343 11.4268 23.4027 11.5627C23.471 11.6986 23.5654 11.8197 23.6805 11.9191C23.7957 12.0185 23.9293 12.0942 24.0737 12.142C24.2181 12.1898 24.3705 12.2087 24.5222 12.1975C24.6739 12.1864 24.8219 12.1455 24.9578 12.0772C25.7526 11.6677 26.451 11.0935 27.0063 10.3929C27.5617 9.69224 27.9614 8.88124 28.1786 8.01397C28.3958 7.1467 28.4257 6.24308 28.2662 5.36337C28.1067 4.48365 27.7614 3.64804 27.2535 2.91226C26.7456 2.17648 26.0867 1.55744 25.3206 1.0964C24.5546 0.635366 23.6991 0.342931 22.8111 0.238595C21.9232 0.134259 21.0232 0.22042 20.1712 0.491334C19.3191 0.762247 18.5346 1.21169 17.87 1.80969C17.7584 1.91294 17.6682 2.03716 17.6046 2.17526C17.541 2.31336 17.5053 2.46264 17.4994 2.61456C17.4935 2.76649 17.5175 2.91809 17.5702 3.06071C17.6229 3.20333 17.7032 3.33418 17.8064 3.44578C17.9097 3.55739 18.0339 3.64756 18.172 3.71115C18.3101 3.77475 18.4594 3.81052 18.6113 3.81643C18.7632 3.82233 18.9148 3.79825 19.0574 3.74557C19.2001 3.69289 19.3309 3.61263 19.4425 3.50938ZM23.3969 13.0716C23.0902 13.0409 22.7839 13.1333 22.5454 13.3285C22.3069 13.5236 22.1557 13.8055 22.125 14.1122C22.0943 14.4188 22.1867 14.7251 22.3819 14.9636C22.5771 15.2022 22.859 15.3534 23.1656 15.3841C25.5198 15.6694 27.7103 16.7357 29.3872 18.4125C31.064 20.0893 32.1303 22.2799 32.4156 24.6341H29.0625C28.7558 24.6341 28.4617 24.7559 28.2449 24.9727C28.0281 25.1896 27.9062 25.4837 27.9062 25.7903C27.9062 26.097 28.0281 26.3911 28.2449 26.6079C28.4617 26.8247 28.7558 26.9466 29.0625 26.9466H33.6875C33.9942 26.9466 34.2883 26.8247 34.5051 26.6079C34.7219 26.3911 34.8438 26.097 34.8438 25.7903C34.8014 22.643 33.6173 19.6183 31.5117 17.2787C29.4061 14.9391 26.5223 13.4441 23.3969 13.0716Z"
                        fill="#231815" />
                </svg>
                <span class="text">Class</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="flex-row w-full" href="{{ route('ph.faculty-list') }}">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M10.0495 2.52979L4.02953 6.45979C2.09953 7.71979 2.09953 10.5398 4.02953 11.7998L10.0495 15.7298C11.1295 16.4398 12.9095 16.4398 13.9895 15.7298L19.9795 11.7998C21.8995 10.5398 21.8995 7.72979 19.9795 6.46979L13.9895 2.53979C12.9095 1.81979 11.1295 1.81979 10.0495 2.52979Z"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path opacity="0.4"
                            d="M5.62914 13.0801L5.61914 17.7701C5.61914 19.0401 6.59914 20.4001 7.79914 20.8001L10.9891 21.8601C11.5391 22.0401 12.4491 22.0401 13.0091 21.8601L16.1991 20.8001C17.3991 20.4001 18.3791 19.0401 18.3791 17.7701V13.1301"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path opacity="0.4" d="M21.4004 15V9" stroke="#292D32" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <span class="text">Faculty Management</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="flex-row w-full" href="{{ route('ph.settings') }}">
                <svg width="34" height="36" viewBox="0 0 34 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17 23C19.7614 23 22 20.7614 22 18C22 15.2386 19.7614 13 17 13C14.2386 13 12 15.2386 12 18C12 20.7614 14.2386 23 17 23Z"
                        stroke="black" stroke-width="1.5" />
                    <path
                        d="M3.10187 15.732C3.88945 16.2268 4.3962 17.0698 4.3962 17.9998C4.39618 18.93 3.88943 19.773 3.10187 20.2678C2.56593 20.6045 2.22063 20.8736 1.97497 21.1938C1.43678 21.8953 1.19927 22.7816 1.31467 23.6581C1.4012 24.3155 1.78948 24.988 2.56605 26.3331C3.34263 27.6781 3.73092 28.3506 4.25693 28.7543C4.9583 29.2925 5.84473 29.53 6.72123 29.4146C7.12128 29.362 7.52697 29.1975 8.08643 28.9018C8.9089 28.4671 9.89247 28.4498 10.6981 28.915C11.5036 29.3801 11.9803 30.2405 12.015 31.17C12.0387 31.8025 12.0991 32.2361 12.2536 32.609C12.5919 33.4256 13.2408 34.0746 14.0575 34.413C14.6702 34.6666 15.4467 34.6666 16.9998 34.6666C18.553 34.6666 19.3295 34.6666 19.9422 34.413C20.7588 34.0746 21.4078 33.4256 21.7462 32.609C21.9005 32.2361 21.961 31.8025 21.9847 31.1701C22.0193 30.2405 22.496 29.3801 23.3017 28.915C24.1072 28.45 25.0907 28.4673 25.913 28.902C26.4727 29.1976 26.8783 29.3621 27.2783 29.4148C28.1548 29.5303 29.0413 29.2926 29.7427 28.7545C30.2687 28.351 30.657 27.6783 31.4337 26.3333C31.7793 25.7345 32.0482 25.269 32.2475 24.8786M30.8977 20.268C30.1102 19.7731 29.6035 18.9301 29.6033 18.0001C29.6033 17.07 30.1102 16.2268 30.8977 15.732C31.4337 15.3953 31.7788 15.1261 32.0245 14.806C32.5627 14.1046 32.8002 13.2182 32.6848 12.3417C32.5983 11.6843 32.21 11.0118 31.4333 9.66673C30.6568 8.32166 30.2685 7.64915 29.7425 7.24551C29.0412 6.70733 28.1547 6.46981 27.2782 6.5852C26.8782 6.63788 26.4725 6.80231 25.913 7.09803C25.0905 7.53271 24.107 7.55005 23.3015 7.08491C22.496 6.61981 22.0193 5.75948 21.9847 4.83003C21.961 4.19751 21.9005 3.7639 21.7462 3.39103C21.4078 2.57428 20.7588 1.92536 19.9422 1.58705C19.3295 1.33331 18.553 1.33331 16.9998 1.33331C15.4467 1.33331 14.6702 1.33331 14.0575 1.58705C13.2408 1.92536 12.5919 2.57428 12.2536 3.39103C12.0991 3.76386 12.0387 4.19745 12.015 4.82988C11.9803 5.75941 11.5036 6.61983 10.698 7.08491C9.89245 7.55001 8.90897 7.53263 8.08658 7.09798C7.52705 6.80225 7.12133 6.6378 6.72125 6.58511C5.84475 6.46973 4.95832 6.70725 4.25695 7.24543C3.73093 7.64906 3.34265 8.3216 2.56607 9.66665C2.22035 10.2655 1.95158 10.731 1.75213 11.1212"
                        stroke="black" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <span class="text">Settings</span>
            </a>
        </li>
    </ul>
</div>
