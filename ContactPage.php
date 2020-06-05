<?php
include("contact.php");
?>
<!DOCTYPE html>
<html>
	<head>
	    
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
body{
	padding-top: 0;
}
  </style>
	</head>

	<body>

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
  	</body>
</html>
