<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bảng Sản Phẩm</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Danh sách Sản Phẩm</h2>

    <!-- Nút Thêm -->
    <a href="index.php?url=add-product" class="btn btn-primary mb-3">Thêm sản phẩm</a>

    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Tác Vụ</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listProduct as $key => $value) :
            extract($value);
            ?>
            <tr>
                <th scope="row"><?= $id_product ?></th>
                <td><?= $name_product ?></td>
                <td><?= $price ?></td>
                <!--<td>
                <img src="<?= $value["image"] ?>" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;">
                </td>-->
                <td><?= $mota ?></td>
                <td>
                    <a href="?url=suaProduct" class="btn btn-warning">Sửa</a>
                    <a href="?url=delete-product&id_product=<?= $id_product ?>" class="btn btn-danger"
                       onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không')">Xóa</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>

<!-- Bao gồm Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
