@if(Session::has('errorAccess'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('errorAccess') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(Session::has('status'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif