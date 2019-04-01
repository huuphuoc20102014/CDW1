<div class="type-1296">
    <div class="container">
        <div class="row">
            <div class="head">
                <span class="subtitle">Featured</span>
                <h2 class="title">Properties</h2>
                <p class="desc">Check out our shortlisted properties.</p>
            </div>
            <div class="land-detail">
                <div class="infor-land">
                    <div id="owl-demo" class="owl-carousel">
                        @foreach($res_list as $ress)
		                        <div class="post-land">
		                            <figure class="img-land">
		                                <a href="#">
		                                    <img src="{{ url('images/'.$ress['res_img']) }}" alt="">
		                                </a>
		                            </figure>
		                            <div class="post-detail">
		                                <div class="label-featured">
		                                    <div class="featured">Featured</div>
		                                    <span></span>
		                                </div>
		                                <h3><a href="#">{{ $ress['res_name'] }}</a></h3>
		                                <p class="desciption">{{ $ress['res_des'] }}</p>
		                                <div class="meta_wrap">
		                                    <div class="meta">
		                                        <h4>Bedrooms</h4>
		                                        <div>
		                                            <svg class="rh_svg" width="24" height="24" viewBox="0 0 24 24">
		                                                <defs>
		                                                </defs>
		                                                <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"></path>
		                                            </svg>
		                                            <span class="figure">{{ $ress['res_bed'] }}</span>
		                                        </div>
		                                    </div>
		                                    <div class="meta">
		                                        <h4>Bathrooms</h4>
		                                        <div>
		                                            <svg class="rh_svg" width="23.69" height="24" viewBox="0 0 23.69 24">
		                                                <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
		                                            </svg>
		                                            <span class="figure">{{ $ress['res_bathroom'] }}</span>
		                                        </div>
		                                    </div>
		                                    <div class="meta">
		                                        <h4>Area</h4>
		                                        <div>
		                                            <svg class="rh_svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
		                                                <g><circle cx="2" cy="2" r="2"></circle></g>
		                                                <g><circle cx="2" cy="22" r="2"></circle></g>
		                                                <g><circle cx="22" cy="2" r="2"></circle></g>
		                                                <rect x="1" y="1" width="2" height="22"></rect>
		                                                <rect x="1" y="1" width="22" height="2"></rect>
		                                                <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1 c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
		                                            </svg>
		                                            <span class="figure">{{ $ress['res_size'] }}</span>
		                                            <span class="label">Sq Ft</span>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="priceLabel">
		                                    <h4 class="status">For Sale</h4>
		                                    <p class="price">${{ $ress['res_price'] }}</p>
		                                </div>
		                            </div>
		                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>