@section('adminCritica')
    @if(!Auth::user()->tipo == "admin")
        <div class="row">
            <div class=".col-md-2 .offset-md-7">
                <button type="button" class="btn btn-success" onclik="{{ $review = Review::find($last->id); $review->activo = true; $review->save(); }}">Aceptar</button>
            </div>
            <div class=".col-md-2 .offset-md-1">
                <button type="button" class="btn btn-danger" onclik="{{ $review = Review::find($last->id); $review->delete(); }}">Rechazar</button>
            </div>
        <div>
    @endif
@endsection