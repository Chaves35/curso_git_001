<?php include 'includes/header.php'; ?>
<div class="container mt-5">
  <h2 class="mb-4">Nossos Produtos</h2>
  <div class="row">
    <?php
    $produtos = [
      ['nome' => 'Cimento CP-II', 'preco' => 35.90, 'img' => 'cimento.jpg'],
      ['nome' => 'Areia Lavada 1m³', 'preco' => 120.00, 'img' => 'areia.jpg'],
      ['nome' => 'Tijolo Cerâmico', 'preco' => 0.80, 'img' => 'tijolo.jpg'],
    ];
    foreach ($produtos as $p) {
      echo "
      <div class='col-md-4'>
        <div class='card mb-4'>
          <img src='assets/img/{$p['img']}' class='card-img-top' alt='{$p['nome']}'>
          <div class='card-body'>
            <h5 class='card-title'>{$p['nome']}</h5>
            <p class='card-text'>R$ " . number_format($p['preco'], 2, ',', '.') . "</p>
            <a href='#' class='btn btn-success'>Comprar</a>
          </div>
        </div>
      </div>";
    }
    ?>
  </div>
</div>
<?php include 'includes/footer.php'; ?>