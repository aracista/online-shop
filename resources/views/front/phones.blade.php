@extends('layout.main')

@section('title')
HANDPHONES
@endsection

@section('content')
<!-- products listing -->
         <!-- Latest SHirts -->
        <div class="row"> 
        @forelse($phones as $phone)
             <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$phone->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('gambar', $phone->gambar)}}" class="img-responsive" style="height: 260px;" />
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            {{$phone->nama}}
                        </h3>
                    </a>
                    <h5>
                        Rp{{$phone->harga}}
                    </h5>
                    <p>
                        {{$phone->deskripsi}}
                    </p>
                </div>
            </div>
            @empty
            <h3>No Products</h3>
            @endforelse
        </div>
@stop