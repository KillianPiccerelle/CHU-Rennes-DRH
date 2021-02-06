<div>
    <nav class="bg-gradient-to-r from-green-400 to-blue-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <p class="text-3xl font-normal text-gray-300 px-3 py-2 text-sm font-medium">CHU Rennes</p>
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                             alt="Workflow">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="{{ route('dashboard') }}"
                               class="text-xl font-normal text-gray-300 active:bg-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

                            <a href="{{ route('formationsAvailables') }}"
                               class="text-xl font-normal text-gray-300 onClick:active:bg-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Formations
                                disponibles</a>

                            <a href="{{ route('formationsValidate') }}"
                               class="text-xl font-normal text-gray-300 active:bg-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Formations
                                validées </a>

                            <!--<a href="#" class="text-gray-300 active:bg-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Demande de formation</a>-->

                            <!--<a href="#" class="text-gray-300 active:bg-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Validation des demandes de formation</a>-->
                        </div>
                    </div>
                </div>
                <div class="md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <div class="inline-block relative">
                            <form method="POST" action="{{ route('logout')}}"
                                  onclick="event.preventDefault(); this.closest('form').submit();">
                                @csrf
                                <button class="bg-gray-500 text-white active:bg-gray-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
                                <span class="mr-1">{{ __('Logout') }}</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

