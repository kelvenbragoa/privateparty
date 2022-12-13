@extends('layout_organization.master')
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">{{__('text.department')}}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{__('text.department')}}</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                    @endif

                    <form id="form" method="POST" action="{{route('guest.store')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.guest')}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('text.guest')}}" value="{{ old('name') }}" required>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.mobile')}}</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="{{__('text.mobile')}}" value="{{ old('mobile') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputEmail4">{{__('text.gender')}}</label>
                                <select type="text" class="form-control" name="gender_id" id="gender_id" placeholder="{{__('text.gender')}}" value="{{ old('gender_id') }}" required>
                                    @foreach (\App\Models\Gender::all() as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                       

                        {{-- onclick="this.disabled = true; document.getElementById('logout-form').submit();" --}}
                        
                        <button type="submit" class="btn btn-primary" id="buttonSubmit">{{__('text.submit')}}</button>
                        <div class="spinner-border text-info mr-2" role="status" id="spinner" style="display: none">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.getElementById("buttonSubmit").onclick = function() {myFunction()};

    function myFunction() {

    document.getElementById('buttonSubmit').style.display = "none";
    document.getElementById('spinner').style.display = "block";
    document.getElementById('form').submit();
    }
</script>

@endsection