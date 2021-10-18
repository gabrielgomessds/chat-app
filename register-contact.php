<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
      
    <section class="form signup">
    <a href="users.php" class="back-icon contact"><i class="fas fa-arrow-left"></i> Voltar</a>
      <header>Cadastro de Contato</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>

        <div class="field input">
            <label>Nome: </label>
            <input type="text" name="fname" placeholder="Nome completo ou apelido" required>
          </div>

        <div class="field input">
          <label>Email: </label>
          <input type="text" name="email" placeholder="Endereço de email" required>
        </div>

        <div class="field input">
          <label>Telefone: </label>
          <input type="text" name="text" placeholder="Digite o telefone" required>
        </div>

        <div class="field button">
          <input type="submit" name="submit" value="Cadastrar">
        </div>
      </form>

    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
