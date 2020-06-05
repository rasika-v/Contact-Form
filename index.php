<?php
include("contact.php");
?>

  footer h5 {
    margin-bottom: 15px;
  }
  footer .footer-nav {
    margin-bottom: 30px;
  }
 
#contact-us {
  padding: 50px 0px;
  background-color: rgba(201, 197, 255, 0.432);
}

#contact-us h5 {
  font-weight: 500;
  font-size: 18px;
  color: #1e1e1e;
  letter-spacing: 0.25px;
  line-height: 26px;
}

.contact-text {
  font-weight: 400;
  font-size: 14px;
  color: #6F8BA4;
  letter-spacing: 0.6px;
  line-height: 26px;
}

.contact-text p {
  margin-bottom: 28px;
}

.contact-form input,
.contact-form textarea {
  color: #777;
  font-size: 14px;
  border: 1px solid #eee;
  width: 100%;
  height: 50px;
  outline: none;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 25px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  margin-bottom: 30px;
}

.contact-form textarea {
  height: 150px;
  resize: none;
  padding: 20px;
}

.send-btn
{
 
  outline: none;
  border: none;
  cursor: pointer;
  font-size: 13px;
  border-radius: 20px;
  padding: 12px 20px;
  background-color: #bdb0e7;
  text-transform: uppercase;
  color: #fff;
  letter-spacing: 0.25px;
  transition: all 0.3s ease 0s;
  float: right; 

}

.send-btn:hover {
  background-color: #194597;
}

.valign {
  font-size: 0;
}

.valign > [class*="col"] {
  display: inline-block;
  float: none;
  font-size: 14px;
  font-size: 1rem;
  vertical-align: middle;
}

.link-6
{
  font-weight: bold;
  transition: 0.3s ease;
  text-decoration: none;
  transition: all .3s;
  color: rgb(82, 81, 81);
}

.link-6:hover
{
  /* border-bottom: 1px solid #1e1e1e; */
  /* padding-left: 10px; */
  text-decoration: none;
  font-weight: bolder;
  color: black;

  /* border-bottom: 1px solid gray; */
}

.align-middle {
  margin-top: 5%;
  margin-bottom: 5%;
}
@media screen and (max-width:767px) {
  .navigation {
  /* margin-left: auto;
  margin-right: auto; */
    position: fixed;
    /* width: 100%; */
    height: 150px;
    background: black;
    top: -100%;
    left: 0;
    padding: 0.5px 0px;
  }
  .navigation li a i {
    width: 100%;
    font-size: 20px;
    margin-bottom: 0px;
  }

  .contact-nav
  {
    margin-top: 0px;
    padding: 0px 0px;
  }
}

		  </style>
	</head>
	<body class="is-preload">
<!-- contact us php and js !-->


          <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 contact-class">
            <h5>CONTACT US</h5><br>
			<div id="error"><? echo $error.$successMessage; ?></div>
              <div class="contact-form">
                  <form id="contact" action="" method="POST">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <fieldset>
                          <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="send-btn">Send Message</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
              </div>
			  <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#name").val() == "") {
                  
                  error += "This field is required.<br>"
                  
              }
              
              if ($("#message").val() == "") {
                  
                  error += "This field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
    </script>
          </div>
      </div>
  </div>
</section>

<!-- Scripts !-->
			<script src="style2/js/jquery.min.js"></script>
			<script src="style2/js/browser.min.js"></script>
			<script src="style2/js/breakpoints.min.js"></script>
			<script src="style2/js/util.js"></script>
            <script src="style2/js/main.js"></script> 
            <script src="style2/js/wow.min.js"></script>
		<script src="style2/js/jquery.singlePageNav.min.js"></script>
        <script src="style2/js/custom.js"></script>
        <script src="style2/js/jquery.js"></script>
        <script src="style2/js/bootstrap.min.js"></script>
        <script src="style4/js/index.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                  content.style.maxHeight = null;
                } else {
                  content.style.maxHeight = content.scrollHeight + "px";
                } 
              });
            }
            </script>
	</body>
</html>
