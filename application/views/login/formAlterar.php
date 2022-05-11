<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alterar usuario</h5>

                    <!-- Multi Columns Form -->
                    <form method="POST" action="/usuario/salvarAlteracao" class="row g-3">
                        <input type="hidden" name="id" value="<?php echo $user->id?>"/>

                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">E-mail</label>
                            <input type="text" id="email" name="email" class="form-control" value="<?php echo $user->email?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $user->usuario?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Senha</label>
                            <input type="text" name="senha" id="senha" class="form-control" value="<?php echo $user->senha?>" required>
                        </div>
                        
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