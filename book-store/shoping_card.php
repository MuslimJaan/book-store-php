<!DOCTYPE html>
<html lang="en">

<?php include "layouts/header.php" ?>

<body>
    <?php include "layouts/navbar.php" ?>

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                <h1 class="text-center mt-5 bg-primary text-light p-5">Shopping Cart</h1>
                <table style="background-color:rgb(205, 203, 203);" class="table-  responsive-md w-100 ">
                    <tr>
                        <th class="border text-center bg-light  ">Id</th>
                        <th class=" border  bg-light text-center">item</th>
                        <th class="border bg-light text-center">category</th>
                        <th class="border bg-light text-center">Quaintity</th>
                        <th class="border bg-light text-center">Unit price</th>
                        <th class="border bg-light text-center">Total price</th>
                        <th class="border bg-light text-center">Actions</th>
                        <th class="border bg-light text-center">Actions</th>
                    </tr>
                    <tbody id="datarow">
                        <tr>
                            <td class="border text-center p-2">1</td>
                            <td class=" border text-center">Sam & Dave </td>
                            <td class="border text-center">fiction</td>
                            <td class="border text-center">1</td>
                            <td class="border text-center">$14.00</td>
                            <td class="border text-center">$14.00</td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 w-50">Edit</button></td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 ">Delete</button></td>
                        </tr>
                        <tr class=" bg-light">
                            <td class="border text-center p-2">2</td>
                            <td class=" border text-center">The Assault
                            </td>
                            <td class="border text-center">Biogarahfy</td>
                            <td class="border text-center">2</td>
                            <td class="border text-center">$19.00</td>
                            <td class="border text-center">38.00</td>
                            <td class="border  text-center"><button class=" bg-primary border-0 text-light rounded-3 w-50">Edit</button></td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 ">Delete</button></td>
                        </tr>
                        <tr>
                            <td class="border text-center p-2">3</td>
                            <td class=" border text-center">
                                The Carrot Hunt
                            </td>
                            <td class="border text-center">History</td>
                            <td class="border text-center">3</td>
                            <td class="border text-center">$19.00</td>
                            <td class="border text-center">57.00</td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 w-50">Edit</button></td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 ">Delete</button></td>
                        </tr>
                        <tr class="bg-light">
                            <td class="border text-center p-2">4</td>
                            <td class=" border text-center">
                                The DARK
                            </td>
                            <td class="border text-center">History</td>
                            <td class="border text-center">4</td>
                            <td class="border text-center">$20.00</td>
                            <td class="border text-center">80.00</td>
                            <td class="border  text-center"><button class=" bg-primary border-0 text-light rounded-3 w-50">Edit</button></td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 ">Delete</button></td>
                        </tr>
                        <tr>
                            <td class="border text-center p-2">5</td>
                            <td class=" border text-center">
                                The Journey
                            </td>
                            <td class="border text-center">Dream</td>
                            <td class="border text-center">3</td>
                            <td class="border text-center">$12.00</td>
                            <td class="border text-center">36.00</td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 w-50">Edit</button></td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 ">Delete</button></td>
                        </tr>
                        <tr class="bg-light">
                            <td class="border text-center p-2">6</td>
                            <td class=" border text-center">
                                The Night
                            </td>
                            <td class="border text-center">Horor</td>
                            <td class="border text-center">2</td>
                            <td class="border text-center">$22.00</td>
                            <td class="border text-center">44.00</td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 w-50">Edit</button></td>
                            <td class="border  text-center"><button class=" bg-primary border-0 text-light rounded-3">Delete</button></td>
                        </tr>
                        <tr>
                            <td class="border text-center p-2">7</td>
                            <td class=" border text-center">
                                The Summer of
                            </td>
                            <td class="border text-center">History</td>
                            <td class="border text-center">2</td>
                            <td class="border text-center">$24.00</td>
                            <td class="border text-center">48.00</td>
                            <td class="border  text-center"><button class="bg-primary border-0  text-light rounded-3 w-50">Edit</button></td>
                            <td class="border text-center"><button class=" bg-primary border-0 text-light rounded-3 ">Delete</button></td>
                        </tr>
                        <tr class="bg-light">
                            <td class="border text-center p-2">8</td>
                            <td class=" border text-center">
                                TRIO – Sarah
                            </td>
                            <td class="border text-center">History</td>
                            <td class="border text-center">3</td>
                            <td class="border text-center">$25.00</td>
                            <td class="border text-center">75.00</td>
                            <td class="border  text-center"><button class=" bg-primary border-0 text-light rounded-3 w-50">Edit</button></td>
                            <td class="border text-center"><button class=" bg-primary border-0 rounded-3 text-light ">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 bg-primary text-light  text-center ">
                <h3 class="">Total Quantity</h3>
            </div>
            <div class="col-lg-3 fw-bold text-center">
                <span id="totalQty">20</span>
            </div>
            <div class="col-lg-3 text-center fw-bold">
                <span id="totalPrice">$392.00</span>
            </div>
            <div class="col-lg-3 fw-bold text-center">
                <button id="click" class="btn w-75 p-2 bg-primary border-0 text-light border-dark">Order Now</button>
            </div>
        </div>
    </div>
    <?php include "layouts/footer.php" ?>
</body>

</html>