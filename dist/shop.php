<?php 
$page = '';
include('inc/header.php'); 
?>
    <div class="shop-container">
      <div class="selection">
        <div class="filter">
          <a href="" id="filter">
            <h2>Filter</h2>
          </a>
        </div>
      </div>
      <div class="filter-open">
        <div class="menu-header">
          <p>Filter</p>
          <p id="x"><i class="fas fa-times"></i></p>
        </div>

        <div class="filter-colour filter-section">
          <h3>COLOUR</h3>
          <hr />
          <ul>
            <li><input type="checkbox" /> Red</li>
            <li><input type="checkbox" /> Blue</li>
            <li><input type="checkbox" /> Pink</li>
            <li><input type="checkbox" /> Orange</li>
            <li><input type="checkbox" /> Yellow</li>
          </ul>
          <hr />
        </div>

        <div class="filter-occassion filter-section">
          <h3>OCCASSION</h3>
          <hr />
          <ul>
            <li><input type="checkbox" /> Anniversary</li>
            <li><input type="checkbox" /> Wedding</li>
            <li><input type="checkbox" /> Valentines</li>
            <li><input type="checkbox" /> Congratulations</li>
            <li><input type="checkbox" /> Birthday</li>
          </ul>
          <hr />
        </div>

        <div class="filter-price filter-section">
          <h3>PRICE</h3>
          <hr />
          <ul>
            <li><input type="checkbox" /> £0 - £50</li>
            <li><input type="checkbox" /> £51 - £120</li>
            <li><input type="checkbox" /> £121 - £200</li>
            <li><input type="checkbox" /> £201 - £320</li>
            <li><input type="checkbox" /> £320 +</li>
          </ul>
          <hr />
        </div>
        <br><br><br><br><br><br><br><br>


      </div>
      <div>
        <div class="sort">
          <p id="sort">Sort by </p>
          <select>
            <option>Popularity</option>
            <option>Rating</option>
            <option>Low to High</option>
            <option>High to Low</option>
          </select>
        </div>
        <div class="shop-items">
          <div class="shop-item">
            <a href="esk.php">
              <img src="img/flower6.jpg" alt="Flowers in a mug" />
              <h4>ESK</h4>
              <p>£110.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="sandsend.php">
              <img src="img/flower7.jpg" alt="Orange flowers" />
              <h4>SANDSEND</h4>
              <p>£360.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="wcc.php">
              <img src="img/flower8.jpg" alt="Flowers in a vase" />
              <h4 id="small" title="WEST CLIFF CUSHION">WC CUSHION</h4>
              <h4 id="full">WEST CLIFF CUSHION</h4>
              <p>£250.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="wc.php">
              <img src="img/flower5.jpg" alt="Pink flowers">
              <h4>WEST CLIFF</h4>
              <p><span class="sale">£290.00</span> £250.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="esk.php">
              <img src="img/flower6.jpg" alt="Flowers in a mug" />
              <h4>ESK</h4>
              <p>£110.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="sandsend.php">
              <img src="img/flower7.jpg" alt="Orange flowers" />
              <h4>SANDSEND</h4>
              <p>£360.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="wcc.php">
              <img src="img/flower8.jpg" alt="Flowers in a vase" />
              <h4 id="small" title="WEST CLIFF CUSHION">WC CUSHION</h4>
              <h4 id="full">WEST CLIFF CUSHION</h4>
              <p>£250.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="wc.php">
              <img src="img/flower5.jpg" alt="Pink flowers">
              <h4>WEST CLIFF</h4>
              <p><span class="sale">£290.00</span> £250.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="esk.php">
              <img src="img/flower6.jpg" alt="Flowers in a mug" />
              <h4>ESK</h4>
              <p>£110.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="sandsend.php">
              <img src="img/flower7.jpg" alt="Orange flowers" />
              <h4>SANDSEND</h4>
              <p>£360.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="wcc.php">
              <img src="img/flower8.jpg" alt="Flowers in a vase" />
              <h4 id="small" title="WEST CLIFF CUSHION">WC CUSHION</h4>
              <h4 id="full">WEST CLIFF CUSHION</h4>
              <p>£250.00</p>
            </a>
          </div>
          <div class="shop-item">
            <a href="wc.php">
              <img src="img/flower5.jpg" alt="Pink flowers">
              <h4>WEST CLIFF</h4>
              <p><span class="sale">£290.00</span> £250.00</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <hr />
      <div class="footer-text">
        <a href="/#">FAQ</a>
        <a href="/#" class="multiple">DELIVERYS & RETURNS</a>
        <a href="/#" class="multiple">TERMS & CONDITIONS</a>
        <a href="/#" class="multiple">CONTACT US</a>
      </div>
      <hr />
      <div class="footer-socials">
        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
      <div class="footer-rights multiple">
        <p>COPYRIGHT 2017</p>
        <p><em>Made in Yorkshire.</em></p>
      </div>
    </footer>
  </main>
  <div class="overlay" />
  <script src="js/app.js"></script>
</body>

</html>