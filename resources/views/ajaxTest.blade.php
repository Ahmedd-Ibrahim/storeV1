@extends('layouts.app')

@section('form')

<div class="card-body">
    <form  method="POST">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form_group row">
            <label for="discription" class="col-md-4 col-form-label text-md-right">{{ __('discription') }}</label>
            <div class="col-md-6">

                <input id="discription" type="text" class="form-control @error('discription') is-invalid @enderror" placeholder="discription" name="discription" value="{{ old('discription') }}" required autocomplete="discription" autofocus>

                @error('discription')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <button class="form_group row btn" id='save_form'>submit</button>
        <div class="alert alert-info" id="msg" style="display: none"> Your request have been done</div>
    </form>

@endsection



