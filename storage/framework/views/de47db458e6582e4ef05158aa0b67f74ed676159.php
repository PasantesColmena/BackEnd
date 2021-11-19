<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-blue-100 border border-blue-300 p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Registrarse!</h1>
        <form class="form-group" method="POST" action="/" class="mt-10" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="text-center">
                <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="nom">
                    Nombre
                </label>
                <input class="w-full p-2 border border-blue-400 rounded" type="text" name="nom"
                    value="<?php echo e(old('nom')); ?>" required>
                <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class=" text-red-500 text-xs mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mt-6 text-center">
                <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="ced">
                    Cedula
                </label>
                <input class="w-full p-2 border border-blue-400 rounded" type="text" name="ced"
                    value="<?php echo e(old('ced')); ?>" required>
                <?php $__errorArgs = ['ced'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mt-6 text-center">
                <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="num">
                    Telefono
                </label>
                <input class="w-full p-2 border border-blue-400 rounded" type="text" name="num"
                    value="<?php echo e(old('num')); ?>" required>

                <?php $__errorArgs = ['num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mt-6 text-center">
                <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="cor">
                    Correo
                </label>
                <input class="w-full p-2 border border-blue-400 rounded" type="cor" name="cor"
                    value="<?php echo e(old('cor')); ?>" required>
                <?php $__errorArgs = ['cor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mt-6 text-center">
                <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="dir">
                    Dirreccion
                </label>
                <input class="w-full p-2 border border-blue-400 rounded" type="dir" name="dir"
                    value="<?php echo e(old('dir')); ?>" required>
                <?php $__errorArgs = ['dir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mt-6 text-center">
                <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="fec_nac">
                    Fecha nacimiento
                </label>
                <input class="w-full p-2 border border-blue-400 rounded" type="fec_nac" name="fec_nac"
                    value="<?php echo e(old('fec_nac')); ?>" required>
                <?php $__errorArgs = ['fec_nac'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            


                <div class="mt-6 text-center">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="">
                        Foto perfil
                    </label>
                    <input type="file" name="fot_per">
                    <?php $__errorArgs = ['fot_per'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>




            <div class="mb-6 text-center">
                <button type="submit" class="bg-gray-400 text-white rounded py-2 px-4 hover:bg-gray-500">
                    Enviar
                </button>
            </div>

            
        </form>
    </main>
</section>

</html>
<?php /**PATH D:\BackEnd\agenda_usuarios_backend\resources\views/create.blade.php ENDPATH**/ ?>