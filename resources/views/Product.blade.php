@extends('Index')

@section('Products')

<div class="section">
   <div class="containerPro">

      <div class="products-container">
         @foreach ($produks as $produk)
            
         
         <div class="product" data-name="p-1">
            <img src="/aset/tomat-pic.jpg">
            <h2>{{ $produk->nama_produk }}</h2>
            <div class="price"><p>{{ $produk->harga }}</p></div>
         </div>
         @endforeach
         
      </div>
      
      {{-- <div class="product" data-name="p-2">
         <img src=""/>
         <h2></h2>
         <div class="price"><p></p></div>
      </div>
      
      <div class="product" data-name="p-3">
         <img src=""/>
         <h2></h2>
         <div class="price"><p></p></div>
      </div>
      
      <div class="product" data-name="p-4">
         <img src=""/>
         <h2></h2>
         <div class="price"><p></p></div>
      </div> --}}
   </div>

   <div class="products-preview">
   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="/aset/tomat-pic.jpg">
      <h2>{{ $produk->nama_produk }}</h2>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price"><p>{{ $produk->harga }}</p></div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>
   {{-- <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src=""/>
      <h2></h2>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price"><p></p></div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div> --}}

   {{-- <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src=""/>
      <h2></h2>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price"><p></p></div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div> --}}

   {{-- <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src=""/>
      <h2><</h2>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price"><p></p></div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div> --}}
   <script src="/js/script.js" defer></script>

   </div>
</div>
@endsection
