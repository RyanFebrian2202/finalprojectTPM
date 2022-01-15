@extends('layouts.dashboardmenu')

@section('menu')
    <?php

    ?>
<div class="right-column">
    <header>
        <div class="header-top">
            <div class="header-date">
                <h3>Dashboard</h3>
                <p id="date"></p>
            </div>
            {{-- <div class="search">
                <img src="{{asset('Assets/Dashboard Icon/search.png')}}" alt=""><input type="text" placeholder="Search name...">
            </div> --}}
        </div>
    </header>
    <section id="profile">
        <div class="profile-pic">
            <h1>Profile Picture</h1>
            <div class="profile-line">
                <img class="pfp-line" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
            </div>
            @if ($leader->leader_gender == "Male")
                <div class="profile-pfp">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                </div>
            @else
                <div class="profile-pfp">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                    </div>
                </div>
            @endif
        </div>
        <div class="personal-info">
            <h1>Personal Information</h1>
            <div class="profile-line">
                <img src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
            </div>
            <div class="info">
                <div class="info-left">
                    <div class="name">
                        <label for="name">Full Name</label>
                        <p>{{$leader->leader_name}}</p>
                    </div>
                    <div class="place">
                        <label for="place">Place of Birth</label>
                        <p>{{$leader->leader_birth_place}}</p>
                    </div>
                    <div class="type">
                        <label for="type">Registration Type</label>
                        <p>{{$leader->status}}</p>
                    </div>
                </div>
                <div class="info-right">
                    <div class="date">
                        <label for="date">Date of Birth</label>
                        <p>{{$leader->leader_birth_date}}</p>
                    </div>
                    <div class="gender">
                        <label for="date">Gender</label>
                        <p>{{$leader->leader_gender}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <h1>Contact Information</h1>
            <div class="profile-line">
                <img src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
            </div>
            <div class="info">
                <div class="info-left">
                    <div class="email">
                        <label for="email">Email</label>
                        <p>{{$leader->leader_email}}</p>
                    </div>
                    <div class="whatsapp">
                        <label for="whatsapp">Whatsapp</label>
                        <p>{{$leader->leader_wa_number}}</p>
                    </div>
                    <div class="line">
                        <label for="line">LINE ID</label>
                        <p>{{$leader->leader_line_id}}</p>
                    </div>
                </div>
                <div class="info-right">
                    <div class="git">
                        <label for="git">Github/Gitlab</label>
                        <p>{{$leader->leader_github}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="{{asset('js/dashboard.js')}}"></script>
@endsection
