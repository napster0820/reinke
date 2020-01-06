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