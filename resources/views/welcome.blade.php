<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hospital management system</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
         crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
        <link rel="stylesheet" href="{{asset ('plugins/fontawesome-free/css/all.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased"style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,212,255,1) 66%);" >

<div class="content-justify-center offset-3" style="color:white;font-size:18px;margin-top:10px; align-content:space-between">
    <i class="fa fa-map-marker-alt" aria-hidden="true"></i>  Independence Drive , Banjul

    <i class="fa fa-phone-alt" aria-hidden="true"></i>  +220 3159064

    <i class="fa fa-envelope" aria-hidden="true"></i>  rvth@gmail.com

</div>


            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" style="margin-top: 50px;border-bottom:2px solid black;" >
                <a class="navbar-brand" href="#" style="margin-left: 60px"><strong>RVTH </strong><i class="fas fa-hospital-alt" style="font-size: 30px;color:gray"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <ul class="navbar-nav mr-auto" style="align-content:space-between">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">HOME <i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">ABOUT <i class="fa fa-info-circle" aria-hidden="true"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICE <i class="fa fa-cog" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">NEWS  <i class="fas fa-newspaper    "></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">APPOINTMENT <i class="fa fa-calendar-alt" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">HELP <i class="fa fa-question-circle" aria-hidden="true"></i></a>
                      </li>
                    <li class="nav-item">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="margin-top: 50px">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">LOG IN</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 ">REGISTER</a>
                                        @endif
                                    @endauth

                            @endif

                    </li>


                  </ul>
                </div>


              </nav>

              <img src="{{ asset('images/doctor.png') }}" height="80%" width="60%" style="margin-top: 70px;opacity:50%">
              <h3 style="font-weight: bolder;font-size:43px;color:rgb(12, 12, 73);margin:-500px 0 0 480px;font-family:'Times New Roman', Times, serif">MEDICAL SERVICE YOU CAN TRUST</h3>
              <p style="margin:10px 0 0 480px;color:white;font-size:22px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Whether you need to make a change in your primary care provider, or if you find you need a specialist to take care of specific symptoms, you'll want to follow these guidelines to choose the right healthcare provider for your medical care.</p>
              <a href="" class="btn btn-danger" style="margin:10px 0 0 780px">GET STARTED <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <!--second-->

            <div class="container marketing " style="margin-top: 290px;background:#eee;width:2500px" >
                <br>
                <h3 class="text-center" style="font-weight:bold;font-family:'Times New roman'">OUR SERVICES</h3>


                <br><br>
                <!-- Three columns of text below the carousel -->
                <div class="row" style="width: 100%">

                  <div class="col-lg-4">
                    <h2>  <i class="fas fa-briefcase-medical"  style="font-size: 40px; "></i> Emergency Service</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p class="btn btn-link">+220 3159064</p>
                  </div><!-- /.col-lg-4 -->

                  <div class="col-lg-4">
                    <h2>  <i class="fa fa-clock" aria-hidden="true" style="font-size: 40px;x"></i> Doctors Schedule</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-link" href="#">Read More</a></p>
                  </div><!-- /.col-lg-4 -->

                  <div class="col-lg-4">
                    <h2>  <i class="fa fa-calendar-alt" aria-hidden="true"  style="font-size: 40px;"></i> Online Appointment</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p class="btn btn-link">Book Appointment</a></p>
                  </div>

                </div>
              </div>



            <!--second-->

              <div class="container marketing " style="margin-top: 20px;background:#eee">
                <br>
                <h3 class="text-center" style="font-weight:bold;font-family:'Times New roman'">MEDICAL DOCTORS</h3>
                <br><br>
                <!-- Three columns of text below the carousel -->
                <div class="row">

                  <div class="col-lg-4">
                    <img class="rounded-circle" src="{{ asset('images/profile1.jfif') }}" alt="Generic placeholder image" width="180" height="180">
                    <h2>Dr James</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->

                  <div class="col-lg-4">
                    <img class="rounded-circle" src="{{ asset('images/profile2.jfif') }}" alt="Generic placeholder image" width="180" height="180">
                    <h2>Dr Jallow</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->

                  <div class="col-lg-4">
                    <img class="rounded-circle" src="{{ asset('images/profile3.jfif') }}" alt="Generic placeholder image" width="180" height="180">
                    <h2>Dr Sallah</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
                  </div>

                </div>
              </div>





<!-- ======= Footer ======= -->
<footer id="footer" class="" style="margin-top: 50px;background:black;width:100%">
    <div class="container">
        <br>
      <h2 class="text-center" style="font-weight: bold;font-family:sans-serif;color:gray">SHERIFF GAYE</h2>
      <p class="text-center" style="color: gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed accusamus <br> asperiores obcaecati quidem aliquam animi numquam at atque, exercitationem.</p>
      <div class="offset-5" style="font-size: 35px;">
        <i class="fab fa-facebook" aria-hidden="true" style="color: #3b5998"></i>
        <i class="fab fa-linkedin" aria-hidden="true" style="color:#0077b5"></i>
        <i class="fab fa-whatsapp" aria-hidden="true" style="color: #075E54"></i>
        <i class="fab fa-instagram" aria-hidden="true" style="color:#fb3958"></i>
        <i class="fab fa-twitter" aria-hidden="true" style="color:#1DA1F2"></i>
      </div>
      <div class="copyright  text-center" style="color:gray">
        &copy; Copyright <strong><span>My Hospital</span></strong>. All Rights Reserved <br>
        <strong>Design by:</strong>Sheriff gaye
      </div>

    </div>
  </footer>



    </body>
</html>
