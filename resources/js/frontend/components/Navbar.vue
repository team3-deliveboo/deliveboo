<template>
    <div>
        <nav>
            <div class="container">

                <!-- LOGO -->
                <router-link to="/">
                    <img src="img/deliveboo.png" alt="Deliveboo Logo">
                </router-link>
        
                <!-- NAV BUTTONS -->
                <div class="nav-btn">
                    <a href="/login">
                        <button class="white-btn" type="button">
                            <i class="fa-solid fa-house"></i>
                            <span class="d-none d-sm-inline">Registrati o accedi</span>
                        </button>
                    </a>

                    <a href="/admin/users">
                        <button class="white-btn d-none d-md-block" type="button">
                            <i class="fa-solid fa-user"></i>
                            <span>Home</span>
                        </button>
                    </a>

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
    height: 70px;
    font-family: 'Source Sans Pro', sans-serif;
    color: $deliveroo-dark;
    position: relative;
    z-index: 2;
    
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
                        vertical-align: middle;
                    }
                }

                a {
                    text-decoration: none;
                    color: $deliveroo-dark;
                }
            }
        }
    }
</style>