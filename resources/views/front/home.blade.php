@extends('layout.main')

@section('content')
        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/> 
            <h2 >
                <strong>
                    Hey! Welcome to Teleshop
                </strong>
            </h2>
            <br>
            <a href="/phones">
            	<button class="button large">Check out Product</button>
            </a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Teleshop&rsquo;s Latest product
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        <div class="row">
            @forelse($phones->chunk(4) as $chunk)
            @foreach($chunk as $phone)
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
            @endforeach
            @empty
            <h3>No Products</h3>
            @endforelse
        </div>
        <!-- Footer -->
        <br>
@endsection