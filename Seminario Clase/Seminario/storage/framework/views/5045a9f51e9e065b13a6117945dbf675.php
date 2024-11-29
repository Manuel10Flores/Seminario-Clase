<!DOCTYPE html>
<html>

<head>
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h1>Editar Producto</h1>

    <form action="<?php echo e(route('productos.update', $producto->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Producto*</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo e($producto->nombre); ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion*</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion"
                value="<?php echo e($producto->descripcion); ?>">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio*</label>
            <input type="number" name="precio" class="form-control" id="precio" value="<?php echo e($producto->precio); ?>"
                step="any" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock*</label>
            <input type="number" name="stock" class="form-control" id="stock" value="<?php echo e($producto->stock); ?>"
                required>
        </div>
        <div>
            <label for="categoria" class="form-label">Categoría*</label>

            <select id="categoria_id" name="categoria_id" class="form-select" required>
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($categoria->id); ?>"
                        <?php echo e($producto->categoria_id == $categoria->id ? 'selected' : ''); ?>>
                        <?php echo e($categoria->nombre); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Ir a la lista principal</a>
    </form>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ExamenParcial\resources\views/productos/edit.blade.php ENDPATH**/ ?>