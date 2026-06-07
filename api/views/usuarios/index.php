<main>
    <div class="dashboard-box">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2><i class="bi bi-people" style="color:#dc3545; font-size:35px;" > </i> Clientes</h2>
          <a href="<?= BASE_URL ?>/User/create" class="btn btn-primary">Incluir Cliente</a>
        </div>

        <div class="table-scroll">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th colspan="3">Ações</th>
            </tr>

          </thead>
          <tbody>
            <?php foreach ($usuarios as $usuario) { ?>

            <tr>
              <td><?= $usuario['id'] ?></td>
              <td><?= $usuario['nome'] ?></td>

              <td><a href="<?= BASE_URL ?>/User/show/<?= $usuario['id'] ?>"> Visualizar </a></td>
              <td><a href="<?= BASE_URL ?>/User/edit/<?= $usuario['id'] ?>"> Editar </a></td>
              <td><a href="<?= BASE_URL ?>/User/delete/<?= $usuario['id'] ?>"
                onclick="return confirm('Deseja excluir este cliente?')" > Excluir </a></td>
            </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>
      </div>
</main>