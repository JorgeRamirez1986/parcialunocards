@extends('layout.base')
@section('title') Cards cards @endsection
<article class="container">
    <section class="row">
        <div class="text-center">
            <h1 class="text-3xl text-gray-700-600 mb-2 uppercase">Cards</h1>
        </div>
    </section>
    <section class="row">
        <div class="col d-grid">
            <a href="/cards/create" class="btn btn-success text-center">Create new Card</a>
        </div>
    </section>
</article>
<br>
<br>
<article class="container">

    <div class="row">

        @foreach($cards as $card)

            <div class="card col-4" style="width: 14rem;">
                <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_466065785_9707049704500135_70707.jpg"
                     class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $card->holder_name }}</h5>
                    <h5 class="card-title">{{ $card->number }}</h5>
                    <h5 class="card-title">{{ $card->verification_code }}</h5>
                    <h5 class="card-title">{{ $card->franchise }}</h5>
                    <h5 class="card-title">{{ $card->status }}</h5>
                    <p class="card-text"></p>
                    <a href="/cards/{{$card->id}}/edit" class="btn btn-success">Edit</a>

                    <form action="/cards/{{$card->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input
                            type="submit"
                            value="Delete"
                            class="btn btn-danger"
                            onclick="return confirm('Are you sure ?')"
                        >

                    </form>

                </div>
            </div>


        @endforeach


    </div>


</article>

