<!DOCTYPE html>
<html>

<head>
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 40px;
        }

        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .alert {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="container mt-5">
    <h1>Lista de Productos</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="d-flex justify-content-end mb-4">
        <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-custom">Ir a Categorias</a>
    </div>

    <div class="d-flex justify-content-end mb-4">
        <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-custom">Agregar Nuevo producto</a>
    </div>

    <div class="table-container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>categoria</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha de Actualizacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($producto->id); ?></td>
                        <td><?php echo e($producto->nombre); ?></td>
                        <td><?php echo e($producto->precio); ?></td>
                        <td><?php echo e($producto->categoria->nombre); ?></td>
                        <td><?php echo e($producto->created_at->format('d/m/Y H:i')); ?></td>
                        <td><?php echo e($producto->updated_at->format('d/m/Y H:i')); ?></td>
                        <td>
                            <a href="<?php echo e(route('productos.show', $producto->id)); ?>" class="btn btn-info">View</a>
                            <a href="<?php echo e(route('productos.edit', $producto->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('productos.destroy', $producto->id)); ?>" method="POST"
                                class="d-inline-block"
                                onsubmit="return confirm('Esta seguro de eliminar este producto?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\ExamenParcial\resources\views/productos/index.blade.php ENDPATH**/ ?>