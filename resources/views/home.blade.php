@extends('layouts.app')


@section('x')

<div class="Brands text-center" style="height:80px;">
        <h3 class="">brands</h3>
</div>
<div class="slider bg-light text-center" style="height:300px;">
        <h3>Slider</h3>
</div>



<div class="container-fluid content">
    <div class="row mt-3">
        {{--  products  --}}
        <div class="col-9">
            <div class="bg-danger"> 
                owlcarousel
                

                <div id="owlcaru" class="owl-carousel owl-theme">
                    <div class="item"><h4>1</h4></div>
                    <div class="item"><h4>2</h4></div>
                    <div class="item"><h4>3</h4></div>
                    <div class="item"><h4>4</h4></div>
                    <div class="item"><h4>5</h4></div>
                    <div class="item"><h4>6</h4></div>
                    <div class="item"><h4>7</h4></div>
                    <div class="item"><h4>8</h4></div>
                    <div class="item"><h4>9</h4></div>
                    <div class="item"><h4>10</h4></div>
                    <div class="item"><h4>11</h4></div>
                    <div class="item"><h4>12</h4></div>
                </div>

            </div>
        </div>
        {{--  ./col  --}}
        
        {{--  ads  --}}
        <div class="col-3">
            <div class="bg-info">
                fdvdfvdf
            </div>
        </div>
        {{--  ./col  --}}

    </div>
    {{--  end row  --}}

    
    <div class="row mt-3">
        {{--  products  --}}
        <div class="col-9">
            <div class="bg-danger"> 
                fdgf
            </div>
        </div>
        {{--  ./col  --}}
        
        {{--  ads  --}}
        <div class="col-3">
            <div class="bg-info">
                fdvdfvdf
            </div>
        </div>
        {{--  ./col  --}}

    </div>
    {{--  end row  --}}

</div>
{{--  end of container fluid  --}}
@endsection
{{-- @include('layouts.footer') --}}
