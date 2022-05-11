<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar de Usuario</h5>

                    <!-- Multi Columns Form -->
                    <form method="POST" action="/login/salvarregistro" class="row g-3">
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">E-Mail</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Usuario</label>
                            <input type="text" name="usuario" class="form-control" required>
                        </div>
                        <br/>
                        <div class="text-center" style="margin: 21px;">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-secondary" href='/usuario'>Voltar/Cancelar</a>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>

        </div>
    </div>
</section>
