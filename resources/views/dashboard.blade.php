{{-- start TOP --}}
@include('include.top')
{{-- end TOP --}}



<div class="container-scroller">

    {{-- start NAV --}}
    @include('include.nav')
    {{-- end NAV --}}

    <div class="container-fluid page-body-wrapper">

        {{-- start TODO --}}
        @include('include.todo')
        {{-- end TODO --}}

        {{-- start SIDE --}}
        @include('include.side')
        {{-- end SIDE --}}
        @yield('content')
    </div>


</div>

{{-- start FOOTER --}}
@include('include.footer')
{{-- end FOOTER --}}



{{-- start BOTTOM --}}
@include('include.bottom')
{{-- end BOTTOM --}}
