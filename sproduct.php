<?php 
include("common/dhash_header.php");
include("product_data.php");
$pid = $_GET['pid'];
$data = $pdata[$pid];
$img=$data['image'];
$price=$data['price'];
// die;
?>


<section id="prodetails" class='section-p1'>
    <div class="single-pro-image">
        <img src='<?php echo $img?>' width="100%" id="MainImg" alt="">

        <div class="small-img-group">
            <div class="small-pro-col">
                <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-pro-col">
                <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-pro-col">
                <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-pro-col">
                <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class='single-pro-details'>
        <h6>Home / T-shirt</h6>
        <h4>Men`s Fashion T Shirt </h4>
        <p><?php echo $price ?></p>
        <select>
            <option value="">Select Size</option>
            <option value="">XL</option>
            <option value="">XXL</option>
            <option value="">Small</option>
            <option value="">Large</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span>The Gildan Ultra Cotton T-shirt is mode from a substantial 6.0 oz. per sq. yd. fabric constructed from
            100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each wear. Featuring a
            taped neck and shoulder, and a seamless double-needle collar, and available in a range of colors, it offers
            it all in the ultimate head-turning package. </span>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Desing</p>
    <div class="pro-container">
        <div class="pro">
            <img src="img/products/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
                <div class="star">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <h4>$89</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/products/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
                <div class="star">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <h4>$89</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/products/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
                <div class="star">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <h4>$89</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/products/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
                <div class="star">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <h4>$89</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
    </div>
</section>


<script>
var MainImg = document.getElementById('MainImg');
var smallimg = document.getElementsByClassName('small-img');

smallimg[0].onclick = function() {
    MainImg.src = smallimg[0].src;
}
smallimg[1].onclick = function() {
    MainImg.src = smallimg[1].src;
}
smallimg[2].onclick = function() {
    MainImg.src = smallimg[2].src;
}
smallimg[3].onclick = function() {
    MainImg.src = smallimg[3].src;
}
</script>
<?php include('common/footer.php');?>