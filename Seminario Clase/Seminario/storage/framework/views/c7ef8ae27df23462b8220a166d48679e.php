<!DOCTYPE html>
<html>

<head>
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h1>Registrar Producto</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('productos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre Producto*</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name')); ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion*</label>
            <input type="text" name="description" class="form-control" id="description"
                value="<?php echo e(old('description')); ?>">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio*</label>
            <input type="number" name="price" class="form-control" id="price" value="<?php echo e(old('price')); ?>"
                step="any" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock*</label>
            <input type="number" name="stock" class="form-control" id="stock" value="<?php echo e(old('stock')); ?>"
                required>
        </div>
        <div>
            <label for="categoria" class="form-label">Categoría*</label>

            <select id="categoria" name="categoria_id" class="form-select" required>
                <option value="">-- Selecciona una categoría --</option>
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Regresar</a>
    </form>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ExamenParcial\resources\views/productos/create.blade.php ENDPATH**/ ?>