<?php
$options = array(
    'where' => 'product_typeid = 2',
    'order_by' => 'createDate'
);
$products = get_all('products', $options);?>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Truy Xuất Dữ Liệu</strong> Sản Phẩm Mới</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên SP</th>
                                <th>Giá</th>
                                <th>Ngày Tạo</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Tổng Lượt View</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên SP</th>
                                <th>Giá</th>
                                <th>Ngày Tạo</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Tổng Lượt View</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td><?php echo $product['id'] ?></td>
                                    <td><a href="admin.php?controller=product&amp;action=edit&amp;product_id=<?php echo $product['id']; ?>"><?php echo $product['product_name']; ?></a></td>
                                    <td><?php echo $product ? number_format($product['product_price'], 0, ',', '.') : 0; ?></td>
                                    <td><?php echo $product['createDate'] ?></td>
                                    <td><?php echo '<image src="public/upload/products/' . $product['img1'] . '?time=' . time() . '" style="max-width:50px;" />'; ?></td>
                                    <td><?php echo $product['totalView'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>