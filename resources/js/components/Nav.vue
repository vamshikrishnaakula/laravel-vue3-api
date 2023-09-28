<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mt-2 mt-lg-0 ms-auto"></ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { useStore} from "vuex";
import useAuth from "@/composables/auth";
import {computed} from "vue";
import LocaleSwitcher from "../components/LocaleSwitcher.vue";

    const store = useStore();
    const user = computed(() => store.getters["auth/user"])
    const { processing, logout } = useAuth();
</script>
