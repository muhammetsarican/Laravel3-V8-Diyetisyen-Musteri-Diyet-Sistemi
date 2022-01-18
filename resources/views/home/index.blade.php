@extends('layouts.home')

@section('title',$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->keywords)

@section('content')
    <!-- MAIN -->



    <div class="slide-item overlay" style="background-image: url('{{asset('assets')}}/images/img_5.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1 class="heading mb-3">Diyetisyen<br>Müşteri Diyet<br>Sistemi</h1>
                    <p class="lead text-white mb-5">Üniversitelerin 4 yıllık beslenme ve diyetetik bölümünden mezun olan
                        kişilere diyetisyen denir. Diyetisyenler sadece kilo alıp vermek ile ilgilenmez aynı zamanda
                        besinlerin insan vücudundaki etkilerini de inceler. Besin analizlerini yaparak diyet ürünleri
                        geliştirebilir ya da kişilerin hastalıklarına uygun olarak diyet programı hazırlayabilir.</p>
                    <p><a href="#" class="btn btn-primary">Get In Touch</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="feature-v1">
        <div class="d-lg-flex align-items-center w-100">
            <div class="d-flex pagination-item  h-100">
          <span class="icon-wrap">
            <img src="{{asset('assets')}}/images/svg/svg/001-elderly.svg" alt="Image" class="img-fluid">
          </span>
                <div>
                    <span class="subheading">Try Our Services</span>
                    <h3 class="heading">Independent Living For Senior Couples</h3>
                    <a href="#" class="small">Learn More</a>
                </div>
            </div>
            <div class="d-flex pagination-item h-100">
          <span class="icon-wrap">
            <img src="{{asset('assets')}}/images/svg/svg/002-elderly-1.svg" alt="Image" class="img-fluid">
          </span>
                <div>
                    <span class="subheading">Try Our Services</span>
                    <h3 class="heading">We Are Helping the Senior Elderly People</h3>
                    <a href="#" class="small">Learn More</a>
                </div>
            </div>
            <div class="d-flex pagination-item h-100">
          <span class="icon-wrap">
            <img src="{{asset('assets')}}/images/svg/svg/003-rocking-chair.svg" alt="Image" class="img-fluid">
          </span>
                <div>
                    <span class="subheading">Try Our Services</span>
                    <h3 class="heading">Senior Home Patient Care Services</h3>
                    <a href="#" class="small">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-7 text-center">
                    <div class="heading">
                        <h2 class="text-black">Last Added Special Lists</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($last as $lst)
                    <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="service">
                            <a href="{{route('treatment',['id'=>$lst->id])}}" class="d-block" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($lst->image)}}" alt="Image" class="img-fluid" style="height: 250px;object-fit: cover">
                            </a>
                            <div class="service-inner" style="height: 150px">
                                <h3>{{$lst->title}}</h3>
                                <p>Date:{{$lst->created_at}}</p>
                            </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="site-section bg-primary count-numbers">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter-wrap text-center">
                        <strong class="counter d-block"><span class="number" data-number="8"></span></strong>
                        <span>Treatment Number</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter-wrap text-center">
                        <strong class="counter d-block"><span class="number" data-number="1"></span></strong>
                        <span>Dietitian</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter-wrap text-center">
                        <strong class="counter d-block"><span class="number" data-number="2"></span></strong>
                        <span>Reviews</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter-wrap text-center">
                        <strong class="counter d-block"><span class="number" data-number="3"></span></strong>
                        <span>Users</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home._slider')

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($review as $rew)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="testimonial text-center">
                        <img src="{{asset('assets')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                        <blockquote>
                            <p class="text-center quote">{{$rew->subject}}</p>
                            <p class="quote">{{$rew->review}}</p>
                            <cite class="author">{{$rew->user->name}}, {{$rew->created_at}}</cite>
                        </blockquote>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-7 text-center">
                    <div class="heading">
                        <h2 class="text-black">Other Opportunities</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, culpa.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="d-block d-flex custom-media algin-items-stretch">
                        <div class="text text-left">
                            <h3>You can live here with love</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, commodi.</p>
                            <p><a href="#" class="btn btn-outline-white">Learn More</a></p>
                        </div>
                        <div class="img-bg" style="background-image: url('{{asset('assets')}}/images/img_2.jpg')"></div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="d-block d-flex custom-media algin-items-stretch">
                        <div class="text text-left">
                            <h3>You can live here with love</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, commodi.</p>
                            <p><a href="#" class="btn btn-outline-white">Learn More</a></p>
                        </div>
                        <div class="img-bg" style="background-image: url('{{asset('assets')}}/images/img_3.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-7 text-center">
                    <div class="heading">
                        <h2 class="text-black">News &amp; Updates</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, culpa.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-entry">
                        <a href="#" class="d-block">
                            <img src="{{asset('assets')}}/images/img_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta d-flex justify-content-center">
              <span>
                <span class="icon-calendar"></span>
                <span>23 Jul</span>
              </span>
                            <span>
                <span class="icon-user"></span>
                <span>Admin</span>
              </span>
                            <span>
                <span class="icon-comment"></span>
                <span>2 Comments</span>
              </span>
                        </div>
                        <h2><a href="#">We're Providing the Quality Care</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <a href="#" class="d-block">
                            <img src="{{asset('assets')}}/images/img_2.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta d-flex justify-content-center">
              <span>
                <span class="icon-calendar"></span>
                <span>23 Jul</span>
              </span>
                            <span>
                <span class="icon-user"></span>
                <span>Admin</span>
              </span>
                            <span>
                <span class="icon-comment"></span>
                <span>2 Comments</span>
              </span>
                        </div>
                        <h2><a href="#">We're Providing the Quality Care</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <a href="#" class="d-block">
                            <img src="{{asset('assets')}}/images/img_3.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta d-flex justify-content-center">
              <span>
                <span class="icon-calendar"></span>
                <span>23 Jul</span>
              </span>
                            <span>
                <span class="icon-user"></span>
                <span>Admin</span>
              </span>
                            <span>
                <span class="icon-comment"></span>
                <span>2 Comments</span>
              </span>
                        </div>
                        <h2><a href="#">We're Providing the Quality Care</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
