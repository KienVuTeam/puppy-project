@extends('layouts.PuppyLayout')
@section('content')
{{-- <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }} "> --}}
<style>
    .wrap {
        background-Color: rgb(155, 207, 190);
        height: 800px;
        width: 80%;
        margin: 0 auto;
    }

    .wrap__layout {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        flex-direction: row;
    }

    .wrap__c {
        margin: 0 auto;
        margin-left: 20px;
    }
</style>

<div>
    <section class="w3l-hero-headers-9">
        <div class="slide header11" data-selector="header11">
            <div class="container">
                <div class="banner-text ">
                    <h5 class=" ">Wellcome to Patronal Puppy
                        <br><strong>Puppy</strong>
                    </h5>
                    <p class=" ">Puppy patronal is a place to share stories, photos, and characteristics about dogs</p>
                    <a href="/contact" class="btn logo-button top-margin">Contact Us</a>
                </div>
            </div>

        </div>
    </section>
</div>
{{-- --}}
<div class=" container">
    <div class="wrap__layout">
        @foreach ($post_index as $key => $val)
        @if ($val->post_status == 0)
        <div class="card " style="width:350px; height:320px; margin-top:20px; ">
            <img style="width:100%; height:210px" class="card-img-top" src="{{ asset('upload/images/' . $val->images) }} " alt="Card image">
            <div class="card-body">
                <a href="{{route('read_post_page', ['post_id' =>$val->post_ID])}}">
                    <h4 class="card-title">{{ $val->post_name }} </h4>
                </a>
                <p class="card-text">{!! $val->describe_p !!} </p>
                {{-- <a href="#" class="btn btn-primary">See Profile</a> --}}
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
{{-- --}}
<section class="w3l-specification-6">
    <div style="border-top: 1px solid #000; margin-top: 30px;" class="specification-layout editContent ">
        <div class="container">
            <div class=" row">
                <div class="my-bio col-lg-6">
                    <h3 class="title-big">Many interesting things<span class="color-text editContent">Puppy</span>a website for dog lovers</h3>
                    <div class="hair-make">
                        <h5><a href="{{route('show_image')}} ">Click here to view photo gallery</a></h5>
                        <p class="para mt-2">admire super cute pictures of dogs, a huge collection of dogs</p>
                    </div>
                    <div class="hair-make">
                        <h5><a href="{{route('register')}} ">Register an account:</a></h5>
                        <p class="para mt-2">If you love dogs, sign up for an account and we'll send you the latest articles</p>
                    </div>
                    <div class="hair-make">
                        <h5><a href="#">You have an article you want to share with me & everyone:</a></h5>
                        <p class="para mt-2">click here you can write a story about the dog and share it with everyone....but with admin approval first!</p>
                    </div>
                </div>
                <div class="col-lg-6 position-relative back-image">
                    <img src="{{asset('images/Page/userprofile.jpg')}}" alt="product" class="img-responsive ">
                </div>
            </div>

</section>
@endsection