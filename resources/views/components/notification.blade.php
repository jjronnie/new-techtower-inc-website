<div
    x-data="{
        colors: {
            success: { text: 'text-emerald-400', progress: 'bg-emerald-400' },
            info: { text: 'text-sky-400', progress: 'bg-sky-400' },
            warning: { text: 'text-amber-400', progress: 'bg-amber-400' },
            error: { text: 'text-rose-400', progress: 'bg-rose-400' },
            neutral: { text: 'text-gray-300', progress: 'bg-gray-300' }
        },
        alerts: [],
        add(message, type = 'neutral', duration = 5000) {
            this.alerts.push({
                id: Date.now(),
                message,
                type,
                duration,
                remaining: duration,
                isPaused: false,
                isVisible: false,
            });
            this.updateAlerts();
        },
        updateAlerts() {
            this.alerts.forEach((alert, index) => {
                if (!alert.isVisible) {
                    setTimeout(() => {
                        this.alerts[index].isVisible = true;
                        this.startTimer(alert.id);
                    }, index * 80);
                }
            });
        },
        startTimer(id) {
            const alert = this.alerts.find(a => a.id === id);
            if (!alert || alert.isPaused) return;

            let start = null;
            const animate = (t) => {
                if (!start) start = t;
                const elapsed = t - start;

                if (!alert.isPaused) {
                    alert.remaining = Math.max(0, alert.remaining - elapsed);
                }

                if (alert.remaining > 0) {
                    start = t;
                    if (!alert.isPaused) requestAnimationFrame(animate);
                } else {
                    this.remove(alert.id);
                }
            };
            requestAnimationFrame(animate);
        },
        togglePause(id) {
            const alert = this.alerts.find(a => a.id === id);
            if (!alert) return;
            alert.isPaused = !alert.isPaused;
            if (!alert.isPaused) this.startTimer(id);
        },
        remove(id) {
            const alert = this.alerts.find(a => a.id === id);
            if (!alert) return;
            alert.isVisible = false;
            setTimeout(() => {
                this.alerts = this.alerts.filter(a => a.id !== id);
            }, 300);
        }
    }"
    x-init="
        @if(session('success')) add('{{ session('success') }}','success'); @endif
        @if(session('info')) add('{{ session('info') }}','info'); @endif
        @if(session('warning')) add('{{ session('warning') }}','warning'); @endif
        @if(session('error')) add('{{ session('error') }}','error'); @endif
        @if(session('status')) add('{{ session('status') }}','success'); @endif
    "
    class="fixed inset-x-0 top-6 z-[9999] flex flex-col items-center gap-3 px-4 pointer-events-none"
>
    <template x-for="alert in alerts" :key="alert.id">
        <div
            x-show="alert.isVisible"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 -translate-y-6 scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 -translate-y-6 scale-95"
            @mouseenter="togglePause(alert.id)"
            @mouseleave="togglePause(alert.id)"
            class="pointer-events-auto w-full max-w-md rounded-2xl border border-white/10 bg-white/10 backdrop-blur-xl shadow-xl overflow-hidden"
            role="alert"
        >
            <div class="px-5 py-4 flex items-start gap-4">
                <div class="mt-0.5" :class="colors[alert.type].text">
                    <template x-if="alert.type === 'success'"><x-lucide-circle-check-big class="w-6 h-6"/></template>
                    <template x-if="alert.type === 'info'"><x-lucide-info class="w-6 h-6"/></template>
                    <template x-if="alert.type === 'warning'"><x-lucide-alert-triangle class="w-6 h-6"/></template>
                    <template x-if="alert.type === 'error'"><x-lucide-x-circle class="w-6 h-6"/></template>
                    <template x-if="alert.type === 'neutral'"><x-lucide-circle-help class="w-6 h-6"/></template>
                </div>

                <p class="flex-1 text-sm text-gray-100 leading-relaxed"
                   x-text="alert.message"></p>

                <button
                    @click="remove(alert.id)"
                    class="text-gray-400 hover:text-white transition p-1 -m-1"
                >
                    <x-lucide-x class="w-5 h-5"/>
                </button>
            </div>

            <div class="h-[2px] bg-white/10">
                <div
                    class="h-full transition-all"
                    :class="colors[alert.type].progress"
                    :style="{ width: (alert.remaining / alert.duration) * 100 + '%' }"
                ></div>
            </div>
        </div>
    </template>
</div>
