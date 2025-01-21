  <div style="width: 100%;background-color:#F1F4F9;" class="p-2 zi-2 d-lg-none justify-content-around fow gap-3 ">
    <a href="/" id="sidebar-icon" class="fol ">
      <div class="force-center pore">
        <img class="zi-1 phone-sidebar-icon" width=24 src="{{asset('res/home.svg')}}" alt="">
        <div class="force-center full top-left posa">
          @php
          $ya= false;
          @endphp
          <div id="sidebar-phone-active-hint" style="width: 50px; height: 25px; background-color: #D9E0FF" class="d-none @if(session()->get("current_menu")=="home" ) mobile_nav_active @endif rounded-2"></div>
        </div>
      </div>
      <p class="f-12 zi-1 @if(session()->get("current_menu")=="home" ) mobile_nav_active_p @endif">Home</p>
    </a>
    <a href="/upcoming" id="sidebar-icon" class="fol">
      <div class="force-center pore">
        <img class="zi-1 phone-sidebar-icon" width=24 src="{{asset('res/date.svg')}}" alt="">
        <div class="force-center full top-left posa">
          <div id="sidebar-phone-active-hint" style="width: 50px; height: 25px; background-color: #D9E0FF" class="d-none @if(session()->get("current_menu")=="upcoming" ) mobile_nav_active @endif  rounded-2"></div>
        </div>
      </div>
      <p class="f-12 zi-1 @if(session()->get("current_menu")=="upcoming" ) mobile_nav_active_p @endif">Upcoming</p>
    </a>
    <a href="/bookmark" id="sidebar-icon" class="fol">
      <div class="force-center pore">
        <img class="zi-1 phone-sidebar-icon" width=24 src="{{asset('res/bookmark.svg')}}" alt="">
        <div class="force-center full top-left posa">
          <div id="sidebar-phone-active-hint" style="width: 50px; height: 25px; background-color: #D9E0FF" class="d-none @if(session()->get("current_menu")=="bookmark" ) mobile_nav_active @endif  rounded-2"></div>
        </div>
      </div>
      <p class="f-12 zi-1 @if(session()->get("current_menu")=="bookmark" ) mobile_nav_active_p @endif">Bookmark</p>
    </a>
    <a href="/history" id="sidebar-icon" class="fol">
      <div class="force-center pore">
        <img class="zi-1 phone-sidebar-icon" width=24 src="{{asset('res/history.svg')}}" alt="">
        <div class="force-center full top-left posa">
          <div id="sidebar-phone-active-hint" style="width: 50px; height: 25px; background-color: #D9E0FF" class="d-none @if(session()->get("current_menu")=="history" ) mobile_nav_active @endif  rounded-2"></div>
        </div>
      </div>
      <p class="f-12 zi-1 @if(session()->get("current_menu")=="history" ) mobile_nav_active_p @endif">History</p>
    </a>
  </div>
