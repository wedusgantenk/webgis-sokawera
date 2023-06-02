@extends('layouts.app')
@section('title')
    Selamat Datang di Desa
@endsection

@section('content')
    <section class="sejarah" id="sejarah">
        <div class="container">
            <blockquote class="blockquote">
                <p>{{ $sejarah }}</p>
            </blockquote>
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

@section('scripts')
    <script>
        $(document).ready(function() {
            var d = new Date();

            var month = d.getMonth() + 1;
            var day = d.getDate();

            var output = d.getFullYear() + '-' +
                (month < 10 ? '0' : '') + month + '-' +
                (day < 10 ? '0' : '') + day;

            var link = "https://api.banghasan.com/sholat/format/json/jadwal/kota/707/tanggal/" + output
            // console.log(strDate);
            $.get(link, function(data, status) {
                // console.log(data.jadwal.data);
                $('#imsak').html(data.jadwal.data.imsak);
                $('#subuh').html(data.jadwal.data.subuh);
                $('#dzuhur').html(data.jadwal.data.dzuhur);
                $('#ashar').html(data.jadwal.data.ashar);
                $('#magrib').html(data.jadwal.data.maghrib);
                $('#isya').html(data.jadwal.data.isya);
            });
        });
    </script>

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


        /* global data */
        const geojson = L.geoJson(statesData).addTo(map);

        geojson.eachLayer((layer) => {
            // layer.bindPopup(layer.feature.properties.name);
            var body =
                `<table class="table table-striped"> <tbody> <tr> <th>Nomor</th> <td>:</td> <td>` + layer.feature
                .properties.nomor +
                `</td> </tr> <tr> <th>Nama Pemilik</th> <td>:</td> <td>` + layer.feature.properties.nama_terbaru +
                `</td> </tr> <tr> <th>Luas Tanah</th> <td>:</td> <td>` + layer.feature.properties.luas_tanah +
                ` m<sup>2</sup></td> </tr> <tr> <th>Luas Bangunan</th> <td>:</td> <td>` + layer.feature.properties
                .luas_bangunan + ` m<sup>2</sup></td> </tr> </tbody> </table>`
            layer.bindPopup(body);
        });
    </script>
@endsection
