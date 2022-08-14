@extends('layouts.AdminLayout')
@section('css')
@endsection

@section('content')
<style>
  /* 2 */
  .lds-ripple {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
  }

  .lds-ripple div {
    position: absolute;
    border: 4px solid rgb(217, 141, 28);
    opacity: 1;
    border-radius: 50%;
    animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
  }

  .lds-ripple div:nth-child(2) {
    animation-delay: -0.5s;
  }

  @keyframes lds-ripple {
    0% {
      top: 36px;
      left: 36px;
      width: 0;
      height: 0;
      opacity: 0;
    }

    4.9% {
      top: 36px;
      left: 36px;
      width: 0;
      height: 0;
      opacity: 0;
    }

    5% {
      top: 36px;
      left: 36px;
      width: 0;
      height: 0;
      opacity: 1;
    }

    100% {
      top: 0px;
      left: 0px;
      width: 72px;
      height: 72px;
      opacity: 0;
    }
  }

  /* 1 */
  .lds-heart {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    transform: rotate(45deg);
    transform-origin: 40px 40px;
  }

  .lds-heart div {
    top: 32px;
    left: 32px;
    position: absolute;
    width: 32px;
    height: 32px;
    background: rgb(236, 19, 182);
    animation: lds-heart 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
  }

  .lds-heart div:after,
  .lds-heart div:before {
    content: " ";
    position: absolute;
    display: block;
    width: 32px;
    height: 32px;
    background: rgb(236, 19, 182);
  }

  .lds-heart div:before {
    left: -24px;
    border-radius: 50% 0 0 50%;
  }

  .lds-heart div:after {
    top: -24px;
    border-radius: 50% 50% 0 0;
  }

  @keyframes lds-heart {
    0% {
      transform: scale(0.95);
    }

    5% {
      transform: scale(1.1);
    }

    39% {
      transform: scale(0.85);
    }

    45% {
      transform: scale(1);
    }

    60% {
      transform: scale(0.95);
    }

    100% {
      transform: scale(0.9);
    }
  }

  /* vòng tròn xoay 3*/
  .lds-hourglass {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
  }

  .lds-hourglass:after {
    content: " ";
    display: block;
    border-radius: 50%;
    width: 0;
    height: 0;
    margin: 8px;
    box-sizing: border-box;
    border: 32px solid rgb(240, 29, 18);
    border-color: rgb(240, 29, 18) transparent #000 transparent;
    animation: lds-hourglass 5s infinite;
  }

  @keyframes lds-hourglass {
    0% {
      transform: rotate(0);
      animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    50% {
      transform: rotate(900deg);
      animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    100% {
      transform: rotate(1800deg);
    }
  }

  /* 4 */
  .lds-ellipsis {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
  }

  .lds-ellipsis div {
    position: absolute;
    top: 33px;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background: #ff0000;
    animation-timing-function: cubic-bezier(0, 1, 1, 0);
  }

  .lds-ellipsis div:nth-child(1) {
    left: 8px;
    animation: lds-ellipsis1 0.6s infinite;
  }

  .lds-ellipsis div:nth-child(2) {
    left: 8px;
    animation: lds-ellipsis2 0.6s infinite;
  }

  .lds-ellipsis div:nth-child(3) {
    left: 32px;
    animation: lds-ellipsis2 0.6s infinite;
  }

  .lds-ellipsis div:nth-child(4) {
    left: 56px;
    animation: lds-ellipsis3 0.6s infinite;
  }

  @keyframes lds-ellipsis1 {
    0% {
      transform: scale(0);
    }

    100% {
      transform: scale(1);
    }
  }

  @keyframes lds-ellipsis3 {
    0% {
      transform: scale(1);
    }

    100% {
      transform: scale(0);
    }
  }

  @keyframes lds-ellipsis2 {
    0% {
      transform: translate(0, 0);
    }

    100% {
      transform: translate(24px, 0);
    }
  }

  #image_team_4 {
    /* background-image: {{asset('images/icons/team4.jpg')}} ; */
    margin-top: -450px;
    width: 100%;
    border: 2px solid #000;
    opacity: 0.3;

  }
</style>
<!-- / -->
<div class="col_3">
  <div class="col-md-3 widget widget1">
    <div class="r3_counter_box">
      <i style="background-color: rgb(246, 246, 86);" class="pull-left fa fa-pen-to-square dollar icon-rounded"></i>
      <div class="stats">
        <h5><strong>{{$data_post}} </strong></h5>
        <span>Total Post</span>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="col-md-3 widget widget1">
    <div class="r3_counter_box">
      <i style="background-color: rgb(25, 208, 221);" class="pull-left fa fa-users dollar2 icon-rounded"></i>
      <div class="stats">
        <h5><strong>{{$data_user}} </strong></h5>
        <span>User</span>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="col-md-3 widget widget1">
    <div style="background-color: pink;"  class="r3_counter_box">
      <i style="background-color: red;" class="pull-left fa fa-solid fa-users-gear icon-rounded"></i>
      <div class="stats">
        <h5><strong>{{$data_ad}} </strong></h5>
        <span>Admin</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 widget widget1">
    <div class="r3_counter_box">
      <i class="pull-left fa fa-solid fa-images dollar2 icon-rounded"></i>
      <div class="stats">
        <h5><strong>{{$data_image}} </strong></h5>
        <span>Total Images</span>
      </div>
    </div>
  </div>

  <!--  -->
  <div style="margin-top: 50px !important;" class="col-md-3 widget widget1">
    <div class="r3_counter_box">
      <div class="lds-heart">
        <div></div>
      </div>
    </div>
  </div>
  <!--  -->
  <div style="margin-top: 50px !important;" class="col-md-3 widget widget1">
    <div class="r3_counter_box">
      <div class="lds-ripple">
        <div></div>
      </div>
    </div>
  </div>
  <!--  -->
  <div style="margin-top: 50px !important;" class="col-md-3 widget widget1">
    <div class="r3_counter_box">
      <div class="lds-hourglass"></div>
    </div>
  </div>

  <!--  -->
  <div style="margin-top: 50px !important;" class="col-md-3 widget widget1">
    <div class="r3_counter_box">
      <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>

    </div>
  </div>
  <!-- anh team -->

  <div>
  <!-- <img id="image_team_4" class="d-block img-fluid" src="{{ asset('images/icons/team4.jpg') }}" alt="First slide"> -->
  <!-- <span style="font-size: 20px; margin:-200px;text-align: center; color:red; margin-left: 50%; transform: translateX(-50%);">hello </span> -->
  </div>

</div>

@endsection

@section('script')

@endsection