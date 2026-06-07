<div class="dashboard-box">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-database-add" style="color:#dc3545;font-size:35px;"></i> Incluir Produto</h2>
  </div>
<form method="POST">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label">Nome do Produto:</label>
        <input type="text" name="nome" class="form-control">
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label">Preço:</label>
        <input type="number"step="0.01"name="preco"class="form-control">
      </div>

    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label class="form-label">Estoque:</label>
        <input type="number" name="estoque" class="form-control">
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label">Categoria:</label>
        <input type="number" name="categoria_id" class="form-control">
      </div>

    </div>

    <div class="mb-3">
      <label class="form-label">Descrição:</label>
      <textarea name="descricao" class="form-control" rows="4"></textarea>
    </div>


    <div class="mt-4">
      <button type="submit" class="btn btn-primary">Salvar Produto</button>
      <a href="<?= BASE_URL ?>/product" class="btn btn-primary">Voltar</a>
    </div>
  </form>
</div>

