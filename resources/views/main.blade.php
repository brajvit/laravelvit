<!DOCTYPE html>
<html lang="en">

@include('partials._head')




  <body>

    @include('partials._nav')

    <!-- default navbar -->

    

    <div class="container">
        
        @Yield('content')

@include('partials._footer')
      
    @include('partials._javascript')

   @yield('scripts')
  </body>
</html>