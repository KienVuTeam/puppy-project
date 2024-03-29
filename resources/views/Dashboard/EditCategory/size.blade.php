@extends('layouts.AdminLayout')
@section('content')
    @if ($messSuccess = Session::get('msg'))
        <div class="alert alert-success show" role="alert">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong style="text-align: center;">{{ $messSuccess }}</strong>
        </div>
    @endif <br>
    <h3 style="color:rgb(207, 28, 28); border-bottom:1px solid #000;">Create Category</h3> <br>
    <form action="" method="post">
        @foreach ($edit_siz as $key =>$val)
        <input type="text" placeholder="Ender Size" class="form-control " name="dog_name" value="{{ $val ->size}}">
        @endforeach
        <button type="submit" class="btn btn-primary">Add Category</button>
        @csrf
    </form> <br>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{route('show_detail_category')}}" class="btn btn-warning">Back</a>
@endsection
