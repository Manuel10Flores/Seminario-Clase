<!DOCTYPE html>
<html>

<head>
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h1>Editar Alumnos</h1>

    <form action="<?php echo e(route('categorias.update', $categoria->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre Alumno*</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo e($categoria->nombre); ?>"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-secondary">Ir a la lista principal</a>
    </form>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ExamenParcial\resources\views/categorias/edit.blade.php ENDPATH**/ ?>