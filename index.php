<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/11496/11496733.png" type="image/png">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          backgroundImage: {
            bg_main: "url('asset/Background.svg')",
            bg_cta: "url('asset/cta.svg')",
            bg_service: "url('asset/services/banner.svg')",
            bg_bot: "url('asset/services/bot-service.svg')",
            bg_blog: "url('asset/blog/bg2.svg')",
            bg_team: "url('asset/team/Team.svg')",
            bg_Contact: "url('asset/contactUs.svg')",
            bg_login: "url('asset/Banner.jpg')"
          },
          fontFamily: {
            Inter: "'Inter', sans-serif",
            Lato: "'Lato', sans-serif",
            Montserrat: "'Montserrat', sans-serif",
          },
          colors: {
            primary: "#0152A8",
            green: "#0fe3af",
            greyy: "#F1F1F1",
          },
          textColor: {
            header1: "#143450",
            header2: "#1C1C1C",
          },
        }
      }
    }
  </script>
  <style>
    * {
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
    }
  </style>
    <title>HiDoc</title>
</head>
<body class="m-0 p-0"> 
     <section
      class="w-full h-[3.8rem] bg-primary items-center flex px-[17%] justify-between font-normal" id="main"
    >
      <div>
        <p class="font-Inter text-white">
        Selamat datang di Pharma. Kami menyediakan layanan medis
        </p>
      </div>
      <div class="flex flex-row items-center gap-3">
        <div>
          <img
            src="asset/phone.svg"
            alt="telephone"
            height="34px"
            width="34px"
          />
        </div>
        <div>
          <p class="font-Inter text-white">
            <a href="https://wa.me/081338064094">0813-3806-4094</a>
          </p>
        </div>
      </div>
      <!-- <div class="w-[8rem] h-[2.5rem] rounded-lg font-Inter text-base cursor-pointer pt-[0.4rem] text-white text-center justify-center border border-white hover:bg-white hover:text-black">
        <p>Login</p>
      </div> -->
    </section>
    <section
      class="flex px-[17%] justify-between py-10 items-center text-black"
    >
      <div class="flex gap-2">
        <div>
          <a href="#main"
            ><img
              src="asset/Icon.svg"
              alt="icon"
              height="34px"
              width="34px"
          /></a>
        </div>
        <div class="font-Inter font-semibold text-3xl">
          <p><a href="#main">Pharma</a></p>
        </div>
      </div>
      <div>
        <ul class="flex gap-10 w-max text-lg">
          <li class="hover:text-primary cursor-pointer">
            <a href="#main">Beranda</a>
          </li>
          <li class="hover:text-primary cursor-pointer">
            <a href="#about">Tentang Kami</a>
          </li>
          <li class="hover:text-primary cursor-pointer">
            <a href="#services">Layanan</a>
          </li>
          <li
            @click.away="open = false"
            class="relative"
            x-data="{ open: false }"
          >
            <button
              @click="open = !open"
              class="flex flex-row items-center w-full text-left md:w-auto md:inline md:mt-0 md:ml-4 hover:text-primary focus:text-primary focus:outline-none focus:shadow-outline"
            >
              <span>Halaman</span>
              <svg
                fill="currentColor"
                viewBox="0 0 20 20"
                :class="{'rotate-180': open, 'rotate-0': !open}"
                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <div
              x-show="open"
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
            >
              <div
                class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800"
              >
                <a
                  class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="#blog"
                  >Blog</a
                >
                <a
                  class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="#team"
                  >Tim Kami</a
                >
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <button
          class="w-[11.75rem] h-[3.8rem] bg-slate-400 font-semibold text-lg hover:bg-slate-300 text-white tracking-[0.1rem] rounded-full"
        >
          <a href="pages/login.php">Login</a>
        </button>
      </div>
    </section>
    <section class="px-[3rem]">
        <div class="bg-bg_main b w-full bg-cover bg-center">
            <div class="py-[9rem] px-[12.8%]">
            <!-- <div class="py-[11.3rem] pl-[12.8%] pr-[42%]"> -->
                <div class="py-2 w-[22.1rem] bg-green font-Lato tracking-[0.4rem] text-lg text-center items-center">
                    <p>PROFESIONAL MEDIS</p>
                </div>
                <div class="font-bold text-[50px] text-header1">
                    <p">Kesehatan Anda Jadi<br>Kunci Kepuasan<br>Bagi Kami</p>
                </div>
                <div class="font-normal text-base text-header2">
                    <p>Tim kami terdiri dari para profesional terlatih menggunakan <br> teknologi penyembuhan terbaru untuk memulihkan kesehatan  <br> Anda tanpa rasa sakit dengan cepat dan mudah.</p>
                </div>
                <div class="mt-7">
                    <button class="w-[11.75rem] h-[3.8rem] bg-primary font-normal text-base text-white hover:bg-blue-700">
                        <a href="#about">Memulai</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flex justify-center font-bold text-3xl w-full my-[2.5rem] font-Lato text-header2">
            <p>Persembahan Kami</p>
        </div>
        <div class="flex w-full justify-around px-[12%]">
            <img src="asset/services/1.svg" width="130px" height="32px">
            <img src="asset/services/2.svg" width="130px" height="32px">
            <img src="asset/services/3.svg" width="130px" height="32px">
            <img src="asset/services/4.svg" width="130px" height="32px">
            <img src="asset/services/5.svg" width="130px" height="32px">
        </div>
    </section>
    <section class="px-[15%] py-[4.5rem]">
        <div class="bg-bg_cta w-full bg-cover bg-center flex flex-col justify-center text-center font-Inter py-20">
            <div>
                <p class="text-white font-semibold text-3xl">Jadwalkan janji pertemuan <br> virtual hari ini</p>
            </div>
            <div>
                <button class="w-[11.75rem] h-[3.8rem] bg-green font-semibold text-[14px] text-header2 mt-5 hover:bg-emerald-300 rounded-[50px]">
                    <a href="pages/login.php">Pesan janji temu</a>
                </button>
            </div>
        </div>
    </section>
    <section class="flex-col text-center justify-center">
        <div class="flex justify-center" >
            <p class="font-Lato font-normal tracking-[0.4rem] border border-solid border-gray-400 w-42 h-7 flex justify-center items-center pl-2">MASUKAN PELANGGAN</p>
        </div>
        <div class="pb-12 pt-6">
            <p class="font-Montserrat font-semibold text-3xl ">Masukan tentang layanan kami <br> dari lubuk hati</p>
        </div>
    </section>
    <section class="flex justify-center px-[15%] pb-32">
        
        <div class="grid grid-cols-2 gap-6">
            <div>
                <img src="asset/testimonial/1.svg">
            </div>
            <div>
                <img src="asset/testimonial/2.svg" ">
            </div>
            <div>
                <img src="asset/testimonial/3.svg" ">
            </div>
            <div>
                <img src="asset/testimonial/4.svg" ">
            </div>
        </div>
    </section>

    <section class="bg-primary py-[7%] px-[15%]">
            <div id="Medical" class="w-full h-full mb-16 flex justify-between">
                    <div>
                        <p class="mb-3 border-2 border-white border-opacity-30 font-Lato font-medium text-base text-white tracking-[0.8rem] pl-7">AHLI MEDIS</p>
                        <div class="font-Montserrat font-semibold text-3xl text-white">Dokter Profesional</div>
                    </div>

              
                    <div>
                        <button class="mt-[7px] font-Inter font-meidum text-base bg-green hover:bg-emerald-300 text-primary p-5"><a href="#team">Lihat Semua Dokter</a></button>
                    </div>
  
                
            </div>
                  <!-- Foto -->
            <div class="flex justify-between gap-5 mb-16">
                <div>
                    <img src="asset/team/1.svg">
                </div>
                <div>
                    <img src="asset/team/2.svg">
                </div>
                <div>
                    <img src="asset/team/3.svg">
                </div>
            </div>

            <!-- garis -->

            <div class="py-[0.5px] rounded bg-white bg-opacity-70 px-[15%] mb-12"></div>
            <div class="py-[0.5px] rounded bg-white bg-opacity-20 px-[15%] mb-12"></div>
    
            <!-- angka -->
            <div class="flex text-center justify-center">
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">25</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">TAHUN</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">PENGALAMAN</p>
                </div>
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">893</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">OBAT</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">TERSEDIA</p>
                </div>
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">75</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">MENANG</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">PENGHARGAAN</p>
                </div>
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">673k</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">KLIEN</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem] ">SENANG</p>
                </div>
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">751</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">MITRA</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">FARMASI</p>
                </div>
            </div>
    </div> 

    </section>

    <!-- ABOUT -->

    <section class="px-[3rem] py-24" id="about">
      <div>
        <img src="asset/about/banner.svg">
      </div>
    </section>
    <section class="flex-col text-center justify-center py-20 -mt-32">
      <div class="flex justify-center">
        <p class="font-Montserrat font-bold text-3xl">
        Tim kami membantu Anda kembali <br >ke jalur hidup yang lebih baik
        </p>
      </div>
      <div class="flex justify-center">
        <p class="font-Lato font-extralight text-base text-gray-500 py-4">
        Tim profesional kami yang sangat terlatih menggunakan teknologi penyembuhan terkini untuk mengembalikan <br> Anda ke kesehatan tanpa rasa sakit dengan cepat dan mudah. Kami secara menyeluruh mengevaluasi dan mengobati semua <br> faktor akar yang berkontribusi terkait dengan masalah Anda. Termasuk, namun tidak terbatas pada, stres di tempat kerja dan rumah.
        </p>
      </div>
    </section>
    <section>
      <div class="flex justify-center px-[15%] -mt-12">
        <img src="asset/about/Image.svg">
      </div>
    </section>
    <section class="py-10 flex gap-20 px-[15%]">
      <div>
        <div class="mb-5">
          <p class="font-Lato font-normal text-sm tracking-[0.3rem] border border-solid border-gray-300 w-48 h-7 flex justify-center items-center pl-2">PARA PEMIMPIN</p>
        </div>
        <div class="mb-5">
          <p class="font-Montserrat font-semibold text-3xl tracking-[0.1rem]">Kami memiliki Dokter<br> dan Farmasi Terbaik</p>
        </div>
        <div class="font-Lato font-medium text-base text-gray-600">
          <p>Collaboratively administrate empowered markets via plug-and- <br> play networks. users after installed base benefits. Dramatically <br> visualize customer.</p>
          <br>
          <p>Completely synergize resource taxing relationships via premier <br> niche markets. Professionally cultivate one-to-one customer <br> service with robust ideas. Dynamically innovate.</p>
        </div>
      </div>
      <div>
        <div class="mb-5">
          <p class="font-Lato font-normal text-sm tracking-[0.3rem] border border-solid border-gray-300 w-44 h-7 flex justify-center items-center pl-2">PERJALANAN KAMI</p>
        </div>
        <div class="mb-5">
          <p class="font-Montserrat font-semibold text-3xl tracking-[0.1rem]">Our mission is to help patient <br> live better.</p>
        </div>
        <div class="font-Lato font-medium text-base text-gray-600">
          <p>Collaboratively administrate empowered markets via plug-and- <br> play networks. users after installed base benefits. Dramatically  <br> visualize customer.
          </p>
          <br>
          <p class="mb-5">• Over 400 leading hospitals and clinics
          </p>
          <p class="mb-5">• Trusted doctors across 20+ specialties
          </p>
          <p>• Award-winning practice management
          </p>
        </div>
      </div>
    </section>
    <section class="py-5 px-[15%] flex justify-center text-center flex-col">
      <div class="">
        <p class="font-Montserrat font-bold text-4xl mb-5">Our values the drive success</p>
      </div>
      <div>
        <p class="font-Lato font-medium text-base text-gray-500">Our team of highly trained professionals uses the latest healing technologies to restore you to pain-free health quickly and easily. <br>We thoroughly evaluate & treat all of the contributing root factors  related to your issue. Includes, but is not limit, your work and home stressors.</p>
      </div>
    </section>
    <section class="px-[15%] py-5 flex flex-row gap-10">
      <div class="border-2 border-solid text-center h-[20rem] w-[16rem] items-center pt-7">
        <div class="flex justify-center h-36 mb-2">
          <img src="asset/about/1.svg">
        </div>
        <div>
          <p class="font-Montserrat font-semibold text-xl mb-2">Bio Tecnology</p>
        </div>
        <div>
          <p class="font-Lato font-medium text-base text-gray-500">Our team of highly trained <br> professionals uses the latest <br> healing technologies.</p>
        </div>
      </div>
      <div class="border-2 border-solid text-center h-[20rem] w-[16rem] items-center pt-7">
        <div class="flex justify-center h-36 mb-2">
          <img src="asset/about/2.svg">
        </div>
        <div>
          <p class="font-Montserrat font-semibold text-xl mb-2">Vaccine</p>
        </div>
        <div>
          <p class="font-Lato font-medium text-base text-gray-500">Our team of highly trained <br> professionals uses the latest <br> healing technologies.</p>
        </div>
      </div>
      <div class="border-2 border-solid text-center h-[20rem] w-[16rem] items-center pt-7">
        <div class="flex justify-center h-36 mb-2">
          <img src="asset/about/3.svg">
        </div>
        <div>
          <p class="font-Montserrat font-semibold text-xl mb-2">Latest Tecnology</p>
        </div>
        <div>
          <p class="font-Lato font-medium text-base text-gray-500">Our team of highly trained <br> professionals uses the latest <br> healing technologies.</p>
        </div>
      </div>
      <div class="border-2 border-solid text-center h-[20rem] w-[16rem] items-center pt-7">
        <div class="flex justify-center h-36 mb-2">
          <img src="asset/about/4.svg">
        </div>
        <div>
          <p class="font-Montserrat font-semibold text-xl mb-2">Expert Doctors</p>
        </div>
        <div>
          <p class="font-Lato font-medium text-base text-gray-500">Our team of highly trained <br> professionals uses the latest <br> healing technologies.</p>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section class="pt-20 px-[3rem] mb-[8.74rem]" id="services">
      <div
        class="bg-bg_service bg-cover flex items-center justify-center text-center"
      >
        <div class="py-[6.7rem] px-[12.8%]">
          <p class="text-black font-Montserrat font-bold text-4xl">
            Our Services
          </p>
        </div>
      </div>
    </section>
    <section
      class="px-[10%] flex mb-[7.25rem] gap-5 flex-col justify-center items-center -mt-24"
    >
      <div class="flex gap-5">
        <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
          <img
            class="mb-[1rem]"
            src="asset/services/angioplasty.svg"
            alt="angioplasty"
            width="54"
            height="54"
          />
          <div class="flex flex-col gap-[0.7rem]">
            <p class="font-Montserrat text-xl font-semibold">Angioplasty</p>
            <p class="font-Lato text-base text-[#545454]">
              Our team of highl professionals <br />
              uses the latest heal echnologies <br />
              health quickly and easily.
            </p>
          </div>
          <div class="flex mt-[0.7rem] items-center gap-2">
            <div>
              <p class="font-Inter font-medium">Read More</p>
            </div>
            <div
              class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
            >
              <i class="fa-solid fa-plus" style="color: #ffffff"></i>
            </div>
          </div>
        </div>
        <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
          <img
            class="mb-[1rem]"
            src="asset/services/cardiology.svg"
            alt="cardiology"
            width="54"
            height="54"
          />
          <div class="flex flex-col gap-[0.7rem]">
            <p class="font-Montserrat text-xl font-semibold">Cardiology</p>
            <p class="font-Lato text-base text-[#545454]">
              Our team of highl professionals <br />
              uses the latest heal echnologies <br />
              health quickly and easily.
            </p>
          </div>
          <div class="flex mt-[0.7rem] items-center gap-2">
            <div>
              <p class="font-Inter font-medium">Read More</p>
            </div>
            <div
              class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
            >
              <i class="fa-solid fa-plus" style="color: #ffffff"></i>
            </div>
          </div>
        </div>

        <div class="flex">
          <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
            <img
              class="mb-[1rem]"
              src="asset/services/dental.svg"
              alt="dental"
              width="54"
              height="54"
            />
            <div class="flex flex-col gap-[0.7rem]">
              <p class="font-Montserrat text-xl font-semibold">Dental</p>
              <p class="font-Lato text-base text-[#545454]">
                Our team of highl professionals <br />
                uses the latest heal echnologies <br />
                health quickly and easily.
              </p>
            </div>
            <div class="flex mt-[0.7rem] items-center gap-2">
              <div>
                <p class="font-Inter font-medium">Read More</p>
              </div>
              <div
                class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
              >
                <i class="fa-solid fa-plus" style="color: #ffffff"></i>
              </div>
            </div>
          </div>
          <div class="w-[19.2rem] h-auto">
            <img
              class="w-full h-full object-cover"
              src="asset/services/readDoc.svg"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="flex gap-5">
        <div class="flex">
          <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
            <img
              class="mb-[1rem]"
              src="asset/services/eyecare.svg"
              alt="eyecare"
              width="54"
              height="54"
            />
            <div class="flex flex-col gap-[0.7rem]">
              <p class="font-Montserrat text-xl font-semibold">Eye Care</p>
              <p class="font-Lato text-base text-[#545454]">
                Our team of highl professionals <br />
                uses the latest heal echnologies <br />
                health quickly and easily.
              </p>
            </div>
            <div class="flex mt-[0.7rem] items-center gap-2">
              <div>
                <p class="font-Inter font-medium">Read More</p>
              </div>
              <div
                class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
              >
                <i class="fa-solid fa-plus" style="color: #ffffff"></i>
              </div>
            </div>
          </div>
          <div class="w-[19.2rem] h-full">
            <img
              class="w-full h-full object-cover"
              src="asset/services/dokter.svg"
              alt=""
            />
          </div>
        </div>
        <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
          <img
            class="mb-[1rem]"
            src="asset/services/endocrynology.svg"
            alt="angioplasty"
            width="54"
            height="54"
          />
          <div class="flex flex-col gap-[0.7rem]">
            <p class="font-Montserrat text-xl font-semibold">Endocrinology</p>
            <p class="font-Lato text-base text-[#545454]">
              Our team of highl professionals <br />
              uses the latest heal echnologies <br />
              health quickly and easily.
            </p>
          </div>
          <div class="flex mt-[0.7rem] items-center gap-2">
            <div>
              <p class="font-Inter font-medium">Read More</p>
            </div>
            <div
              class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
            >
              <i class="fa-solid fa-plus" style="color: #ffffff"></i>
            </div>
          </div>
        </div>
        <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
          <img
            class="mb-[1rem]"
            src="asset/services/suntik.svg"
            alt="angioplasty"
            width="54"
            height="54"
          />
          <div class="flex flex-col gap-[0.7rem]">
            <p class="font-Montserrat text-xl font-semibold">Orthopaedics</p>
            <p class="font-Lato text-base text-[#545454]">
              Our team of highl professionals <br />
              uses the latest heal echnologies <br />
              health quickly and easily.
            </p>
          </div>
          <div class="flex mt-[0.7rem] items-center gap-2">
            <div>
              <p class="font-Inter font-medium">Read More</p>
            </div>
            <div
              class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
            >
              <i class="fa-solid fa-plus" style="color: #ffffff"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="px-[17%] py-4 w-full">
      <div
        class="bg-bg_bot bg-cover bg-center w-full justify-center items-center py-[10.75rem] flex"
      >
        <div
          class="flex flex-col bg-[#F8F9F8] bg-opacity-75 w-max text-center px-8 py-12 justify-center items-center"
        >
          <div
            class="px-[9px] py-[3px] border-solid border-[1px] w-max mb-[13px] font-Lato tracking-widest border-[#CECECE]"
          >
            <p>TIME</p>
          </div>
          <div class="flex flex-col gap-1">
            <p class="font-semibold font-Montserrat text-3xl">WORKING HOURS</p>
            <p class="text-[#545454] text-base">
              Sunday To Friday 9.00 am - 10.00 pm <br />
              Saturday Closed
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- BLOG -->
    <section class="py-10 px-[3rem] mb-[8.74rem]" id="blog">
      <div
        class="bg-bg_blog bg-cover bg-center flex items-center justify-center text-center"
      >
        <div class="py-[6.7rem] px-[12.8%]">
          <p class="text-black font-Montserrat font-bold text-4xl">Blog</p>
        </div>
      </div>
    </section>

    <section
      class="flex justify-center items-center flex-wrap w-full px-[13%] gap-x-5 gap-y-12 -mt-32"
    >
      <div class="flex flex-col gap-4">
        <div class="w-[20.8rem] h-[11.63rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/blog/blog1.svg"
            alt="lab"
          />
        </div>
        <div class="flex flex-col gap-2">
          <div
            class="border-solid border-[1px] border-[#CECECE] px-[0.8rem] py-[0.21rem] w-max"
          >
            <p class="font-Lato tracking-[0.36rem] text-sm leading-5">
              18 August 2023
            </p>
          </div>
          <p class="font-Montserrat text-xl font-semibold leading-[1.625rem]">
            Open letter to the residents of <br />
            Ellsworth, Maine
          </p>
          <p
            class="text-primary font-Inter text-base cursor-pointer font-medium"
          >
            Read more
          </p>
        </div>
      </div>

      <div class="flex flex-col gap-4">
        <div class="w-[20.8rem] h-[11.63rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/blog/blog2.svg"
            alt="lab"
          />
        </div>
        <div class="flex flex-col gap-2">
          <div
            class="border-solid border-[1px] border-[#CECECE] px-[0.8rem] py-[0.21rem] w-max"
          >
            <p class="font-Lato tracking-[0.36rem] text-sm leading-5">
              21 July 2023
            </p>
          </div>
          <p class="font-Montserrat text-xl font-semibold leading-[1.625rem]">
            What is a normal phenotype for <br />
            aging mice?
          </p>
          <p
            class="text-primary font-Inter text-base cursor-pointer font-medium"
          >
            Read more
          </p>
        </div>
      </div>

      <div class="flex flex-col gap-4">
        <div class="w-[20.8rem] h-[11.63rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/blog/blog3.svg"
            alt="lab"
          />
        </div>
        <div class="flex flex-col gap-2">
          <div
            class="border-solid border-[1px] border-[#CECECE] px-[0.8rem] py-[0.21rem] w-max"
          >
            <p class="font-Lato tracking-[0.36rem] text-sm leading-5">
              15 January 2023
            </p>
          </div>
          <p class="font-Montserrat text-xl font-semibold leading-[1.625rem]">
            It was popularised inner the <br />
            with the release of containing.
          </p>
          <p
            class="text-primary font-Inter text-base cursor-pointer font-medium"
          >
            Read more
          </p>
        </div>
      </div>

      <div class="flex flex-col gap-4">
        <div class="w-[20.8rem] h-[11.63rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/blog/blog4.svg"
            alt="lab"
          />
        </div>
        <div class="flex flex-col gap-2">
          <div
            class="border-solid border-[1px] border-[#CECECE] px-[0.8rem] py-[0.21rem] w-max"
          >
            <p class="font-Lato tracking-[0.36rem] text-sm leading-5">
              22 fEBRUARY 2023
            </p>
          </div>
          <p class="font-Montserrat text-xl font-semibold leading-[1.625rem]">
            The Best Way to Ensure Dental <br />
            Health for Your Child.
          </p>
          <p
            class="text-primary font-Inter text-base cursor-pointer font-medium"
          >
            Read more
          </p>
        </div>
      </div>

      <div class="flex flex-col gap-4">
        <div class="w-[20.8rem] h-[11.63rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/blog/blog5.svg"
            alt="lab"
          />
        </div>
        <div class="flex flex-col gap-2">
          <div
            class="border-solid border-[1px] border-[#CECECE] px-[0.8rem] py-[0.21rem] w-max"
          >
            <p class="font-Lato tracking-[0.36rem] text-sm leading-5">
              18 June 2023
            </p>
          </div>
          <p class="font-Montserrat text-xl font-semibold leading-[1.625rem]">
            Find the Right Pediatric Dentist <br />
            for Your Children's smile
          </p>
          <p
            class="text-primary font-Inter text-base cursor-pointer font-medium"
          >
            Read more
          </p>
        </div>
      </div>

      <div class="flex flex-col gap-4">
        <div class="w-[20.8rem] h-[11.63rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/blog/blog6.svg"
            alt="lab"
          />
        </div>
        <div class="flex flex-col gap-2">
          <div
            class="border-solid border-[1px] border-[#CECECE] px-[0.8rem] py-[0.21rem] w-max"
          >
            <p class="font-Lato tracking-[0.36rem] text-sm leading-5">
              25 March 2023
            </p>
          </div>
          <p class="font-Montserrat text-xl font-semibold leading-[1.625rem]">
            For Examination Of Kids Get <br />
            Special Offers
          </p>
          <p
            class="text-primary font-Inter text-base cursor-pointer font-medium"
          >
            Read more
          </p>
        </div>
      </div>
    </section>


    <!-- TEAM -->
    <section class="py-28 px-[3rem] mb-[8.74rem]" id="team">
      <div
        class="bg-bg_team bg-cover bg-center flex items-center justify-center text-center"
      >
        <div class="py-[6.7rem] px-[12.8%]">
          <p class="text-black font-Montserrat font-bold text-4xl">
            The Doctorate Crew
          </p>
        </div>
      </div>
    </section>

    <section
      class="flex justify-center items-center flex-wrap w-full px-[16%] gap-[3rem] -mt-32"
    >
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/team/doctor1.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Vanseena Adams</p>
          <p class="text-[#545454] text-base">Staff Nurse</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/team/doctor2.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Helen Wilmore</p>
          <p class="text-[#545454] text-base">Surgery Expert</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/team/doctor3.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Kate Winslot</p>
          <p class="text-[#545454] text-base">Dental Specialist</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/team/doctor4.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Sonia Cameron</p>
          <p class="text-[#545454] text-base">Dermatologist</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/team/doctor5.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Lily Smith</p>
          <p class="text-[#545454] text-base">Ophthalmologist</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="asset/team/doctor 6.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Lily Smith</p>
          <p class="text-[#545454] text-base">Pulmonologist</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
    </section>

    <section class="w-full mt-[8.3rem] mb-6 flex ">
      <div
        class="bg-primary py-[9.3rem] flex flex-col justify-end w-[50%] pl-[16%]"
      >
        <div
          class="p-1 border-solid border-[#CECECE] border-[1px] justify-end items-center w-max mb-4 -ml-24"
        >
          <p
            class="font-Lato tracking-[0.3rem] leading-5 text-white text-sm flex justify-end "
          >
            <a href="#appointment">Book An Appoinment</a>
          </p>
        </div>
        <div class="mb-7 flex -ml-24">
          <p class="font-Montserrat text-[2.55rem] text-white font-semibold">
            Our Medical Team is <br />
            Ready to Help You.
          </p>
        </div>
        <div class="flex flex-row gap-3 -ml-24">
          <div
            class="bg-green px-[1.2rem] py-4 font-medium text-sm text-center  cursor-pointer"
          >
            <p class="text-black font-medium"><a href="pages/login.php">Book An Appointment</a></p>
          </div>
          <p class="text-white flex justify-center items-center font-medium">
            (OR)
          </p>
          <div class="bg-white px-[1.2rem] py-4 text-center  cursor-pointer">
            <p class="text-black font-medium"><a href="https://wa.me/081338064094">Call: (+62) 813 - 3806 - 4094</a></p>
          </div>
        </div>
      </div>
      <div class="flex w-[50%]">
        <img
          class="w-full h-full object-cover"
          src="asset/team/sidecontent.svg"
          alt="sdcnt"
        />
      </div>
    </section>
    
    <!-- Footer -->

    <section class="px-[3rem] py-[7.37rem] bg-[#FFFFFF]">
      <div class="bg-[#E5F2EF] px-[12.8%] flex flex-col py-[5.92rem]">
        <div class="wrapper 1 flex w-full justify-between">
          <div class="flex gap-2 pharma">
            <div>
              <img
                src="asset/Icon.svg"
                alt="icon"
                height="34px"
                width="34px"
              />
            </div>
            <div class="font-Inter font-semibold text-3xl">
              <p>Pharma</p>
            </div>
          </div>

          <div class="flex gap-[3.31rem]">
            <div class="flex gap-2 items-center cursor-pointer">
              <img src="asset/footer/phone.svg" />

              <p><a href="https://wa.me/081338064094">(+64) 813 - 3806 - 4094</a></p>
            </div>

            <div class="flex gap-2 items-center cursor-pointer">
              <img src="asset/footer/email.svg" />
              <p>support@doctorate.com</p>
            </div>

            <div class="flex gap-[1.625rem] items-center">
              <img src="asset/footer/ig.svg" class="cursor-pointer" />
              <img src="asset/footer/fb.svg" class="cursor-pointer" />
              <img
                src="asset/footer/twitter.svg"
                class="cursor-pointer"
              />
            </div>
          </div>
        </div>
        <div class="flex justify-between mt-[3.94rem]">
          <div>
            <p
              class="font-Montserrat font-semibold leading-[2.6rem] text-3xl text-[#1C1C1C]"
            >
              “A Simple Story About <br />The Doctorate Medical <br />Center &
              Health Care <br />Foundation"
            </p>
          </div>
          <div>
            <p
              class="text-xl font-semibold font-Montserrat text-[#1C1C1C] mb-[0.88rem]"
            >
              Explore
            </p>
            <ul class="text-base flex flex-col gap-2 text-[#545454] font-Lato">
              <li class="cursor-pointer hover:text-primary"><a href="#main">Home</a></li>
              <li class="cursor-pointer hover:text-primary"><a href="#services">Services</a></li>
              <li class="cursor-pointer hover:text-primary"><a href="#about">About us</a></li>
              <li class="cursor-pointer hover:text-primary"><a href="#services">News</a></li>
            </ul>
          </div>
          <div>
            <p
              class="text-xl font-semibold font-Montserrat text-[#1C1C1C] mb-[0.88rem]"
            >
              Administrator
            </p>
            <ul class="text-base gap-2 flex flex-col text-[#545454] font-Lato">
              <li class="cursor-pointer hover:text-primary"><a href="pages/login.php">Login</a></li>
              <li class="cursor-pointer hover:text-primary">404 Page</li>
            </ul>
          </div>
          <div class="flex gap-[1rem] flex-col">
            <p class="text-xl font-semibold font-Montserrat text-[#1C1C1C]">
              Book an appointment
            </p>
            <p class="text-base gap-2 flex flex-col text-[#545454] font-Lato">
              It is a long established fact that a reader will <br />be
              distracted
            </p>
            <div>
              <form action="#appointment" method="post">
                <input
                  type="text"
                  placeholder="Your Email Address"
                  class="px-[1.57rem] py-[1.06rem] w-[20.356rem] h-[3.75rem] items-center flex mb-5"
                  id="email_address_footer"
                  name="email_address_footer"
                />
                <button
                class="px-[2.6rem] py-[1.06rem] bg-primary w-[8.6rem] h-auto text-[#FFFFFF] hover:bg-blue-700"
                >
                Submit
              </button>
            </form>
          </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script
  src="https://kit.fontawesome.com/a205dbd027.js"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
  defer
></script>