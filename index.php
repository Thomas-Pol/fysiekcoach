<?php
include_once('src/components/header.php');
?>

<!-- Hero Section -->
<section id="hero" class="relative bg-gradient-to-br from-gray-50 via-white to-gray-100 py-20 md:py-32 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-72 h-72 bg-[#E07603] rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-gray-800 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-[#E07603] rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full border border-gray-200 shadow-sm">
                    <div class="w-2 h-2 bg-[#E07603] rounded-full animate-pulse"></div>
                    <span class="text-sm font-medium text-gray-700">Professionele Fysieke Begeleiding</span>
                </div>
                
                <!-- Main Headline -->
                <div class="space-y-6">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        <span class="block text-gray-800">Gezond</span>
                        <span class="text-[#E07603]">werken</span>
                        <span class="block text-gray-800">begint hier</span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-gray-600 leading-relaxed max-w-2xl">
                        Als gecertificeerde bedrijfs-oefentherapeut en ergonoom transformeer ik 
                        werkplekken naar gezonde, productieve omgevingen waar medewerkers floreren.
                    </p>
                </div>
                
                <!-- Statistics -->
                <div class="grid grid-cols-3 gap-8 py-8">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">95%</div>
                        <div class="text-sm text-gray-600">Minder klachten</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-[#E07603] mb-2">50+</div>
                        <div class="text-sm text-gray-600">Tevreden bedrijven</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">24/7</div>
                        <div class="text-sm text-gray-600">Ondersteuning</div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="javascript:void(0);" onclick="scrollToContact()" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-8 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold text-lg hover-lift shadow-xl">
                        <span>Start vandaag</span>
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center gap-3 bg-white text-gray-800 px-8 py-4 rounded-2xl hover:bg-gray-50 transition-all font-semibold text-lg border border-gray-200 hover-lift shadow-lg">
                        <i data-lucide="play-circle" class="w-5 h-5 text-[#E07603]"></i>
                        <span>Bekijk diensten</span>
                    </a>
                </div>
            </div>
            
            <!-- Hero Image -->
            <div class="relative">
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl hover-lift">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=80" alt="Moderne werkplek met ergonomische inrichting" class="w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/20 to-transparent"></div>
                </div>
                
                <!-- Floating Card -->
                <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl border border-gray-200 z-20 max-w-sm">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#E07603]/10 rounded-xl flex items-center justify-center">
                            <i data-lucide="shield-check" class="w-6 h-6 text-[#E07603]"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Gecertificeerd</p>
                            <p class="text-sm text-gray-600">Door NVAB erkend</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-24 bg-white relative">
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl">
        <!-- Section Header -->
        <div class="text-center mb-20">
            
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                <span class="text-gray-800">Professionele</span>
                <span class="text-[#E07603] block">begeleiding</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Van ergonomische werkplekoptimalisatie tot preventieve therapie - 
                wij zorgen voor een gezonde en productieve werkomgeving.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Ergonoom Service -->
            <div class="group relative">
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 md:p-10 border border-gray-200 hover:border-[#E07603]/30 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <!-- Service Header -->
                    <div class="flex items-start justify-between mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#E07603] to-[#E07603]/80 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i data-lucide="monitor" class="w-8 h-8 text-white"></i>
                        </div>
                        <div class="w-6 h-6 bg-gray-200 rounded-full group-hover:bg-[#E07603] transition-colors"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="space-y-6">
                        <h3 class="text-3xl font-bold text-gray-900 group-hover:text-[#E07603] transition-colors">
                            Ergonoom
                        </h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Optimaliseer werkplekken voor maximaal comfort en productiviteit. 
                            Voorkom klachten door slimme inrichting en juiste werkhouding.
                        </p>
                        
                        <!-- Features -->
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 text-gray-700">
                                <div class="w-6 h-6 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-[#E07603]"></i>
                                </div>
                                <span class="font-medium">Werkplekanalyse & optimalisatie</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-700">
                                <div class="w-6 h-6 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-[#E07603]"></i>
                                </div>
                                <span class="font-medium">Ergonomisch meubeladvies</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-700">
                                <div class="w-6 h-6 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-[#E07603]"></i>
                                </div>
                                <span class="font-medium">Houdingstraining & workshops</span>
                            </div>
                        </div>
                        
                        <a href="/Glu/jaar_3/Fysiekcoach/ergonoom" class="inline-flex items-center gap-2 text-[#E07603] font-semibold hover:gap-4 transition-all group-hover:text-gray-800">
                            <span>Meer informatie</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bedrijfs-oefentherapeut Service -->
            <div class="group relative">
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 md:p-10 border border-gray-200 hover:border-[#E07603]/30 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <!-- Service Header -->
                    <div class="flex items-start justify-between mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i data-lucide="heart-pulse" class="w-8 h-8 text-white"></i>
                        </div>
                        <div class="w-6 h-6 bg-gray-200 rounded-full group-hover:bg-[#E07603] transition-colors"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="space-y-6">
                        <h3 class="text-3xl font-bold text-gray-900 group-hover:text-[#E07603] transition-colors">
                            Bedrijfs-oefentherapeut
                        </h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Preventie en behandeling van werkgerelateerde klachten. 
                            Houd medewerkers vitaal door gerichte therapie en begeleiding.
                        </p>
                        
                        <!-- Features -->
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 text-gray-700">
                                <div class="w-6 h-6 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-[#E07603]"></i>
                                </div>
                                <span class="font-medium">Preventieve screenings</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-700">
                                <div class="w-6 h-6 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-[#E07603]"></i>
                                </div>
                                <span class="font-medium">Individuele behandeltrajecten</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-700">
                                <div class="w-6 h-6 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-[#E07603]"></i>
                                </div>
                                <span class="font-medium">Groepstrainingen & workshops</span>
                            </div>
                        </div>
                        
                        <a href="/Glu/jaar_3/Fysiekcoach/bedrijfs-oefentherapeut" class="inline-flex items-center gap-2 text-[#E07603] font-semibold hover:gap-4 transition-all group-hover:text-gray-800">
                            <span>Meer informatie</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-20">
            <div class="bg-gradient-to-r from-gray-800 to-gray-700 rounded-3xl p-12 md:p-16 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-[#E07603]/10 to-transparent"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Klaar om van start te gaan?
                    </h3>
                    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                        Ontdek hoe wij uw organisatie kunnen helpen met een gezondere werkomgeving.
                    </p>
                    <a href="javascript:void(0);" onclick="scrollToContact()" class="inline-flex items-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-8 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold text-lg hover-lift shadow-xl">
                        <span>Neem contact op</span>
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
                
<!-- About Section -->
<section class="py-24 bg-gray-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-[#E07603]/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gray-800/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
           
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                <span class="text-gray-800">Passie voor</span>
                <span class="text-[#E07603] block">gezond werken</span>
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image Side -->
            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-2xl hover-lift">
                    <img src="src/assets/marieke_van_der_leest.png" alt="Professionele therapie begeleiding" class="w-full h-[600px] object-cover">
                </div>
                
                <!-- Stats Cards -->
                <div class="absolute -top-6 -right-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-200">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#E07603] mb-1">500+</div>
                        <div class="text-sm text-gray-600">Geholpen mensen</div>
                    </div>
                </div>
                
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-200">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-800 mb-1">8+</div>
                        <div class="text-sm text-gray-600">Jaar ervaring</div>
                    </div>
                </div>
            </div>

            <!-- Content Side -->
            <div class="space-y-8">
                <div class="space-y-6">
                    <p class="text-xl text-gray-700 leading-relaxed">
                        Als gecertificeerde bedrijfs-oefentherapeut en ergonoom combineer ik 
                        wetenschappelijke kennis met praktische ervaring om werkplekken te 
                        transformeren naar gezonde, productieve omgevingen.
                    </p>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Mijn missie is helder: voorkomen dat werk een bron van pijn wordt. 
                        Door slimme ergonomie en preventieve begeleiding help ik organisaties 
                        hun meest waardevolle bezit - hun medewerkers - gezond te houden.
                    </p>
                </div>

                <!-- Expertise Cards -->
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-2xl border border-gray-200 hover:border-[#E07603]/30 transition-all hover-lift">
                        <div class="w-12 h-12 bg-[#E07603]/10 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="graduation-cap" class="w-6 h-6 text-[#E07603]"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Gecertificeerd Expert</h4>
                        <p class="text-sm text-gray-600">NVAB erkend ergonoom en geregistreerde oefentherapeut</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-2xl border border-gray-200 hover:border-[#E07603]/30 transition-all hover-lift">
                        <div class="w-12 h-12 bg-gray-800/10 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="lightbulb" class="w-6 h-6 text-gray-800"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Innovatieve Aanpak</h4>
                        <p class="text-sm text-gray-600">Combinatie van moderne technieken en bewezen methoden</p>
                    </div>
                </div>

                <!-- CTA -->
                <div class="pt-6">
                    <a href="javascript:void(0);" onclick="scrollToContact()" class="inline-flex items-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-8 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold hover-lift shadow-xl">
                        <span>Laten we kennismaken</span>
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl">
        <!-- Section Header -->
        <div class="text-center mb-20">
          
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                Resultaten die tellen
            </h2>
        </div>

        <!-- Features Grid -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group relative">
                <div class="bg-gradient-to-br from-[#E07603]/5 to-[#E07603]/10 rounded-3xl p-8 md:p-10 border border-[#E07603]/20 hover:border-[#E07603]/40 transition-all hover-lift">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#E07603] to-[#E07603]/80 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="trending-down" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">40% Minder Verzuim</h3>
                    <p class="text-gray-600 mb-6">Bewezen reductie in ziekteverzuim door preventieve aanpak en vroege interventie bij fysieke klachten.</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="group relative">
                <div class="bg-gradient-to-br from-gray-800/5 to-gray-800/10 rounded-3xl p-8 md:p-10 border border-gray-800/20 hover:border-gray-800/40 transition-all hover-lift">
                    <div class="w-16 h-16 bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="users" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">95% Tevredenheid</h3>
                    <p class="text-gray-600 mb-6">Medewerkers waarderen onze persoonlijke aanpak en praktische oplossingen voor hun werkplek.</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="group relative">
                <div class="bg-gradient-to-br from-[#E07603]/5 to-[#E07603]/10 rounded-3xl p-8 md:p-10 border border-[#E07603]/20 hover:border-[#E07603]/40 transition-all hover-lift">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#E07603] to-[#E07603]/80 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="clock" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">48u Respons</h3>
                    <p class="text-gray-600 mb-6">Snelle reactie op acute klachten en binnen 48 uur een plan van aanpak voor uw organisatie.</p>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-24 bg-gray-800 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-[#E07603] opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 left-1/4 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl relative z-10">
        <div class="max-w-4xl mx-auto text-center">

            
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white">
                Klaar voor een gezondere werkplek?
            </h2>
            
            <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
                Ontdek hoe Fysiekcoach uw organisatie kan helpen met minder verzuim, 
                meer productiviteit en gelukkigere medewerkers.
            </p>
            
            <!-- Contact Form -->
            <div class="max-w-2xl mx-auto">
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-white mb-2">
                                Naam *
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                required
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                                placeholder="Uw naam"
                            >
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-white mb-2">
                                E-mail *
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                required
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                                placeholder="example@email.nl"
                            >
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-white mb-2">
                                Telefoon
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone"
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                                placeholder="+31 6 12 34 56 78"
                            >
                        </div>
                        
                        <!-- Company -->
                        <div>
                            <label for="company" class="block text-sm font-medium text-white mb-2">
                                Organisatie
                            </label>
                            <input 
                                type="text" 
                                id="company" 
                                name="company"
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                                placeholder="Bedrijfsnaam"
                            >
                        </div>
                    </div>
                    
                    <!-- Service Interest -->
                    <div>
                        <label for="service" class="block text-sm font-medium text-white mb-2">
                            Interesse in
                        </label>
                        <select 
                            id="service" 
                            name="service"
                            class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                        >
                            <option class="text-gray-400" value="">Maak een keuze</option>
                            <option class="text-gray-400" value="ergonoom">Ergonoom - Werkplekoptimalisatie</option>
                            <option class="text-gray-400" value="oefentherapeut">Bedrijfs-oefentherapeut</option>
                            <option class="text-gray-400" value="beide">Beide diensten</option>
                            <option class="text-gray-400" value="advies">Algemeen advies</option>
                        </select>
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-white mb-2">
                            Bericht *
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="4" 
                            required
                            class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all resize-none"
                            placeholder="Vertel ons over uw situatie en hoe wij kunnen helpen..."
                        ></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button 
                            type="submit"
                            class="inline-flex items-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-10 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold text-lg hover-lift shadow-2xl"
                        >
                            <span>Verstuur bericht</span>
                            <i data-lucide="send" class="w-5 h-5"></i>
                        </button>
                        
                        <p class="text-sm text-gray-400 mt-4">
                            Vrijblijvend advies • Geen verplichtingen
                        </p>
                    </div>
                </form>
                
                <!-- Alternative Contact -->
                <div class="mt-12 pt-8 border-t border-white/20">
                    <div class="text-center">
                        <p class="text-gray-300 mb-6">Of bel mij op:</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                           
                            <a href="tel:+31612345678" class="inline-flex items-center gap-2 text-[#E07603] hover:text-white transition-colors">
                                <i data-lucide="phone" class="w-4 h-4"></i>
                                <span>+31 6 12 34 56 78</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('src/components/footer.php');
?>