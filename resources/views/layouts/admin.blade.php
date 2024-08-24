<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- [Meta] -->
    @include('backend.layouts.meta')
    <!-- [style] -->
    @include('backend.layouts.style')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <div>
        <div>
            <!-- [ Pre-loader ] start -->
            <div class="loader-bg">
                <div class="pc-loader">
                    <div class="loader-fill"></div>
                </div>
            </div><!-- [ Pre-loader ] End -->
            @guest
            @else
                <!-- [ Sidebar Menu ] start -->
                @include('backend.layouts.sidebar')
                <!-- [ Sidebar Menu ] end -->
                <!-- [ Header Topbar ] start -->
                @include('backend.layouts.navbar')
                <!-- [ Header ] end -->
            @endguest
            <!-- [ Main Content ] start -->
            @yield('admin_content')
            <!-- [ Main Content ] end -->
            @guest
            @else
                <!-- [ Footer Content ] start -->
                @include('backend.layouts.footer')
                <!-- [ Footer Content ] end -->
            @endguest
            <!-- [ color setting Start ] end -->
            @include('backend.layouts.colormode')
            <!-- [Page Specific JS] start -->
            @include('backend.layouts.script')
            <!-- [Page Specific JS] end -->
        </div>
    </div>
</body>

</html>
