{{-- start TOP --}}
@include('admin.include.top')
{{-- end TOP --}}



<div class="container-scroller">

    {{-- start NAV --}}
    @include('admin.include.nav')
    {{-- end NAV --}}

    <div class="container-fluid page-body-wrapper">

        {{-- start TODO --}}
        @include('admin.include.todo')
        {{-- end TODO --}}

        {{-- start SIDE --}}
        @include('admin.include.side')
        {{-- end SIDE --}}
        @yield('content')
    </div>


</div>

{{-- start FOOTER --}}
@include('admin.include.footer')
{{-- end FOOTER --}}



{{-- start BOTTOM --}}
@include('admin.include.bottom')
{{-- end BOTTOM --}}
