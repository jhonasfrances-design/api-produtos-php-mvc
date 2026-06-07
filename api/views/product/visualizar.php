<main>
<div class="dashboard-box">
        <div class="d-flex justify-content-between align-items-center mb-4">
          
          <h2><i class="bi bi-search" style="color:#dc3545;font-size:35px;"></i> Visualizar Produtos</h2>
        </div>

        <form>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">ID:</label>
              <input type="text" style="text-align:center" class="form-control" value="<?= $product['id'] ?>" disabled>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Data Cadastro:</label>
              <input type="text" style="text-align:center" class="form-control" value="<?= $product['data_cadastro'] ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Nome do Produto:</label>
              <input type="text" class="form-control" value="<?= $product['nome'] ?>" disabled>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Preço:</label>
              <input type="number" step="0.01" class="form-control" value="<?= $product['preco'] ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Estoque:</label>
              <input type="number" class="form-control" value="<?= $product['estoque'] ?>" disabled>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Categoria:</label>
              <input type="number" class="form-control" value="<?= $product['categoria_id'] ?>" disabled>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Descrição:</label>
            <textarea class="form-control" rows="4" disabled><?= $product['descricao'] ?></textarea>
          </div>

          <div class="mt-4">
            <a href="<?= BASE_URL ?>/product" class="btn btn-primary">
              Voltar
            </a>
          </div>

        </form>
      </div>
</main>