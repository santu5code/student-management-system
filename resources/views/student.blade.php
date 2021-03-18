<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
    <title>Student Management System</title>
  </head>


  @include('nav')
  <body>
    <div class="container-fluid main-container mt-0">
      @if ($layout == 'index')
            <div class="container-fluid mt-0">
              <div class="container-fluid mt-0">
                <div class="row justify-content-center">
                  <section class="col-md-7">
                    @include('studentslist')
                  </section>
                </div>
              </div>
            </div>
      @elseif ($layout == 'create')
          <div class="container-fluid mt-3">
            <div class="row">
              <section class="col-md-7 col-sm-7">
      
                    @include('studentslist')

              </section>


              <section class="col-md-5 col-sm-5" >
                <div class="card" >
                  <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/07/02/09/03/books-2463779__340.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><h4>Enter your details.</h4></p>
                      <form  action="{{ url('/store/') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label>SystemId</label>
                          <input name="systemid" type="text" class="form-control" placeholder="Enter System Id">
                        </div>
          
                        <div class="form-group">
                          <label>First Name</label>
                          <input name="firstname" type="text" class="form-control" placeholder="Enter First Name">
                        </div>
          
                        <div class="form-group">
                          <label>last Name</label>
                          <input name="lastname" type="text" class="form-control" placeholder="Enter Last Name">
                        </div>
          
                        <div class="form-group">
                          <label>Age</label>
                          <input name="age" type="text" class="form-control" placeholder="Enter your age">
                        </div>
          
                        <div class="form-group">
                          <label>Field</label>
                          <input name="field" type="text" class="form-control" placeholder="Enter your Field">
                        </div>
                        <div class="mt-2">
                          <input type="submit" class="btn btn-info"   value="Save">
                          <input type="reset" class="btn btn-warning" value="Reset">
                        </div>
                      </form>
                  </div>
                </div>
                        
                  
              </section>
            </div>
          </div>
        
      @elseif ($layout == 'show')
          <div class="container-fluid mt-3">
                <div class="row">
                  <section class="col-md-7 col-sm-7">
                    
                        @include('studentslist')
                    
                  </section>
                  <section class="col"></section>
                </div>
          </div>
        
      @elseif ($layout == 'edit')
        <div class="container-fluid mt-3">
          <div class="row">
            <section class="col-md-7 col-sm-7">
                  
                  @include('studentslist')
                    
            </section>

                  
            <section class="col-md-5 col-sm-5">
              <div class="card" >
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/07/02/09/03/books-2463779__340.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><h4>Enter your details.</h4></p>
                    <form action="{{url('/update/'.$student->id) }}" method="post">
                      @csrf
                      <div class="form-group">
                        <label>SystemId</label>
                        <input value="{{ $student->systemid }}" name="systemid" type="text" class="form-control"  placeholder="Enter cne">
                      </div>
                      <div class="form-group">
                        <label>First Name</label>
                        <input value="{{ $student->firstname }}" name="firstname" type="text" class="form-control"  placeholder="Enter the first name">
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input value="{{ $student->lastname }}" name="lastname" type="text" class="form-control"  placeholder="Enter second name">
                      </div>
                      <div class="form-group">
                        <label>Age</label>
                        <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                      </div>
                      <div class="form-group">
                        <label>Field</label>
                        <input value="{{ $student->field }}" name="field" type="text" class="form-control"  placeholder="Enter Sepeciality">
                      </div>
                      <div style="margin: 5px">
                        <input type="submit" class="btn btn-info" value="update">
                        <input type="reset" class="btn btn-warning" value="Reset">
                      </div>
                    </form>
                </div>
              </div>
            </section>
          </div>
        </div>
       @endif
    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!--  Option 1: Bootstrap Bundle with Popper -->
   {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> --}}
   {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
   <script src="https://kit.fontawesome.com/93e4d75e7c.js" crossorigin="anonymous"></script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
  </body>
  <div class="footer-container">
  @include('footer')
</div>
</html>