<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div x-data="couplesData">
            @once('register-styles')
                @include('livewire.cssblade.register.csstyles')
            @endonce
            <div x-show="isIntro" x-cloak
                x-transition:enter="fade-enter-active"
                x-transition:enter-start="fade-enter-from"
                x-transition:enter-end="fade-enter-to"
                x-transition:leave="fade-leave-active"
                x-transition:leave-start="fade-leave-from"
                x-transition:leave-end="fade-leave-to"
            >
                @include('livewire.inc.intro')
            </div>
            <div x-show="isRegister" x-cloak
                x-transition:enter="fade-enter-active"
                x-transition:enter-start="fade-enter-from"
                x-transition:enter-end="fade-enter-to"
                x-transition:leave="fade-leave-active"
                x-transition:leave-start="fade-leave-from"
                x-transition:leave-end="fade-leave-to"
            >
                @include('livewire.inc.registerForm')
            </div>
            <div x-show="isEnd" x-cloak
                x-transition:enter="fade-enter-active"
                x-transition:enter-start="fade-enter-from"
                x-transition:enter-end="fade-enter-to"
                x-transition:leave="fade-leave-active"
                x-transition:leave-start="fade-leave-from"
                x-transition:leave-end="fade-leave-to"
            >
                @include('livewire.inc.end')
            </div>
        </div>
        @script
            <script>
                Alpine.data('couplesData', () => ({
                    isIntro: true,
                    isRegister: false,
                    isEnd: false,
                    startRegisterFunc(){
                        this.isIntro=false;
                        this.isEnd=false;
                        this.isRegister=true;
                    },
                    init() {
                        $wire.on('endRegister', () => {
                            this.isIntro=false;
                            this.isEnd=true;
                            this.isRegister=false;
                         });
                    }


                }));
            </script>
        @endscript
    </div>

</div>
