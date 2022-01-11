@extends('layouts.app')

@section('content')

<div class="container emp-profile mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <img  class="img-center img-circle" src="{{ Auth::user()->img_path ? asset(Auth::user()->img_path) : asset('img/static-img/avatar7.png')}}" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                {{Auth::user()->name}}
                            </h5>
                            <h6>
                                @if (Auth::user()->is_admin == 1)
                                    {{__('Admin')}}
                                @else
                                {{__('Member')}}
                                    
                                @endif
                            </h6>
                            <br>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{URL('profile/'.Auth::user()->id.'/edit')}}" class="btn dento-btn">Edit Profile</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
          
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Auth::user()->name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{Auth::user()->phone}}</p>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
</div>



@endsection
