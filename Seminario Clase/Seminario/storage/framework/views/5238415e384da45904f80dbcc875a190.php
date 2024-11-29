<!DOCTYPE html>
<html>
<head>
    <title>Categoria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Categoria</h1>
    <p><strong>ID:</strong> <?php echo e($categoria->id); ?></p>
    <p><strong>Nombre:</strong> <?php echo e($categoria->nombre); ?></p>    
    <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-secondary">Regresar</a>
    <a href="<?php echo e(route('categorias.edit', $categoria->id)); ?>" class="btn btn-warning">Editar</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ExamenParcial\resources\views/categorias/show.blade.php ENDPATH**/ ?>