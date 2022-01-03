<div class="site-section">
    <div class="slideshow-container container">
        @foreach($slider as $sl)
            <div class="mySlides fade ">
                <div class="row justify-content-between">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="heading mb-3">Senior Care Center is for Your Family</h2>
                            <p class="mb-5"></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($sl->image)}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled ul-check primary">
                                        <h5>Price: {{$sl->price}}&nbsp;$</h5><br>
                                        <li>Voluptate delectus ipsa</li>
                                        <li>Maiores quia aliquam</li>
                                        <li>Consectetur adipisicing elit</li>
                                        <li>Voluptate delectus ipsa</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot hidden"></span>
                </div>
            </div>
        @endforeach
    </div>
</div>


