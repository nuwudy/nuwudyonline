<x-layout title="{{ $title }} | WensDoc" :whatsappMessage="'Hi WensDoc, I need information regarding ' . $title">
    
    <!-- Page Header -->
    <section class="bg-wens-light py-20 border-b border-gray-200 pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-wens-blue mb-4">{{ $title }}</h1>
            <div class="flex items-center justify-center gap-2 text-wens-dark font-medium">
                <a href="{{ route('home') }}" class="hover:text-wens-green transition-colors">Home</a>
                <span>/</span>
                <span>Services</span>
                <span>/</span>
                <span class="text-wens-green">{{ $title }}</span>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($service !== 'attestation')
            <div class="max-w-4xl mx-auto bg-white rounded p-8 md:p-12 shadow-sm hover:shadow-lg border border-gray-100 hover:border-wens-green transition-all text-center mb-16">
                <div class="w-20 h-20 bg-wens-light text-wens-blue rounded flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10 text-wens-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold text-wens-blue mb-6">Expert <span class="text-wens-green">{{ $title }}</span> Services</h2>
                <p class="text-lg text-wens-dark mb-10 leading-relaxed">
                    We provide comprehensive, end-to-end solutions for all your {{ strtolower($title) }} needs. Our experienced team ensures a smooth, fast, and hassle-free process from start to finish.
                </p>
                
                <a href="https://wa.me/{{ config('wensdoc.whatsapp_primary') }}?text={{ urlencode('Hi WensDoc, I need information regarding ' . $title) }}" target="_blank" class="inline-flex items-center gap-2 bg-wens-green hover:bg-wens-green-hover text-white px-8 py-4 rounded font-bold text-lg shadow-md transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.666.598 1.236.784 1.409.871.173.087.275.072.376-.043.1-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825 0 6.938 3.112 6.938 6.937 0 3.825-3.113 6.938-6.938 6.938z"/></svg>
                    Inquire via WhatsApp
                </a>
            </div>
            @endif

            @if($service === 'attestation')
            <div>
                <h3 class="text-3xl md:text-4xl font-bold text-wens-blue text-center mb-12">Expert Attestation & Dataflow Verification Services</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Embassy Attestation -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-wens-green shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 bg-wens-light text-wens-blue rounded flex items-center justify-center mb-5 group-hover:text-wens-green transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-wens-blue mb-3">Embassy Attestation</h4>
                        <p class="text-wens-dark leading-relaxed">Securing an embassy attestation is a mandatory step when applying for a visa to study or work abroad. It validates your official documents for international travel and official recognition.</p>
                    </div>

                    <!-- MEA Attestation -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-wens-green shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 bg-wens-light text-wens-blue rounded flex items-center justify-center mb-5 group-hover:text-wens-green transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-wens-blue mb-3">MEA Attestation</h4>
                        <p class="text-wens-dark leading-relaxed">Ministry of External Affairs (MEA) attestation is a critical phase in document legalization. This procedure is performed after completing initial state-level HRD verification.</p>
                    </div>

                    <!-- HRD Attestation -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-wens-green shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 bg-wens-light text-wens-blue rounded flex items-center justify-center mb-5 group-hover:text-wens-green transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-wens-blue mb-3">HRD Attestation</h4>
                        <p class="text-wens-dark leading-relaxed">HRD attestation involves verifying educational credentials through the respective State Human Resource Development department, confirming the legitimacy of your academic records.</p>
                    </div>

                    <!-- MOFA Attestation -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-wens-green shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 bg-wens-light text-wens-blue rounded flex items-center justify-center mb-5 group-hover:text-wens-green transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-wens-blue mb-3">MOFA Attestation</h4>
                        <p class="text-wens-dark leading-relaxed">Ministry of Foreign Affairs (MOFA) attestation serves as the final clearance in the certificate verification process, ensuring full compliance with destination country laws.</p>
                    </div>

                    <!-- Apostille Attestation -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-wens-green shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 bg-wens-light text-wens-blue rounded flex items-center justify-center mb-5 group-hover:text-wens-green transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-wens-blue mb-3">Apostille Attestation</h4>
                        <p class="text-wens-dark leading-relaxed">Apostille authentication is required for individuals traveling to Hague Convention member nations. It covers both personal certificates and academic documents.</p>
                    </div>

                    <!-- PCC Attestation -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-wens-green shadow-sm hover:shadow-md transition-all group">
                        <div class="w-12 h-12 bg-wens-light text-wens-blue rounded flex items-center justify-center mb-5 group-hover:text-wens-green transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-wens-blue mb-3">PCC Attestation</h4>
                        <p class="text-wens-dark leading-relaxed">A Police Clearance Certificate (PCC) confirms a clean background record and is necessary for securing foreign employment, starting a business abroad, higher education, or residence visas.</p>
                    </div>

                    <!-- DataFlow Verification -->
                    <div class="bg-white rounded-xl p-8 border border-gray-200 hover:border-wens-green shadow-sm hover:shadow-md transition-all group md:col-span-2 lg:col-span-1">
                        <div class="w-12 h-12 bg-wens-light text-wens-blue rounded flex items-center justify-center mb-5 group-hover:text-wens-green transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-wens-blue mb-3">DataFlow Verification</h4>
                        <p class="text-wens-dark leading-relaxed">DataFlow background screening confirms the authenticity of your qualifications and screens against fraud, making it an essential requirement for overseas employment.</p>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="https://wa.me/{{ config('wensdoc.whatsapp_primary') }}?text={{ urlencode('Hi WensDoc, I need information regarding ' . $title) }}" target="_blank" class="inline-flex items-center gap-2 bg-wens-green hover:bg-wens-green-hover text-white px-8 py-4 rounded font-bold text-lg shadow-md transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.666.598 1.236.784 1.409.871.173.087.275.072.376-.043.1-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825 0 6.938 3.112 6.938 6.937 0 3.825-3.113 6.938-6.938 6.938z"/></svg>
                        Inquire via WhatsApp
                    </a>
                </div>
            </div>
            @endif
        </div>
    </section>

</x-layout>
