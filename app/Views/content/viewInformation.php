<?= $this->extend('layout/templateUser'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPERS | Sistem Informasi Manajemen Perpustakaan</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     
    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/style.min.css">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/viewMasterAdmin.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>                

<section class="weekly-products">
<div class="container">
      <div class="weekly__wrapper">
           <div class="weekly__title title">
                <b>Information</b> 
           </div>   
           
           <div class="weekly__inner" >
              <div class="weekly__inner-box">
                   <a href="#" class="weekly__inner-img">
                    <button class="weekly__button-info" type="submit">PINJAM</button>
                   </a>
                   
                   <div class="weekly__inner-content" >
                       <div class="weekly__inner-title">
                            Buku 1   
                       </div> 
                       <div class="weekly__info">
                           <a class="weekly__info-author" href="#">
                               <div class="weekly__info-block">
                               <span class="weekly__info-name">Penulis</span>
                               </div>
                           </a>
                       </div>
                        
                       <div class="weekly__info-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.   
                       </div>
                       
                       <div class="weekly__item">
                          
                           <a href="#" class="weekly__item-money">
                               Jumlah
                           </a>
                           <div class="weekly__item-star">
                               <div class="rate-star"></div>
                           </div>
                           
                       </div>
                       
                   </div>   
                       
               </div> 
           </div> 
       </div> 
       </div>    
     </div>  
</section>
    
<footer class="footer">
   <div class="footer__content">
    <div class="container">
    
     <div class="footer__inner">
        
         <div class="footer__col footer__col-adress">
             <div class="footer__col-logo">
                <a class="navbar-brand" href="index.html"><i class="fa fa-bookmark fa-fw"></i> <b>SIMPERS</b></a>
             </div>
             <div class="footer__col-text">
                SIMPERS - Sebuah platform yang memudahkan kegiatan perpustakaan anda.
             </div> 
               <div class="footer__info">
                   <div class="footer__info-tel icon-phone footer__info-icon">
                       Telepon: (0721) 701609
                   </div>
                   <div class="footer__info-mail icon-envelop footer__info-icon">
                    library@kpa.unila.ac.id
                   </div>
                   <div class="footer__info-point icon-location footer__info-icon">
                    Gedong Meneng, Kec. Rajabasa, 
                    Kota Bandar Lampung, Lampung 35142
                   </div>
               </div>
                
         </div>        
     </div>              
    </div>
      <div class="footer__copy">
          <div class="footer__copy-text">
              ©2022 <span>SIMPERS</span>-Sistem Informasi Manajemen Perpustakaan
          </div>      
      </div>   
  </div>       
</footer>      
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/libs.min.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>

<?= $this->endSection(); ?>