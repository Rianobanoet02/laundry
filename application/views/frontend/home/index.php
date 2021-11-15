 <!--==========================
    Intro Section
  ============================-->
  <?= $this->session->flashdata('message'); ?>

 <section id="intro">

     <div class="intro-content">
         <h2>Super <span>Laundry</span><br>pesan sekarang!</h2>
         <div>
             <a href="<?= base_url('home/pesan'); ?>" class="btn-projects scrollto">PESAN</a>
         </div>
     </div>

     <div id="intro-carousel" class="owl-carousel">
         <div class="item" style="background-image: url('<?= base_url('assets/frontend/') ?>img/intro-carousel/laundry.jpg');"></div>
     </div>

 </section><!-- #intro -->

 <main id="main">

     <!--==========================
      Services Section
    ============================-->
     <section id="services">
         <div class="container">
             <div class="section-header">
                 <h2>Services</h2>
             </div>

             <div class="row">
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">NAMA PAKET</th>
                      <th scope="col">HARGA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Cuci Setrika (1/2 Hari)</td>
                      <td>Rp. 25.000/kg</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Cuci Setrika (1 Hari)</td>
                      <td>Rp. 20.000/kg</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Cuci Setrika (2 Hari)</td>
                      <td>Rp. 13.000/kg</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Cuci Setrika (4 Hari)</td>
                      <td>Rp. 10.000/kg</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Cuci Kering Lipat/Setrika Saja(1/2 Hari)</td>
                      <td>Rp. 20.000/kg</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Cuci Kering Lipat/Setrika Saja(1 Hari)</td>
                      <td>Rp. 15.000/kg</td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Cuci Kering Lipat/Setrika Saja(2 Hari)</td>
                      <td>Rp. 10.000/kg</td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Cuci Kering Lipat/Setrika Saja(4 Hari)</td>
                      <td>Rp. 7.000/kg</td>
                    </tr>
                  </tbody>
                </table>


                 <div class="col-lg-6">
                     <div class="box wow fadeInLeft">
                         <div class="icon"><i class="fa fa-motorcycle"></i></div>
                         <h4 class="title"><a href="">ANTAR & JEMPUT</a></h4>
                         <p class="description">Gratis jemput dan antar laundry di depan pintu anda.</p>
                     </div>
                 </div>

                 <div class="col-lg-6">
                     <div class="box wow fadeInRight">
                         <div class="icon"><i class="fa fa-money"></i></div>
                         <h4 class="title"><a href="">HARGA TERJANGKAU</a></h4>
                         <p class="description">Dimulai dari harga Rp.7000, dan banyak lagi.</p>
                     </div>
                 </div>

                 <div class="col-lg-6">
                     <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                         <div class="icon"><i class="fa fa-clock-o"></i></div>
                         <h4 class="title"><a href="">JADWAL FLEKSIBEL</a></h4>
                         <p class="description">Pilih jadwal pesanan sesuka hati anda.</p>
                     </div>
                 </div>

                 <div class="col-lg-6">
                     <div class="box wow fadeInRight" data-wow-delay="0.2s">
                         <div class="icon"><i class="fa fa-certificate"></i></div>
                         <h4 class="title"><a href="">KUALITAS TERBAIK</a></h4>
                         <p class="description">Kami melakukan pengantaran yang terbaik.</p>
                     </div>
                 </div>

             </div>

         </div>
     </section><!-- #services -->

     <!--==========================
      Contact Section
    ============================-->
     <section id="contact" class="wow fadeInUp">
         <div class="container">
             <div class="section-header">
                 <h2>Contact Us</h2>
                 <p>Super Laundry.</p>
             </div>

             <div class="row contact-info">

                 <div class="col-lg-6">
                     <div class="contact-address">
                         <i class="ion-ios-location-outline"></i>
                         <h3>Alamat</h3>
                         <p><a href="https://www.google.com/maps/place/Super+Laundry+Kupang/@-10.20307,123.627345,15z/data=!4m12!1m6!3m5!1s0x0:0xe9c38417d3799310!2sSuper+Laundry+Kupang!8m2!3d-10.20307!4d123.627345!3m4!1s0x0:0xe9c38417d3799310!8m2!3d-10.20307!4d123.627345">Perumahan BTN-Kolhua Blok X1 No.33, Kolhua, Maulafa Kupang</a></p>
                     </div>
                 </div>

                    <div class="col-lg-6">
                     <div class="contact-phone">
                         <i class="fa fa-whatsapp"></i>
                         <h3>Nomor Telepon</h3>
                         <a href="https://api.whatsapp.com/send?phone=+62852 3800 4653&text=Hai., Super Laundry!!">0852-3800-4653</a>
                     </div>
                 </div>

                 <!--<div class="col-md-4">
                     <div class="contact-email">
                         <i class="ion-ios-email-outline"></i>
                         <h3>Email</h3>
                         <p><a href="mailto:info@example.com">superlaundry@gmail.com</a></p>
                     </div>
                 </div>-->

             </div>
         </div>
     </section><!-- #contact -->

 </main>