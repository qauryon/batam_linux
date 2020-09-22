<!DOCTYPE html>
<html>
  <?php user_yang_login(); ?>  
<head>
  <title>BLUG | Log In</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
  <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
      <div class="user_card">
      <div class="d-flex justify-content-center">
      <div class="brand_logo_container">
      <img src="<?= base_url('template/images/logo.png'); ?>" class="brand_logo" alt="Logo">
      </div>
      </div>
      <div class="d-flex justify-content-center form_container">
        <?php echo form_open('admin/a_login/proses_login'); ?>
          <div class="input-group mb-3">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
            <input type="text" name="username" class="form-control input_user" placeholder="Username" required>
          </div>

          <div class="input-group mb-2">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customControlInline">
              <label class="custom-control-label" for="customControlInline">Remember Password</label>
            </div>
          </div>
      </div>
      <div class="d-flex justify-content-center mt-3 login_container">
       <button type="submit" class="btn login_btn" name="login">Login</button>
      </div>
      <?php echo form_close(); ?>
        <div class="mt-4">
          <div class="d-flex justify-content-center links">
        Masuk Untuk Memulai Session
      </div>
          <div class="d-flex justify-content-center links">
          <a href="#"><b>Batam Linux User Group</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<style type="text/css">
  body,
  html {
    margin: 0;
    padding: 0;
    height: 100%;
    }
    .user_card {
    height: 400px;
    width: 350px;
    margin-top: auto;
    margin-bottom: auto;
    background: #2ab1ce;
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
 
    }
    .brand_logo_container {
    position: absolute;
    height: 170px;
    width: 170px;
    top: -75px;
    border-radius: 50%;
    background: white;
    padding: 10px;
    text-align: center;
    }
    .brand_logo {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    border: 2px solid white;
    }
    .form_container {
    margin-top: 100px;
    }
    .login_btn {
    width: 100%;
    background: #4d4d4d !important;
    color: white !important;
    }
    .login_btn:focus {
    box-shadow: none !important;
    outline: 0px !important;
    }
    .login_container {
    padding: 0 2rem;
    }
    .input-group-text {
    background: #4d4d4d  !important;
    color: white !important;
    border: 0 !important;
    border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .input_user,
  .input_pass:focus {
    box-shadow: none !important;
    outline: 0px !important;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #4d4d4d !important;
    }
a {
    color: white;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
</style>


