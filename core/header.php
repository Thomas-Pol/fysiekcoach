<?php
include("db_connect.php");
?>
<!DOCTYPE html>

<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fysiekcoach - Professionele Ergonomie & Bedrijfstherapie</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
    html {
        scroll-behavior: smooth;
        font-family: 'Inter', sans-serif;
    }

    .gradient-text {
        background: linear-gradient(135deg, #1f2937 0%, #E07603 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hover-lift {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hover-lift:hover {
        transform: translateY(-2px);
    }

    .glass-effect {
        backdrop-filter: blur(20px);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-gray-50 font-inter overflow-x-hidden">
    <!-- Header Navigation -->
    <header class="bg-gray-800/95 backdrop-blur-md sticky top-0 z-50 shadow-2xl border-b border-gray-700">
        <div class="container mx-auto px-6 md:px-8 lg:px-12 py-4 max-w-7xl">
            <div class="flex justify-between items-center">
                <a href="/Glu/jaar_3/Fysiekcoach/" class="hover-lift group">
                    <img src="./    src/assets/fysiekcoach_test_logo.png" alt="Fysiekcoach"
                        class="h-12 md:h-14 group-hover:brightness-110 transition-all">
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-2">
                    <a href="javascript:void(0);" onclick="scrollToHero()"
                        class="text-white hover:text-[#E07603] hover:bg-gray-700 rounded-xl transition-all px-4 py-2.5 font-medium relative group">
                        <span class="relative z-10">Home</span>
                        <div
                            class="absolute inset-0 bg-[#E07603] rounded-xl opacity-0 group-hover:opacity-10 transition-opacity">
                        </div>
                    </a>

                    <div class="relative group">
                        <button
                            class="flex items-center px-4 py-2.5 rounded-xl hover:bg-gray-700 transition-all text-white font-medium group relative">
                            <span class="relative z-10">Diensten</span>
                            <i data-lucide="chevron-down"
                                class="w-4 h-4 ml-2 group-hover:rotate-180 transition-transform relative z-10"></i>
                            <div
                                class="absolute inset-0 bg-[#E07603] rounded-xl opacity-0 group-hover:opacity-10 transition-opacity">
                            </div>
                        </button>

                        <div
                            class="absolute top-full left-0 mt-2 w-80 bg-white rounded-2xl shadow-2xl border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100">
                            <div class="p-2">
                                <a href="/Glu/jaar_3/Fysiekcoach/ergonoom"
                                    class="block p-4 hover:bg-gradient-to-r hover:from-[#E07603]/5 hover:to-gray-800/5 rounded-xl transition-all group/item">
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-10 h-10 bg-[#E07603]/10 rounded-lg flex items-center justify-center group-hover/item:bg-[#E07603] group-hover/item:text-white transition-all">
                                            <i data-lucide="monitor"
                                                class="w-5 h-5 text-[#E07603] group-hover/item:text-white"></i>
                                        </div>
                                        <div>
                                            <div
                                                class="font-semibold text-gray-900 group-hover/item:text-[#E07603] transition-colors">
                                                Ergonoom</div>
                                            <div class="text-sm text-gray-600 mt-1">Werkplekoptimalisatie en
                                                ergonomisch
                                                advies</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/Glu/jaar_3/Fysiekcoach/bedrijfs-oefentherapeut"
                                    class="block p-4 hover:bg-gradient-to-r hover:from-[#E07603]/5 hover:to-gray-800/5 rounded-xl transition-all group/item">
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-10 h-10 bg-[#E07603]/10 rounded-lg flex items-center justify-center group-hover/item:bg-[#E07603] group-hover/item:text-white transition-all">
                                            <i data-lucide="heart-pulse"
                                                class="w-5 h-5 text-[#E07603] group-hover/item:text-white"></i>
                                        </div>
                                        <div>
                                            <div
                                                class="font-semibold text-gray-900 group-hover/item:text-[#E07603] transition-colors">
                                                Bedrijfs-oefentherapeut</div>
                                            <div class="text-sm text-gray-600 mt-1">Preventie, herstel en
                                                begeleiding
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="javascript:void(0);" onclick="scrollToContact()"
                        class="bg-gradient-to-r from-[#E07603] to-[#E07603]/80 text-white px-6 py-2.5 rounded-xl hover:from-[#E07603]/90 hover:to-[#E07603]/70 transition-all font-semibold hover-lift shadow-lg hover:shadow-xl">
                        Contact
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileMenu()"
                    class="md:hidden p-3 text-white hover:bg-gray-700 rounded-xl transition-all hover-lift"
                    aria-label="Toggle menu">
                    <i data-lucide="menu" class="w-6 h-6 mobile-menu-icon"></i>
                    <i data-lucide="x" class="w-6 h-6 mobile-close-icon hidden"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden bg-white/95 backdrop-blur-md border-t border-gray-200 shadow-2xl hidden">
            <nav class="container mx-auto px-6 py-6 flex flex-col gap-3">
                <a href="javascript:void(0);" onclick="scrollToHero(); toggleMobileMenu();"
                    class="px-4 py-3 text-gray-800 hover:bg-[#E07603]/10 hover:text-[#E07603] rounded-xl transition-all font-medium">
                    Home
                </a>
                <a href="/Glu/jaar_3/Fysiekcoach/ergonoom/"
                    class="px-4 py-3 text-gray-800 hover:bg-[#E07603]/10 hover:text-[#E07603] rounded-xl transition-all font-medium">
                    Ergonoom
                </a>
                <a href="/Glu/jaar_3/Fysiekcoach/bedrijfs-oefentherapeut/"
                    class="px-4 py-3 text-gray-800 hover:bg-[#E07603]/10 hover:text-[#E07603] rounded-xl transition-all font-medium">
                    Bedrijfs-oefentherapeut
                </a>
                <a href="javascript:void(0);" onclick="scrollToContact(); toggleMobileMenu();"
                    class="px-4 py-3 bg-gradient-to-r from-[#E07603] to-[#E07603]/80 text-white rounded-xl hover:from-[#E07603]/90 transition-all text-center font-semibold">
                    Contact
                </a>
            </nav>
        </div>
    </header>
    <main class="flex-1">