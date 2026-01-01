<x-guest-layout>

 <section class="relative pt-32 pb-16 px-4 hero-bg hero-grid-bg">
    <div class="max-w-7xl mx-auto text-center">
           <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-4">Our
                    PROJECTS</span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-bold mb-6">
           Showcasing Our <span class="text-gradient"> Impactful Work</span>
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            Explore a selection of projects that highlight our technical expertise, creative problem-solving, and commitment to delivering outstanding digital solutions for diverse clients.
        </p>
    </div>
</section>


 <!-- Portfolio Section -->
    <section id="portfolio" class="py-2 px-4 bg-gradient-to-b from-transparent to-black/30">
        <div class="max-w-7xl mx-auto">
         

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="project in recentProjects" :key="project.id">
                    <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer"
                        @click="openProjectModal(project)">
                        <div class="relative aspect-[4/3]">
                            <img :src="project.image" :alt="project.title" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent">
                            </div>
                            <span class="badge badge-new" x-text="project.badge"></span>
                           
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div class="flex items-center text-sm mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star-half-alt text-xs"></i>
                                    </div>
                                    <span class="text-gray-400 ml-2" x-text="'(' + project.rating + ')'"></span>
                                </div>
                                <h3 class="text-xl font-display font-bold mb-2" x-text="project.title"></h3>
                                <p class="text-gray-300 text-sm mb-4" x-text="project.description"></p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-400" x-text="project.category"></span>
                                    <span class="text-[--primary] font-display font-bold flex items-center space-x-2">
                                        <span>View Details</span>
                                        <i
                                            class="fas fa-arrow-right text-sm transform group-hover:translate-x-1 transition"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div class="text-center mt-12 sm:hidden">
                <a href="/portfolio.html" class="btn-primary rounded-xl inline-flex items-center space-x-2">
                    <span>VIEW ALL PROJECTS</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


   

</x-guest-layout>
