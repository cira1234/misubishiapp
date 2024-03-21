@if ($UserRole === '0')



 <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
      
    </x-nav-link>
  
</div>  




  
    
    
    
    
    

@elseif($UserRole === '1')
{{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('super-user') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
  
</div> --}}
<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('manageuser') }}" :active="request()->routeIs('manageuser')">
        {{ __('manageuser') }}
    </x-nav-link>
  
</div>



@elseif($UserRole === '2')
{{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('super-user') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
  
</div> --}}
<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('re-login') }}" :active="request()->routeIs('re-login')">
      
    </x-nav-link>
  
</div> 
  
</div>
@endif








  
    
    
    
    
    




