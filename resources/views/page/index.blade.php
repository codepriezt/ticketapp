@extends('layouts.master')

@section('content')
@include('inc.nav')
<section id="login-wrapper">
        <div class="container">

            <div class="row">
                <div class=" col-lg-5 col-md-6   col-sm-10 card  text-center">
                    <div class="card-body">
                        <form method ="post" action= "{{url('postlogin')}}">
                            @csrf
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="email" required="">
                            </div>

                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="password" required="">
                            </div>

                            <div class="input-group button_cover">
                        
                               <button class="a btn-block" type="submit">login</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>



@endsection