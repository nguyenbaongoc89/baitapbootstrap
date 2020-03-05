<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <title>Document</title>
    <style>
        body{
            padding-top: 20px;
        }
        .tbl-1 th, .tbl-1 td{
            height: 30px;
            padding: 5px !important;
            
        }
        .tbl-1 td{
            font-size: 12px;
            font-weight: normal;
        }
        
        .tbl-1 .btn{
            padding: 0 5px !important;
            font-size: 12px;
        }
        .group-search{
            margin-bottom: 5px;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #343a40 !important;
            border-color: #343a40 !important;
        }
        .btn-add-new{
            background: #fff;
            border : 1px solid #c7c7c7;
            padding: 3px;
            color : #000;
            margin-left: 20px;
        }
        .span-plus{
            font-size: 20px;
        }
        .row-1{
            margin-right: 0;
            margin-left: 0; 
        }
        .btn-add-new:hover {
            color: #000;
            background-color: #e0e0e0;
            border-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row row-1">
            <h3>Product Manage</h3>
            <a href="/product/add">
                <button class="btn btn-primary btn-add-new" type="button">
                    <span class="span-plus">+ </span> Add New
                </button>
            </a>
        </div>
        <form action="searchProduct" method="get">
            <div class="input-group group-search" >
                <input class="form-control" id="input-search" type="text" name="keySearch" placeholder="Search Product by name" aria-label="Recipient's ">
                <div class="input-group-append" id="btn-search">
                    <button type="submit">Search</button>
                </div>
            </div>
        </form>
        <table class="table tbl-1">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Desciption</th>
                <th scope="col">Expired</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($resultDBView) > 0): ?>
                    <?php $__currentLoopData = $resultDBView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($key+1); ?></td>
                            <td><a href="/product/show/<?php echo e($row->id); ?>"><?php echo e($row->name); ?></a></td>
                            <td><?php echo e($row->price); ?></td>
                            <td>500</td>
                            <td>Bánh đậu xanh Hải Dương</td>
                            
                            <td><?php echo e(date_format(date_create($row->expired), 'd-m-Y')); ?></td>
                            <td>
                            
                            </td>
                            <td>
                                <button class="btn btn-success" type="button"><a href="/product/edit/<?php echo e($row->id); ?>">Edit</a> </button>
                            <button class="btn btn-danger btn-delete" idproduct="<?php echo e($row->id); ?>" type="button">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <?php else: ?>
                    <tr >
                        <td class="text-center" colspan="8">Không có dữ liệu phù hợp với kết quả search</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php echo e($resultDBView->links()); ?>

    </div>
</body>

<script src="js/demo.js"></script>
</html><?php /**PATH /Volumes/KHAC QUANG/ELEDEVO ACEDEMY/Project Demo/quangdemo1/resources/views/searchProduct1.blade.php ENDPATH**/ ?>