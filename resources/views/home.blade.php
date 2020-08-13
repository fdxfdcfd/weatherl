@extends('layouts.app')
@section('content')
    <main role="main" class="text-center">
        <div class="row text-white p-4 text-left">
            @foreach($posts as $latestPost)
                @if ($loop->first)
                    <div class="col-md-12">
                        <div class="col-md-12" style="background: #333;">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250 text-white" style="background: #333;">
                                <div class="card-body d-flex flex-column align-items-start w-50">
                                    <strong class="d-inline-block mb-2 text-primary">Update News</strong>
                                    <div class="mb-1 text-muted">{{date('F j, Y', strtotime($latestPost->created_at))}}</div>
                                    <h3 class="mb-0">
                                        <a class="text-white" href="#">{{ $latestPost->title }}</a>
                                    </h3>
                                    <p class="card-text">{{ $latestPost->short_description }}</p>
                                    <p class="card-text">{{ $latestPost->content }}</p>
                                    <!--<a href="#">Continue reading</a>-->
                                </div>
                                <div class="p-4 w-50 text-center">
                                    <img class="w-100 card-img-right flex-auto d-none d-md-block" data-src="./image/{{ $latestPost->image }}" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="./image/{{ $latestPost->image }}" data-holder-rendered="true">
                                    <div class="fb-share-button"
                                         data-href="./image/{{ $latestPost->image }}"
                                         data-layout="button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    @break
                @endif
            @endforeach
        </div>
        <!--Code chia thành 2 hình lớn width=100-->
        <div class="d-flex flex-row flex-wrap mt-2 mb-2">
            <div class="p-4 w-50">
                <img class="w-100" src="https://api.sat24.com/animated/TH/visual/3/SE%20Asia%20Standard%20Time/7560706" alt="">
                <div class="fb-share-button"
                     data-href="https://api.sat24.com/animated/TH/visual/3/SE%20Asia%20Standard%20Time/7560706"
                     data-layout="button">
                </div>
            </div>
            <div class="p-4 w-50">
                <img class="w-100" src="https://api.sat24.com/animated/TH/infraPolair/3/SE%20Asia%20Standard%20Time/7417866" alt="">
                <div class="fb-share-button"
                     data-href="https://api.sat24.com/animated/TH/infraPolair/3/SE%20Asia%20Standard%20Time/7417866"
                     data-layout="button">
                </div>
            </div>
        </div>
        <div class="cover-top">
            <div class="cover mb-4"></div>
            <!--Chỉnh sửa câu chú thích Page-->
            <p class="mt-2 mb-4">Trang web cung cấp dự báo thời tiết dành cho quan sát thiên văn nghiệp dư tại Việt nam</p>
            <div class="cover"></div>
        </div>
        <!--End of Code chia thành 2 hình lớn width=100-->
        <div class="p-4">
            <div class="embed-responsive embed-responsive-16by9 p-4">
                <iframe class="embed-responsive-item" src="https://embed.windy.com/embed2.html?lat=16.215&lon=106.743&detailLat=17.393&detailLon=106.479&width=650&height=650&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=&metricWind=km%2Fh&metricTemp=%C2%B0C&radarRange=-1" frameborder="0">
                </iframe>
            </div>
            <div class="p-4">
                <div class="fb-share-button"
                     data-href="https://embed.windy.com/embed2.html?lat=16.215&lon=106.743&detailLat=17.393&detailLon=106.479&width=650&height=650&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=&metricWind=km%2Fh&metricTemp=%C2%B0C&radarRange=-1"
                     data-layout="button">
                </div>
            </div>
        </div>
        <!--Chỉnh sửa 2 hình RealTime BllomSky Camera-->
        <div class="cover-top">
            <div class="cover mb-4"></div>
            <!--Chỉnh sửa câu chú thích Page-->
            <p class="mt-2 mb-4">Trang web cung cấp dự báo thời tiết dành cho quan sát thiên văn nghiệp dư tại Việt nam</p>
            <div class="cover"></div>
        </div>
        <div class="d-flex flex-row mt-2 mb-2 flex-wrap">
            <div class="p-4 col-sm-6">
                <P>Realtime BloomSky Image</P>
                <img class="w-100 h-100" src="{{ asset('/images/bloomsky.jpg')}}" type="video/mp4"alt="real time bllomsky">
            </div>
            <div class="p-4 col-sm-6" >
                <P>Realtime BloomSky Time-lapse</P>
                <video class="w-100 h-100 border border-white" src="./video/bloomsky.mp4" type="video/mp4" alt="" controls></video>
            </div>
            <div class="p-4 col-sm-6">
                <div class="small">Update every 10 minutes</div>
                <div class="fb-share-button"
                     data-href="{{ asset('/images/bloomsky.jpg')}}"
                     data-layout="button">
                </div>
            </div>
            <div class="p-4 col-sm-6">
                <div class="small">Update every 10 minutes</div>
                <div class="fb-share-button"
                     data-href="./video/bloomsky.mp4"
                     data-layout="button">
                </div>
            </div>
        </div>
        <div class="cover-top mb-4 mt-2">
            <div class="cover mb-4"></div>
            <!--Chỉnh sửa câu chú thích Page-->
            <p class="mt-2 mb-4">Trang web cung cấp dự báo thời tiết dành cho quan sát thiên văn nghiệp dư tại Việt nam</p>
            <div class="cover"></div>
        </div>
        <!--        <div class="">-->
        <!--            <p>AAG-Cloudwatcher, Saigon Vietnam (coming soon)</p>-->
        <!--            <iframe src="http://78.23.108.227:10800" width="800" height="1554" scrolling="NO" img="" border="0"> </iframe>-->
        <!--        </div>-->

        <!-- An di AAG<div class="cover mt-3 mb-3"></div>
        <div class="mb-2">
            <p class="mt-2">Magnitude of the sky background in Magn./Arc.sec²</p>
            <div class="small">Update every 15 minutes</div>
        </div>
        <div class="cover mt-3 mb-3"></div>
        <div class="text-center mt-3 mb-3">
            <p>AAG-Cloudwatcher</p>
            <div class="d-flex flex-row justify-content-center mt-2 w-100">
                <div class="p-2 w-25">
                    <img class="w-100 h-100" src="./img/AAG_ImageCloudCondition.png" alt="">
                </div>
                <div class="p-2 w-25">
                    <img class="w-100 h-100" src="./img/AAG_ImageDayCondition.png" alt="">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center mt-2 w-100">
                <div class="p-2 w-25">
                    <img class="w-100 h-100" src="./img/AAG_ImageRainCondition.png" alt="">
                </div>
                <div class="p-2 w-25">
                    <img class="w-100 h-100" src="./img/AAG_ImageTemperature.png" alt="">
                </div>
                <div class="p-2 w-25">
                    <img class="w-100 h-100" src="./img/AAG_ImageWindCond.png" alt="">
                </div>
            </div>
        </div>
        <div class="cover mt-3 mb-3"></div>-->
        <div class="mb-5">
            <p class="mt-5 mb-5">Seeing conditions Saigon, Vietnam</p>

            <!--Link tọa độ cũ là https://clearoutside.com/forecast/51.17/4.31-->
            <a href="https://clearoutside.com/forecast/10.81/106.68"><img src="https://clearoutside.com/forecast_image_large/10.81/106.68/forecast.png"></a>
        </div>
        <div class="fb-share-button"
             data-href="https://clearoutside.com/forecast_image_large/10.81/106.68/forecast.png"
             data-layout="button">
        </div>
        <div class="cover mt-3 mb-3"></div>


        <div class="mt-5 d-flex flex-row text-left contact p-2">
            <div class="w-50">
                <p>Lastest News</p>
                <div class="cover"></div>
                <ul class="text-white">
                    @foreach($posts as $post)
                    <li class="">{{date('F j, Y', strtotime($post->created_at))}} <br> {{ $post->title }} </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-50">
                <h2>Contact Us</h2>
                <form action="#" id='contactForm' method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Please type your name here">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="inquiry">Your Inquiry</label>
                        <textarea class="form-control" id="inquiry" name="inquiry" rows="3"></textarea>
                    </div>
                    <button type="button" id='submitForm' class="btn btn-light mb-4">Submit</button>
                    <label style="display:none" id="success">Thank you for contacting us.<br>We will get back in touch with you soon</label>
                </form>
            </div>
        </div>
        <div>
        </div>
    </main>
@endsection
