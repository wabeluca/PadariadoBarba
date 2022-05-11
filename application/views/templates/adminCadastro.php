<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Padaria do Barba</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="width: 50%; margin-top: 250px; margin-left: 500px;">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar senha</h5>

                    <!-- Multi Columns Form -->
                    <form method="POST" action="/login/alterarsenha" class="row g-3">
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">E-Mail</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Senha</label>
                            <input type="text" name="senha" class="form-control" required>
                        </div>
                        <br/>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Chave</label>
                            <input type="text" name="chave" class="form-control" required>
                        </div>
                        <br/>
                        <div class="text-center" style="margin-top: 17px;">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-secondary" href='/usuario'>Voltar/Cancelar</a>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>

        </div>
    </div>
</section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url();?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>public/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url();?>public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url();?>public/assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url();?>public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url();?>public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>public/assets/js/main.js"></script>

</body>

</html>