@extends('layouts.master')

@section('content')
 <!-- ***** Breadcrumb Area Start ***** -->
 <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Gellary</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL('/')}}"><i class="fa fa-home"></i> Home</a></li>
                <?php $segments = ''; ?>
                    @foreach (Request::segments() as $segment)
                        <li class="breadcrumb-item active">
                            <a href="{{ URL($segments) }}">{{ $segment }}</a>
                        </li>
                    @endforeach
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>


    <div class="container">
        <div class="row">

            <div class="col-md-12">
              @if (count($photos) >= 1)

                <div id="grid" class="row">
                    @foreach ($photos as $photo)
                        <div class="mix col-sm-3 page1 page4 margin30 superbox-list">
                            <div class="item-img-wrap mt-3 ">
                                <img src="{{ asset($photo->photo_path) }}" alt="{{ $photo->name }}"
                                    class="img-responsive superbox-img" alt="workimg">
                            </div>

                        </div>
                    @endforeach
                </div>
                <!--grid-->
                @else
                <div class="col-12">
                    <div class="single-blog-item mb-100">
                        <p class="txt-center">No Photo Found!</p>
                    </div>
                </div>
            @endif
            </div>
        </div>
        <hr>
        {{ $photos->links() }}

    </div>
   




    <div class="modal fade" id="showPhoto" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
