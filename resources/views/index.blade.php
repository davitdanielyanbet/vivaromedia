@extends('layout')

@section('title')Vmedia - Home page @endsection

@section('main_content')

        <!-- START TEAM -->
        <section class="section" id="team" style="margin-top: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2 class="title-heading">Meet our expert people of payonline</h2>
                            <p class="title-desc text-muted mt-2">Donec dapibus dolor at semper dictum phasellus fringilla sem risus mollis faucibus dolor eleifend id maecenas viverra.</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    @foreach($users as $user)
                    <div class="col-lg-3" id="user-id-{{$user->id}}">
                        <div class="team-box rounded shadow mt-4 bg-white rounded">
                            <div class="p-4">
                                <div class="team-img text-center">
                                    <img src="{{$user->userAccount->avatar_url}}" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="text-center mt-4">
                                    <h5 class="f-18">{{$user->userAccount->first_name}} {{$user->userAccount->last_name}}</h5>
                                </div>
                            </div>

                            <div class="team-border text-center">
                                <p class="text-muted text-uppercase f-13 mb-0">{{$user->userAccount->postition}}</p>
                            </div>


                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END TEAM -->
@endsection
