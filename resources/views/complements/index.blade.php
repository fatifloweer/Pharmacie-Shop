@extends('../layout')

@section('content')

<div class="container"  id="hygienesante">
  <div class="row">
    <div class="col-md-2">
      <!-- Categories go here -->
    </div>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-12">
          <br>
          {{-- <div class="container">
            @if(session('success'))
              <div class="alert alert-success">
                {{session('success')}}
              </div>
              @endif
          </div> --}}
          <h2 id="header">Complements alimentaires</h2>
          @foreach ($complements as $complement)
          <div class="card beautecard">   {{-- style="width: 14rem;" --}}
            <a href="/complements/{{$complement->idcomplement}}"><img src="{{$complement->image}}" class="card-img-top" alt="..."></a>
            <div class="card-body">
              {{-- <div> --}}
              <p class="card-text" id="cardprix">{{$complement->prix}}</p>
              {{-- <p id="prixold">{{$produit->prixold}}</p> --}}
            {{-- </div> --}}
              <h5 class="card-title" id="cardtittle">La Roche-Posay Effaclar Sérum Ultra Concentré Peeling Anti-Imperfections – 30ml</h5>
              <a href="{{route('add_to_cart', $complement->idcomplement)}}" class="btn" id="cardbtn" >Ajouter au panier</a>
            </div>
          </div>
          @endforeach
          <br><br>
          <div>
            {{ $complements->links('pagination::bootstrap-4') }}
          </div>
        </div>
      </div>
        <br><br>
      <div class="row">
        <div class="col-md-12">
          <h3 class="marques-header2">Notre marques</h3>
          <div class="marques-container2">
            <div class="col-md-3">
              <div class="item-marque2">
                <a href=""><img class="marque-img2" src="marques/CeraVe_Logo.jpg" alt=""></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item-marque2">
                <a href=""><img class="marque-img2" src="marques/LogoLaRochePosay.jpg" alt=""></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item-marque2">
                <a href=""><img class="marque-img2" src="marques/logo-biafine.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item-marque2">
                <a href=""><img class="marque-img2" src="marques/Unicity-Logo.jpg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><br><br>
<br>

@include('footer')

@endsection
