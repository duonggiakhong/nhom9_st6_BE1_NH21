<?php require "header.php";?>
								<!-- tab -->
										<?php
                                        if(isset($_GET['id'])):
                                           $id =$_GET['id'];
                                            $getAllProductById = $product->getProductById($id);
                                        foreach($getAllProducts as $value):
                                         if($value['id'] == $_GET['id'] ):
										 ?>
										<!-- product -->
										<div class="product">
											<div  class="product-img">
												<img style="width:300px; display: block; margin-left: auto; margin-right: auto;"  src="./img/<?php echo $value['image']?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-id">sản phẩm <?php echo $value["id"]?></p>
												<h3 class="product-name"><a href="#"><?php echo $value['name']?></a></h3>
												<h4 class="product-price"><?php echo number_format($value['price'])?>VND</h4>
												<h5 class="product-description"><?php echo $value["description"]?></h5>
												<h5 class="product-created_a"><?php echo $value["created_a"]?></h5>
                                                <div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"><a href="Wishlist.php?id=<?php echo $value['id']?>">add to wishlist</a></span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php 
                                        endif;
                                        endforeach;
                                        endif; ?>
									</div>
								<!-- /tab -->
								<!--<h3 style="padding-top: 60px;padding-bottom: 30px;padding-left: 632px"><b>Sản phẩm liên quan</b></h3> -->
								