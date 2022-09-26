<template>

    <div>
        <nav>

            <div class="container">
                <router-link to="/">
                    <img src="img/deliveboo.png" alt="Deliveboo Logo">
                </router-link>

                <div class="nav-btn">

                    <button class="white-btn" type="button">
                        <i class="fa-solid fa-chevron-down"></i>
                        <span>Collabora con noi</span>
                    </button>

                    <button class="white-btn" type="button">
                        <i class="fa-solid fa-house"></i>
                        <a href="/login"><span>Registrati o accedi</span></a>
                    </button>

                    <button class="white-btn" type="button">
                        <i class="fa-solid fa-bars"></i>
                        <span>Menu</span>
                    </button>

                    <!-- <router-link to="/restaurant">Ristorante</router-link> -->
                </div>
            </div>

        </nav>
    </div>

</template>

<script>

export default {
    name: 'Navbar'
}

</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import 'resources/sass/frontend/buttons.scss';

nav {
    background-color: black;
    height: 70px;
    font-family: 'Source Sans Pro', sans-serif;
    
    .container {
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;

            img {
                width: 130px;
            }

            .nav-btn {
                display: flex;
                align-items: center;
                gap: 13px;

                i {
                    font-size: .9rem;
                    padding: 0 6px 0 4px;

                    &.fa-solid {
                        color: $deliveroo-blue;
                    }
                }
            }
        }
    }

</style>