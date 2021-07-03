<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE COURSE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='index.html'>ONLINE COURSE</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#tutors">Tutors</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#contact">Contact</a></li>    
                    <li><a href="#testi">Testimoni</a></li>    
                                                       
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- banner -->
    
    

    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161" width="100%" height="100%" style="position: relative;"/>
            <div class="kolom">
                <p class="deskripsi">Belajar Programming #dirumahaja</p>
                <h2>Tetap Sehat, Tetap Semangat</h2>
                <p><bold>Sesuai dengan anjuran pemerintah untuk kita tetap berdiam dirumah aja, kalian bisa loh menjadi seorang programmer!</bold></p>
                <br>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">kami hadir sebagai solusi </p>
                <h2>Online Courses</h2>
                <p>Memiliki misi untuk menyediakan dan memperluas akses terhadap pendidikan berkualitas melalui teknologi untuk semua siswa, kapan saja dan di mana saja.

                    <strong> percaya bahwa pendidikan adalah hak setiap manusia.</strong> Kami juga meyakini bahwa <strong> adalah tiket untuk masa depan yang lebih baik.</strong> Maka dari itu, kami bertujuan untuk menyediakan layanan pendidikan dan materi pembelajaran dari guru-guru terbaik Indonesia, yang bisa diakses oleh seluruh siswa di mana saja mereka berada dengan biaya yang terjangkau..</p>
                <br>
                    <p><a href="" class="tbl-biru2">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="https://image.freepik.com/free-vector/webinar-concept-illustration_114360-4764.jpg" height="100%"/>
        </section>

        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <h2>Founders</h2>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="https://krs.umm.ac.id/Poto/2019/201910370311218.JPG"/>
                        <p>Alam Kurnia</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://krs.umm.ac.id/Poto/2019/201910370311207.JPG"/>
                        <p>Azzaynur Fajri</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://krs.umm.ac.id/Poto/2019/201910370311221.JPG"/>
                        <p>Wahyu Indrawan</p>
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <h2>Our Partners</h2>
                    <p>Kami sangat menghargai hubungan yang kami miliki dengan mitra korporat kami. Baik secara aktif berpartisipasi dalam kegiatan pengajaran sekolah atau dengan membantu karier siswa dan lulusan kami, ada banyak cara yang dapat dilakukan oleh mitra perusahaan untuk menjalin hubungan yang saling menguntungkan.</p>
                </div>
            <br>
            <br>
            <br>
            <div class="partner-list">
            <div class="kartu-partner">
                <img src="http://www.umm.ac.id/files/image/Logo%20umm%20ok.png"/>
            </div>
            <div class="kartu-partner">
                <img src="https://www.tuupai.com/assets/Uploads/Slide/_resampled/SetHeight160-logo-media-jawaposcom.jpg"/>
            </div>
            <div class="kartu-partner">
                <img src="http://depopipa.co.id/wp-content/uploads/2016/01/DJARUM.png"/>
            </div>
            <br>
            <br>
            <br>
            <div class="partner-list">
            <div class="kartu-partner">
                <img src="https://pngimg.com/uploads/samsung_logo/samsung_logo_PNG9.png"/>
            </div>
            
            <div class="kartu-partner">
                <img src="https://www.logo.wine/a/logo/Facebook/Facebook-Logo.wine.svg"/>
            </div>

            <div class="kartu-partner">
                <img src="https://www.logo.wine/a/logo/Astra_International/Astra_International-Logo.wine.svg"/>
            </div>
        </div>
        </div>
        </div>
        </section>
        <section id="testi" class="testi section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h4>Testimoni</h4>
          
        </div>

        <ul class="testi-list" data-aos="fade-up" data-aos-delay="100">

		<div class="info-box  mb-4">
		
             @foreach($testimonis as $b)
			 
          <li>
            <a data-toggle="collapse" class="" >{{$b->nama}}</a>
              <p>
                {{$b->asal}}
              </p>

              <p>
                {{$b->isi}}
              </p>
          </li>
		  
        @endforeach
		
        </div>
        

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


        
    </div>

    <div id="contact">
        <div class="wrapper">
            <footer>
                <div class="row">
                    <div class="col-lg-8 col-md-offset-2">
                        
                        
                        <div style="text-align: center;" class="widget-contact row">
                             <div class="col-lg-6">
                            <address>
                              <strong>ONLINE COURSE</strong><br><br>
                              Jl. Tirto Utomo 95, Ds. Landungsari, Kec. Dau
                              Kab. Malang<br>
                              <abbr title="Phone">HP:</abbr> +62812345678
                            </address>
                            </div>
                           
                            <div class="col-lg-6">
                            <address>
                              <strong>Email</strong><br>
                               <a href="mailto:#">kurnialam@webmail.umm.ac.id</a>
                            </address>
                            
                            <p>2021 © OnlineCourse brought to you</p>
                        
                            </div>
            
                        </div>	
                    </div>
            
                </div>
            </footer>
        
        </div>
    </div>
    
</body>
</html>