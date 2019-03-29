@extends('layouts.master')

@section('content')


        <nav class="navbar navbar-expand-md ">
            <div class="container-fluid">
                <a class="navbar-brand d-flex" href="#">
                    <!-- <img src="img/air.png" alt=""> -->
                    <h5><span>F</span>ly<span>F</span>ast</h5>
                </a>
    
    
                <div class="d-flex justify-content-between toggler-cover">
                    <h6 class="text-light mt-1 mr-1" style="z-index:33333;">MENU</h6>
                    <div class="toggler">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
    
                </div>
    
            </div>
            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content text-center   p-1">
                        <div class="modal-header">
    
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-dark ">Are you sure </h5>
                        </div>
    
                        <div class="d-flex justify-content-between m-2 p-3">
                            <button class="btn btn-outline-danger" data-dismiss="modal">no</button>
                            <button class="btn btn-outline-info">yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    
        <div class="site-nav navbar-nav">
            <ul>
                <li><a href="schedule.html" class=""><i class="fa fa-rocket mr-2  " aria-hidden="true"></i> flight schedules</a></li>
                <li><a href="rev.html" class=""><i class="fa fa-user-plus mr-2" aria-hidden="true"></i> My Reservations</a></li>
                <li><a href="register.html" class=" "> <i class="fa fa-pencil mr-2"></i> Edit profile</a> </li>
    
                <li> <a href="#" class="" data-toggle="modal" data-target=".bd-example-modal-sm"> <i class="fa fa-sign-out mr-2"></i> logout</a></li>
            </ul>
        </div>
        <div id="schedule-cover" class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-5 pt-4   mb-2 pb-3">
                        <table class="table table-hover  table-responsive-sm ">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Time</th>
                                    <th>Amount</th>
                                    <th colspan="2"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @if(count($post) > 0)
                                 @foreach ($post as $post)
                                <tr>
                                                <th>{{$post->id}}</th>
                                                <th>{{$post->origin}}</th>
                                                <th>{{$post->destination}}</th>
                                                <th>{{$post->Time}}</th>
                                                <th>{{$post->Amount}}</th>
                                                <th><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">book flight
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                     </button></th>
                                            
                                             @endforeach
                                             @endif                                           
                                    
                                </tr>    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <h6 class="text-center">orders</h6>
             <hr>
             <div class="row">
                 <div class="col-md-12">
              <h6> <i class="fa fa-user"></i> :</h6> <br>
    
              <h6> <i class="fa fa-envelope-o"></i> :</h6> <br>
    
              <h6> <i class="fa fa-phone"></i> :</h6> <br>
    
              <h6> <i class="fa fa-rocket"></i> :</h6> <br>
    
              <h6> <i class="fa fa-clock-o"></i> :</h6> <br>
                 </div>
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">confirm payment</button>
            </div>
          </div>
        </div>
      </div>
    
    
    
        </div>

        @endsection