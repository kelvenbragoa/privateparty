@extends('layout_organization.master')
@section('content')

<div class="container-fluid p-0">

    
    <div class="row mb-2 mb-xl-3">
   

        

       
        
        <div class="col-auto d-none d-sm-block">
            <h3><strong>{{__('text.dashboard')}}</strong></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row">
                    {{-- <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.department')}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <h1 class="mt-1 mb-3">0</h1>
                                        <div class="mb-1">
                                            <a href="#"><i class="align-middle" data-feather="eye"></i>{{__('text.view')}}</a>
                                          </div>
                                    </div>
                                    <div class="col">
                                        <i class="align-middle" data-feather="box" style="width: 50px;  height: 50px;"></i>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div> --}}
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.guest')}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <h1 class="mt-1 mb-3">{{App\Models\Guest::get()->count()}}</h1>
                                        <div class="mb-1">
                                            <a href="{{route('guest.index')}}"><i class="align-middle" data-feather="eye"></i>{{__('text.view')}}</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <i class="align-middle" data-feather="users" style="width: 50px;  height: 50px;"></i>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.not_confirmed')}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <h1 class="mt-1 mb-3">{{App\Models\Guest::where('is_confirmed',0)->get()->count()}}</h1>
                                        <div class="mb-1">
                                            <a href="{{route('guest.index')}}"><i class="align-middle" data-feather="eye"></i>{{__('text.view')}}</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <i class="align-middle" data-feather="users" style="width: 50px;  height: 50px;"></i>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.confirmed')}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <h1 class="mt-1 mb-3">{{App\Models\Guest::where('is_confirmed',1)->get()->count()}}</h1>
                                        <div class="mb-1">
                                            <a href="{{route('guest.index')}}"><i class="align-middle" data-feather="eye"></i>{{__('text.view')}}</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <i class="align-middle" data-feather="users" style="width: 50px;  height: 50px;"></i>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.type_meeting')}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <h1 class="mt-1 mb-3">0</h1>
                                        <div class="mb-1">
                                            <a href="#"><i class="align-middle" data-feather="eye"></i>{{__('text.view')}}</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <i class="align-middle" data-feather="file-text" style="width: 50px;  height: 50px;"></i>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">{{__('text.meeting')}}</h5>
                                <div class="row">
                                    <div class="col">
                                        <h1 class="mt-1 mb-3">0</h1>
                                        <div class="mb-1">
                                            <a href="#"><i class="align-middle" data-feather="eye"></i>{{__('text.view')}}</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <i class="align-middle" data-feather="file" style="width: 50px;  height: 50px;"></i>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div> --}}
                </div>
            </div>
        </div>
    </div>


   
   

       

</div>

@endsection