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
                        <i data-lucide="heart-pulse" class="w-4 h-4 text-[#E07603]"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Bedrijfs-oefentherapeut</span>
                </div>
                
                <!-- Main Headline -->
                <div class="space-y-6">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        <span class="block text-gray-800">Preventie &</span>
                        <span class="text-[#E07603]">herstel</span>
                        <span class="block text-gray-800">op de werkvloer</span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-gray-600 leading-relaxed">
                        Als gecertificeerde bedrijfs-oefentherapeut help ik werknemers bij het 
                        voorkomen en herstellen van fysieke klachten door gerichte therapie en begeleiding.
                    </p>
                </div>
                
                <!-- Key Benefits -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 py-8">
                    <div class="text-center p-4 bg-white/50 backdrop-blur-sm rounded-2xl border border-gray-200">
                        <div class="text-3xl font-bold text-[#E07603] mb-1">85%</div>
                        <div class="text-sm text-gray-600">Sneller herstel</div>
                    </div>
                    <div class="text-center p-4 bg-white/50 backdrop-blur-sm rounded-2xl border border-gray-200">
                        <div class="text-3xl font-bold text-gray-800 mb-1">50%</div>
                        <div class="text-sm text-gray-600">Minder verzuim</div>
                    </div>
                    <div class="text-center p-4 bg-white/50 backdrop-blur-sm rounded-2xl border border-gray-200">
                        <div class="text-3xl font-bold text-[#E07603] mb-1">100%</div>
                        <div class="text-sm text-gray-600">Persoonlijke aanpak</div>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-8 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold text-lg hover-lift shadow-xl">
                        <span>Start behandeling</span>
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center gap-3 bg-white text-gray-800 px-8 py-4 rounded-2xl hover:bg-gray-50 transition-all font-semibold text-lg border border-gray-200 hover-lift shadow-lg">
                        <i data-lucide="stethoscope" class="w-5 h-5 text-[#E07603]"></i>
                        <span>Ontdek behandelingen</span>
                    </a>
                </div>
            </div>
            
            <!-- Hero Image -->
            <div class="relative">
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl hover-lift">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=800&q=80" alt="Professionele oefentherapie begeleiding" class="w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/20 to-transparent"></div>
                </div>
                
                <!-- Floating Card -->
                <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl border border-gray-200 z-20 max-w-sm">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#E07603]/10 rounded-xl flex items-center justify-center">
                            <i data-lucide="shield-check" class="w-6 h-6 text-[#E07603]"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">BIG Geregistreerd</p>
                            <p class="text-sm text-gray-600">Erkende oefentherapeut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problem & Solution Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl">
        <!-- Section Header -->
        <div class="text-center mb-20">
            
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                Fysieke klachten op de werkvloer
            </h2>
        </div>

        <!-- Problem & Solution Grid -->
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Problems -->
            <div>
                <h3 class="text-3xl font-bold text-gray-800 mb-8">Veel voorkomende klachten:</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4 p-4 bg-red-50 rounded-2xl border border-red-200">
                        <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="zap" class="w-6 h-6 text-red-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Nek- & schouderpijn</h4>
                            <p class="text-gray-700 text-sm">Door langdurig computer werk en slechte houding</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-4 bg-orange-50 rounded-2xl border border-orange-200">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="user-x" class="w-6 h-6 text-orange-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Lage rugpijn</h4>
                            <p class="text-gray-700 text-sm">Langdurig zitten verzwakt de rugspieren</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-4 bg-yellow-50 rounded-2xl border border-yellow-200">
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="hand" class="w-6 h-6 text-yellow-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">RSI klachten</h4>
                            <p class="text-gray-700 text-sm">Repetitieve belasting van armen en polsen</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-2xl border border-blue-200">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="battery-low" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Vermoeidheid</h4>
                            <p class="text-gray-700 text-sm">Verminderde conditie en energieniveau</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solutions -->
            <div>
                <h3 class="text-3xl font-bold text-gray-800 mb-8">Onze oplossing:</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4 p-6 bg-[#E07603]/5 rounded-2xl border border-[#E07603]/20">
                        <div class="w-12 h-12 bg-[#E07603] rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="target" class="w-6 h-6 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Gerichte behandeling</h4>
                            <p class="text-gray-700">Individuele therapie afgestemd op jouw specifieke klachten en werkzaamheden</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-6 bg-gray-800/5 rounded-2xl border border-gray-300">
                        <div class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="shield-check" class="w-6 h-6 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Preventieve begeleiding</h4>
                            <p class="text-gray-700">Voorkomen dat klachten (opnieuw) ontstaan door slimme interventies</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-6 bg-[#E07603]/5 rounded-2xl border border-[#E07603]/20">
                        <div class="w-12 h-12 bg-[#E07603] rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="users" class="w-6 h-6 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Groepsprogramma's</h4>
                            <p class="text-gray-700">Kosteneffectieve groepstrainingen voor teams en afdelingen</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-6 bg-gray-800/5 rounded-2xl border border-gray-300">
                        <div class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="trending-up" class="w-6 h-6 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-2">Duurzame resultaten</h4>
                            <p class="text-gray-700">Nazorg en follow-up voor langdurige verbetering van gezondheid</p>
                        </div>
                    </div>
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
                <span class="text-gray-800">Persoonlijke</span>
                <span class="text-[#E07603] block">oefentherapie</span>
            </h2>
        </div>

        <!-- Services Grid -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="group bg-white rounded-3xl p-8 md:p-10 border border-gray-200 hover:border-[#E07603]/30 transition-all hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-[#E07603] to-[#E07603]/80 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="user" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-[#E07603] transition-colors">
                    Individuele Begeleiding
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    One-on-one behandeling voor specifieke klachten. Volledig op maat 
                    afgestemd op jouw situatie en werkzaamheden.
                </p>
                
                <!-- Features -->
                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">Persoonlijke intake & diagnose</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">Wekelijkse behandelsessies</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">Op maat gemaakte oefeningen</span>
                    </div>
                </div>
                
                <div class="pt-4 border-t border-gray-100">
                    <span class="text-sm text-gray-500">Vanaf €85 per sessie</span>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="group bg-white rounded-3xl p-8 md:p-10 border border-gray-200 hover:border-[#E07603]/30 transition-all hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="users" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-[#E07603] transition-colors">
                    Groepstrainingen
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Kosteneffectieve groepslessen voor teams. Samen werken aan 
                    een gezonde en fitte werkomgeving.
                </p>
                
                <!-- Features -->
                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">6-12 deelnemers per groep</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">Wekelijkse groepslessen</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">Preventieve oefenprogramma's</span>
                    </div>
                </div>
                
                <div class="pt-4 border-t border-gray-100">
                    <span class="text-sm text-gray-500">Vanaf €35 per persoon</span>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="group bg-white rounded-3xl p-8 md:p-10 border border-gray-200 hover:border-[#E07603]/30 transition-all hover:shadow-2xl hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-[#E07603] to-[#E07603]/80 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="shield-check" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-[#E07603] transition-colors">
                    Preventie Programma's
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Structurele programma's om klachten te voorkomen. 
                    Investeer proactief in de gezondheid van uw team.
                </p>
                
                <!-- Features -->
                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">Maandelijkse workshops</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">Health check screenings</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <div class="w-5 h-5 bg-[#E07603]/10 rounded-lg flex items-center justify-center">
                            <i data-lucide="check" class="w-3 h-3 text-[#E07603]"></i>
                        </div>
                        <span class="text-sm">Bewustwordingscampagnes</span>
                    </div>
                </div>
                
                <div class="pt-4 border-t border-gray-100">
                    <span class="text-sm text-gray-500">Op maat prijzen</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 md:px-8 lg:px-12 max-w-7xl">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                    Bewezen resultaten
                </h2>
                <p class="text-xl text-gray-600">
                    Onze aanpak zorgt voor meetbare verbetering in zowel 
                    werknemertevredenheid als bedrijfsresultaten.
                </p>
            </div>

            <!-- Results Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="text-center p-6 bg-gradient-to-br from-[#E07603]/5 to-[#E07603]/10 rounded-2xl border border-[#E07603]/20">
                    <div class="text-4xl font-bold text-[#E07603] mb-2">75%</div>
                    <div class="text-sm text-gray-600 font-medium">Minder klachten na 3 maanden</div>
                </div>
                <div class="text-center p-6 bg-gradient-to-br from-gray-800/5 to-gray-800/10 rounded-2xl border border-gray-300">
                    <div class="text-4xl font-bold text-gray-800 mb-2">50%</div>
                    <div class="text-sm text-gray-600 font-medium">Reductie ziekteverzuim</div>
                </div>
                <div class="text-center p-6 bg-gradient-to-br from-[#E07603]/5 to-[#E07603]/10 rounded-2xl border border-[#E07603]/20">
                    <div class="text-4xl font-bold text-[#E07603] mb-2">90%</div>
                    <div class="text-sm text-gray-600 font-medium">Tevredenheid deelnemers</div>
                </div>
                <div class="text-center p-6 bg-gradient-to-br from-gray-800/5 to-gray-800/10 rounded-2xl border border-gray-300">
                    <div class="text-4xl font-bold text-gray-800 mb-2">€3K</div>
                    <div class="text-sm text-gray-600 font-medium">Gem. besparing per medewerker</div>
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
                Start met bedrijfsoefentherapie
            </h2>
            
            <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
                Vul het formulier in en ontdek hoe oefentherapie uw organisatie 
                kan ondersteunen met gezondere, productievere medewerkers.
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
                        <!-- Budget Range -->
                        <div>
                            <label for="budget" class="block text-sm font-medium text-white mb-2">
                                Budget indicatie
                            </label>
                            <select 
                                id="budget" 
                                name="budget"
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                            >
                                <option class="text-gray-400" value="">Selecteer budget</option>
                                <option class="text-gray-400" value="basic">€2.500 - €5.000</option>
                                <option class="text-gray-400" value="standard">€5.000 - €10.000</option>
                                <option class="text-gray-400" value="premium">€10.000 - €20.000</option>
                                <option class="text-gray-400" value="enterprise">€20.000+</option>
                                <option class="text-gray-400" value="discuss">Nog te bespreken</option>
                            </select>
                        </div>
                        
                        <!-- Service Interest -->
                        <div>
                            <label for="service_type" class="block text-sm font-medium text-white mb-2">
                                Type dienst
                            </label>
                            <select 
                                id="service_type" 
                                name="service_type"
                                class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all"
                            >
                                <option class="text-gray-400" value="">Selecteer dienst</option>
                                <option class="text-gray-400" value="individual">Individuele behandeling</option>
                                <option class="text-gray-400" value="group">Groepstraining</option>
                                <option class="text-gray-400" value="workshop">Workshops</option>
                                <option class="text-gray-400" value="prevention">Preventieve programma's</option>
                                <option class="text-gray-400" value="consultation">Advies op maat</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Target Group -->
                    <div>
                        <label class="block text-sm text-left font-medium text-white mb-2">
                            Voor welke doelgroep? (meerdere mogelijk)
                        </label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="target_group[]" value="office_workers" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Kantoormedewerkers</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="target_group[]" value="physical_workers" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Fysieke beroepen</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="target_group[]" value="management" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Management</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="target_group[]" value="shift_workers" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Ploegendienst</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="target_group[]" value="high_stress" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Hoge werkdruk</span>
                            </label>
                            <label class="flex items-center gap-2 text-gray-300 cursor-pointer">
                                <input type="checkbox" name="target_group[]" value="returning" class="rounded border-white/20 bg-white/10 text-[#E07603] focus:border-[#E07603] focus:ring-[#E07603]">
                                <span class="text-sm">Re-integratie</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Goals -->
                    <div>
                        <label for="goals" class="block text-sm font-medium text-white mb-2">
                            Wat wilt u bereiken? *
                        </label>
                        <textarea 
                            id="goals" 
                            name="goals" 
                            rows="4" 
                            required
                            class="w-full px-4 py-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:border-[#E07603] focus:bg-white/20 transition-all resize-none"
                            placeholder="Beschrijf uw doelen: minder verzuim, preventie van klachten, betere conditie van medewerkers, etc."
                        ></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button 
                            type="submit"
                            class="inline-flex items-center gap-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/90 text-white px-10 py-4 rounded-2xl hover:from-[#E07603]/90 hover:to-[#E07603]/80 transition-all font-semibold text-lg hover-lift shadow-2xl"
                        >
                            <span>Plan intake gesprek</span>
                            <i data-lucide="user-check" class="w-5 h-5"></i>
                        </button>
                        
                        <p class="text-sm text-gray-400 mt-4">
                            Vrijblijvend gesprek • Persoonlijke aanpak
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