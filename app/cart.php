<?php $this->layout('template') ?>
 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
            <div class="row">
              <div class="col-md-12 table-responsive">
                  <form method="POST" action="update-cart">
                  <table class="table table-sm table-hover table-striped table-bordered bg-white">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Name Product</th>
                              <th>Product</th>
                              <th>Quantity</th>
                              <th>Sub Total</th>
                              <th>#</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          if($totalKeranjang > 0) : 
                          $no = 1;
                          $sub = 0;                   
                          foreach ($cart as $items) :
                            foreach($items as $item) :
                              $sub = $item['quantity'] * $item['attributes']['price'];
                              echo '<tr> ';
                              echo '<td> '.$no.'</td>';
                              echo '<td> '.$item['attributes']['nama'].'<input class="form-control" name="nama-'.$no.'" type="hidden" value="'.$item['attributes']['nama'].'"></td>';
                              echo '<td> Rp '.rp($item['attributes']['price']).'<input class="form-control" name="price-'.$no.'" type="hidden" value="'.$item['attributes']['price'].'"></td>';
                              echo '<td style="width:15%"> <input class="form-control" name="idku-'.$no.'" type="hidden" value="'.$item['id'].'"> <input class="form-control form-control-sm" name="jml-'.$no.'" type="number" value="'.$item['quantity'].'"></td>';
                              echo '<td> Rp '.rp($sub).'</td>';
                              echo '<td style="width:5%"> <a href="remove-cart-'.$item['id'].'" class="btn btn-danger btn-small"><i class="icofont-trash text-white"></i></a></td>';
                              echo '</tr>';
                              $no++;
                            endforeach;
                        endforeach;

                        else :
                          echo '<tr> ';
                          echo '<td style="text-align:center" colspan="6">Cart Empty.</td>';
                          echo '</tr>';
                        endif;
                          ?>
                      </tbody>
                  </table>
                  <?php if($totalKeranjang > 0) : ?>
                  <div class="d-flex justify-content-between flex-wrap">
                    <button type="submit" name='btn_tipe' value="update" class="btn btn-info btn-sm"> <i class="icofont-shopping-cart"></i> Update Cart</button>
                    <button type="submit" name='btn_tipe' value="checkout" class="btn btn-success pull-right">Order Process <i class="icofont-location-arrow"></i></button>
                  </div>
                  <?php endif;?>
                  </form>
                  
              </div>
            </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
