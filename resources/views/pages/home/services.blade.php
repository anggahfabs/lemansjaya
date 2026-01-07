<section class="relative py-16 md:py-32 bg-gradient-to-b from-white to-gray-50 overflow-hidden">
    {{-- Simplified background gradient for seamless transition from brands --}}
    <div class="absolute inset-0 bg-gradient-to-b from-white via-gray-50 to-white"></div>
    
    {{-- Enhanced abstract background with deeper gradients --}}
    <div class="absolute top-20 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-yellow-500/10 via-yellow-600/5 to-transparent rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-0 w-[500px] h-[500px] bg-gradient-to-tr from-yellow-600/10 via-yellow-500/5 to-transparent rounded-full blur-3xl"></div>
    
    {{-- Enhanced decorative shapes with glow --}}
    <div class="absolute top-1/4 right-10 w-32 h-32 border-2 border-yellow-200/30 rounded-3xl rotate-12 hidden lg:block shadow-lg shadow-yellow-500/5"></div>
    <div class="absolute bottom-1/3 left-10 w-24 h-24 bg-yellow-500/10 rounded-2xl -rotate-12 hidden lg:block shadow-lg shadow-yellow-500/10"></div>
    
    {{-- Subtle Grid Pattern --}}
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(circle, #3b82f6 1px, transparent 1px); background-size: 40px 40px;"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        {{-- Header Section --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 md:mb-20 gap-8" data-aos="fade-up">
            <div class="max-w-2xl">
                {{-- Enhanced badge with glow effect --}}
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full shadow-lg shadow-yellow-500/50"></div>
                    <span class="text-yellow-400 font-semibold text-xs uppercase tracking-wider">Professional Care</span>
                </div>
                {{-- Title with soft gradient text --}}
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight px-2 md:px-0">
                    Our Exclusive
                    <span class="block mt-1 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-200 bg-clip-text text-transparent">Pet Services</span>
                </h1>
                <p class="text-gray-600 text-sm md:text-lg mt-4 max-w-xl px-2 md:px-0 text-center md:text-left">Providing premium care and comfort for your beloved companions</p>
            </div>
            
            {{-- Enhanced button with glassmorphism and glow --}}
    
            <a href="{{ route('services.index') }}" class="group relative bg-gradient-to-r from-gray-900 to-gray-800 text-white px-8 md:px-10 py-4 md:py-5 rounded-2xl font-bold flex items-center gap-4 hover:from-yellow-600 hover:to-yellow-600 transition-all duration-500 shadow-2xl shadow-gray-900/20 hover:shadow-yellow-500/30 text-sm overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/0 via-white/10 to-yellow-400/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000"></div>
                <span class="relative">View All Sservices</span>
                <svg class="relative w-5 h-5 md:w-6 md:h-6 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

        {{-- Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $index => $service)
                <div 
                    class="group relative bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden border border-gray-100 hover:border-yellow-200 hover:shadow-2xl hover:shadow-yellow-500/20 hover:-translate-y-2 transition-all duration-500"
                    data-aos="fade-up" 
                    data-aos-delay="{{ $index * 100 }}"
                >
                    {{-- Image Container --}}
                    <div class="relative h-56 md:h-72 overflow-hidden">
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-yellow-50 to-yellow-100/50 flex items-center justify-center">
                                <svg class="w-20 h-20 text-yellow-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </div>
                        @endif
                        
                        {{-- Smoother overlay gradient --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        {{-- Enhanced badge with backdrop blur and glow --}}
                        <div class="absolute top-6 right-6 bg-white/95 backdrop-blur-md px-4 py-2 rounded-full shadow-lg shadow-yellow-500/20">
                            <span class="text-yellow-600 font-semibold text-xs uppercase tracking-wide">Premium</span>
                        </div>
                    </div>
                    
                    {{-- Content --}}
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 md:mb-3 group-hover:text-yellow-600 transition-colors leading-tight">
                            {{ $service->name }}
                        </h3>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed mb-6 line-clamp-2">
                            {{ $service->description }}
                        </p>
                        
                        {{-- Enhanced link with smoother animation --}}
                        <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 text-yellow-600 font-semibold text-sm group-hover:gap-3 transition-all hover:text-yellow-700">
                            Learn More
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                    
                    {{-- Enhanced decorative corner with gradient --}}
                    <div class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-tl from-yellow-500/10 to-transparent rounded-tl-[3rem] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>
