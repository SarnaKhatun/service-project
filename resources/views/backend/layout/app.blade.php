<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title') </title>
    <link rel="shortcut icon" href="{{ asset('images/icon/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/morris/morris.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/colors/default.css') }}" id="colorSkinCSS">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- custom css  --}}
    <link rel="stylesheet" href="{{ asset('backend/css/eastland.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body class="crm_body_bg">


@include('backend.layout.partials._left_sidebar')

<section class="main_content dashboard_part large_header_bg">


    @include('backend.layout.partials._header')

    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            @yield('body')
        </div>
    </div>

    @include('backend.layout.partials._footer')
</section>


<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<script src="{{ asset('backend') }}/js/jquery1-3.4.1.min.js"></script>

<script src="{{ asset('backend') }}/js/popper1.min.js"></script>

<script src="{{ asset('backend') }}/js/bootstrap1.min.js"></script>

<script src="{{ asset('backend') }}/js/metisMenu.js"></script>

<script src="{{ asset('backend') }}/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="{{ asset('backend') }}/vendors/chartlist/Chart.min.js"></script>

<script src="{{ asset('backend') }}/vendors/count_up/jquery.counterup.min.js"></script>

<script src="{{ asset('backend') }}/vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="{{ asset('backend') }}/vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="{{ asset('backend') }}/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="{{ asset('backend') }}/vendors/datatable/js/jszip.min.js"></script>
<script src="{{ asset('backend') }}/vendors/datatable/js/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/vendors/datatable/js/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/vendors/datatable/js/buttons.print.min.js"></script>

<script src="{{ asset('backend') }}/vendors/datepicker/datepicker.js"></script>
<script src="{{ asset('backend') }}/vendors/datepicker/datepicker.en.js"></script>
<script src="{{ asset('backend') }}/vendors/datepicker/datepicker.custom.js"></script>
<script src="{{ asset('backend') }}/js/chart.min.js"></script>
<script src="{{ asset('backend') }}/vendors/chartjs/roundedBar.min.js"></script>

<script src="{{ asset('backend') }}/vendors/progressbar/jquery.barfiller.js"></script>

<script src="{{ asset('backend') }}/vendors/tagsinput/tagsinput.js"></script>

<script src="{{ asset('backend') }}/vendors/text_editor/summernote-bs4.js"></script>
<script src="{{ asset('backend') }}/vendors/am_chart/amcharts.js"></script>

<script src="{{ asset('backend') }}/vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="{{ asset('backend') }}/vendors/scroll/scrollable-custom.js"></script>

<script src="{{ asset('backend') }}/vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
<script src="{{ asset('backend') }}/vendors/vectormap-home/vectormap-world-mill-en.js"></script>

<script src="{{ asset('backend') }}/vendors/apex_chart/apex-chart2.js"></script>
<script src="{{ asset('backend') }}/vendors/apex_chart/apex_dashboard.js"></script>

<script src="{{ asset('backend') }}/vendors/chart_am/core.js"></script>
<script src="{{ asset('backend') }}/vendors/chart_am/charts.js"></script>
<script src="{{ asset('backend') }}/vendors/chart_am/animated.js"></script>
<script src="{{ asset('backend') }}/vendors/chart_am/kelly.js"></script>
<script src="{{ asset('backend') }}/vendors/chart_am/chart-custom.js"></script>

<script src="{{ asset('backend') }}/js/dashboard_init.js"></script>
<script src="{{ asset('backend') }}/js/custom.js"></script>
<script src="{{ asset('backend') }}/js/eastland.js"></script>
<script src="{{ asset('backend') }}/js/ckeditor-classic.js"></script>
<script src="{{ asset('backend') }}/vendors/text_editor/summernote-bs4.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@if (Session::has('message'))
    <script>
        toastr.success('{{ Session::get('message') }}');
    </script>
@endif


@if (Session::has('error'))
    <script>
        toastr.error('{{ Session::get('error') }}');
    </script>
@endif

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            minHeight: 200
        });
    });
</script>

@yield('js')
</body>

</html>

