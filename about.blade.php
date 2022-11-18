@extends('contact')
@section ('main')
<link rel="stylesheet" href={{ asset('css/style.css')}}>
<div class="row">
    <div class="container">
        <header class="d-flex flex-wrap py-3 mb-4 border-bottom" style="background-color: #B6E2A1;">
            <ul class="navbar-nav">
                <li class="nav-item" style="font-size: 20px; margin-left:20px;">Simple Siakad</li>
            </ul>

            <ul class="nav nav-pills ml-auto" style="margin-right: 10px;">
                <li class="nav-item"><a href="/" class="nav-link" style="color: black;">Data Mahasiswa</a></li>
                <li class="nav-item"><a href=" {{url('contacts/create')}}" class="nav-link" style="color: black;">Input Data</a></li>
                <li class="nav-item"><a href="/about" class="btn btn-success active">About Me</a></li>
            </ul>
        </header>

    </div>
    <div class=" col-md-12 " style=" margin-top: 50px; color:#557153;">
        <h2> About Me</h2>
        <center>
            <div class="card mt-4 border-0" style="width: 700px; text-align:center;  ">
                <img src={{ asset('img/ft.jpg')}} class="rounded mx-auto d-block" alt="..." width="150">
                <h3 style="margin-top: 10px;">Dinah Nuraini</h3>
            </div>
        </center>
    </div>
    <div class="col-md-12 " style="margin-top: 50px;">
        <h2 style="color:#557153;"> Background</h2>
        <p style="text-align: justify;"> Haii, Perkenalkan Namaku Dinah Nuraini. Kalo di Rumah biasanya di panggil "INA". gatau kenapa kok di panggil Ina wkwk. Saya lahir
            di Tanggal 29 September 2002 di jam 8 malam. Saaya Berasal dari kota Pecel, Pesilat, Gadis yaitu Madiun. Saya anak kedua dari 4 saudara.
            Saya dulu sekolah RA Baitul Hikmah, lalu melanjutkan di SDN Mojorayung 02
            lalu ke MTsN 12 Madiun dan ke SMK Khoiriyah Hasyim Tebuireng Jombang. Kenapa sih kok milih UTM? Karena dulu waktu cari - cari kuliah passing grade tertinggi ( peluang terbanyak)
            adalah di Universitas Trunojoyo Madura </p>
    </div>
    <div class="col-md-12 " style="margin-top: 50px;">
        <h2 style="color:#557153;"> Suka Duka Praktikum PAW</h2>
        <p style="text-align: justify;"> Haii, Kakak - kakak Asprak PAW terimakasih yaa telah mengajari kami. Mohon maaf jika ada salah dari Saya.
            Mau bilang kalo praktikumnya kemalaman :( . Semoga kakak - kakak sehat selalu aamiin menjadi anak perantauan tentunya harus bisa beradaptasi
            dengan lingkungan sekitar, apalagi kita jauh dari orang tua, seperti halnya soal makanan yang dimana kalau kita dirumah bangun tidur sudah ada makanan yang tersedia sedangkan kalau
            kita di kosan mau makan harus beli atau masak terlebih dahulu. Ada lagi kalau waktu praktikum hujan lebat maka rasa ingin berangkat jadi berkurang haha alias mager. Enak kalo praktikumnya online </p>
    </div>
</div>

@endsection