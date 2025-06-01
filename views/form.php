<?php include '../includes/header.php'; ?>

<div class="container mx-auto p-6 bg-white rounded shadow">
  <form action="../controllers/gerar_curriculo.php" method="POST">
    <h2 class="text-xl font-bold mb-4">Dados Pessoais</h2>
    <div class="grid grid-cols-2 gap-4 mb-4">
      <input type="text" name="nome" placeholder="Nome completo" class="p-2 border rounded w-full">
      <input type="date" id="nascimento" name="nascimento" class="p-2 border rounded w-full">
      <input type="text" id="idade" name="idade" placeholder="Idade" readonly class="p-2 border rounded w-full">
      <input type="email" name="email" placeholder="Email" class="p-2 border rounded w-full">
      <input type="text" name="telefone" placeholder="Telefone" class="p-2 border rounded w-full">
    </div>

    <h2 class="text-xl font-bold mb-4">Experiências Profissionais</h2>
    <div id="experiencias">
      <div class="grid grid-cols-2 gap-4 mb-4">
        <input type="text" name="empresa[]" placeholder="Empresa" class="p-2 border rounded w-full">
        <input type="text" name="cargo[]" placeholder="Cargo" class="p-2 border rounded w-full">
        <textarea name="descricao[]" placeholder="Descrição" class="col-span-2 p-2 border rounded w-full"></textarea>
      </div>
    </div>
    <button type="button" id="add-experiencia" class="mb-4 px-4 py-2 bg-green-600 text-white rounded">+ Adicionar Experiência</button>

    <div>
      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Gerar Currículo</button>
    </div>
  </form>
</div>

<script>
  $('#nascimento').on('change', function () {
    const nascimento = new Date(this.value);
    const hoje = new Date();
    let idade = hoje.getFullYear() - nascimento.getFullYear();
    const m = hoje.getMonth() - nascimento.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
      idade--;
    }
    $('#idade').val(idade);
  });

  $('#add-experiencia').on('click', function () {
    $('#experiencias').append(`
      <div class="grid grid-cols-2 gap-4 mb-4">
        <input type="text" name="empresa[]" placeholder="Empresa" class="p-2 border rounded w-full">
        <input type="text" name="cargo[]" placeholder="Cargo" class="p-2 border rounded w-full">
        <textarea name="descricao[]" placeholder="Descrição" class="col-span-2 p-2 border rounded w-full"></textarea>
      </div>
    `);
  });
</script>

<?php include '../includes/footer.php'; ?>
