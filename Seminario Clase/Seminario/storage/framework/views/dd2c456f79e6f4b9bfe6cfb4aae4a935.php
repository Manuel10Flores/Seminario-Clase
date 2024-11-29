<!-- resources/views/items/alumnos.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Categoria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Agregar una nueva categoria</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
     <div class="alert alert-success">
         <?php echo e(session('success')); ?>

     </div>
    <?php endif; ?>

    <form action="<?php echo e(route('categorias.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de la categoria</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value= "<?php echo e(old('nombre')); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-secondary">Regresar</a>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\ExamenParcial\resources\views/categorias/create.blade.php ENDPATH**/ ?>