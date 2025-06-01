<?php include '../includes/header.php'; ?>

<div class="container mx-auto p-6 bg-white rounded shadow">
  <h1 class="text-2xl font-bold mb-4"><?php echo htmlspecialchars($_POST['nome']); ?></h1>
  <p><strong>Idade:</strong> <?php echo htmlspecialchars($_POST['idade']); ?></p>
  <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
  <p><strong>Telefone:</strong> <?php echo htmlspecialchars($_POST['telefone']); ?></p>

  <h2 class="text-xl font-bold mt-6">Experiências Profissionais</h2>
  <?php
  if (isset($_POST['empresa']) && is_array($_POST['empresa'])) {
    foreach ($_POST['empresa'] as $i => $empresa) {
      echo '<div class="mb-4">';
      echo '<p><strong>Empresa:</strong> ' . htmlspecialchars($empresa) . '</p>';
      echo '<p><strong>Cargo:</strong> ' . htmlspecialchars($_POST['cargo'][$i]) . '</p>';
      echo '<p><strong>Descrição:</strong> ' . nl2br(htmlspecialchars($_POST['descricao'][$i])) . '</p>';
      echo '</div>';
    }
  }
  ?>

  <button onclick="window.print()" class="bg-blue-600 text-white px-4 py-2 rounded">Imprimir / Salvar PDF</button>
</div>

<?php include '../includes/footer.php'; ?>
