<!DOCTYPE html>
<html>

<head>
    <title>Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h1>Producto</h1>
    <p><strong>ID:</strong> <?php echo e($producto->id); ?></p>
    <p><strong>Nombre:</strong> <?php echo e($producto->nombre); ?></p>
    <p><strong>Descripcion:</strong> <?php echo e($producto->descripcion); ?></p>
    <p><strong>Precio:</strong> <?php echo e($producto->precio); ?></p>
    <p><strong>Stock:</strong> <?php echo e($producto->stock); ?></p>
    <p><strong>Categoría:</strong> <?php echo e($producto->categoria->nombre); ?></p>

    <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Regresar</a>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\ExamenParcial\resources\views/productos/show.blade.php ENDPATH**/ ?>