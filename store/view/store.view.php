<?php
$products = $product->getStoreProducts("store_id", $store_data[0]["id"]);
?>

  <section class="products">
    <h2>Our Products</h2>
    <?php
    foreach($products as $product) {
    ?>
    <div class="product-grid">
      <div class="product-card">
        <i class="fas fa-laptop fa-2x"></i>
        <h3><?php echo $product["product_name"];?></h3>
        <p><?php echo $product["product_category"];?></p>
        <p><?php echo $product["sale_price"];?></p>
        <del><?php echo $product["original_price"];?></del>
        <button>Add to Cart</button>
        <form action="controller/orders.php" method="post">
 <button type="submit" name="get_order">by product</button>
        <input type="hidden" name="product_id" value="<?php echo $product["id"];?>">
    </form>
      </div>
    </div>
    <?php
    }
    ?>
  </section>