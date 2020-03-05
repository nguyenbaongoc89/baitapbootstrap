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
        .div-title{
            width: 200px;
        }
        .form-data .row{ 
            padding-top: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #c7c7c7;
        }
        .a-back{

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row row-1">
            <h3>Add New Product </h3>
        </div>
        <form method="post" action="/product/create" enctype="multipart/form-data" class="form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="div-title">Name</div>
                <div class="div-content"><?php echo e($product->name); ?></div>
            </div>
            <div class="row">
                <div class="div-title">Price</div>
                <div class="div-content"><?php echo e($product->price); ?></div>
            </div>
            <div class="row">
                <div class="div-title">Quantity</div>
                <div class="div-content"><?php echo e($product->quantity); ?></div>
            </div>
            <div class="row">
                <div class="div-title">Description</div>
                <div class="div-content"><?php echo e($product->description); ?></div>
            </div>
            <div class="row">
                <div class="div-title">Expired</div>
                <div class="div-content"><?php echo e($product->expired); ?></div>
            </div>
            
            
        </form>
        <a href="/product" class="a-back">Back</a>
        
        
    </div>
</body>
</html><?php /**PATH /Volumes/KHAC QUANG/ELEDEVO ACEDEMY/Project Demo/quangdemo1/resources/views/viewProduct.blade.php ENDPATH**/ ?>