@include('layouts/header')
<main>
    <div class="container">
        <section> 
            <h2> {{$data_city['city_name']}}<i class="glyphicon glyphicon-arrow-right"></i></h2>
                @foreach($data_airport as $item) 
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="#"></a></strong></h4>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
            @endforeach
            </section>
        </div>
    </main>
@include('layouts/footer')
