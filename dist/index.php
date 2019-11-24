<?php 
$page = 'Home';
include('inc/header.php'); 
?>

  <div class="main">
    <img src="img/flower1.jpg" alt="Drawing of flowers" />
    <img src="img/main-box.png" alt="" />
    <div class="main-bottom">
      <img src="img/flower2-.jpg" alt="Bride holding a Bouquet" />
      <img src="img/flower3-.jpg" alt="Bride holding a Bouquet" />
      <img src="img/flower4-.jpg" alt="Bride holding a Bouquet" />
    </div>
  </div>

  <section>
    <div class="favourites">
      <div class="favourites-heading">
        <h3>OUR FAVOURITES</h3>
        <p><em>Lorem ipsum dolor sit amet</em></p>
      </div>
      <div class="favourites-img">
        <div class="favourites-column">
          <div class="sale-icon">
            <p><em>Sale</em></p>
          </div>
          <a href="wc.html">
            <img src="img/flower5.jpg" alt="Pink flowers" />
            <h4>WEST CLIFF</h4>
            <p><span class="sale">£290.00</span> £250.00</p>
          </a>
        </div>
        <div class="favourites-column padding">
          <a href="esk.html">
            <img src="img/flower6.jpg" alt="Flowers in a mug" />
            <h4>ESK</h4>
            <p>£110.00</p>
          </a>
        </div>
        <div class="favourites-column padding">
          <a href="sandsend.html">
            <img src="img/flower7.jpg" alt="Orange flowers" />
            <h4>SANDSEND</h4>
            <p>£360.00</p>
          </a>
        </div>
        <div class="favourites-column padding">
          <a href="wcc.html">
            <img src="img/flower8.jpg" alt="Flowers in a vase" />
            <h4 id="small" title="WEST CLIFF CUSHION">WC CUSHION</h4>
            <h4 id="full">WEST CLIFF CUSHION</h4>
            <p>£250.00</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  
<?php include('inc/footer.php'); ?>