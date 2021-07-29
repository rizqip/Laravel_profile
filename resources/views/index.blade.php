@extends('layout/main')

@section('title',  'Home')

@section('container')
  <!-- Main -->
  <section class="jumbotron text-center" style="background-color: #85abe7;">
    <img src="storage/app/public/Foto_Bulet.png" alt="Ahmad Rizqi Pratama" width="200" class="img-thumbnail">
    <h1 class="display-4">Ahmad Rizqi Pratama</h1>
    <p class="lead">Junior Software Engineering</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!-- Akhiran Main -->

  <!-- About Me -->
  <section id="about">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-6 ">
        <div class="col-6 text-center">
          <p>good at finding innovations and new ideas, eager to learn new things, enjoy the process of
          learning and developing, challenged to solve problems.
          </p>
        </div>
      </div>
      <div class="row justify-content-center mb-1">
        <div class="col-1"><i class="bi bi-telephone-fill"></i></div>
        <div class="col-4">+62 8581 4786 703</div>
      </div>
      <div class="row justify-content-center mb-1">
        <div class="col-1"><i class="bi bi-envelope-fill"></i></div>
        <div class="col-4">ahmadrizqip10@gmail.com</div>
      </div>
      <div class="row justify-content-center mb-1">
        <div class="col-1"><i class="bi bi-linkedin"></i></div>
        <div class="col-4"><a href="https://www.linkedin.com/in/rizqip20/">www.linkedin.com/in/rizqip20</a>
        </div>
      </div>
      <div class="row justify-content-center mb-1">
        <div class="col-1"><i class="bi bi-house-fill"></i></div>
        <div class="col-4">Perumahan. Sidorahayu Blok C No 45 Rt 31 Rw 07 Sidorahayu, Wagir, Malang, Jawa Timur, 65158</div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#85abe7" fill-opacity="1" d="M0,128L26.7,106.7C53.3,85,107,43,160,42.7C213.3,43,267,85,320,96C373.3,107,427,85,480,74.7C533.3,64,587,64,640,96C693.3,128,747,192,800,202.7C853.3,213,907,171,960,149.3C1013.3,128,1067,128,1120,117.3C1173.3,107,1227,85,1280,80C1333.3,75,1387,85,1413,90.7L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
  </section>
  <!-- Akhir About Me -->

  <!-- Skills -->
  <section id="skill" style="background-color: #85abe7;">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center ">
          <h2>Skills</h2>
        </div>
      </div>
      <div class="row text-center justify-content-center">
        <div class="col-2">Communication</div>
        <div class="col-2">Arduino Development</div>
        <div class="col-2">C/C++</div>
      </div>
      <div class="row text-center justify-content-center">
        <div class="col-2">Orginizing</div>
        <div class="col-2">Android Development</div>
        <div class="col-2">Flutter</div>
      </div>
      <div class="row text-center justify-content-center">
        <div class="col-2">Problem Solving</div>
        <div class="col-2">Website Development</div>
        <div class="col-2">Mysql</div>
      </div>
    </div>
  </section>
  <!-- Akhir Skills -->

  <!-- Education -->
  <section id="education">
    <div class="container">
      <h2>Ini Education</h2>
    </div>
  </section>
  <!-- Akhir Education -->

  <!-- Internship -->
  <section id="internship">
    <div class="container">
      <h2>Ini Internship</h2>
    </div>
  </section>
  <!-- Akhir Internship -->

  <!-- Organization -->
  <section id="organization">
    <div class="container">
      <h2>Ini Organization</h2>
    </div>
  </section>
  <!-- Akhir Organization -->


  <!-- Organization -->
  <section id="social">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Tes Search Data</h2>
        </div>
      </div>

      <!-- Token Klien = 605db572fd44cb41f8ef43db9a2d0703 -->
      <div class="row justify-content-center">
        <div class="col-md-5">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Organization -->

  <!-- Footer -->
  <footer class="bg-primary text-white text-center pb-3">
    <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/rizqip_20/" class="text-white fw-bold">Ahmad Rizqi Pratama</a></p>
  </footer>
  <!-- Akhir Footer -->
@endsection
