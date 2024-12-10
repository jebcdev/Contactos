<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo e($title ?? 'Agenda de Contactos'); ?></title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('index')); ?>">Inicio</a>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contacts.index')); ?>">Listado de Contactos</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contacts.create')); ?>">Crear Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="card">
            <div class="card-header">
                <div class="card-title text-center">
                    <h3>
                        <?php echo e($cardTitle ?? 'Agenda de Contactos'); ?>

                    </h3>
                </div>
            </div>
            <div class="card-body">
                <div class="card-text text-center">
                    <?php echo e($slot ?? ''); ?>

                </div>
            </div>
            <div class="card-footer">
                <div class="card-text text-center">

                </div>
            </div>
        </div>
    </main>


    <footer class="text-center m-4">
        { JEBC-DeV }
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH D:\laragon\www\Contactos\resources\views\components\layout.blade.php ENDPATH**/ ?>