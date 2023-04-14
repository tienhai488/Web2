<div class="container">
    <h1>Purchase Order</h1>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Delivery Address</th>
                <th>Date Order</th>
                <th>Trang thai DH </th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="xemLaiHoaDon">
            <?php foreach($dshd as $hd):  ?>
            <?php  ?>


            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt=""
                            style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1"><?php echo $hd["tenNN"] ?></p>
                            <p class="text-muted mb-0"><?php  echo $hd["sdt"] ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $hd["diaChi"] ?></p>
                </td>
                <td>
                    <p class="mb-1"><?php echo $hd["dateOrder"]  ?></p>
                </td>
                <td><?php echo $hd["tt"]  ?></td>
                <td>$<?php echo $hd["tongBill"] ?></td>

                <td>
                    <a href="#">Detail</a>
                    <?php if($hd["ttDH"] == 1 || $hd["ttDH"] == 2){?>
                    <input onclick="huyDonHang(event)" type="button" value="HUY DON HANG">
                    <!-- <input class="idDH" type="hidden" value="<?php echo $hd["idDH"] ?>"> -->


                    <?php } ?>
                    <input class="idDH" type="text" value="<?php echo $hd["idDH"]  ?>">
                </td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
</div>