<style>
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
    
</style>
<?php $__env->startSection('content'); ?>
    <h3>Product Manage</h3>
    <div class="input-group group-search" >
        <input class="form-control" type="text" name="" placeholder="Search Product by name" aria-label="Recipient's ">
        <div class="input-group-append">
            <span class="input-group-text">Search</span>
        </div>
    </div>
    
    <table class="table tbl-1">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Desciption</th>
            <th scope="col">Expired</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row"><?php echo e($key+1); ?></td>
                        <td><a href="#"><?php echo e($row->name); ?></a></td>
                        <td><?php echo e($row->price); ?></td>
                        <td>500</td>
                        <td>Bánh đậu xanh Hải Dương</td>
                        <td><?php echo e(date_format(date_create($row->expired), 'd-m-Y')); ?></td>
                        <td>

                            <button class="btn btn-success" type="button">Edit</button>
                            <button class="btn btn-danger" type="button">Delete</button>
                        </td>
                    </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                
            
        </tbody>
      </table>
      <?php echo e($products->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KHAC QUANG/ELEDEVO ACEDEMY/Project Demo/quangdemo1/resources/views/k3.blade.php ENDPATH**/ ?>