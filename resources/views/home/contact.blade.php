<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <section class="contact_section ">
            <div class="container px-0">
                <div class="heading_container ">
                    <h2 class=""> Contact Us </h2>
                </div>
            </div>
            <div class="container container-bg">
                <div class="row">
                    <div class="col-lg-7 col-md-6 px-0">
                        <div class="map_container">
                            <div class="map-responsive"> <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Churchill+Ave+Addis+Ababa+Ethiopia" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe> </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 px-0">
                        @if(session('success'))
                        <div style="color: green; margin-bottom: 15px;">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="{{url('contact_store')}}" method="POST">
                            @csrf
                            <div>
                                <input type="text" name="name" placeholder="Name" value="{{old('name')}}" />
                                @error('name')
                                <div style="color: red;">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" />
                                @error('email')
                                <div style="color: red;">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="text" name="phone" placeholder="Phone" value="{{old('phone')}}" />
                                @error('phone')
                                <div style="color: red;">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <textarea name="message" class="message-box" placeholder="Message" style="width:100%;">{{old('message')}}</textarea>
                                @error('message')
                                <div style="color: red;">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="d-flex "> <button type="submit"> SEND </button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> <br><br><br>
    </div>
    <!-- end hero area -->
    <!-- info section -->
    @include('home.footer')
</body>

</html>