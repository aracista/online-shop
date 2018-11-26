@extends('layout.main')

@section('title')
HANDPHONE
@endsection

@section('content')
<!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="{{url('gambar',$phone->gambar)}}"/>
                        </a>
                    </div>
                </div>
            </div> 
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag">Rp {{$phone->harga}}</span> Teleshop
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <p>
                                {!! $phone->deskripsi !!}
                            </p>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                           
                            <a href="{{route('cart.addItem',$phone->id)}}" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
                    
                <p class="text-left subheader"><small>* Designed by Aracista</a></small></p>

                </div>
            </div>
        </div>
    </div>

@stop