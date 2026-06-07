<div class="dashboard-box">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-box-seam" style="color:#dc3545; font-size:35px;"></i> Produtos</h2><div>
      <a href="<?= BASE_URL ?>/product/create" class="btn btn-primary"> Incluir Produto</a>
    </div>

  </div>

  <div class="table-scroll">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th colspan="3">Ações</th>
      </tr>

    </thead>
    <tbody>
      <?php foreach ($data['products'] as $product) { ?>

      <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['nome'] ?></td>
        <td><a href="<?= BASE_URL ?>/product/show/<?= $product['id'] ?>">Visualizar</a></td>
        <td><a href="<?= BASE_URL ?>/product/edit/<?= $product['id'] ?>">Editar</a></td>
        <td><a href="<?= BASE_URL ?>/product/delete/<?= $product['id'] ?>"onclick="return confirm('Deseja excluir este produto?')">Excluir</a></td>
      </tr>

      <?php } ?>
    </tbody>
  </table>
</div>
</div>