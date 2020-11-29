@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;"><h1>მოგესალმებით</h1></div>

                <div class="card-body" style="text-align: center;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    You are logged in as <br> {{ Auth::user()->email }}
                </div>
            </div>

            <form method="POST" action="{{ route('adminstore') }}">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <br>
            <div align="center">
                <a href="{{ route('adminindex') }}" class="btn btn-green">საინფორმაციო ცხრილზე გადასვლა</a>
            </div>
            <br>
            <label>სათაური</label>
            <input type="text" name="title" placeholder="სათაური" class="form-control">
            <br>
            <label>აღწერა</label>
            <textarea name="description" placeholder="დაამატეთ აღწერა" class="form-control"></textarea>
            <br>
            <div class="row justify-content-center">
            <button class="btn btn-green">შენახვა</button>
            </div>
        </form>

        </div>
    </div>
</div>
@endsection
