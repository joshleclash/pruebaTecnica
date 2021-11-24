<?php $this->load->view('header');?>
<div id="container">
	<h1>Welcome to App!</h1>

<div id="body" style="margin:auto; width: 500px;">
            <form class="needs-validation" novalidate id="login_form" action="<?php echo site_url("welcome/login");?>">
                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="validationCustom01">User name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="juan@algo.com" required name="user_user">
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Password</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required name="user_password">
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>

                            </div>
                            <button class="btn btn-primary" id="submit" type="button">Submit form</button>
                          </form>
</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  
    var btn = document.getElementById('submit');
    // Loop over them and prevent submission
  
      btn.addEventListener('click', function(event) 
      {
            rpta = sendAjax('login_form','footer');
            console.log(rpta.responseJSON.success);
                if(rpta.responseJSON.success)//Bienvenido, Se ha logueado con éxito a la plataforma
                {
                    
                    if (window.confirm(rpta.responseJSON.msg)) 
                    {
                            window.open("<?php echo site_url("welcome/home")?>", "Thanks for Visiting!");
                    }else{
                        location.reload();
                    }
                }else
                {
                    alert(rpta.responseJSON.msg);
                    setTimeout(function(){
                            location.reload();
                    },1000);
                }
      });
})();
</script>