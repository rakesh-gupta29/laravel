<div>
    @foreach($cars as $car)
        <div class="col-lg-2 ">
            <div class="feature-with-icon" data-aos="flip-up" >
                <h5><strong>{{ucfirst($car)}}</strong></h5>
            </div>
        </div>
    @endforeach
</div>
