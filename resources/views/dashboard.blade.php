<x-app-layout>


    <!-- Your dashboard content goes here -->
        <div class="mb-8">
            <h1 class="text-3xl font-display font-bold mb-2">Welcome back, <span class="text-gradient">{{ auth()->user()->name }}</span></h1>
            <p class="text-gray-400">Here's what's happening with your projects today.</p>
        </div>
        
        <!-- Example Stats Cards -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-[--primary]/20 flex items-center justify-center">
                        <x-lucide-briefcase class="w-4 h-4 text-[--primary]" />
                    </div>
                    <span class="text-xs text-green-400 font-display">+12%</span>
                </div>
                <div class="text-2xl font-display font-bold mb-1">156</div>
                <div class="text-sm text-gray-400">Active Projects</div>
            </div>
            
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center">
                        <x-lucide-users class="w-4 h-4 text-blue-400" />
                    </div>
                    <span class="text-xs text-green-400 font-display">+8%</span>
                </div>
                <div class="text-2xl font-display font-bold mb-1">2,543</div>
                <div class="text-sm text-gray-400">Total Clients</div>
            </div>
            
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-green-500/20 flex items-center justify-center">
                        <x-lucide-dollar-sign class="w-4 h-4 text-green-400" />
                    </div>
                    <span class="text-xs text-green-400 font-display">+23%</span>
                </div>
                <div class="text-2xl font-display font-bold mb-1">$45.2K</div>
                <div class="text-sm text-gray-400">Revenue</div>
            </div>
            
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center">
                        <x-lucide-trending-up class="w-4 h-4 text-purple-400" />
                    </div>
                    <span class="text-xs text-green-400 font-display">+5%</span>
                </div>
                <div class="text-2xl font-display font-bold mb-1">89%</div>
                <div class="text-sm text-gray-400">Success Rate</div>
            </div>
        </div>
        
        <!-- Placeholder for more content -->
        <div class="glass rounded-2xl p-8 text-center">
            <x-lucide-layout class="w-4 h-4 text-gray-600 mx-auto mb-4" />
            <h3 class="text-xl font-display font-bold mb-2">Your Content Here</h3>
            <p class="text-gray-400">This is the main content area. Add your dashboard widgets, charts, and data here.</p>
        </div>


</x-app-layout>
