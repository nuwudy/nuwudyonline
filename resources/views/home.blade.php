<x-layout title="WensDoc | Global Visas, Attestation & Travel Needs">
    
    <!-- Hero Section -->
    <section class="relative bg-wens-light overflow-hidden">
        
        <!-- Custom Animations for Hero & Ticker -->
        <style>
            @keyframes float-slow { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
            @keyframes float-fast { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
            @keyframes fly-diagonal { 0%, 100% { transform: translate(0, 0) rotate(15deg); } 50% { transform: translate(15px, -15px) rotate(15deg); } }
            @keyframes spin-slow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
            @keyframes ticker-scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
            
            .animate-float-slow { animation: float-slow 4s ease-in-out infinite; }
            .animate-float-fast { animation: float-fast 2.5s ease-in-out infinite; }
            .animate-fly { animation: fly-diagonal 3s ease-in-out infinite; }
            .animate-spin-slow { animation: spin-slow 12s linear infinite; }
            .animate-ticker { animation: ticker-scroll 35s linear infinite; display: flex; width: max-content; }
            .ticker-container:hover .animate-ticker { animation-play-state: paused; }
        </style>

        <!-- Services Ticker -->
        <div class="bg-wens-blue text-white overflow-hidden py-2.5 relative z-20 shadow-md ticker-container border-b border-wens-green">
            <div class="animate-ticker text-sm md:text-base tracking-wide font-medium">
                <!-- Group 1 -->
                <div class="flex items-center">
                    <span class="mx-6">✨ Dataflow Verification</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">✈️ Umrah Visas</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🌍 5-Year UAE Multi-Entry Visa</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🛂 Saudi & Dubai Tourist Visas</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">📜 Certificate Attestation</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">✔️ Apostille Services</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🏥 Medical Tourism</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🏨 Hotel Bookings</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🎫 Flight Ticketing</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🌴 Worldwide Tour Packages</span>
                    <span class="mx-6 text-wens-green">•</span>
                </div>
                <!-- Group 2 (Duplicate for seamless loop) -->
                <div class="flex items-center">
                    <span class="mx-6">✨ Dataflow Verification</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">✈️ Umrah Visas</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🌍 5-Year UAE Multi-Entry Visa</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🛂 Saudi & Dubai Tourist Visas</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">📜 Certificate Attestation</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">✔️ Apostille Services</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🏥 Medical Tourism</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🏨 Hotel Bookings</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🎫 Flight Ticketing</span>
                    <span class="mx-6 text-wens-green">•</span>
                    <span class="mx-6">🌴 Worldwide Tour Packages</span>
                    <span class="mx-6 text-wens-green">•</span>
                </div>
            </div>
        </div>

        <!-- Animated Background Icons -->
        <div class="absolute inset-0 pointer-events-none z-0 block overflow-hidden">
            
            <!-- 1. Document with Stamp (Top Left) -->
            <div class="absolute top-[2%] left-[2%] md:top-[15%] md:left-[5%] text-wens-blue opacity-50 md:opacity-80 animate-float-slow block">
                <svg class="w-20 h-20 md:w-32 md:h-32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <path d="M16 13H8"/>
                    <path d="M16 17H8"/>
                    <path d="M10 9H8"/>
                    <circle cx="15" cy="18" r="3" class="text-wens-green" stroke-width="2"/>
                    <path d="m14.5 17.5 1 1 2-2" class="text-wens-green" stroke-width="2"/>
                </svg>
            </div>

            <!-- 2. Passport (Bottom Left) -->
            <div class="absolute bottom-[5%] left-[5%] md:bottom-[10%] md:left-[8%] text-wens-green opacity-50 md:opacity-90 animate-float-fast block" style="animation-delay: 1s;">
                <svg class="w-20 h-20 md:w-24 md:h-24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" transform="rotate(-15)">
                    <rect x="4" y="2" width="16" height="20" rx="2" ry="2"/>
                    <circle cx="12" cy="10" r="3"/>
                    <path d="M8 18h8"/>
                    <path d="M12 13v2"/>
                    <path d="M4 6h16"/>
                </svg>
            </div>

            <!-- 3. Airplane (Center Right) -->
            <div class="absolute top-[5%] right-[2%] md:top-[25%] md:right-[20%] text-wens-blue opacity-50 md:opacity-85 animate-fly block">
                <svg class="w-20 h-20 md:w-40 md:h-40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/>
                </svg>
            </div>

            <!-- 4. Flight Tickets (Far Right) -->
            <div class="absolute top-[40%] right-[2%] md:top-[40%] md:right-[5%] text-wens-blue opacity-50 md:opacity-80 animate-float-slow block" style="animation-delay: 2s;">
                <svg class="w-20 h-20 md:w-28 md:h-28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" transform="rotate(15)">
                    <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
                    <path d="M9 5v14" stroke-dasharray="2 2"/>
                    <path d="M13 10l2 2-2 2"/>
                </svg>
            </div>
            
            <!-- 5. Approved Badge (Bottom Right) -->
            <div class="absolute bottom-[25%] right-[5%] md:bottom-[15%] md:right-[20%] text-wens-green opacity-50 md:opacity-90 animate-float-fast block" style="animation-delay: 0.5s;">
                <svg class="w-20 h-20 md:w-32 md:h-32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" transform="rotate(-10)">
                    <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
                    <path d="m9 12 2 2 4-4" stroke-width="2"/>
                </svg>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-40 pb-32">
            <div class="max-w-3xl">
                <span class="inline-block py-1 px-3 rounded text-wens-green text-sm font-bold tracking-wide mb-6 uppercase border border-wens-green bg-white">
                    Trusted by Travelers Worldwide
                </span>
                <h1 class="text-5xl md:text-6xl font-bold tracking-tight mb-6 leading-tight text-wens-blue">
                    Simplifying Your <span class="text-wens-green">Global Visas</span>, Attestation, Apostille & Travel Needs
                </h1>
                <p class="text-xl text-wens-dark mb-10 max-w-2xl leading-relaxed">
                    Fast, reliable, and expert services since 2017. From Apostille and Dataflow verification to Umrah visas and worldwide tour packages, we handle the complexity so you don't have to.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('services.attestation') }}" class="bg-wens-blue hover:bg-wens-blue-hover text-white px-8 py-4 rounded font-bold text-lg shadow-md transition-all duration-300 flex items-center justify-center text-center">
                        Explore Services
                    </a>
                    <a href="https://wa.me/{{ config('wensdoc.whatsapp_primary') }}?text=Hi%20WensDoc,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" class="bg-wens-green hover:bg-wens-green-hover text-white px-8 py-4 rounded font-bold text-lg shadow-xl transition-all duration-300 flex items-center justify-center gap-2 group">
                        Chat on WhatsApp
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-wens-blue mb-4">Our Premium Services</h2>
                <p class="text-lg text-wens-dark">Comprehensive solutions tailored for your global aspirations.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 md:gap-6">
                <!-- Attestation -->
                <a href="{{ route('services.attestation') }}" class="group bg-white rounded-xl md:rounded p-4 md:p-6 border border-gray-300 hover:border-wens-green shadow-md hover:shadow-xl hover:-translate-y-1 md:hover:-translate-y-2 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 left-0 w-1 h-full bg-wens-blue group-hover:bg-wens-green transition-colors"></div>
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-wens-light text-wens-blue rounded-lg flex items-center justify-center mb-3 md:mb-5 group-hover:text-wens-green group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col gap-1 mb-2">
                        <span class="bg-wens-blue text-white rounded px-1.5 py-0.5 text-[8px] md:text-[10px] font-bold w-fit">DOC</span>
                        <h3 class="text-sm md:text-lg font-bold text-wens-blue leading-tight">Attestation & Dataflow</h3>
                    </div>
                    <p class="text-xs md:text-sm text-wens-dark mb-3 md:mb-4 line-clamp-2 md:line-clamp-3 flex-grow">Educational, Personal, Commercial Certificate Attestation and Medical PSV Dataflow Verification.</p>
                    <span class="text-wens-green text-xs md:text-sm font-bold flex items-center gap-1 group-hover:translate-x-1 md:group-hover:translate-x-2 transition-transform mt-auto">
                        Learn more <svg class="w-3 h-3 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </span>
                </a>

                <!-- Apostille -->
                <a href="{{ route('services.apostille') }}" class="group bg-white rounded-xl md:rounded p-4 md:p-6 border border-gray-300 hover:border-wens-green shadow-md hover:shadow-xl hover:-translate-y-1 md:hover:-translate-y-2 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 left-0 w-1 h-full bg-wens-blue group-hover:bg-wens-green transition-colors"></div>
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-wens-light text-wens-blue rounded-lg flex items-center justify-center mb-3 md:mb-5 group-hover:text-wens-green group-hover:scale-110 group-hover:-rotate-12 transition-all duration-300">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <div class="flex flex-col gap-1 mb-2">
                        <span class="bg-wens-blue text-white rounded px-1.5 py-0.5 text-[8px] md:text-[10px] font-bold w-fit">LEGAL</span>
                        <h3 class="text-sm md:text-lg font-bold text-wens-blue leading-tight">Apostille Services</h3>
                    </div>
                    <p class="text-xs md:text-sm text-wens-dark mb-3 md:mb-4 line-clamp-2 md:line-clamp-3 flex-grow">Fast and reliable Apostille services for all your personal and commercial documents.</p>
                    <span class="text-wens-green text-xs md:text-sm font-bold flex items-center gap-1 group-hover:translate-x-1 md:group-hover:translate-x-2 transition-transform mt-auto">
                        Learn more <svg class="w-3 h-3 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </span>
                </a>

                <!-- Visas -->
                <a href="{{ route('services.visa') }}" class="group bg-white rounded-xl md:rounded p-4 md:p-6 border border-gray-300 hover:border-wens-green shadow-md hover:shadow-xl hover:-translate-y-1 md:hover:-translate-y-2 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 left-0 w-1 h-full bg-wens-blue group-hover:bg-wens-green transition-colors"></div>
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-wens-light text-wens-blue rounded-lg flex items-center justify-center mb-3 md:mb-5 group-hover:text-wens-green group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col gap-1 mb-2">
                        <span class="bg-wens-blue text-white rounded px-1.5 py-0.5 text-[8px] md:text-[10px] font-bold w-fit">VISA</span>
                        <h3 class="text-sm md:text-lg font-bold text-wens-blue leading-tight">Global Visas</h3>
                    </div>
                    <p class="text-xs md:text-sm text-wens-dark mb-3 md:mb-4 line-clamp-2 md:line-clamp-3 flex-grow">Umrah Visa, 5-Year UAE/Saudi Multi-Entry, Dubai/Oman/Bahrain/Qatar Tourist & Visit Visas.</p>
                    <span class="text-wens-green text-xs md:text-sm font-bold flex items-center gap-1 group-hover:translate-x-1 md:group-hover:translate-x-2 transition-transform mt-auto">
                        Learn more <svg class="w-3 h-3 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </span>
                </a>

                <!-- Travel -->
                <a href="{{ route('services.travel') }}" class="group bg-white rounded-xl md:rounded p-4 md:p-6 border border-gray-300 hover:border-wens-green shadow-md hover:shadow-xl hover:-translate-y-1 md:hover:-translate-y-2 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 left-0 w-1 h-full bg-wens-blue group-hover:bg-wens-green transition-colors"></div>
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-wens-light text-wens-blue rounded-lg flex items-center justify-center mb-3 md:mb-5 group-hover:text-wens-green group-hover:scale-110 group-hover:-rotate-12 transition-all duration-300">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                    </div>
                    <div class="flex flex-col gap-1 mb-2">
                        <span class="bg-wens-blue text-white rounded px-1.5 py-0.5 text-[8px] md:text-[10px] font-bold w-fit">TRAVEL</span>
                        <h3 class="text-sm md:text-lg font-bold text-wens-blue leading-tight">Travel & Tours</h3>
                    </div>
                    <p class="text-xs md:text-sm text-wens-dark mb-3 md:mb-4 line-clamp-2 md:line-clamp-3 flex-grow">Worldwide Hotel Bookings, Tour Packages, Domestic & International Flight Ticketing.</p>
                    <span class="text-wens-green text-xs md:text-sm font-bold flex items-center gap-1 group-hover:translate-x-1 md:group-hover:translate-x-2 transition-transform mt-auto">
                        Learn more <svg class="w-3 h-3 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 bg-wens-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-wens-blue mb-6">Why Choose <span class="text-wens-green">WensDoc</span>?</h2>
                    <p class="text-lg text-wens-dark mb-8 leading-relaxed">
                        With years of industry expertise since 2017, we provide a seamless, hassle-free experience for all your documentation and travel needs. Our dedicated team ensures accuracy, speed, and absolute confidentiality.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-wens-green flex-shrink-0 mt-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-wens-blue">Express Processing</h4>
                                <p class="text-wens-dark">Fast-tracked verification and visa processing to save your valuable time.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-wens-green flex-shrink-0 mt-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-wens-blue">100% Reliable & Secure</h4>
                                <p class="text-wens-dark">Your documents are handled with the utmost security and confidentiality.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-wens-green flex-shrink-0 mt-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-wens-blue">Global Expertise</h4>
                                <p class="text-wens-dark">Specialized knowledge in GCC, Europe, and worldwide travel requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 relative">
                    <div class="absolute inset-0 bg-wens-green transform rounded translate-x-4 translate-y-4"></div>
                    <img src="https://wensdoc.com/storage/ebc3022f-66e5-452f-9c93-84031d0c9b2b.png" alt="WensDoc Professional Services" class="rounded shadow-2xl relative z-10 w-full object-cover h-[500px]">
                </div>
            </div>
        </div>
    </section>

</x-layout>
