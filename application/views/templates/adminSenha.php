<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Padaria do Barba</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>public/assets/vendor_/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>public/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar senha</h5>

                    <!-- Multi Columns Form -->
                    <form method="POST" action="/usuario/RegistrarSenha" class="row g-3">
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
                        <div class="text-center" style="margin: 21px;">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-secondary" href='usuario/RegistrarSenha'>Voltar/Cancelar</a>
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