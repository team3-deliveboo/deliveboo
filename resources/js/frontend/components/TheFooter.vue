<template>
    <div>
        <footer>
            <div class="container">
            
                <!-- FOOTER COL WITH NAV LINKS -->
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="footer-col">
                            <ul class="list-unstyled mb-0">
                                <li class="fw-bold pb-1">Scopri Deliveboo</li>
                                <li><a href="javascript:void(0)">Investitori</a></li>
                                <li><a href="javascript:void(0)">Chi siamo</a></li>
                                <li><a href="javascript:void(0)">Ristoranti</a></li>
                                <li><a href="javascript:void(0)">Altro</a></li>
                                <li><a href="javascript:void(0)">Pressroom</a></li>
                                <li><a href="javascript:void(0)">Programmazione</a></li>
                                <li><a href="javascript:void(0)">Design</a></li>
                                <li><a href="javascript:void(0)">Lavora con noi</a></li>
                                <li><a href="javascript:void(0)">Diventa nostro partner</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="footer-col">
                            <ul class="list-unstyled mb-0">
                                <li class="fw-bold pb-1">Note Legali</li>
                                <li><a href="javascript:void(0)">Termini & Condizioni</a></li>
                                <li><a href="javascript:void(0)">Informativa sulla privacy</a></li>
                                <li><a href="javascript:void(0)">Cookie</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="footer-col">
                            <ul class="list-unstyled mb-0">
                                <li class="fw-bold pb-1">Aiuto</li>
                                <li><a href="javascript:void(0)">Contatti</a></li>
                                <li><a href="javascript:void(0)">FAQ</a></li>
                                <li><a href="javascript:void(0)">Tipi di cucina</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-12 col-lg-3">
                        <div class="footer-col">
                            <ul class="list-unstyled mb-0">
                                <li class="fw-bold pb-1">Porta Deliveboo con te</li>
                                <li><a href="javascript:void(0)">
                                    <div class="badge-store apple"></div>
                                </a></li>
                                <li><a href="javascript:void(0)">
                                    <div class="badge-store google"></div>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FOOTER SOCIAL LINKS + COPYRIGHT -->
                <div class="lower-footer">
                    <div class="social">
                        <a><i class="fa-brands fa-facebook"></i></a>
                        <a><i class="fa-brands fa-twitter"></i></a>
                        <a><i class="fa-brands fa-instagram"></i></a>
                    </div>

                    <div class="copyright">
                        © 2022 Deliveboo
                    </div>
                </div>

            </div>

        </footer>
    </div>
</template>

<script>
export default {
    name: 'TheFooter'
}
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import 'resources/sass/frontend/buttons.scss';

footer {
    background-color: $deliveroo-dark;
    padding: 1.5rem 0;

    .footer-col {
        height: 100%;
        background-color: $deliveroo-footer-col;
        border-radius: 5px;
        padding: 1.5rem 1.2rem;

        ul li, ul li a {
            color: white;
            text-decoration: none;
        }

        ul li a {
            font-size: .8rem;

            &:hover {
                color: $deliveroo-blue;
            }

            .badge-store {
                height: 40px;
                width: 130px;
                margin-bottom: 1rem;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                border: 1px solid grey;
                border-radius: 5px;
                
                &.apple {
                    background-image: url('/img/apple_store.png');
                }

                &.google {
                    background-image: url('/img/google_play.png');
                }
            }
        }
    }

    .lower-footer {
        padding-top: 1.2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;

        .social {
            cursor: pointer;

            .fa-brands {
                color: white;
                font-size: 1.4rem;
                padding-right: 1rem;
            }

            .fa-facebook:hover {
                color: $facebook;
            }

            .fa-twitter:hover {
                color: $twitter;
            }

            .fa-instagram:hover {
                color: $instagram;
            }
        }

        .copyright {
            color: $deliveroo-copyright;
            font-size: .85rem;
        }
    }
}
</style>