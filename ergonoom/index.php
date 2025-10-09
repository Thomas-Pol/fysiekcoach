<?php
include_once('../src/components/header.php');
?>

<!-- Hero Section -->
<section id="hero" class="relative bg-gradient-to-br from-gray-50 via-white to-gray-100 py-20 md:py-32 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-72 h-72 bg-[#E07603] rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-gray-800 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full border border-gray-200 shadow-sm">
                    <div class="w-8 h-8 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                        <i data-lucide="monitor" class="w-4 h-4 text-[#E07603]"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Ergonoom Specialist</span>
                </div>
                
                <!-- Main Headline -->
                <div class="space-y-6">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        <span class="block text-gray-800">Optimale</span>
                        <span class="text-[#E07603]">werkplek</span>
                        <span class="block text-gray-800">inrichting</span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-gray-600 leading-relaxed">
                        Als gecertificeerde ergonoom transformeer ik werkplekken naar ergonomische, 
                        comfortabele omgevingen die productiviteit verhogen en klachten voorkomen.
                    </p>
                </div>
                
                <!-- Key Benefits -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 py-8">
                    <div class="text-center p-4 bg-white/50 backdrop-blur-sm rounded-2xl border border-gray-200">
                        <div class="text-3xl font-bold text-[#E07603] mb-1">80%</div>
                        <div class="text-sm text-gray-600">Minder rugklachten</div>
                    </div>
                    <div class="text-center p-4 bg-white/50 backdrop-blur-sm rounded-2xl border border-gray-200">
                        <div class="text-3xl font-bold text-gray-800 mb-1">25%</div>
                        <div class="text-sm text-gray-600">Meer productiviteit</div>
                    </div>
                    <div class="text-center p-4 bg-white/50 backdrop-blur-sm rounded-2xl border border-gray-200">
                        <div class="text-3xl font-bold text-[#E07603] mb-1">100%</div>
                        <div class="text-sm text-gray-600">Maatwerk advies</div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-8 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold text-lg hover-lift shadow-xl">
                        <span>Werkplek analyse</span>
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center gap-3 bg-white text-gray-800 px-8 py-4 rounded-2xl hover:bg-gray-50 transition-all font-semibold text-lg border border-gray-200 hover-lift shadow-lg">
                        <i data-lucide="eye" class="w-5 h-5 text-[#E07603]"></i>
                        <span>Ontdek diensten</span>
                    </a>
                </div>
            </div>
            
            <!-- Hero Image -->
            <div class="relative">
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl hover-lift">
                    <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=800&q=80" alt="Ergonomische werkplek inrichting" class="w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/20 to-transparent"></div>
                </div>
                
                <!-- Floating Card -->
                <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl border border-gray-200 z-20 max-w-sm">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#E07603]/10 rounded-xl flex items-center justify-center">
                            <i data-lucide="award" class="w-6 h-6 text-[#E07603]"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">NVAB Erkend</p>
                            <p class="text-sm text-gray-600">Gecertificeerd ergonoom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Problem Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl">
        <!-- Section Header -->
        <div class="text-center mb-20">
            
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                Werkplekklachten kosten veel
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Elk jaar melden zich miljoenen werknemers ziek door werkplekgerelateerde klachten. 
                De kosten? Enormer dan u denkt.
            </p>
        </div>

        <!-- Statistics Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-3xl border border-red-200 text-center">
                <div class="text-4xl font-bold text-red-600 mb-2">60%</div>
                <div class="text-sm text-red-700 font-medium">Van alle werknemers heeft klachten</div>
            </div>
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-3xl border border-orange-200 text-center">
                <div class="text-4xl font-bold text-orange-600 mb-2">€15K</div>
                <div class="text-sm text-orange-700 font-medium">Gemiddelde kosten per ziekmelding</div>
            </div>
            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-3xl border border-yellow-200 text-center">
                <div class="text-4xl font-bold text-yellow-600 mb-2">23</div>
                <div class="text-sm text-yellow-700 font-medium">Dagen gemiddeld verzuim</div>
            </div>
            <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-3xl border border-red-200 text-center">
                <div class="text-4xl font-bold text-red-600 mb-2">80%</div>
                <div class="text-sm text-red-700 font-medium">Is te voorkomen met ergonomie</div>
            </div>
        </div>

        <!-- Common Problems -->
        <div class="bg-gray-50 rounded-3xl p-8 md:p-12">
            <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Meest voorkomende klachten</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="user-x" class="w-8 h-8 text-red-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Rugklachten</h4>
                    <p class="text-sm text-gray-600">Door slechte zithouding en verkeerde stoelinstelling</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="zap" class="w-8 h-8 text-orange-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Nek- & schouders</h4>
                    <p class="text-sm text-gray-600">Te hoog of laag beeldscherm zorgt voor spanning</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="hand" class="w-8 h-8 text-yellow-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">RSI klachten</h4>
                    <p class="text-sm text-gray-600">Verkeerde muis- en toetsenbordpositie</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="eye" class="w-8 h-8 text-blue-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Vermoeide ogen</h4>
                    <p class="text-sm text-gray-600">Slechte verlichting en beeldscherminstellingen</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl">
        <!-- Section Header -->
        <div class="text-center mb-20">
         
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-gray-800">Professionele</span>
                <span class="text-[#E07603] block">werkplekanalyse</span>
            </h2>
        </div>

        <!-- Services Grid -->
        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            <!-- Service 1 -->
            <div class="group bg-white rounded-3xl p-8 md:p-10 border border-gray-200 hover:border-[#E07603]/30 transition-all hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-[#E07603] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="search" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-[#E07603] transition-colors">
                    1. Grondige Analyse
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Complete beoordeling van uw huidige werkplek inclusief houding, 
                    meubilair en werkomgeving.
                </p>
                <ul class="space-y-3 text-sm text-gray-700">
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>Werkplekmetingen</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>Houdingsanalyse</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>Klachteninventarisatie</span>
                    </li>
                </ul>
            </div>

            <!-- Service 2 -->
            <div class="group bg-white rounded-3xl p-8 md:p-10 border border-gray-200 hover:border-[#E07603]/30 transition-all hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="clipboard-list" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-[#E07603] transition-colors">
                    2. Maatwerk Advies
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Persoonlijk adviesrapport met concrete stappen voor optimale 
                    werkplekinrichting en gezonde werkhouding.
                </p>
                <ul class="space-y-3 text-sm text-gray-700">
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>Gedetailleerd rapport</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>Productaanbevelingen</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>Implementatieplan</span>
                    </li>
                </ul>
            </div>

            <!-- Service 3 -->
            <div class="group bg-white rounded-3xl p-8 md:p-10 border border-gray-200 hover:border-[#E07603]/30 transition-all hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-[#E07603] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="users" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-[#E07603] transition-colors">
                    3. Training & Follow-up
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Praktische training en begeleiding bij implementatie voor 
                    duurzame resultaten en continue verbetering.
                </p>
                <ul class="space-y-3 text-sm text-gray-700">
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>Ergonomie workshop</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>Implementatiebegeleiding</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span>3 maanden nazorg</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Results CTA -->
        <div class="bg-gradient-to-r from-gray-800 to-gray-700 rounded-3xl p-12 md:p-16 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-[#E07603]/10 to-transparent"></div>
            <div class="relative z-10 text-center">
                <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Klaar voor een ergonomische werkplek?
                </h3>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Investeer in de gezondheid van uw medewerkers en zie verzuim dalen 
                    met onze bewezen ergonomische aanpak.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="javascript:void(0);" onclick="scrollToContact()" class="inline-flex items-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-8 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold text-lg hover-lift shadow-xl">
                        <span>Plan werkplekanalyse</span>
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:+31612345678" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-2xl hover:bg-white/20 transition-all font-semibold text-lg hover-lift border border-white/20">
                        <i data-lucide="phone" class="w-5 h-5"></i>
                        <span>Direct bellen</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                    Waarom kiezen voor Fysiekcoach?
                </h2>
                <p class="text-xl text-gray-600">
                    Als NVAB erkend ergonoom combineer ik wetenschappelijke kennis 
                    met jarenlange praktijkervaring voor optimale resultaten.
                </p>
            </div>

            <!-- Benefits Grid -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-[#E07603]/5 to-[#E07603]/10 p-8 rounded-2xl border border-[#E07603]/20">
                    <div class="w-12 h-12 bg-[#E07603] rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="award" class="w-6 h-6 text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">NVAB Gecertificeerd</h3>
                    <p class="text-gray-700">
                        Erkend door de Nederlandse Vereniging voor Arbeids- en Bedrijfsgeneeskunde. 
                        Uw garantie voor professionele, wetenschappelijk onderbouwde adviezen.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-gray-800/5 to-gray-800/10 p-8 rounded-2xl border border-gray-300">
                    <div class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="users" class="w-6 h-6 text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">500+ Tevreden Klanten</h3>
                    <p class="text-gray-700">
                        Van kleine startups tot grote corporaties - onze aanpak heeft bewezen 
                        effectief te zijn voor organisaties van elke omvang.
                    </p>
                </div>
                
<div class="bg-gradient-to-br from-[#E07603]/5 to-[#E07603]/10 p-8 rounded-2xl border border-[#E07603]/20">
                    <div class="w-12 h-12 bg-[#E07603]  rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="target" class="w-6 h-6 text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Bewezen ROI</h3>
                    <p class="text-gray-700">
                        Gemiddeld 40% minder verzuim binnen 6 maanden. De investering in ergonomie 
                        verdient zichzelf terug door lagere ziektekostenof lagere  ziektekostensisschade.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-gray-800/5 to-[#E07603]/5 p-8 rounded-2xl border border-gray-300">
                    <div class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="clock" class="w-6 h-6 text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Snelle Service</h3>
                    <p class="text-gray-700">
                        Binnen 48 uur reactie op uw aanvraag. Werkplekanalyses kunnen vaak 
                        binnen een week gepland worden voor acute situaties.
                    </p>
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
                Plan uw ergonomische analyse
            </h2>
            
            <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
                Vul het formulier in en ontdek hoe wij uw werkplek kunnen optimaliseren 
                voor betere gezondheid en productiviteit.
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
                                Organisatie *
                            </label>
                            <input 
                                type="text" 
                                id="company" 
                                name="company"
                                required
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                                placeholder="Bedrijfsnaam"
                            >
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Number of Employees -->
                        <div>
                            <label for="employees" class="block text-sm font-medium text-white mb-2">
                                Aantal medewerkers
                            </label>
                            <select 
                                id="employees" 
                                name="employees"
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                            >
                                <option class="text-gray-400" value="">Selecteer aantal</option>
                                <option class="text-gray-400" value="1-10">1-10 medewerkers</option>
                                <option class="text-gray-400" value="11-50">11-50 medewerkers</option>
                                <option class="text-gray-400" value="51-200">51-200 medewerkers</option>
                                <option class="text-gray-400" value="200+">200+ medewerkers</option>
                            </select>
                        </div>
                        
                        <!-- Urgency -->
                        <div>
                            <label for="urgency" class="block text-sm font-medium text-white mb-2">
                                Wanneer starten?
                            </label>
                            <select 
                                id="urgency" 
                                name="urgency"
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                            >
                                <option class="text-gray-400" value="">Selecteer timing</option>
                                <option class="text-gray-400" value="asap">Zo snel mogelijk</option>
                                <option class="text-gray-400" value="1month">Binnen 1 maand</option>
                                <option class="text-gray-400" value="3months">Binnen 3 maanden</option>
                                <option class="text-gray-400" value="planning">Nog in planningsfase</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Current Issues -->
                    <div>
                        <label class="block text-sm text-left font-medium text-white mb-2">
                            Huidige klachten/problemen (meerdere mogelijk)
                        </label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="issues[]" value="neck_shoulder" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Nek- en schouderpijn</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="issues[]" value="back_pain" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Rugpijn</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="issues[]" value="rsi" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">RSI klachten</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="issues[]" value="fatigue" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Vermoeidheid</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="issues[]" value="high_absence" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Hoog verzuim</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="issues[]" value="prevention" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Preventie</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-white mb-2">
                            Aanvullende informatie
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="4" 
                            class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all resize-none"
                            placeholder="Vertel ons meer over uw specifieke situatie, werkplekken of uitdagingen..."
                        ></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button 
                            type="submit"
                            class="inline-flex items-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-10 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold text-lg hover-lift shadow-2xl"
                        >
                            <span>Plan werkplekanalyse</span>
                            <i data-lucide="calendar-check" class="w-5 h-5"></i>
                        </button>
                        
                        <p class="text-sm text-gray-400 mt-4">
                           Vrijblijvend advies • NVAB erkend specialist
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
include_once('../src/components/footer.php');
?>