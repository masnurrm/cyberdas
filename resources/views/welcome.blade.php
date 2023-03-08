<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        {/* Hero Section */}
        <div class="bg-primary z-1 h-screen items-center content-center">
            <div class="justify-center ">
                <img
                    class="mt-32 absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/3 mx-auto lg:mt-12"
                    src={Background}
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
                        <img class="h-60 -mt-24" src={Hero} alt="" />
                    </div>
                </div>
                <div>
                    <p class="text-left text-white font-bold text-9xl">CYBERDAS</p>
                </div>
            </div>
        </div>

        {/* Description Section */}
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

        {/* Topic Section */}
        <div class="bg-white z-0 py-2 font-sans pb-24 px-40">
            <p class="space-y-2 my-24 text-center font-bold text-8xl mb-12 lg:text-6xl lg:my-2 hover:scale-105 transition-all duration-300">
                The <span class="text-primary">TOPICS.</span> 
            </p>
            <div class="decoration-4 mx-auto justify-center font-bold text-4xl lg:space-x-24 lg:flex lg:flex-row lg:text-xl lg:mt-12">
                <div class="flex flex-row">
                    <ul class="invisible space-y-6 my-2 flex flex-col text-right lg:visible">
                        <li><span class="text-cyanest">100 &nbsp; &nbsp; </span></li>
                        <li><span class="text-cyanest">001 &nbsp; &nbsp;</span></li>
                        <li><span class="text-cyanest">010 &nbsp; &nbsp;</span></li>
                        <li><span class="text-cyanest">011 &nbsp; &nbsp;</span></li>
                    </ul>
                    <ul class="space-y-6 my-2 flex flex-col -ml-4 lg:ml-0">
                        <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Cybersecurity in Education</span></li>
                        <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Digital Forensics</span></li>
                        <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Network Security</span></li>
                        <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Honeypots</span></li>
                    </ul>
                </div>
                
                <div class="flex flex-row lg:mt-0">
                    <ul class="invisible space-y-6 my-2 flex flex-col text-right lg:visible">
                        <li><span class="text-cyanest">100 &nbsp; &nbsp; </span></li>
                        <li><span class="text-cyanest">101 &nbsp; &nbsp;</span></li>
                        <li><span class="text-cyanest">110 &nbsp; &nbsp;</span></li>
                        <li><span class="text-cyanest">111 &nbsp; &nbsp;</span></li>
                    </ul>
                    <ul class="space-y-6 my-2 flex flex-col">
                        <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Image Recognition</span></li>
                        <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Machine Learning & Cloud Computing</span></li>
                        <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Artificial Intelligence</span></li>
                        <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Cybersecurity and Data Mining</span></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Speaker Section --}}
        <div id="pemateri" class="bg-darkest z-0 pt-32 font-sans pb-36 px-36">
            <div class="flex flex-row justify-between">
                <p class="text-white space-y-2 my-2 text-left font-bold text-8xl lg:text-6xl mb-28 hover:scale-105 transition-all duration-300">
                    Meet the <br />SPEAKERS<span class="text-cyanest">.</span> 
                </p>
                <img className="about-img" src={NavbarIcon} class=" invisible h-14 mr-3 lg:h-14 lg:visible hover:scale-105 transition-all duration-300" alt=" " />
            </div>
            
            <div class="justify-center mx-auto items-center lg:flex lg:flex-row lg:space-x-28">
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                    <img class="w-full" src={Speaker1} alt="" /> 
                    <div class="-mt-80 lg:-mt-44 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Dimas Surya</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Lembaga Penjamin Simpanan, Indonesia</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Digital</span> Forensic Techniques in Fraud Investigation</p>
                    </div>
                </div>
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9 lg:-mt-32" >
                    <img class="w-full" src={Speaker2} alt="" /> 
                    <div class="-mt-80 lg:-mt-44 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Agus Budi Raharjo</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Cardiff University, UK</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Data</span> Science in the Cloud</p>
                    </div>
                </div>
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                    <img class="w-full" src={Speaker3} alt="" /> 
                    <div class="-mt-96 lg:-mt-48 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Ilham Gurat Adillion</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Awl. Inc, Japan</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Image</span> Recognition with Deep Learning</p>
                    </div>
                </div>
            </div>

            <div class="justify-center mx-auto items-center mt-28 lg:flex lg:flex-row lg:space-x-28">
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                    <img class="w-full" src={Speaker4} alt="" /> 
                    <div class="-mt-96 lg:-mt-52 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Rio Indra Maulana</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">US-based Cloud Provider</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">DevSecOps</span> Implementation for Containerized Software Delivery on AWS</p>
                    </div>
                </div>
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9 lg:-mt-32" >
                    <img class="w-full" src={Speaker5} alt="" /> 
                    <div class="-mt-96 lg:-mt-56 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Eirini Anthi & <br/> Lowri Williams</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Cardiff University, UK</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Securing</span> IoT/OT Devices: An Introduction to Shodan & Text Mining Techniques for Tracking Technology Adoption</p>
                    </div>
                </div>
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                    <img class="w-full" src={Speaker6} alt="" /> 
                    <div class="-mt-60 lg:-mt-32 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Bian Yang</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">NTNU, Norway</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Secure</span> Data Management</p>
                    </div>
                </div>
            </div>

            <div class="justify-center mx-auto items-center mt-28 lg:flex lg:flex-row lg:space-x-28">
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                    <img class="w-full" src={Speaker7} alt="" /> 
                    <div class="-mt-96 lg:-mt-56 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Ahmad Balya Izzuddin</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Swiss German University & Indonesia Honeynet Project, Indonesia</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Catching</span> the Bad Guy Using Honeypots</p>
                    </div>
                </div>
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9 lg:-mt-32" >
                    <img class="w-full" src={Speaker8} alt="" /> 
                    <div class="-mt-96 lg:-mt-56 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Yevonnael Andrew</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Swiss German University & Indonesia Honeynet Project, Indonesia</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Applying</span> ML & Data Science in Cybersecurity</p>
                    </div>
                </div>
                <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                    <img class="w-full" src={Speaker9} alt="" /> 
                    <div class="-mt-80 lg:-mt-44 px-8">
                        <p class="text-white font-bold text-7xl lg:text-3xl">Saed Alrabaee</p>
                        <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">United Arab Emirates University, UAE</p>
                        <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Reverse</span> Engineering and Malware Analysis</p>
                    </div>
                </div>
            </div>
            
        </div>

        {{-- {/* Agenda Section */} --}}
        <div id="timeline-venue" class="bg-white z-0 pt-32 font-sans pb-36 px-40 lg:px-64">
            <p class="space-y-2 my-2 text-center font-bold text-8xl mb-12 lg:text-6xl hover:scale-105 transition-all duration-300">
                The <span class="text-primary">AGENDAS.</span> 
            </p>
            <div class="lg:space-x-8 lg:flex lg:flex-row">
                <div>
                    <p class="space-y-2 my-2 text-justify font-medium text-4xl lg:text-xl lg:text-right hover:scale-105 transition-all duration-300">
                        The workshop will be held on <span class="underline decoration-cyanest decoration-4 font-bold">October 2-5, 2023</span> at the <span class="underline decoration-cyanest decoration-4 font-bold">Informatics Engineering Building, ITS Sukolilo Campus</span>. Part of the training will be conducted <span class="underline decoration-cyanest decoration-4 font-bold">online</span>. Each training session is either <span class="underline decoration-cyanest decoration-4 font-bold">half-day (3 hours) or full-day (6 hours)</span> and some can be done in parallel.
                    </p>
                </div>
                <div class="justify-center items-center mx-auto text-center content-center">
                    <iframe class="rounded-xl w-full h-96 lg:w-[435px] lg:h-[269px] hover:scale-105 transition-all duration-300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.636239766225!2d112.79405626456118!3d-7.282164444743877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf7e10deaff%3A0x2b2bcdafc68c9a28!2sDepartemen%20Teknik%20Informatika!5e0!3m2!1sid!2sid!4v1677625942618!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="justify-center mx-auto items-center mt-12">
                <img class="hover:scale-105 transition-all duration-300" src={Agenda} alt="" />
            </div>
        </div>

        {{-- {/* Sponsors Section */}
        {/* <div class="bg-white z-0 py-2 font-sans pb-48 px-40">
            <p class="space-y-2 my-24 text-center font-bold text-8xl mb-12 lg:text-6xl lg:my-2  hover:scale-105 transition-all duration-300">
                The <span class="text-primary">SPONSORS.</span> 
            </p>
            <div class="mx-auto justify-center lg:mt-12 lg:flex lg:flex-row lg:space-x-4">
                <img class="h-48 mx-auto lg:mx-0 lg:h-32 hover:scale-105 transition-all duration-300" src={Sponsor1} alt="" />
                <img class="h-48 mx-auto lg:h-32 lg:mx-0 hover:scale-105 transition-all duration-300" src={Sponsor1} alt="" />
                <img class="h-48 mx-auto lg:h-32 lg:mx-0 hover:scale-105 transition-all duration-300" src={Sponsor1} alt="" />
                <img class="h-48 mx-auto lg:h-32 lg:mx-0 hover:scale-105 transition-all duration-300" src={Sponsor1} alt="" />
            </div>
            <div class="mx-auto justify-center lg:flex lg:flex-row lg:space-x-4">
                <img class="h-48 mx-auto lg:h-32 lg:mx-0 hover:scale-105 transition-all duration-300" src={Sponsor1} alt="" />
                <img class="h-48 mx-auto lg:h-32 lg:mx-0 hover:scale-105 transition-all duration-300" src={Sponsor1} alt="" />
                <img class="h-48 mx-auto lg:h-32 lg:mx-0 hover:scale-105 transition-all duration-300" src={Sponsor1} alt="" />
                <img class="h-48 mx-auto lg:h-32 lg:mx-0 hover:scale-105 transition-all duration-300" src={Sponsor1} alt="" />
            </div>
        </div> */} --}}
    </div>
</body>
</html>