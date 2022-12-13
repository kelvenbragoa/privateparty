<nav id="sidebar" class="sidebar" >
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="">
          <span class="align-middle">InoGest</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                {{__('text.pages')}}
            </li>
            <li class="sidebar-item">
                <a href="#dashboard" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">{{__('text.dashboard')}}</span>
                </a>
                <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{URL::to('/home')}}">{{__('text.dashboard')}}</a></li>
                 
                
                </ul>
            </li>
            <li class="sidebar-header">
                {{__('text.management')}}
            </li>
           
          
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('guest.index')}}">
                <i class="align-middle" data-feather="box"></i> <span class="align-middle">{{__('text.guest')}}</span>
                </a>
            </li>

            {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{__('text.employees')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">{{__('text.type_meeting')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                <i class="align-middle" data-feather="file"></i> <span class="align-middle">{{__('text.meeting')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                <i class="align-middle" data-feather="settings"></i> <span class="align-middle">{{__('text.config')}}</span>
                </a>
            </li>

            <li class="sidebar-header">
                {{__('text.invoincing')}}
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">{{__('text.invoice')}}</span>
                </a>
            </li>

            <li class="sidebar-header">
                {{__('text.support')}}
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                <i class="align-middle" data-feather="tag"></i> <span class="align-middle">{{__('text.tickets')}}</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                <i class="align-middle" data-feather="database"></i> <span class="align-middle">{{__('text.knowledge_base')}}</span>
                </a>
            </li> --}}
                
            

            

          
        </ul>


    </div>
</nav>