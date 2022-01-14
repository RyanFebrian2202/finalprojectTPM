@extends('layouts.dashboardmenu')

@section('menu')
<div class="right-column">
    <header>
        <?php
            use App\Models\User;
            $id = Auth::user()->id;
            $leader = User::find($id);
        ?>
        <div class="header-top">
            <div class="header-date">
                <h3>Dashboard</h3>
                <p id="date"></p>
            </div>
            {{-- <div class="search">
                <img src="{{asset('Assets/Dashboard Icon/search.png')}}" alt=""><input type="text" placeholder="Search name...">
            </div> --}}

            @if ($leader->payment == null)
                <section id="pay-upload">
                    <h1>Upload Payment Receipt</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat act.</p>
                    <div class="upload-receipt">
                        <form action="{{route('addPayment', ['id'=>$leader->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="upload">
                                <img class="upload-img" src="{{asset('Assets/Dashboard Icon/upload.png')}}" alt="">
                            </label>
                            <input class="upload-input" name="payment" id="upload" type="file" src="{{asset('Assets/Dashboard Icon/upload.png')}}" id="receipt" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">
                            <p>Upload or drag file from your device</p>
                            {{-- Ini udah beres payment tinggal kurang button disini biar bs ke submit formnya --}}
                        </form>
                    </div>
                </section>

            @elseif ($leader->payment != null && $leader->verification_status == 'Approved')
                <section id="pay-success">
                    <img src="{{asset('Assets/Dashboard Icon/success.png')}}" alt="">
                    <h1>You Have Been Registered Successfully</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed.</p>
                </section>

            @else
                <section id="pay-verified">
                    <img src="{{asset('Assets/Dashboard Icon/verified.png')}}" alt="">
                    <h1>Your Payment is Being Verified</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed.</p>
                </section>
            @endif
        </div>
    </header>

    <div class="contact-person">
        <h3>For more information please kindly contact :</h3>
        <div class="cp-name">
            <img src="{{asset('Assets/Dashboard Icon/cp.png')}}" alt="">
            <p>Jevon Christopher</p>
        </div>
        <div class="cp-line">
            <img src="{{asset('Assets/Dashboard Icon/line.png')}}" alt="">
            <p>Jevon123</p>
        </div>
        <div class="cp-wa">
            <img src="{{asset('Assets/Dashboard Icon/whatsapp.png')}}" alt="">
            <p>0812-2345-293</p>
        </div>
    </div>

</div>
<script src="{{asset('js/dashboard.js')}}"></script>
@endsection
