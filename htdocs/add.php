<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/Admin/add.css">

</head>

<body class="d-flex align-items-center justify-content-center">
    <?php

    include 'libs/load.php';

    if (isset($_POST['submit'])) {
        // print_r(is_file($_FILES['product']['tmp_name']) ? "yes" : "no");
        $conn = Database::getconnection();
        $size = [];
        if (isset($_POST['s'])) {
            array_push($size, 's');
        }
        if (isset($_POST['m'])) {
            array_push($size, 'm');
        }
        if (isset($_POST['l'])) {
             array_push($size,'l');
        }
        if (isset($_POST['xl'])) {
            array_push($size, 'xl');
        }
        // print_r($size);
        $img_tmp = $_FILES['product']['tmp_name'];
        if (is_file($img_tmp) and exif_imagetype($img_tmp) !== false) {
            $img_temp = md5($img_tmp . image_type_to_extension(exif_imagetype($img_tmp)));
            $file_path = '/var/www/htdocs/TechShop/uploads/' . $img_temp;
            if (move_uploaded_file($img_tmp, $file_path)) {
                $img_uri = '/files/' . $img_temp;

                $collection = $conn->procate->cloths;
                $data = $collection->insertOne([
                    'name' => $_POST['name'],
                    'color' => $_POST['color'],
                    'cate' => $_POST['Category'],
                    'size' => $size,
                    'price' => $_POST['price'],
                    'offer' => $_POST['offer'],
                    'newprice' => $_POST['newprice'],
                    'desc' => $_POST['desc'],
                    'stock' => $_POST['stock'],
                    'img_uri' => $img_uri,
                    'date' => date("Y-m-d", time()),
                ]);
            }
        }
    } else {
        // echo "nooo something wrong";
    }

    ?>
    <form class="rounded-3 border bg-white shadow p-3 mb-5" id="form" action="/add.php" method="post" enctype="multipart/form-data">
        <div class="container   ">
            <header class=" d-flex justify-content-center">
                <h2>Add Product</h2>
            </header>

            <main class="row pt-5">
                <div class="col-6 d-flex justify-content-end ">
                    <div class="">
                        <label for="product" id="upload-label">
                            <span id="img-label">Upload Product</span>
                            <img class="imgage-fluid border-0 " id="img" alt="Product" width="100%" height="auto"
                                style="display: none;">
                        </label>
                        <input type="file" id="product" name="product" placeholder="Upload Product">
                    </div>

                </div>
                <div class=" col-6 Product-details p-0">

                    <div class="Product-Item pt-0">
                        <label for="Pname" class="col-5">Item Name :</label> <!-- onkeydown="return inputvalidate(event)" -->
                        <input type="text" class="pname col-6" id="Pname" name='name'
                            placeholder="Product Name">
                    </div>
                    <div class="Product-Item pt-4">
                        <label for="Pcolor" class="col-5 ">Color :</label> <!-- onkeydown="return inputvalidate(event)" -->
                        <input type="text" class="Pcolor col-6" id="Pcolor" name='color'
                            placeholder="Product Color">
                    </div>
                    <div class="Product-Item dropdown pt-4">
                        <label for="Pcate" class="col-5 ">Category:</label>
                        <select name="Category" id="Category">
                            <option value="select">Select</option>
                            <option value="">-------------</option>
                            <option value="mens">Mens</option>
                            <option value="womens">womens</option>
                            <option value="kids">kids</option>
                            <option value="accessories">Accessories</option>
                        </select>
                    </div>
                    <div class="Product-Item pt-4">
                        <label for="s" class="col-5 ">S</label>
                        <input type="checkbox" class="size col-6" id="s" name="s">
                        <label for="m" class="col-5 ">M</label>
                        <input type="checkbox" class="size col-6" id="m" name="m">
                        <label for="l" class="col-5 ">L</label>
                        <input type="checkbox" class="size col-6" id="l" name="l">
                        <label for="xl" class="col-5 ">XL</label>
                        <input type="checkbox" class="size col-6" id="xl" name="xl">
                    </div>
                    <div class="Product-Item pt-4">
                        <label for="Pprice" class="col-5 ">Price :</label> <!-- onkeydown="return inputvalidate(event)" -->
                        <input type="text" class="Pprice col-6" id="Pprice" name="price" onkeydown="return inputvalidate(event)"
                            placeholder="Product Price">
                    </div>
                    <div class="Product-Item pt-4">
                        <label for="Poffer" class="col-5 ">% Offer :</label> <!-- onkeydown="return inputvalidate(event)" -->
                        <input type="text" class="Poffer col-6" id="Poffer" name="offer" onkeydown="return inputvalidate(event)"
                            placeholder="Product Offer">
                    </div>
                    <div class="Product-Item pt-4">
                        <label for="Nprice" class="col-5 ">New Price :</label>
                        <input type="text" class="Nprice col-6" id="Nprice" name="newprice" placeholder="Product New Price" readonly>
                    </div>
                    <div class="Product-Item pt-4">
                        <label for="stock" class="col-5 ">New Price :</label>
                        <input type="text" class="stock col-6" id="stock" name="stock">
                    </div>
                    <div class="Product-Item pt-4">
                        <label for="desc" class="col-5 ">Description</label>
                        <input type="textarea" class="desc col-6" id="desc" name="desc">
                    </div>
                </div>
            </main>

            <div class="d-flex justify-content-center ">
                <button class="btn btn-secondary m-3" id="img-submit" type="submit" name="submit">Submit</button>
                <button class="btn btn-secondary m-3" id="img-clear" type="submit" name="">Reset</button>
            </div>
        </div>
    </form>

    <script src="../js/Admin/add.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>