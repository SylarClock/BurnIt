@section('adminCritica')
    @if(!Auth::user()->tipo == "admin")
        {!!Form::open(['route' =>'Review.actionAdmin', 'method' => 'POST')!!}  
        <div class="row">
            <input type="hidden" name="id" value="{{$last->id}}"/>
            <div class=".col-md-2 .offset-md-7">
                <button type="submit" class="btn btn-success" name="aceptar">Aceptar</button>
            </div>
            <div class=".col-md-2 .offset-md-1">
                <button type="submit" class="btn btn-danger" name="rechazar">Rechazar</button>
            </div>
        <div>
        {!!Form::close()!!}
    @endif
@endsection