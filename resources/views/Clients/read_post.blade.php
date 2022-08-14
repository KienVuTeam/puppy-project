@extends('layouts.PuppyLayout')
@section('content')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<style>
    .wrap__layout {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        flex-direction: row;
    }

    .wrap__c {
        margin: 0 auto;
        margin-left: 5%;
        margin-right: 5%;
    }
</style>
<section class="w3l-inner-banner-main">
    <div class="about-inner editContent">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="{{route('index_page')}} " class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                    <p>
                </li>
                <li class="active editContent">Read Post</li>
            </ul>
        </div>
    </div>
</section>

<div class="wrap__c" style="margin-bottom: 100px">
    <div style="margin-top: 50px;">
        @foreach ($data_post as $key => $val)
        <!-- <h1 style="text-align: center">{{$val->post_name}} </h1> -->
        <img class="card-img-top" src="{{ asset('upload/images/' .$val->images) }} " style="padding-width:50%; height:400px; background-repeat: repeat-x;">
        @endforeach
    </div> <br>
    <div class="row">


        <div class="col-2 " {{-- style="margin-left:-50px" --}}>
        </div>

        <div class="col-8 ">
            <main>
                <hr>
                @foreach ($data_post as $key => $val)
                {!! $val->describe_p !!}
                {!! $val->content !!}
                @endforeach
            </main>
        </div>
        {{-- end content --}}

    </div>
    <div class="col-2 ">

    </div>
</div>
<script>
    CKEDITOR.replace('user_Comment', {
        filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection