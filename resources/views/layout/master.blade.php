<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body id="page-top">
  <div id="wrapper">
    
@include('layout.sidebar')
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
        @include('layout.navbar')

        @include('layout.content')

      </div>
      @include('layout.footer')
    </div>
  </div> 
</body>

</html>