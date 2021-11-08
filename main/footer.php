    <!-- Start Footer -->
    <footer class="mt-5">
      <div class="footer">
        <div class="row">
            <div class="col-md-6">
               <a href="#">About BingoLoot</a> 
               <a href="#">Terms Of Use</a> 
               <a href="#">FAQ</a> 
               <a href="#">Feedback</a> 
               <a href="#">Careers</a> 
               <br>
               <p style="font-size:12px; margin-top:15px;">© 2021 BINGOLOOT. All Rights Reserved. HBO, Home Box Office and all related channel and programming logos are service marks of, and all related programming visuals and elements are the property of, Home Box Office, Inc. All rights reserved.</p>
            </div>
            <div class="col-md-2">
                <p class="footerconnect footerp">Connect With Us</p>
                <i class="fab fa-facebook-square footeri"></i>
                <i class="fab fa-twitter-square footeri"></i>
            </div>
            <div class="col-md-4" >
                <p class="footerp">BingoLoot App</p>
                <div>
                    <div class="footerimage">
                        <img src="images/GooglePlay.png" width="175px" alt="">
                        <img src="images/AppStore.png"  width="175px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
  
    
    <script >
      window.addEventListener("scroll",function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky",window.scrollY > 0);
      });
  
      var myCarousel = document.querySelector('#myCarousel');
      var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
      });
    </script>
  
      <script src="js.js"></script>
      <script src="js/all.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      <script src="js/mediaelement-and-player.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelement-and-player.min.js"></script>
      <script src="./quality/quality.js"></script>
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
      <script>
        var mediaElements = document.querySelectorAll('video, audio');
      
        for (var i = 0, total = mediaElements.length; i < total; i++) {
          new MediaElementPlayer(mediaElements[i], {
            features: ['playpause', 'current', 'progress', 'duration', 'volume', 'quality', 'fullscreen'],
          });
        }
      </script>
      <script src="js/ajaxrequest.js"></script>
  
      <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:3
                  },
                  1000:{
                      items:5
                  }
              }
          })
      </script>
      <script src="js/jquery.min.js"></script> 
      <script src="js/pooper.min.js"></script> 
      <script src="js/bootstrap.min.js"></script>
      <script>
        var login = document.getElementById('signin');
        login.onclick = function(){
          $('#mobilestatus').html('<div style="margin-bottom:-5px;"></div>');
          $('#passstatus').html('<div style="margin-bottom:-5px;"></div>');
          $("#mobileborder").attr('style','margin-top: 40px;');
          $("#emailborder").attr('style','');
          
          var usermobile = $('#usermobile').val();
          var userpass = $("#userpass").val();
         
          if(usermobile.trim()=="")
          {
              $("#mobilestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter valid mobile number</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#mobileborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#usermobile").focus();
              return false;
          }
          else if(usermobile.length != 10)
          {
              $("#mobilestatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter valid 10 digit mobile number</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#mobileborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#usermobile").focus();
              return false;
          }
          else if(userpass.trim()=="")
          {
              $("#passstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter your password</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
              $("#passborder").attr('style','margin-top: 40px; border-bottom:2px solid #f15151 !important;');
              $("#userpass").focus();
              return false;
          } 
          $.ajax({
            url : 'student.php',
            method:'POST',
            data:{
                checkLogemail:"checklogmail",
                usermobile:usermobile,
                userpass:userpass,
            },
            success:function(data){
                //console.log(data);
                if(data == 0)
                {
                  console.log("ok");
                  $("#passstatus").html('<div style="color:#f15151; font-size:16px; margin-top:5px; margin-bottom:-25px; display:flex; justify-content:space-between;"><small>Please enter valid email or password</small> <span><small><i class="fas fa-exclamation-triangle"></i></small></span></div>');
                  $("#userpass").focus();
                }
                else if(data !== 0)
                {
                  window.location.href = "main.php";
                }
            }
        });
      }

      function isInputNumber(evt){
      var ch = String.fromCharCode(evt.which);
            if(!(/[0-9]/.test(ch))){
              evt.preventDefault();
          }
      }
      </script> 
      
  </body>
  </html>