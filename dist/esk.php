<?php 
$page = '';
include('inc/header.php'); 
?>
<div class="item-container">
      <div class="item-section">
        <div class="item-img">
          <img src="img/flower6.webp" />
        </div>
        <div class="item-text">
          <div class="item-title">
            <h2>ESK</h2>
            <p>£110.00</p>
            <img class="rating" src="img/rating.webp" alt="">
          </div>
          <div class="item-description">
            <ul>
              <li>Beautifully presented</li>
              <li>Range of delivery services</li>
              <li>Flower guide included</li>
            </ul>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta
              voluptatum inventore dolorum beatae cum at deserunt alias
              excepturi, molestias perspiciatis! Aperiam, vel nam.
            </p>
          </div>
          <div class="quantity">
            <button id="minus">-</button>
            <input value=1 id="value">
            <button id="plus">+</button>
            <p class="stock">In Stock</p>
            <button id="add">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item-recommends">
        <h3>Recommended for you</h3>
        <div class="shop-item">
          <a href="wc.php">
            <img src="img/flower5.webp" alt="Pink flowers" />
            <h4>WEST CLIFF</h4>
            <p><span class="sale">£290.00</span> £250.00</p>
          </a>
        </div>

        <div class="shop-item">
          <a href="wcc.php">
            <img src="img/flower8.webp" alt="Flowers in a vase" />
            <h4 id="small" title="WEST CLIFF CUSHION">WC CUSHION</h4>
            <h4 id="full">WEST CLIFF CUSHION</h4>
            <p>£250.00</p>
          </a>
        </div>

        <div class="shop-item">
          <a href="sandsend.php">
            <img src="img/flower7.webp" alt="Orange flowers" />
            <h4>SANDSEND</h4>
            <p>£360.00</p>
          </a>
        </div>

        <div class="shop-item">
          <a href="wc.php">
            <img src="img/flower5.webp" alt="Pink flowers" />
            <h4>WEST CLIFF</h4>
            <p><span class="sale">£290.00</span> £250.00</p>
          </a>
        </div>
      </div>
    </div>
<?php include('inc/footer.php'); ?>