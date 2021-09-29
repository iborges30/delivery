<?php require("header.php"); ?>
 <div class="bg-main">
     <div class="container">
         <div class="mt-30 ds-block">
             <div class="page-item">
                 <div class="go-back">
                     <a href="#" class="jsc-back poppins" data-product-id="161">
                         <img src="assets/images/seta.png" alt="">
                     </a>
                 </div>

                 <div class="page-item-title">
                     <h1 class="poppins text-dark">ATIVIDADES DA SEMANA</h1>
                 </div>
             </div>
         </div>
         <div class="container">
             <div class="row">
                 <div class="ballance mtb-30 ds-flex">
                     <div class="col-90">
                         <div class="ballance-of-week">
                             <span class="text-gray">Saldo da semana</span>
                             <p class="text-dark">R$ <b>80,00</b></p>
                         </div>
                     </div>
                     <div class="col-10">
                         <span class="icon-card"><i class="far fa-credit-card"></i></span>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <section class="container">
         <ul class="itens">
             <?php
             for ($i = 0; $i < 5; $i++):
                 ?>
                 <li class="mt-10">
                     <div class="installments">

                         <div class="icon-informations">
                             <span class="icon-card"><i class="far fa-credit-card"></i></span>
                         </div>

                         <div class="informations">
                             <p class="text-dark">Dods sorvetes</p>
                             <span class="text-gray">Entrega #14568</span>
                             <span class="text-green">R$ 8,00</span>
                             <p class="canceled">
                                 Cancelada
                             </p>
                         </div>


                     </div>
                 </li>
             <?php
             endfor;
             ?>
         </ul>
     </section>
 </div>
<?php require("footer.php"); ?>