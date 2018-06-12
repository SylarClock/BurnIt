@section('adminCritica')
    @if(!Auth::user()->tipo == "admin")
        <div class="row">
            <div class=".col-md-2 .offset-md-7">
                <button type="button" class="btn btn-success" onclik="{{ //update }}">Aceptar</button>
            </div>
            <div class=".col-md-2 .offset-md-1">
                <button type="button" class="btn btn-danger" onclik="{{ //update }}">Rechazar</button>
            </div>
        <div>
    @endif
@endsection