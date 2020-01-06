<!--@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('successAgregado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('successRegister') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif-->
@if (session('mensaje'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('mensaje') }}
    </div>
@endif
@if (session('mensaje_err'))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('mensaje_err') }}
    </div>
@endif