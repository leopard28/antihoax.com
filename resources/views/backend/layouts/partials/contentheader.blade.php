
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Home')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('home')}}" ><i class="fa fa-home"></i> Home</a></li>
        <li class="active">@yield('contentheader_message', '')</li>
    </ol>
</section>