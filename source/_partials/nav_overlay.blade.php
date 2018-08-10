<transition name="fade" v-cloak>
    <div class="nav-overlay" v-if="navIsOpen" v-bind:class="{show : navIsOpen}">
        @include('_partials.nav')
    </div>
</transition>
