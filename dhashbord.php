<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    ?>
<?php
 include("common/dhash_header.php");
 include("product_data.php");
 ?>


<section id="page-headar">
    <h1>#stayhome</h1>
    <p>Save more with coupons & up to 70% off!</p>
</section>


<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <?php foreach ($pdata as $key => $product) :?>
        <div class="pro" onclick="window.location.href='sproduct.php?pid=<?=$key?>'">
            <img src="<?=$product['image']?>" alt="">
            <div class="des">
                <span><?=$product['title']?></span>
                <h5><?=$product['description']?></h5>
                <div class="star">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <h4><?=$product['price']?></h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <?php endforeach;?>
        <!-- <div class="pro">
            <img src="img/products/f2.jpg" alt="">
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
            <img src="img/products/f3.jpg" alt="">
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
            <img src="img/products/f4.jpg" alt="">
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
            <img src="img/products/f5.jpg" alt="">
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
            <img src="img/products/f6.jpg" alt="">
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
            <img src="img/products/f7.jpg" alt="">
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
            <img src="img/products/f8.jpg" alt="">
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
        <div class="pro">
            <img src="img/products/n5.jpg" alt="">
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
            <img src="img/products/n6.jpg" alt="">
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
            <img src="img/products/n7.jpg" alt="">
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
            <img src="img/products/n8.jpg" alt="">
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
        </div> -->
    </div>
</section>

<section id="pagination" class='section-p1'>
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class='fa fa-arrow-right'></i></a>
</section>



<?php include('common/footer.php');?>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>