<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .row-1{
            margin: 0;
        }
        form{
            width: 50%;
        }
        .btn-submit{
            margin-top : 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row row-1">
            <h3>Add New Product </h3>
        </div>
        

        <form method="post" action="/product/create" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="div-title">Name</div>
            <input class="form-control" type="text" name="name" value="">
            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>


            <div class="div-title">Price</div>
        <input class="form-control" type="number" name="price" value="">
        <?php if ($errors->has('price')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('price'); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            <div class="div-title">Quantity</div>
            <input class="form-control" type="number" name="quantity" value="1">
            <div class="div-title">Description</div>
            <input class="form-control" type="text" name="description" value="desc1">
            <div class="div-title">Expired</div>
            <input class="form-control" type="date" name="expired" value="2019-01-01">
            <div class="div-title">Picture</div>
            <input class="form-control" type="file" name="imgProduct">
            <button type="submit" class="btn-submit">Create</button>
        </form>
    </div>
</body>
</html><?php /**PATH /Volumes/KHAC QUANG/ELEDEVO ACEDEMY/Project Demo/quangdemo1/resources/views/addProduct.blade.php ENDPATH**/ ?>