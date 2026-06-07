<main>
    <div class="dashboard-box">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2><i class="bi bi-database-add" style="color:#dc3545;font-size:35px;"></i> Incluir Cliente</h2>
        </div>
        <form method="POST">
          
        <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Nome:</label>
              <input type="text" name="nome" class="form-control">
            </div>
            
            <div class="col-md-6 mb-3">
              <label class="form-label">Especialidade:</label>
              <input type="text" name="especialidade" class="form-control" >
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Idade:</label>
              <input type="number" name="idade" class="form-control" >
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">E-mail:</label>
              <input type="email" name="email" class="form-control" >
            </div>
          </div>

          <div class="mt-4">
            <button type="submit" class="btn btn-primary"> Salvar Cliente </button>
            <a href="<?= BASE_URL ?>/User" class="btn btn-primary"> Voltar </a>
          </div>
        
        </form>
    </div>
</main>