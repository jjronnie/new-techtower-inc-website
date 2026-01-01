@extends('layouts.main')
@section('content')
    <div class="dashboard-wrapper" x-cloak x-data="dashboard()">
        <!-- Sidebar Overlay (Mobile) -->
        @include('layouts.dashboard.sidebar')

        <!-- Sidebar -->

        <!-- Top Navigation -->
        @include('layouts.dashboard.nav')

        <!-- Main Content Area -->

        <main class="main-content">


            {{ $slot }}
        </main>
    </div>


    <script>
            // Dashboard Alpine.js Component
    function dashboard() {
        return {
            sidebarOpen: window.innerWidth >= 1024,
            notificationOpen: false,
            userMenuOpen: false,
            notificationCount: 2,
            activeMenu: 'dashboard',
            
            init() {
                // Set sidebar state based on screen size
                this.sidebarOpen = window.innerWidth >= 1024;
                
                // Handle window resize
                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 1024) {
                        // Always open on desktop
                        this.sidebarOpen = true;
                    } else {
                        // Closed by default on mobile
                        this.sidebarOpen = false;
                    }
                });
            },
            
            toggleSidebar() {
                // Only toggle on mobile (desktop sidebar is always visible)
                if (window.innerWidth < 1024) {
                    this.sidebarOpen = !this.sidebarOpen;
                }
            },
            
            handleNotificationClick() {
                // On mobile, close sidebar before opening notification dropdown
                if (window.innerWidth < 1024 && this.sidebarOpen) {
                    this.sidebarOpen = false;
                    // Small delay to ensure sidebar closes first
                    setTimeout(() => {
                        this.notificationOpen = !this.notificationOpen;
                    }, 100);
                } else {
                    this.notificationOpen = !this.notificationOpen;
                }
            },
            
            handleUserMenuClick() {
                // On mobile, close sidebar before opening user menu dropdown
                if (window.innerWidth < 1024 && this.sidebarOpen) {
                    this.sidebarOpen = false;
                    // Small delay to ensure sidebar closes first
                    setTimeout(() => {
                        this.userMenuOpen = !this.userMenuOpen;
                    }, 100);
                } else {
                    this.userMenuOpen = !this.userMenuOpen;
                }
            },
            
            setActive(menu) {
                this.activeMenu = menu;
                // On mobile, close sidebar after navigation
                if (window.innerWidth < 1024) {
                    this.sidebarOpen = false;
                }
            }
        }
    }
    </script>
@endsection
