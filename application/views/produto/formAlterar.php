<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produto</h5>

                    <!-- Multi Columns Form -->
                    <form method="POST" action="/produto/salvarAlteracao" class="row g-3">
                        <input type="hidden" name="id" value="<?php echo $produto->id?>"/>

                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $produto->nome?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Perecivel</label>
                            <input type="text" name="perecivel" id="nome" class="form-control" value="<?php echo $produto->perecivel?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label" >Tipo Produto</label>
                            <select name="tipo_produto" class="form-select" style="display: block; width: 100%; height: calc(1.5em + 0.75rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #6e707e; background-color: #fff; background-clip: padding-box; border: 1px solid #d1d3e2; border-radius: 0.35rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                <option value="">Selecione o tipo</option>
                                <?php echo $opcoes; ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Valor</label>
                            <input type="text" name="valor" class="form-control" value="<?php echo $produto->valor?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Imagem</label>
                            <input type="text" name="imagem" class="form-control" value="<?php echo $produto->imagem?>" required>
                        </div>
                        <br/>
                        <div class="text-center" style="margin: 21px;">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-secondary" href='/produto'>Voltar/Cancelar</a>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>

        </div>
    </div>
</section>