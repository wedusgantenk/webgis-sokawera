@extends('layouts.app')
@section('title')
    Selamat Datang di Desa
@endsection

@section('content')
    <section class="sejarah" id="sejarah">
        <div class="container">
            <div class="card p-3 rounded-15">
                <h2 class="fw-bold text-center">Sejarah Desa</h2>
                <hr>
                {!! $sejarah !!}
            </div>
        </div>
    </section>
    <section class="sholat">
        <div class="container">
            <div class="text-center mb-4">
                <h3>Jadwal Sholat di Kab. Banyumas</h3>
                <p class="fw-bold text-muted">Jum'at, 02 Juni 2023</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2 col-6">
                    <div class="card p-3 rounded-15">
                        <div class="d-flex justify-content-center">
                            <svg class="icon icon-base" width="32" height="21" viewBox="0 0 52 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M38.6269 36.0243C38.6269 36.3803 38.9883 36.6216 39.3124 36.4742C44.807 33.9753 49.0796 29.1675 50.9576 23.2525C51.1298 22.7098 51.9643 22.7582 51.9837 23.3272C51.9946 23.6431 52 23.9604 52 24.279C52 38.998 40.3594 50.9301 26 50.9301C11.6406 50.9301 0 38.998 0 24.279C0 13.5268 6.21178 4.26183 15.1575 0.0489075C15.6687 -0.191841 16.0883 0.513621 15.6908 0.915183C11.7661 4.87954 9.33329 10.3905 9.33329 16.4837C9.33329 22.6606 11.8335 28.2391 15.8534 32.2147C16.1604 32.5183 16.6667 32.2945 16.6667 31.8627V15.8283C16.6667 15.2761 17.1144 14.8283 17.6667 14.8283H21.6667C22.219 14.8283 22.6667 15.2761 22.6667 15.8283V36.421C22.6667 36.6231 22.7882 36.8059 22.9761 36.8803C23.3351 37.0226 23.6988 37.1551 24.0669 37.2777C24.3842 37.3834 24.7063 37.1433 24.7063 36.8088V24.5884C24.7063 23.4838 25.6018 22.5884 26.7063 22.5884H36.6269C37.7315 22.5884 38.6269 23.4838 38.6269 24.5884V36.0243ZM33.5787 38.1419C33.8219 38.1079 34 37.8981 34 37.6525V34.4334C34 34.1319 33.864 33.8465 33.6298 33.6566C33.6298 33.6566 33.6298 33.6566 33.6298 33.6566L32.1298 32.4406C32.1298 32.4406 32.1298 32.4406 32.1298 32.4406C31.7627 32.143 31.2374 32.143 30.8703 32.4406C30.8703 32.4406 30.8703 32.4406 30.8703 32.4406L29.3703 33.6566C29.3703 33.6566 29.3703 33.6566 29.3703 33.6566C29.1361 33.8465 29 34.1319 29 34.4334V37.8162C29 38.077 29.2005 38.2947 29.4609 38.3095C29.86 38.3323 30.262 38.3439 30.6666 38.3439C31.6544 38.3439 32.6266 38.2751 33.5787 38.1419Z"
                                    fill="#2EAF71"></path>
                                <path
                                    d="M20.9767 13.5918C20.9767 13.592 20.9765 13.5918 20.9767 13.5918C21.9524 13.5547 22.6221 13.3322 22.6221 12.243C22.6221 11.4918 22.0243 11.0621 21.3577 10.5829C20.8603 10.2254 20.3243 9.84006 19.9697 9.27322C19.8577 9.0942 19.4311 9.0942 19.3191 9.27322C18.9645 9.84007 18.4285 10.2254 17.9311 10.5829C17.2645 11.0621 16.6667 11.4918 16.6667 12.243C16.6667 13.3224 17.3245 13.5506 18.2859 13.5908C18.2926 13.5911 18.2994 13.5912 18.3062 13.5912H19.5796H19.5808C19.5806 13.5912 19.581 13.5912 19.5808 13.5912L19.6439 13.5912C19.6436 13.5912 19.6443 13.5912 19.6439 13.5912L19.7076 13.5912C19.7074 13.5912 19.7077 13.5912 19.7076 13.5912H19.7092L20.9767 13.5918Z"
                                    fill="#d1ac11"></path>
                                <path
                                    d="M38.5745 19.4812C38.4714 19.3816 38.4345 19.2331 38.4655 19.0932C38.5261 18.8198 38.5576 18.5112 38.5576 18.1632C38.5576 16.4799 37.1743 15.5171 35.6313 14.4432C34.5164 13.6673 33.3182 12.8333 32.4983 11.6275C32.2037 11.1942 31.1299 11.1942 30.8353 11.6275C30.0154 12.8333 28.8171 13.6673 27.7023 14.4432C26.1593 15.5171 24.776 16.4799 24.776 18.1632C24.776 18.5109 24.8075 18.8192 24.868 19.0925C24.899 19.2327 24.862 19.3814 24.7588 19.4812C24.7588 19.4811 24.7588 19.4812 24.7588 19.4812C24.1118 20.1059 24.5541 21.2005 25.4534 21.2005H37.8798C38.7792 21.2005 39.2214 20.1059 38.5745 19.4812C38.5744 19.4812 38.5745 19.4812 38.5745 19.4812Z"
                                    fill="#d1ac11"></path>
                            </svg>
                            <p class="mb-0">Imsak</p>
                        </div>
                        <h4 class="text-muted text-center" id="imsak">00.00</h4>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="card p-3 rounded-15">
                        <div class="d-flex justify-content-center">
                            <svg class="icon icon-base" width="32" height="21" viewBox="0 0 52 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M38.6269 36.0243C38.6269 36.3803 38.9883 36.6216 39.3124 36.4742C44.807 33.9753 49.0796 29.1675 50.9576 23.2525C51.1298 22.7098 51.9643 22.7582 51.9837 23.3272C51.9946 23.6431 52 23.9604 52 24.279C52 38.998 40.3594 50.9301 26 50.9301C11.6406 50.9301 0 38.998 0 24.279C0 13.5268 6.21178 4.26183 15.1575 0.0489075C15.6687 -0.191841 16.0883 0.513621 15.6908 0.915183C11.7661 4.87954 9.33329 10.3905 9.33329 16.4837C9.33329 22.6606 11.8335 28.2391 15.8534 32.2147C16.1604 32.5183 16.6667 32.2945 16.6667 31.8627V15.8283C16.6667 15.2761 17.1144 14.8283 17.6667 14.8283H21.6667C22.219 14.8283 22.6667 15.2761 22.6667 15.8283V36.421C22.6667 36.6231 22.7882 36.8059 22.9761 36.8803C23.3351 37.0226 23.6988 37.1551 24.0669 37.2777C24.3842 37.3834 24.7063 37.1433 24.7063 36.8088V24.5884C24.7063 23.4838 25.6018 22.5884 26.7063 22.5884H36.6269C37.7315 22.5884 38.6269 23.4838 38.6269 24.5884V36.0243ZM33.5787 38.1419C33.8219 38.1079 34 37.8981 34 37.6525V34.4334C34 34.1319 33.864 33.8465 33.6298 33.6566C33.6298 33.6566 33.6298 33.6566 33.6298 33.6566L32.1298 32.4406C32.1298 32.4406 32.1298 32.4406 32.1298 32.4406C31.7627 32.143 31.2374 32.143 30.8703 32.4406C30.8703 32.4406 30.8703 32.4406 30.8703 32.4406L29.3703 33.6566C29.3703 33.6566 29.3703 33.6566 29.3703 33.6566C29.1361 33.8465 29 34.1319 29 34.4334V37.8162C29 38.077 29.2005 38.2947 29.4609 38.3095C29.86 38.3323 30.262 38.3439 30.6666 38.3439C31.6544 38.3439 32.6266 38.2751 33.5787 38.1419Z"
                                    fill="#2EAF71"></path>
                                <path
                                    d="M20.9767 13.5918C20.9767 13.592 20.9765 13.5918 20.9767 13.5918C21.9524 13.5547 22.6221 13.3322 22.6221 12.243C22.6221 11.4918 22.0243 11.0621 21.3577 10.5829C20.8603 10.2254 20.3243 9.84006 19.9697 9.27322C19.8577 9.0942 19.4311 9.0942 19.3191 9.27322C18.9645 9.84007 18.4285 10.2254 17.9311 10.5829C17.2645 11.0621 16.6667 11.4918 16.6667 12.243C16.6667 13.3224 17.3245 13.5506 18.2859 13.5908C18.2926 13.5911 18.2994 13.5912 18.3062 13.5912H19.5796H19.5808C19.5806 13.5912 19.581 13.5912 19.5808 13.5912L19.6439 13.5912C19.6436 13.5912 19.6443 13.5912 19.6439 13.5912L19.7076 13.5912C19.7074 13.5912 19.7077 13.5912 19.7076 13.5912H19.7092L20.9767 13.5918Z"
                                    fill="#d1ac11"></path>
                                <path
                                    d="M38.5745 19.4812C38.4714 19.3816 38.4345 19.2331 38.4655 19.0932C38.5261 18.8198 38.5576 18.5112 38.5576 18.1632C38.5576 16.4799 37.1743 15.5171 35.6313 14.4432C34.5164 13.6673 33.3182 12.8333 32.4983 11.6275C32.2037 11.1942 31.1299 11.1942 30.8353 11.6275C30.0154 12.8333 28.8171 13.6673 27.7023 14.4432C26.1593 15.5171 24.776 16.4799 24.776 18.1632C24.776 18.5109 24.8075 18.8192 24.868 19.0925C24.899 19.2327 24.862 19.3814 24.7588 19.4812C24.7588 19.4811 24.7588 19.4812 24.7588 19.4812C24.1118 20.1059 24.5541 21.2005 25.4534 21.2005H37.8798C38.7792 21.2005 39.2214 20.1059 38.5745 19.4812C38.5744 19.4812 38.5745 19.4812 38.5745 19.4812Z"
                                    fill="#d1ac11"></path>
                            </svg>
                            <p class="mb-0">Subuh</p>
                        </div>
                        <h4 class="text-muted text-center" id="subuh">00.00</h4>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="card p-3 rounded-15">
                        <div class="d-flex justify-content-center">
                            <svg class="icon icon-base" width="32" height="21" viewBox="0 0 52 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M38.6269 36.0243C38.6269 36.3803 38.9883 36.6216 39.3124 36.4742C44.807 33.9753 49.0796 29.1675 50.9576 23.2525C51.1298 22.7098 51.9643 22.7582 51.9837 23.3272C51.9946 23.6431 52 23.9604 52 24.279C52 38.998 40.3594 50.9301 26 50.9301C11.6406 50.9301 0 38.998 0 24.279C0 13.5268 6.21178 4.26183 15.1575 0.0489075C15.6687 -0.191841 16.0883 0.513621 15.6908 0.915183C11.7661 4.87954 9.33329 10.3905 9.33329 16.4837C9.33329 22.6606 11.8335 28.2391 15.8534 32.2147C16.1604 32.5183 16.6667 32.2945 16.6667 31.8627V15.8283C16.6667 15.2761 17.1144 14.8283 17.6667 14.8283H21.6667C22.219 14.8283 22.6667 15.2761 22.6667 15.8283V36.421C22.6667 36.6231 22.7882 36.8059 22.9761 36.8803C23.3351 37.0226 23.6988 37.1551 24.0669 37.2777C24.3842 37.3834 24.7063 37.1433 24.7063 36.8088V24.5884C24.7063 23.4838 25.6018 22.5884 26.7063 22.5884H36.6269C37.7315 22.5884 38.6269 23.4838 38.6269 24.5884V36.0243ZM33.5787 38.1419C33.8219 38.1079 34 37.8981 34 37.6525V34.4334C34 34.1319 33.864 33.8465 33.6298 33.6566C33.6298 33.6566 33.6298 33.6566 33.6298 33.6566L32.1298 32.4406C32.1298 32.4406 32.1298 32.4406 32.1298 32.4406C31.7627 32.143 31.2374 32.143 30.8703 32.4406C30.8703 32.4406 30.8703 32.4406 30.8703 32.4406L29.3703 33.6566C29.3703 33.6566 29.3703 33.6566 29.3703 33.6566C29.1361 33.8465 29 34.1319 29 34.4334V37.8162C29 38.077 29.2005 38.2947 29.4609 38.3095C29.86 38.3323 30.262 38.3439 30.6666 38.3439C31.6544 38.3439 32.6266 38.2751 33.5787 38.1419Z"
                                    fill="#2EAF71"></path>
                                <path
                                    d="M20.9767 13.5918C20.9767 13.592 20.9765 13.5918 20.9767 13.5918C21.9524 13.5547 22.6221 13.3322 22.6221 12.243C22.6221 11.4918 22.0243 11.0621 21.3577 10.5829C20.8603 10.2254 20.3243 9.84006 19.9697 9.27322C19.8577 9.0942 19.4311 9.0942 19.3191 9.27322C18.9645 9.84007 18.4285 10.2254 17.9311 10.5829C17.2645 11.0621 16.6667 11.4918 16.6667 12.243C16.6667 13.3224 17.3245 13.5506 18.2859 13.5908C18.2926 13.5911 18.2994 13.5912 18.3062 13.5912H19.5796H19.5808C19.5806 13.5912 19.581 13.5912 19.5808 13.5912L19.6439 13.5912C19.6436 13.5912 19.6443 13.5912 19.6439 13.5912L19.7076 13.5912C19.7074 13.5912 19.7077 13.5912 19.7076 13.5912H19.7092L20.9767 13.5918Z"
                                    fill="#d1ac11"></path>
                                <path
                                    d="M38.5745 19.4812C38.4714 19.3816 38.4345 19.2331 38.4655 19.0932C38.5261 18.8198 38.5576 18.5112 38.5576 18.1632C38.5576 16.4799 37.1743 15.5171 35.6313 14.4432C34.5164 13.6673 33.3182 12.8333 32.4983 11.6275C32.2037 11.1942 31.1299 11.1942 30.8353 11.6275C30.0154 12.8333 28.8171 13.6673 27.7023 14.4432C26.1593 15.5171 24.776 16.4799 24.776 18.1632C24.776 18.5109 24.8075 18.8192 24.868 19.0925C24.899 19.2327 24.862 19.3814 24.7588 19.4812C24.7588 19.4811 24.7588 19.4812 24.7588 19.4812C24.1118 20.1059 24.5541 21.2005 25.4534 21.2005H37.8798C38.7792 21.2005 39.2214 20.1059 38.5745 19.4812C38.5744 19.4812 38.5745 19.4812 38.5745 19.4812Z"
                                    fill="#d1ac11"></path>
                            </svg>
                            <p class="mb-0">Zuhur</p>
                        </div>
                        <h4 class="text-muted text-center" id="dzuhur">00.00</h4>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="card p-3 rounded-15">
                        <div class="d-flex justify-content-center">
                            <svg class="icon icon-base" width="32" height="21" viewBox="0 0 52 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M38.6269 36.0243C38.6269 36.3803 38.9883 36.6216 39.3124 36.4742C44.807 33.9753 49.0796 29.1675 50.9576 23.2525C51.1298 22.7098 51.9643 22.7582 51.9837 23.3272C51.9946 23.6431 52 23.9604 52 24.279C52 38.998 40.3594 50.9301 26 50.9301C11.6406 50.9301 0 38.998 0 24.279C0 13.5268 6.21178 4.26183 15.1575 0.0489075C15.6687 -0.191841 16.0883 0.513621 15.6908 0.915183C11.7661 4.87954 9.33329 10.3905 9.33329 16.4837C9.33329 22.6606 11.8335 28.2391 15.8534 32.2147C16.1604 32.5183 16.6667 32.2945 16.6667 31.8627V15.8283C16.6667 15.2761 17.1144 14.8283 17.6667 14.8283H21.6667C22.219 14.8283 22.6667 15.2761 22.6667 15.8283V36.421C22.6667 36.6231 22.7882 36.8059 22.9761 36.8803C23.3351 37.0226 23.6988 37.1551 24.0669 37.2777C24.3842 37.3834 24.7063 37.1433 24.7063 36.8088V24.5884C24.7063 23.4838 25.6018 22.5884 26.7063 22.5884H36.6269C37.7315 22.5884 38.6269 23.4838 38.6269 24.5884V36.0243ZM33.5787 38.1419C33.8219 38.1079 34 37.8981 34 37.6525V34.4334C34 34.1319 33.864 33.8465 33.6298 33.6566C33.6298 33.6566 33.6298 33.6566 33.6298 33.6566L32.1298 32.4406C32.1298 32.4406 32.1298 32.4406 32.1298 32.4406C31.7627 32.143 31.2374 32.143 30.8703 32.4406C30.8703 32.4406 30.8703 32.4406 30.8703 32.4406L29.3703 33.6566C29.3703 33.6566 29.3703 33.6566 29.3703 33.6566C29.1361 33.8465 29 34.1319 29 34.4334V37.8162C29 38.077 29.2005 38.2947 29.4609 38.3095C29.86 38.3323 30.262 38.3439 30.6666 38.3439C31.6544 38.3439 32.6266 38.2751 33.5787 38.1419Z"
                                    fill="#2EAF71"></path>
                                <path
                                    d="M20.9767 13.5918C20.9767 13.592 20.9765 13.5918 20.9767 13.5918C21.9524 13.5547 22.6221 13.3322 22.6221 12.243C22.6221 11.4918 22.0243 11.0621 21.3577 10.5829C20.8603 10.2254 20.3243 9.84006 19.9697 9.27322C19.8577 9.0942 19.4311 9.0942 19.3191 9.27322C18.9645 9.84007 18.4285 10.2254 17.9311 10.5829C17.2645 11.0621 16.6667 11.4918 16.6667 12.243C16.6667 13.3224 17.3245 13.5506 18.2859 13.5908C18.2926 13.5911 18.2994 13.5912 18.3062 13.5912H19.5796H19.5808C19.5806 13.5912 19.581 13.5912 19.5808 13.5912L19.6439 13.5912C19.6436 13.5912 19.6443 13.5912 19.6439 13.5912L19.7076 13.5912C19.7074 13.5912 19.7077 13.5912 19.7076 13.5912H19.7092L20.9767 13.5918Z"
                                    fill="#d1ac11"></path>
                                <path
                                    d="M38.5745 19.4812C38.4714 19.3816 38.4345 19.2331 38.4655 19.0932C38.5261 18.8198 38.5576 18.5112 38.5576 18.1632C38.5576 16.4799 37.1743 15.5171 35.6313 14.4432C34.5164 13.6673 33.3182 12.8333 32.4983 11.6275C32.2037 11.1942 31.1299 11.1942 30.8353 11.6275C30.0154 12.8333 28.8171 13.6673 27.7023 14.4432C26.1593 15.5171 24.776 16.4799 24.776 18.1632C24.776 18.5109 24.8075 18.8192 24.868 19.0925C24.899 19.2327 24.862 19.3814 24.7588 19.4812C24.7588 19.4811 24.7588 19.4812 24.7588 19.4812C24.1118 20.1059 24.5541 21.2005 25.4534 21.2005H37.8798C38.7792 21.2005 39.2214 20.1059 38.5745 19.4812C38.5744 19.4812 38.5745 19.4812 38.5745 19.4812Z"
                                    fill="#d1ac11"></path>
                            </svg>
                            <p class="mb-0">Ashar</p>
                        </div>
                        <h4 class="text-muted text-center" id="ashar">00.00</h4>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="card p-3 rounded-15">
                        <div class="d-flex justify-content-center">
                            <svg class="icon icon-base" width="32" height="21" viewBox="0 0 52 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M38.6269 36.0243C38.6269 36.3803 38.9883 36.6216 39.3124 36.4742C44.807 33.9753 49.0796 29.1675 50.9576 23.2525C51.1298 22.7098 51.9643 22.7582 51.9837 23.3272C51.9946 23.6431 52 23.9604 52 24.279C52 38.998 40.3594 50.9301 26 50.9301C11.6406 50.9301 0 38.998 0 24.279C0 13.5268 6.21178 4.26183 15.1575 0.0489075C15.6687 -0.191841 16.0883 0.513621 15.6908 0.915183C11.7661 4.87954 9.33329 10.3905 9.33329 16.4837C9.33329 22.6606 11.8335 28.2391 15.8534 32.2147C16.1604 32.5183 16.6667 32.2945 16.6667 31.8627V15.8283C16.6667 15.2761 17.1144 14.8283 17.6667 14.8283H21.6667C22.219 14.8283 22.6667 15.2761 22.6667 15.8283V36.421C22.6667 36.6231 22.7882 36.8059 22.9761 36.8803C23.3351 37.0226 23.6988 37.1551 24.0669 37.2777C24.3842 37.3834 24.7063 37.1433 24.7063 36.8088V24.5884C24.7063 23.4838 25.6018 22.5884 26.7063 22.5884H36.6269C37.7315 22.5884 38.6269 23.4838 38.6269 24.5884V36.0243ZM33.5787 38.1419C33.8219 38.1079 34 37.8981 34 37.6525V34.4334C34 34.1319 33.864 33.8465 33.6298 33.6566C33.6298 33.6566 33.6298 33.6566 33.6298 33.6566L32.1298 32.4406C32.1298 32.4406 32.1298 32.4406 32.1298 32.4406C31.7627 32.143 31.2374 32.143 30.8703 32.4406C30.8703 32.4406 30.8703 32.4406 30.8703 32.4406L29.3703 33.6566C29.3703 33.6566 29.3703 33.6566 29.3703 33.6566C29.1361 33.8465 29 34.1319 29 34.4334V37.8162C29 38.077 29.2005 38.2947 29.4609 38.3095C29.86 38.3323 30.262 38.3439 30.6666 38.3439C31.6544 38.3439 32.6266 38.2751 33.5787 38.1419Z"
                                    fill="#2EAF71"></path>
                                <path
                                    d="M20.9767 13.5918C20.9767 13.592 20.9765 13.5918 20.9767 13.5918C21.9524 13.5547 22.6221 13.3322 22.6221 12.243C22.6221 11.4918 22.0243 11.0621 21.3577 10.5829C20.8603 10.2254 20.3243 9.84006 19.9697 9.27322C19.8577 9.0942 19.4311 9.0942 19.3191 9.27322C18.9645 9.84007 18.4285 10.2254 17.9311 10.5829C17.2645 11.0621 16.6667 11.4918 16.6667 12.243C16.6667 13.3224 17.3245 13.5506 18.2859 13.5908C18.2926 13.5911 18.2994 13.5912 18.3062 13.5912H19.5796H19.5808C19.5806 13.5912 19.581 13.5912 19.5808 13.5912L19.6439 13.5912C19.6436 13.5912 19.6443 13.5912 19.6439 13.5912L19.7076 13.5912C19.7074 13.5912 19.7077 13.5912 19.7076 13.5912H19.7092L20.9767 13.5918Z"
                                    fill="#d1ac11"></path>
                                <path
                                    d="M38.5745 19.4812C38.4714 19.3816 38.4345 19.2331 38.4655 19.0932C38.5261 18.8198 38.5576 18.5112 38.5576 18.1632C38.5576 16.4799 37.1743 15.5171 35.6313 14.4432C34.5164 13.6673 33.3182 12.8333 32.4983 11.6275C32.2037 11.1942 31.1299 11.1942 30.8353 11.6275C30.0154 12.8333 28.8171 13.6673 27.7023 14.4432C26.1593 15.5171 24.776 16.4799 24.776 18.1632C24.776 18.5109 24.8075 18.8192 24.868 19.0925C24.899 19.2327 24.862 19.3814 24.7588 19.4812C24.7588 19.4811 24.7588 19.4812 24.7588 19.4812C24.1118 20.1059 24.5541 21.2005 25.4534 21.2005H37.8798C38.7792 21.2005 39.2214 20.1059 38.5745 19.4812C38.5744 19.4812 38.5745 19.4812 38.5745 19.4812Z"
                                    fill="#d1ac11"></path>
                            </svg>
                            <p class="mb-0">Magrib</p>
                        </div>
                        <h4 class="text-muted text-center" id="magrib">00.00</h4>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="card p-3 rounded-15">
                        <div class="d-flex justify-content-center">
                            <svg class="icon icon-base" width="32" height="21" viewBox="0 0 52 51"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M38.6269 36.0243C38.6269 36.3803 38.9883 36.6216 39.3124 36.4742C44.807 33.9753 49.0796 29.1675 50.9576 23.2525C51.1298 22.7098 51.9643 22.7582 51.9837 23.3272C51.9946 23.6431 52 23.9604 52 24.279C52 38.998 40.3594 50.9301 26 50.9301C11.6406 50.9301 0 38.998 0 24.279C0 13.5268 6.21178 4.26183 15.1575 0.0489075C15.6687 -0.191841 16.0883 0.513621 15.6908 0.915183C11.7661 4.87954 9.33329 10.3905 9.33329 16.4837C9.33329 22.6606 11.8335 28.2391 15.8534 32.2147C16.1604 32.5183 16.6667 32.2945 16.6667 31.8627V15.8283C16.6667 15.2761 17.1144 14.8283 17.6667 14.8283H21.6667C22.219 14.8283 22.6667 15.2761 22.6667 15.8283V36.421C22.6667 36.6231 22.7882 36.8059 22.9761 36.8803C23.3351 37.0226 23.6988 37.1551 24.0669 37.2777C24.3842 37.3834 24.7063 37.1433 24.7063 36.8088V24.5884C24.7063 23.4838 25.6018 22.5884 26.7063 22.5884H36.6269C37.7315 22.5884 38.6269 23.4838 38.6269 24.5884V36.0243ZM33.5787 38.1419C33.8219 38.1079 34 37.8981 34 37.6525V34.4334C34 34.1319 33.864 33.8465 33.6298 33.6566C33.6298 33.6566 33.6298 33.6566 33.6298 33.6566L32.1298 32.4406C32.1298 32.4406 32.1298 32.4406 32.1298 32.4406C31.7627 32.143 31.2374 32.143 30.8703 32.4406C30.8703 32.4406 30.8703 32.4406 30.8703 32.4406L29.3703 33.6566C29.3703 33.6566 29.3703 33.6566 29.3703 33.6566C29.1361 33.8465 29 34.1319 29 34.4334V37.8162C29 38.077 29.2005 38.2947 29.4609 38.3095C29.86 38.3323 30.262 38.3439 30.6666 38.3439C31.6544 38.3439 32.6266 38.2751 33.5787 38.1419Z"
                                    fill="#2EAF71"></path>
                                <path
                                    d="M20.9767 13.5918C20.9767 13.592 20.9765 13.5918 20.9767 13.5918C21.9524 13.5547 22.6221 13.3322 22.6221 12.243C22.6221 11.4918 22.0243 11.0621 21.3577 10.5829C20.8603 10.2254 20.3243 9.84006 19.9697 9.27322C19.8577 9.0942 19.4311 9.0942 19.3191 9.27322C18.9645 9.84007 18.4285 10.2254 17.9311 10.5829C17.2645 11.0621 16.6667 11.4918 16.6667 12.243C16.6667 13.3224 17.3245 13.5506 18.2859 13.5908C18.2926 13.5911 18.2994 13.5912 18.3062 13.5912H19.5796H19.5808C19.5806 13.5912 19.581 13.5912 19.5808 13.5912L19.6439 13.5912C19.6436 13.5912 19.6443 13.5912 19.6439 13.5912L19.7076 13.5912C19.7074 13.5912 19.7077 13.5912 19.7076 13.5912H19.7092L20.9767 13.5918Z"
                                    fill="#d1ac11"></path>
                                <path
                                    d="M38.5745 19.4812C38.4714 19.3816 38.4345 19.2331 38.4655 19.0932C38.5261 18.8198 38.5576 18.5112 38.5576 18.1632C38.5576 16.4799 37.1743 15.5171 35.6313 14.4432C34.5164 13.6673 33.3182 12.8333 32.4983 11.6275C32.2037 11.1942 31.1299 11.1942 30.8353 11.6275C30.0154 12.8333 28.8171 13.6673 27.7023 14.4432C26.1593 15.5171 24.776 16.4799 24.776 18.1632C24.776 18.5109 24.8075 18.8192 24.868 19.0925C24.899 19.2327 24.862 19.3814 24.7588 19.4812C24.7588 19.4811 24.7588 19.4812 24.7588 19.4812C24.1118 20.1059 24.5541 21.2005 25.4534 21.2005H37.8798C38.7792 21.2005 39.2214 20.1059 38.5745 19.4812C38.5744 19.4812 38.5745 19.4812 38.5745 19.4812Z"
                                    fill="#d1ac11"></path>
                            </svg>
                            <p class="mb-0">Isya</p>
                        </div>
                        <h4 class="text-muted text-center" id="isya">00.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tanah" id="peta">
        <div class="container">
            <div class="text-center mb-4">
                <h3>Penyebaran Tanah Warga</h3>
                <p class="fw-bold text-muted">Klik Untuk Melihat Detail</p>
            </div>

            <div id="map" class="rounded-15"></div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Detail Tanah</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Nama Pemilik</td>
                                    <td>:</td>
                                    <td id="nama">@mdo</td>
                                </tr>
                                <tr>
                                    <td>Pemilik Sebelumnya</td>
                                    <td>:</td>
                                    <td id="sebelum">@mdo</td>
                                </tr>
                                <tr>
                                    <td>Objek Tanah</td>
                                    <td>:</td>
                                    <td>
                                        <ul>
                                            <li>Luas Bangunan : <strong id="bangunan"></strong> m<sup>2</sup></li>
                                            <li>Luas Luas : <strong id="tanah"></strong> m<sup>2</sup></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td id="keterangan">@mdo</td>
                                </tr>
                                <tr>
                                    <td>Perubahan</td>
                                    <td>:</td>
                                    <td id="perubahan">@mdo</td>
                                </tr>
                                <tr>
                                    <td>Alamat Tanah</td>
                                    <td>:</td>
                                    <td id="alamat">@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="struktur" id="struktur">
        <div class="container">
            <div class="text-center mb-4">
                <h3>Demografi Desa</h3>
                <p class="fw-bold text-muted">Berikut adalah Demografi Desa</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3 mb-4">
                    <div class="card p-3 rounded-15">
                        <div class="card-body">
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2">Data Penduduk</h5>
                                <small class="text-muted">Total {{ number_format($total_penduduk) }} Jiwa</small>
                            </div>
                            <hr>
                            <ul class="p-0 m-0 mt-4">
                                @foreach ($penduduk as $pdd)
                                    <li class="d-flex mb-3 pb-1">
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">{{ $pdd->title }}</h6>
                                                <small class="text-muted">Total Seluruh Mencapai</small>
                                            </div>
                                            <div class="user-progress">
                                                <small class="fw-semibold">{{ number_format($pdd->jumlah) }}</small>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card p-3 rounded-15">
                        <div class="card-body">
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2">Data Pekerjaan</h5>
                                <small class="text-muted">Total {{ number_format($total_pekerjaan) }} Jenis
                                    Pekerjaan</small>
                            </div>
                            <hr>
                            <ul class="p-0 m-0 mt-4">
                                @foreach ($pekerjaan as $pjk)
                                    <li class="d-flex mb-4 pb-1">
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">{{ $pjk->title }}</h6>
                                                <small class="text-muted">Total Seluruh Mencapai</small>
                                            </div>
                                            <div class="user-progress">
                                                <small class="fw-semibold">{{ number_format($pjk->jumlah) }}</small>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card p-3 rounded-15">
                        <div class="card-body">
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2">Data Pendidikan</h5>
                                <small class="text-muted">Total {{ number_format($total_pendidikan) }} Type
                                    Pendidikan</small>
                            </div>
                            <hr>
                            <ul class="p-0 m-0 mt-4">
                                @foreach ($pendidikan as $skl)
                                    <li class="d-flex mb-4 pb-1">
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">{{ $skl->title }}</h6>
                                                <small class="text-muted">Total Seluruh Mencapai</small>
                                            </div>
                                            <div class="user-progress">
                                                <small class="fw-semibold">{{ number_format($skl->jumlah) }}</small>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card p-3 rounded-15">
                        <div class="card-body">
                            <div class="card-title mb-0">
                                <h5 class="m-0 me-2">Data agama</h5>
                                <small class="text-muted">Total {{ number_format($total_agama) }} Type Agama</small>
                            </div>
                            <hr>
                            <ul class="p-0 m-0 mt-4">
                                @foreach ($agama as $agm)
                                    <li class="d-flex mb-4 pb-1">
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">{{ $agm->title }}</h6>
                                                <small class="text-muted">Total Seluruh Mencapai</small>
                                            </div>
                                            <div class="user-progress">
                                                <small class="fw-semibold">{{ number_format($agm->jumlah) }}</small>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="struktur" id="struktur">
        <div class="container">
            <div class="text-center mb-4">
                <h3>Struktur Aparatur Desa</h3>
                <p class="fw-bold text-muted">Berikut dalah sususan aparatur desa</p>
            </div>

            <div class="row justify-content-center">
                @forelse ($struktur as $item)
                    <div class="col-md-3 col-10">
                        <div class="card p-3 rounded-15">
                            <img src="{{ url('storage/image/' . $item->image) }}" class="rounded-15" alt="">
                            <div class="text-center mt-3">
                                <h4>{{ $item->name }}</h4>
                                <p class="fw-bold text-muted">{{ $item->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-6">
                        <div class="alert alert-warning" role="alert">
                            Struktur Desa Belum dibuat !
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        /*Legend specific*/
        .legend {
            padding: 6px 8px;
            font: 14px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            line-height: 24px;
            color: #555;
        }

        .legend h4 {
            text-align: center;
            font-size: 16px;
            margin: 2px 12px 8px;
            color: #777;
        }

        .legend p {
            margin-bottom: -20px;
        }

        .legend span {
            position: relative;
            bottom: 3px;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin: 0 8px 0 0;
            opacity: 0.7;
        }

        .legend i.icon {
            background-size: 18px;
            background-color: rgba(255, 255, 255, 1);
        }
    </style>
@endsection

@section('scripts')
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <script type="text/javascript">
        const statesData = @json($tanahJson);
    </script>
    <script type="text/javascript">
        L.mapbox.accessToken =
            'pk.eyJ1Ijoib2phbmFscGhhIiwiYSI6ImNreHR0ZGp1MzVuZGcyemt5MHg3Z2t4eHQifQ.peGpGa_e1Bs4amUI5AsDWQ';
        const map = L.map('map').setView([{{ env('MAP_LATITUDE') }}, {{ env('MAP_LONGITUDE') }}], 15);

        const tiles = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/{z}/{x}/{y}?access_token=' + L
            .mapbox.accessToken, {
                maxZoom: 19,
                attribution: '© <a href="https://www.mapbox.com/feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);

        map.createPane('labels');

        /* global data */
        const geojson = L.geoJson(statesData).on('click', markerOnClick).addTo(map);

        function markerOnClick(e) {
            // alert("hi. you clicked the marker at " + e.latlng);
            const sampelData = e['layer']['feature']['properties'];
            var nama = sampelData['nama_terbaru'];
            var sebelum = sampelData['nama_sebelumnya'];
            var keterangan = sampelData['keterangan'];
            var perubahan = sampelData['perubahan'];
            var objek_bangunan = sampelData['luas_bangunan'];
            var objek_tanah = sampelData['luas_tanah'];
            var alamat = sampelData['alamat'];

            // console.log(sampelData);
            $("#exampleModal").modal('show');
            // set modal
            $("#nama").text(nama);
            $("#sebelum").text(sebelum);
            $("#keterangan").text(keterangan);
            $("#perubahan").text(perubahan);
            $("#tanah").text(objek_tanah);
            $("#bangunan").text(objek_tanah);
            $("#alamat").text(alamat);
        }

        /*Legend specific*/
        var legend = L.control({
            position: "bottomleft"
        });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create("div", "legend");
            div.innerHTML += "<h4>Demografi</h4>";
            // div.innerHTML +=
            //     '<table><tbody><tr><td>&nbsp;Jumlah Penduduk</td><td>&nbsp;:&nbsp;</td><td>1000 Jiwa&nbsp;</td></tr><tr><td>&nbsp;Ketinggian</td><td>&nbsp;:&nbsp;</td><td>&nbsp;2321 MDPL</td></tr></tbody></table>';
            div.innerHTML += `<table>
        <tbody>
            <tr>
                <td>&nbsp;Jumlah Penduduk</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                <td>{{ $total_penduduk }} Jiwa&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;Pekerjaan</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                <td>&nbsp;{{ count($pekerjaan) }}</td>
            </tr>
            <tr>
                <td>&nbsp;Jumlah Agama</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                <td>&nbsp;{{ count($agama) }}</td>
            </tr>
            <tr>
                <td>&nbsp;Jumlah Pendidikan</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                <td>&nbsp;{{ count($pendidikan) }}</td>
            </tr>
        </tbody>
    </table>`;
            // div.innerHTML += '<i style="background: #448D40"></i><span>Forest</span><br>';
            // div.innerHTML += '<i style="background: #E6E696"></i><span>Land</span><br>';
            // div.innerHTML += '<i style="background: #E8E6E0"></i><span>Residential</span><br>';
            // div.innerHTML += '<i style="background: #FFFFFF"></i><span>Ice</span><br>';
            // div.innerHTML +=
            //     '<i class="icon" style="background-image: url(https://d30y9cdsu7xlg0.cloudfront.net/png/194515-200.png);background-repeat: no-repeat;"></i><span>Grænse</span><br>';
            return div;
        };

        legend.addTo(map);
    </script>
@endsection
