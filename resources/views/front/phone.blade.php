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
                             <img src="{{asset('gambar', $product->gambar)}}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag">Rp {{$product->harga}}</span> Teleshop
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <p>
                                {!! $product->deskripsi !!}
                            </p>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                pilih warna
                                <select>
                                    <option value="small">
                                        Biru
                                    </option>
                                    <option value="medium">
                                        Merah
                                    </option>
                                    <option value="large">
                                        Putih
                                    </option>
                                   
                                </select>
                            </label>
                            <a href="#" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
                <p class="text-left subheader"><small>* Designed by Aracista</a></small></p>

                </div>
            </div>
        </div>
    </div>

@stop