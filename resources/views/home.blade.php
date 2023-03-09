@php
    $Sponsor1 = 'assets/img/sponsor1.svg';
    $Speaker1 = 'assets/img/speaker1.svg';
    $Speaker2 = 'assets/img/speaker2.svg';
    $Speaker3 = 'assets/img/speaker3.svg';
    $Speaker4 = 'assets/img/speaker4.svg';
    $Speaker5 = 'assets/img/speaker5.svg';
    $Speaker6 = 'assets/img/speaker6.svg';
    $Speaker7 = 'assets/img/speaker7.svg';
    $Speaker8 = 'assets/img/speaker8.svg';
    $Speaker9 = 'assets/img/speaker9.svg';
    $Agenda = 'assets/img/agenda.svg';
    $NavbarIcon = 'assets/img/img_navbar.svg';
    $FooterLogo = 'assets/img/logofooter.svg';
    $Background = 'assets/img/bg.svg';
    $Pin = 'assets/img/pin.svg';
    $Hero = 'assets/img/hero.svg';
@endphp

<!DOCTYPE html>
<html>
<head>
  <title>Tailwind CDN Example</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
            extend: {
                backgroundImage: {
                    gradientradial: 'radial-gradient(var(--tw-gradient-stops))',
                },
                colors: {
                    primary: '#3D2874',
                    secondary: '#E2FF56',
                    cyanest : '#4EF1E0',
                    darkest : '#090116'
                }
            },
            fontFamily: {
            sans: ['Poppins'],
            space: ['Space Grotesk']
            }
        },
    }
  </script>
</head>
<body>
    <nav class="bg-[#3D2874] w-screen rounded-b-xl flex justify-between items-center py-7 px-20 shadow-lg z-10 fixed">
        <div class="flex items-center justify-between">
            <img src="{{ asset($NavbarIcon) }}" alt="Logo"/>
        </div>

        <button class="text-white inline-block md:hidden" id="menu-toggle">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm16 4H4v2h16v-2z"/>
            </svg>
        </button>

        <div class="hidden md:flex items-center ml-auto text-xl space-x-10 mr-10 font-poppins" id="menu-items">
            <a href="#" class="text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium">Tentang</a>
            <a href="#" class="text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium">Peserta</a>
            <a href="#" class="text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium">Pembicara</a>
            <a href="#" class="text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium">Timeline & Venue</a>
        </div>
        <a href="#" class="bg-[#00C0AC] hover rounded-3xl pt-1 px-8 h-8 font-medium text-white text-base md:block font-poppins">Daftar</a>

    </nav>
    {{-- Hero Section --}}
    <div class="bg-primary z-1 h-screen items-center content-center">
        <div class="justify-center ">
            <img
                class="mt-32 absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/3 mx-auto lg:mt-12"
                src="{{ asset($Background) }}"
                alt="ast1"
            />
        </div>
        <div class="mx-auto absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/3 hover:scale-y-105 transition-all duration-300">
            <div class="items-center content-center flex flex-row space-x-12">
                <div>
                    <div class="flex flex-row space-x-2">
                        <img class="h-6" src={Pin} alt="" />
                        <p class="text-left text-white font-medium text-xl">Coming Soon October 2023!</p>
                    </div>
                    <div>
                        <p class="text-left text-cyanest font-bold text-9xl">2023</p>
                    </div>
                </div>
                <div>
                    <img class="h-60 -mt-24" src="{{ asset($Hero) }}" alt="" />
                </div>
            </div>
            <div>
                <p class="text-left text-white font-bold text-9xl">CYBERDAS</p>
            </div>
        </div>
    </div>

    {{-- Description Section --}}
    <div id="tentang" class="bg-white z-0 py-16 font-sans px-40">
        <div class="lg:space-x-8 lg:flex lg:flex-row">
            <div>
                <p class="space-y-2 my-2 text-center font-bold text-8xl lg:text-6xl lg:text-right hover:scale-105 transition-all duration-300">
                    <span class="underline decoration-cyanest decoration-8">International Workshop</span> on <span class="text-primary">Cyber Security</span> and <span class="text-primary">Data Science.</span> 
                </p>
            </div>
            <br />
            <div>
                <p class="space-y-2 my-2 font-medium text-4xl pr-10 text-justify lg:flex lg:flex-col lg:text-left lg:text-xl">
                    During the Covid pandemic, there are two things in information technoIogy that have become the spotlight, cybersecurity and data science. There are several cybersecurity incidents that occurred during the pandemic, such as the proliferation of phishing websites that use information about Covid-19 to lure victims into giving up their personal data, malicious software that targets users who work from home online, and malicious domains containing covid or corona keywords. In addition, data processing has become very important in the past pandemic era. We can estimate the spread of the virus by tracking people's movement patterns. These are the two things that motivate us to share knowledge from international experts to the Indonesian and international community by holding an International Workshop on Cyber Security and Data Science.
                </p>
            </div>
        </div>
    </div>

    {{-- Footer Section --}}
    <footer class="bg-darkest py-4 px-8 pt-24 pb-24 lg:pb-2 lg:pt-9 lg:px-28 mx-auto items-center drop-shadow-2xl shadow-2xl z-50">
        <div class="lg:flex lg:flex-row font-space text-4xl lg:text-base font-normal text-white space-x-1.5 lg:visible justify-between">
            <div>
                <p class="visible font-bold lg:visible lg:text-left text-center">
                    14th International Conference
                </p>
                <p class="visible font-bold lg:visible lg:text-left text-center">
                    on Information, Communication  
                </p>
                <p class="visible font-bold lg:visible lg:text-left text-center">
                    Technology and System (ICTS)
                </p>
                <p class="visible font-bold lg:visible lg:text-left text-center">
                    2023
                </p>
                    
            </div>
            <br></br>
            <div>
                <p class="visible item-center lg:visible lg:text-left text-center">
                    <span class="font-bold">Dr. Baskoro Adi Pratomo (General Chair) </span>
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Department of Informatics, Faculty of  
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Information Technology, 
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Institut Teknologi Sepuluh Nopember (ITS) 
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Jl. Teknik Kimia, Kampus ITS, 
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Sukolilo, Surabaya, Indonesia 60111 
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Email: icts.if[@t]its.ac.id
                </p>
            </div>
            <br></br>
            <div class="item-center text-center">
                <p class="font-bold mb-8">
                    “Securing the future, one byte at a time”
                </p>
                <img class="h-24 lg:h-14 mx-auto" src="{{ asset($FooterLogo) }}" alt="" />
            </div>
        </div>

        <div class="flex items-center sm:justify-between my-4 mt-8">
        </div>
    </footer>
</body>
</html>