<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <title>{{ tenant('name') ? tenant('name') : config('app.name', '') }}</title>

    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link rel="icon" type="image/svg" href="{{tenant('icone') ? tenant('icone') : '/assets/images/icon-colege.png'}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('assets\fontawesome-free\css\all.min.css')}}"/>


    <script src="/assets/js/perfect-scrollbar.min.js"></script>
    <script defer src="/assets/js/popper.min.js"></script>
    <script defer src="/assets/js/tippy-bundle.umd.min.js"></script>
    <script defer src="/assets/js/sweetalert.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="main" class="antialiased relative font-nunito text-sm font-normal overflow-x-hidden" :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout, $store.app
        .rtlClass
    ]">

    
    <!-- screen loader -->
    <div class="screen_loader fixed inset-0 bg-[#fafafa] z-[60] grid place-content-center animate__animated">
        <span class="animate-spin border-8 border-[#f1f2f3] border-l-primary rounded-full w-14 h-14 inline-block align-middle m-auto mb-10"></span>
    </div>


    <div class="main-container text-black min-h-screen" :class="[$store.app.navbar]">

        <x-common.sidebar />

        <div class="main-content">
            <x-common.header />

            <div class="p-6 animate__animated" :class="[$store.app.animation]">
                {{ $slot }}

                <x-common.footer />
            </div>
        </div>
    </div>

    <script src="/assets/js/alpine-collaspe.min.js"></script>
    <script src="/assets/js/alpine-persist.min.js"></script>
    <script defer src="/assets/js/alpine-ui.min.js"></script>
    <script defer src="/assets/js/alpine-focus.min.js"></script>
    <script defer src="/assets/js/alpine.min.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>