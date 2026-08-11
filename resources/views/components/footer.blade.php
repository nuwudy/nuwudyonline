<footer class="bg-wens-dark text-gray-200 pt-16 pb-8 border-t-4 border-wens-green">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="md:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center mb-6">
                    <img src="{{ asset('logo.svg') }}" alt="WensDoc Logo" class="h-10 md:h-12 w-auto">
                </a>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Simplifying your global visas, document attestation, and travel needs with speed, reliability, and expertise since 2017.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-bold text-white mb-6">Quick Links</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-wens-green transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-wens-green transition-colors">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-wens-green transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-lg font-bold text-white mb-6">Our Services</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('services.attestation') }}" class="text-gray-400 hover:text-wens-green transition-colors">Attestation & Verification</a></li>
                    <li><a href="{{ route('services.visa') }}" class="text-gray-400 hover:text-wens-green transition-colors">Visa Consultancy</a></li>
                    <li><a href="{{ route('services.travel') }}" class="text-gray-400 hover:text-wens-green transition-colors">Travel & Hospitality</a></li>
                    <li><a href="{{ route('services.medical') }}" class="text-gray-400 hover:text-wens-green transition-colors">Medical Tourism</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-lg font-bold text-white mb-6">Contact Info</h4>
                <ul class="space-y-4 text-white text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-wens-green flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>{{ config('wensdoc.address') }}</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-wens-green flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:{{ config('wensdoc.email') }}" class="hover:text-wens-green transition-colors">{{ config('wensdoc.email') }}</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-wens-green flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <a href="tel:+{{ config('wensdoc.whatsapp_primary') }}" class="hover:text-wens-green transition-colors">{{ config('wensdoc.whatsapp_primary_display') }}</a> / 
                        <a href="tel:+{{ config('wensdoc.whatsapp_secondary') }}" class="hover:text-wens-green transition-colors">{{ config('wensdoc.whatsapp_secondary_display') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-400 text-sm">
                &copy; {{ date('Y') }} WensDoc. All rights reserved.
            </p>
            <a href="{{ url('/admin') }}" class="text-gray-500 hover:text-wens-green text-sm transition-colors">Admin Login</a>
        </div>
    </div>
</footer>
