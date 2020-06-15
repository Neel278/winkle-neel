@if(count($errors) > 0)
<div class="row">
    <div class="col-md-8 offset-md-2 error alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@if(isset($err))
<div class="col-md-8 offset-md-2 alert alert-danger alert-dismissible fade show" role="alert">
    {{$err}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif