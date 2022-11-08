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
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/MA.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Добавляем стили из CDN SLICK-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body class="page-mart">
 
 <div class="wrapper">
 <div class="content">
 

<header class="header" >
    
  
    <section class="header__inner">
        <div class="container">
            <div class="header__inner-info">
                <div class="header__inner-title">
                <span>Sistem Informasi Manajemen Perpustakaan</span>   

                <p>SIMPERS - Sebuah platform yang memudahkan kegiatan perpustakaan anda.</p>
                </div>
            </div>
        </div>    
    </section>

</header>  

<section class="choose-foxtar">
    <div class="container">
        <div class="advantages__inner">
           
            <div class="choose-items">
                <div class="choose-item" lock>
                    <img class="choose-picture" src="/img/picture-1.png" alt="picture">
                    <div class="choose-sentence">
                        Terstruktur
                    </div>
                    <div class="choose-text">
                        SIMPERS memungkinkan para pembukuan yang terstruktur, mengingat semua proses 
                        dilakukan di komputer dan didalam jaringan sangat mungkin 
                        untuk membuatnya lebih terstruktur.

                    </div>
                </div> 
                
                  <div class="choose-item" lock>
                    <img class="choose-picture" src="/img/picture-2.png" alt="picture" width="106px">
                    <div class="choose-sentence">
                        Praktis
                    </div>
                    <div class="choose-text">
                        Seperti yang kita tahu, SIMPERS merupakan solusi dari semua keribetan yang ada.
                        hanya dengan perlu mengakses website SIMPERS kalian akan
                        dapat melalkukan layaknya kalian berada di perpustakaan.

                    </div>
                </div> 
                
                  <div class="choose-item" lock>
                    <img class="choose-picture" src="/img/picture-3.png" alt="picture">
                    <div class="choose-sentence">
                        Terkoneksi
                    </div>
                    <div class="choose-text">
                        SIMPERS selalu di pantau dan di perbarui oleh admin membuatnya menjadi lebih 
                        terkoneksi satu sama lain. Antara sistem (yang ditampilkan) dan
                        keadaan perpustakaan sebenarnya.

                    </div>
                </div> 
            </div>
        </div>
    </div>
</section> 

<!-- <div class="newest-release">
   
    <div class="container">
       
        <div class="newest__products title">
             <b>Koleksi Buku</b>        
        </div>
    </div>
</div> 
                     
<section class="products">
    <div class="container">

       <div class="products__inner">             
        <div class="content-blocks">
             <div class="content__block mix category-a category-new" data-order="1">
                 <img class="content__block_img" src="" alt="">
                 <a href="#" class="content__block-img">
                 <button class="button-info" type="submit">Info</button>
                 <button class="button-demo" type="submit">Pinjam</button>
                </a>
                 
                 
                 <div class="content__desc">
                    
                     <div class="content__desc-title">
                         Buku 1    
                     </div>
                     
                     <div class="content__desc-name">
                        <a href="#"><img class="content__desc-circle" src="img/weekly/user-Ellipse.png" alt="circle"></a>
                         <div class="content__desc-theme">
                             Penulis    
                         </div>
                     </div>
                      
                    <div class="content__desc-text">
                         Deskripsi......   
                    </div> 
                    
                    <div class="content__item">
                       
                        <a href="#" class="content__item-money">
                            Kategori
                        </a>                        
                    </div>    
                 </div> 
             </div> 

             <div class="content__block mix category-a category-new" data-order="2">
                <img class="content__block_img" src="" alt="">
                <a href="#" class="content__block-img">
                <button class="button-info" type="submit">Info</button>
                <button class="button-demo" type="submit">Pinjam</button>
               </a>
                
                
                <div class="content__desc">
                   
                    <div class="content__desc-title">
                        Buku 2    
                    </div>
                    
                    <div class="content__desc-name">
                       <a href="#"><img class="content__desc-circle" src="img/weekly/user-Ellipse.png" alt="circle"></a>
                        <div class="content__desc-theme">
                            Penulis    
                        </div>
                    </div>
                     
                   <div class="content__desc-text">
                        Deskripsi......   
                   </div> 
                   
                   <div class="content__item">
                      
                       <a href="#" class="content__item-money">
                           Kategori
                       </a>                        
                   </div>    
                </div> 
            </div> 

            <div class="content__block mix category-a category-new" data-order="3">
                <img class="content__block_img" src="" alt="">
                <a href="#" class="content__block-img">
                <button class="button-info" type="submit">Info</button>
                <button class="button-demo" type="submit">Pinjam</button>
               </a>
                
                
                <div class="content__desc">
                   
                    <div class="content__desc-title">
                        Buku 3    
                    </div>
                    
                    <div class="content__desc-name">
                       <a href="#"><img class="content__desc-circle" src="img/weekly/user-Ellipse.png" alt="circle"></a>
                        <div class="content__desc-theme">
                            Penulis    
                        </div>
                    </div>
                     
                   <div class="content__desc-text">
                        Deskripsi......   
                   </div> 
                   
                   <div class="content__item">
                      
                       <a href="#" class="content__item-money">
                           Kategori
                       </a>                        
                   </div>    
                </div> 
            </div> 

            <div class="content__block mix category-a category-new" data-order="4">
                <img class="content__block_img" src="" alt="">
                <a href="#" class="content__block-img">
                <button class="button-info" type="submit">Info</button>
                <button class="button-demo" type="submit">Pinjam</button>
               </a>
                
                
                <div class="content__desc">
                   
                    <div class="content__desc-title">
                        Buku 1    
                    </div>
                    
                    <div class="content__desc-name">
                       <a href="#"><img class="content__desc-circle" src="img/weekly/user-Ellipse.png" alt="circle"></a>
                        <div class="content__desc-theme">
                            Penulis    
                        </div>
                    </div>
                     
                   <div class="content__desc-text">
                        Deskripsi......   
                   </div> 
                   
                   <div class="content__item">
                      
                       <a href="#" class="content__item-money">
                           Kategori
                       </a>                        
                   </div>    
                </div> 
            </div> 

            <div class="content__block mix category-a category-new" data-order="5">
                <img class="content__block_img" src="" alt="">
                <a href="#" class="content__block-img">
                <button class="button-info" type="submit">Info</button>
                <button class="button-demo" type="submit">Pinjam</button>
               </a>
                
                
                <div class="content__desc">
                   
                    <div class="content__desc-title">
                        Buku 5    
                    </div>
                    
                    <div class="content__desc-name">
                       <a href="#"><img class="content__desc-circle" src="img/weekly/user-Ellipse.png" alt="circle"></a>
                        <div class="content__desc-theme">
                            Penulis    
                        </div>
                    </div>
                     
                   <div class="content__desc-text">
                        Deskripsi......   
                   </div> 
                   
                   <div class="content__item">
                      
                       <a href="#" class="content__item-money">
                           Kategori
                       </a>                        
                   </div>    
                </div> 
            </div> 

            <div class="content__block mix category-a category-new" data-order="6">
                <img class="content__block_img" src="" alt="">
                <a href="#" class="content__block-img">
                <button class="button-info" type="submit">Info</button>
                <button class="button-demo" type="submit">Pinjam</button>
               </a>
                
                
                <div class="content__desc">
                   
                    <div class="content__desc-title">
                        Buku 6
                    </div>
                    
                    <div class="content__desc-name">
                       <a href="#"><img class="content__desc-circle" src="img/weekly/user-Ellipse.png" alt="circle"></a>
                        <div class="content__desc-theme">
                            Penulis    
                        </div>
                    </div>
                     
                   <div class="content__desc-text">
                        Deskripsi......   
                   </div> 
                   
                   <div class="content__item">
                      
                       <a href="#" class="content__item-money">
                           Kategori
                       </a>                        
                   </div>    
                </div> 
            </div> 
          
        </div>  
      </div>
        
    </div>
</section>     -->
    
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
