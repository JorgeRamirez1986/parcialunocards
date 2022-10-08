@extends('layout.base')
@section('title','Create new Card')
<article class="container">
    <section class="row">
        <h1 class="col alert alert-success text-center">
            CARDS
        </h1>
    </section>
</article>
<article class="container">
    <section >
        <form action="/cards" method="POST" class="row">
            @csrf
            <div class="mb-3 col-6">
                <label for="holder_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="holder_name" name="holder_name" value="{{old('holder_name')}}">
            </div>
            <div class="mb-3 col-6">
                <label for="number" class="form-label">Number</label>
                <input type="number" class="form-control" id="number" name="number" value="{{old('number')}}">
            </div>
            <div class="mb-3 col-6">
                <label for="verification_code" class="form-label">Verification Code</label>
                <input type="text" class="form-control" id="verification_code" name="verification_code" value="{{old('verification_code')}}">
            </div>
            <div class="mb-3 col-6">
                <label for="franchise" class="form-label">Franchise</label>
                <input type="text" class="form-control" id="franchise" name="franchise" value="{{old('franchise')}}">
            </div>
            <div class="mb-3 col-6">

                <label for="status" class="form-label"><input type="checkbox" id="status" value="{{old('status')}}"> Status</label>

            </div>

            <div class="mb-3 col-12 d-grid">
                <input type="submit" value="Save" class="btn btn-success text-center" >
            </div>

        </form>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </section>
</article>
