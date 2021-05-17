<!DOCTYPE html>
<html>
@include('backend.partial.head')

<body class="skin-black">
    <!-- header logo: style can be found in header.less -->
    @include('backend.partial.header')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        @include('backend.partial.sidebar')

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            @yield('breadcrumbs', Breadcrumbs::render('dashboard'))
            @include('layouts.flash')
            <!-- Main content -->
            @yield('main_content')
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- add new calendar event modal -->


    @include('backend.partial.footer')
</body>

</html>
