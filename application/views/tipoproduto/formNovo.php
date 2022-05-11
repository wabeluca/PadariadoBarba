<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produto</h5>

                    <!-- Multi Columns Form -->
                    <form method="POST" action="/tipoproduto/salvarNovo" class="row g-3">
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Nome</label>
                            <input type="text" name="nome_tipo" class="form-control" required>
                        </div>
                        <br/>
                        <div class="text-center" style="margin: 21px;">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-secondary" href='/tipoproduto'>Voltar/Cancelar</a>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>

        </div>
    </div>
</section>