<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>hello cac ban K2</h3>
    <form action="k2/postLogin" method="post">
        <?php echo csrf_field(); ?>
        <label for="">USERNAME</label>
        <input type="text" name="username">
        <label for="">PASSWORD</label>
        <input type="password" name="password">
        <button type="submit">LOGIN</button>
    </form>
</body>
</html><?php /**PATH /Volumes/KHAC QUANG/ELEDEVO ACEDEMY/Project Demo/quangdemo1/resources/views/k2.blade.php ENDPATH**/ ?>