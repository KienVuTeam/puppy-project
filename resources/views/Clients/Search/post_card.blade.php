@extends('Clients.post_page')
@section('content_post')
<div class="wrap__layout">
    @if(!empty($all_data_post))
    @foreach ($all_data_post as $key => $val)
    @if ($val->post_status ==0)
        <div class="card " style="width:350px; height:320px; margin-top:20px; ">
            <img class="" src="{{ asset('upload/images/' .$val->images) }} "style="width:100%; height:210px">
            <div class="card-body">
                <a href="{{route('read_post_page', ['post_id' =>$val->post_ID])}}">
                    <h4 >{{ $val->post_name }} </h4>
                </a>
                <p class="card-text">{!! $val->describe_p !!} </p>
                {{-- <a href="#" class="btn btn-primary">See Profile</a> --}}
            </div>
        </div>
        @endif
    @endforeach
    @else
        <h1>no post</h1>
    @endif
</div>

@endsection