@include('header')

@include('success_message')
@include('errors')


@if (session('status'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
@elseif(session('failed'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('failed') }}
    </div>
@endif


@section('content')
    <div class="container" style="margin-top: 100px;">
        <h1 >Product content</h1>
    </div>
@endsection

@yield('content')

@include('footer')
