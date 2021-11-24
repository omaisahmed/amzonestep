<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
        @include('partials.head')
    <body>
        <!-- <x-jet-banner /> -->

        <!-- <div class="min-h-screen bg-gray-100"> -->
            @include('partials.navigation')

            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        <!-- </div> -->

        @include('partials.footer')
        @include('partials.scripts')


        <!-- @stack('modals')  -->
        <!-- @livewireScripts -->
    </body>
</html>
