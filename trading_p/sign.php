<!DOCTYPE html>
<html lang="fr">
<!-- The Head-->
<?php include('head.php'); ?>
<!-- End of the Head -->
<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    <!-- The Header -->
    <?php include('header.php'); ?>
    <!-- End of the Header -->

    <center>
            <form class="form">
            <p class="title">Register </p>
            <p class="message">Signup now and get full access to our app. </p>
                <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span>Firstname</span>
                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span>Lastname</span>
                </label>
            </div>  
                    
            <label>
                <input required="" placeholder="" type="email" class="input">
                <span>Email</span>
            </label> 
                
            <label>
                <input required="" placeholder="" type="password" class="input">
                <span>Password</span>
            </label>
            <label>
                <input required="" placeholder="" type="password" class="input">
                <span>Confirm password</span>
            </label>
            <center>
            <button class="submit">Submit</button>
            </center>
            
            
            <div class="flex-row">

        <button class="btn google">
                <svg version="1.1" width="20" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                    c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                    C103.821,274.792,107.225,292.797,113.47,309.408z"></path>
                    <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                    c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                    c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"></path>
                    <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                    c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                    c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"></path>
                    <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                    c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                    C318.115,0,375.068,22.126,419.404,58.936z"></path>

                </svg>
                Google   
        </button>
            
        <button class="btn apple">
                <svg version="1.1" height="20" width="20" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22.773 22.773" style="enable-background:new 0 0 22.773 22.773;" xml:space="preserve">
                    <g> <g> <path d="M15.769,0c0.053,0,0.106,0,0.162,0c0.13,1.606-0.483,2.806-1.228,3.675c-0.731,0.863-1.732,1.7-3.351,1.573 c-0.108-1.583,0.506-2.694,1.25-3.561C13.292,0.879,14.557,0.16,15.769,0z"></path> <path d="M20.67,16.716c0,0.016,0,0.03,0,0.045c-0.455,
                    1.378-1.104,2.559-1.896,3.655c-0.723,0.995-1.609,2.334-3.191,2.334 c-1.367,0-2.275-0.879-3.676-0.903c-1.482-0.024-2.297,0.735-3.652,0.926c-0.155,0-0.31,0-0.462,0 c-0.995-0.144-1.798-0.932-2.383-1.642c-1.725-2.098-3.058-4.808-3.306-8.276c0-0.34,0-0.679,0-1.019 c0.105-2.482,
                    1.311-4.5,2.914-5.478c0.846-0.52,2.009-0.963,3.304-0.765c0.555,0.086,1.122,0.276,1.619,0.464 c0.471,0.181,1.06,0.502,1.618,0.485c0.378-0.011,0.754-0.208,1.135-0.347c1.116-0.403,2.21-0.865,3.652-0.648 c1.733,0.262,2.963,1.032,3.723,2.22c-1.466,0.933-2.625,2.339-2.427,4.74C17.818,
                    14.688,19.086,15.964,20.67,16.716z"></path> </g></g></svg>

            Apple 
        </button>

        </div>
            
            <p class="signin">Already have an acount ? <a href="login.php">Signin</a> </p>
        </form>
    </center>

    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="logo_bottom" href="index.html">ALGORITHM HIGH <span>FREQUENCY</span></a>
                    </div>
                    <div class="col-md-3 col-sm-6" ">
                  <div class=" Informa conta ">
                     <h3>Contact Us</h3>
                     <ul>
                        <li> <a href=" Javascript:void(0) "> <i class=" fa fa-map-marker " aria-hidden=" true "></i> Location
                           </a>
                        </li>
                        <li> <a href=" Javascript:void(0) "><i class=" fa fa-phone " aria-hidden=" true "></i> Call +01 1234567890
                           </a>
                        </li>
                        <li> <a href=" Javascript:void(0) "> <i class=" fa fa-envelope " aria-hidden=" true "></i> demo@gmail.com
                           </a>
                        </li>
                     </ul>
                     <ul>
                        <li>Readable content of                              
                        </li>
                        <li>a page when looking                           
                        </li>
                        <li>at its layoutreadable                          
                        </li>
                        <li>content of a page                             
                        </li>
                        <li>when looking at its                         
                        </li>
                        <li>layout                          
                        </li>
                     </ul>
                  </div>
               </div>
               <div class=" col-md-3 col-sm-6 "">
                        <div class="Informa helpful">
                            <h3>Useful Link</h3>
                            <ul>
                                <li>Readable content of
                                </li>
                                <li>a page when looking
                                </li>
                                <li>at its layoutreadable
                                </li>
                                <li>content of a page
                                </li>
                                <li>when looking at its
                                </li>
                                <li>layout
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" ">
                  <div class=" Informa ">
                     <h3>Offices</h3>
                     <ul>
                        <li>Readable content of                              
                        </li>
                        <li>a page when looking                           
                        </li>
                        <li>at its layoutreadable                          
                        </li>
                        <li>content of a page                             
                        </li>
                        <li>when looking at its                         
                        </li>
                        <li>layout                          
                        </li>
                     </ul>
                  </div>
               </div>
               <div class=" col-md-3 col-sm-6 ">
                  <div class=" Informa ">
                     <h3>Newsletter</h3>
                     <form class=" newslatter_form ">
                        <input class=" ente " placeholder=" Enter your email " type=" text " name=" Enter your email ">
                        <button class=" subs_btn ">Subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class=" copyright text_align_center ">
               <div class=" container ">
                  <div class=" row ">
                     <div class=" col-md-12 ">
                        <p>© 2020 All Rights Reserved. Design by   <a href=" https://html.design/ "> Free Html Template</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src=" js/jquery.min.js "></script>
      <script src=" js/bootstrap.bundle.min.js "></script>
      <script src=" js/jquery-3.0.0.min.js "></script>
      <script src=" js/custom.js "></script>
   </body>
</html>