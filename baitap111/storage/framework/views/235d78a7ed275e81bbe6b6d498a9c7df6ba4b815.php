<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        Day la trang DEMO <?php echo e($a); ?> - <?php echo e($b); ?>

    </div>
    <form action="demo1/postLogin" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="user">
        <input type="password" name="pass">
        <button type="submit">SEND</button>
    </form>
</body>
</html><?php /**PATH /Volumes/KHAC QUANG/ELEDEVO ACEDEMY/Project Demo/quangdemo1/resources/views/demo1.blade.php ENDPATH**/ ?>